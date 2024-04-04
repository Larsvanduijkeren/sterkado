<?php
/**
 * Gravity Wiz // Gravity Forms // Advanced Conditional Logic
 * 
 * PLEASE NOTE: This snippet is a proof-of-concept. It is not supported and we have no plans to improve it.
 *
 * Allows multiple groups of conditional logic per field.
 *
 * @version	  0.1
 * @author    David Smith <david@gravitywiz.com>
 * @license   GPL-2.0+
 * @link      http://gravitywiz.com/
 *
 * Plugin Name: Gravity Forms - Advanced Conditional Logic
 * Plugin URI: http://ounceoftalent.com
 * Description: Allows multiple groups of conditional logic per field.
 * Author: David Smith
 * Version: 0.1
 * Author URI: http://gravitywiz.com
 */
class GW_Advanced_Conditional_Logic {

    protected static $is_script_output = false;

    public function __construct( $args = array() ) {

        // set our default arguments, parse against the provided arguments, and store for use throughout the class
        $this->_args = wp_parse_args( $args, array(
            'form_id'  => false,
            'field_id' => false
        ) );

        // do version check in the init to make sure if GF is going to be loaded, it is already loaded
        add_action( 'init', array( $this, 'init' ) );

    }

    function init() {

        // make sure we're running the required minimum version of Gravity Forms
        if( ! property_exists( 'GFCommon', 'version' ) || ! version_compare( GFCommon::$version, '1.8', '>=' ) ) {
            return;
        }

	    // @remove
	    //add_filter( 'gform_pre_render', array( $this, 'add_temp_data' ) );

        // time for hooks
        add_filter( 'gform_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_filter( 'gform_pre_render', array( $this, 'load_form_script' ) );
	    add_filter( 'gform_register_init_scripts', array( $this, 'add_init_script' ) );
	    add_filter( 'gform_pre_render', array( $this, 'prepare_form_object' ) );

	    add_action( 'admin_enqueue_scripts',         array( $this, 'enqueue_admin_scripts' ) );
	    add_action( 'gform_field_advanced_settings', array( $this, 'field_setting_ui' ) );
	    add_action( 'gform_editor_js',               array( $this, 'field_setting_js' ) );

    }



	// # FRONTEND

	function enqueue_scripts( $form ) {

		if( $this->is_applicable_form( $form ) ) {

			wp_enqueue_script( 'gform_gravityforms' );
			wp_enqueue_script( 'gform_conditional_logic' );

		}

	}

	function add_temp_data( $form ) {

		/**
		 * [ show/hide ] this field if
		 * [ Field ] [ is ] [ value ] AND
		 * [ Field ] [ is ] [ value ]
		 * - OR -
		 * [ Field ] [ is ] [ value ] AND
		 * [ Field ] [ is ] [ value ]
		 */

		$logic_template = array(
			'actionType' => 'show', // 'show', 'hide'
			'logicType'  => 'all',  // 'all', 'any'
			'rules'      => array(
				array(
					'fieldId'  => 1,
					'operator' => 'is', // 'is', 'isnot', '>', '<', 'contains', 'starts_with', 'ends_with'
					'value'    => 'First Choice'
				),
				array(
					'fieldId'  => 2,
					'operator' => 'is',
					'value'    => 'Second Choice'
				)
			)
		);

		$new_logic_template = array(
			'actionType' => 'show', // 'show', 'hide'
			'logicType'  => null,
			'groups' => array(
				array(
					'actionType' => 'show',
					'logicType'  => 'all',
					'rules' => array(
						array(
							'fieldId'  => 1,
							'operator' => 'is', // 'is', 'isnot', '>', '<', 'contains', 'starts_with', 'ends_with'
							'value'    => 'First Choice'
						),
						array(
							'fieldId'  => 2,
							'operator' => 'is',
							'value'    => 'Second Choice'
						)
					)
				),
				array(
					'actionType' => 'show',
					'logicType'  => 'all',
					'rules' => array(
						array(
							'fieldId'  => 1,
							'operator' => 'is', // 'is', 'isnot', '>', '<', 'contains', 'starts_with', 'ends_with'
							'value'    => 'Second Choice'
						),
						array(
							'fieldId'  => 2,
							'operator' => 'is',
							'value'    => 'Third Choice'
						)
					)
				)
			)
		);

		return $form;
	}

	function prepare_form_object( $form ) {

		$adv_logic = $this->get_advanced_conditional_logic( $form );

		foreach( $form['fields'] as $field ) {

			if( ! isset( $adv_logic[ $field['id'] ] ) ) {
				continue;
			}

			// add "fake" rule to trigger our advanced conditional logic
			// also add (?)
			$field['conditionalLogic'] = array(
				'actionType' => 'show', // 'show', 'hide'
				'logicType'  => 'all',  // 'all', 'any'
				'rules'      => array(
					array(
						'fieldId'  => $field['id'],
						'operator' => 'is', // 'is', 'isnot', '>', '<', 'contains', 'starts_with', 'ends_with'
						'value'    => '__adv_cond_logic'
					)
				)
			);

			$rules = array();

			foreach( $adv_logic[ $field['id'] ]['groups'] as $group ) {
				foreach( $group['rules'] as &$rule ) {
					$rule['value'] = '__return_true';
					$rules[] = $rule;
				}
			}

			$conditionalLogic = $field['conditionalLogic'];
			$conditionalLogic['rules'] = array_merge( $conditionalLogic['rules'], $rules );
			$field['conditionalLogic'] = $conditionalLogic;

		}

		return $form;
	}

    function load_form_script( $form ) {

        if( $this->is_applicable_form( $form ) && ! self::$is_script_output ) {
            $this->output_script();
        }

        return $form;
    }

    function output_script() {
        ?>

        <script type="text/javascript">

            ( function( $ ) {

                window.GWAdvCondLogic = function( args ) {

                    var self = this;

                    // copy all args to current object: (list expected props)
                    for( prop in args ) {
                        if( args.hasOwnProperty( prop ) )
                            self[prop] = args[prop];
                    }

                    self.init = function() {

	                    self.doingLogic = false;

                        // do the magic

	                    gform.addFilter( 'gform_is_value_match', function( isMatch, formId, rule ) {

		                    if( rule.value == '__return_true' ) {
			                    return true;
		                    } else if( rule.value != '__adv_cond_logic' || self.doingLogic ) {
			                    return isMatch;
		                    }

		                    self.doingLogic = true;

		                    isMatch = self.isAdvancedConditionalLogicMatch( formId, self.logic[ rule.fieldId ] );

		                    self.doingLogic = false;

		                    return isMatch;
	                    } );

                    };

	                self.isAdvancedConditionalLogicMatch = function( formId, logic ) {

		                for( var i in logic.groups ) {
			                if( logic.groups.hasOwnProperty( i ) ) {
				                var action = gf_get_field_action( formId, logic.groups[ i ] );
				                if( action == 'show' ) {
					                return true;
				                }
			                }
		                }

		                return false;
	                };

                    self.init();

                }

            } )( jQuery );

        </script>

        <?php

        self::$is_script_output = true;

    }

    function add_init_script( $form ) {

        if( ! $this->is_applicable_form( $form ) ) {
            return;
        }

        $args = array(
            'formId' => $form['id'],
	        'logic'  => $this->get_advanced_conditional_logic( $form )
        );

        $script = 'new GWAdvCondLogic( ' . json_encode( $args ) . ' );';
        $slug   = implode( '_', array( 'gw_advanced_conditional_logic', $form['id'] ) );

        GFFormDisplay::add_init_script( $form['id'], $slug, GFFormDisplay::ON_PAGE_RENDER, $script );

    }



	// # ADMIN

	function enqueue_admin_scripts() {

		wp_register_script( 'knockout', 'https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js' );
		add_filter( 'gform_noconflict_scripts', function( $scripts ) { $scripts[] = 'knockout'; return $scripts; } );

		if( GFForms::get_page() == 'form_editor' ) {
			wp_enqueue_script( 'knockout' );
		}

	}

	function field_setting_ui( $position ) {

		if( $position != -1 ) {
			return;
		}

		?>

		<style type="text/css">

			#gwacl .gws-child-settings {
				display:none;
				padding: 10px 0;
				margin: 6px 0 0 0;
				border: 0;
			}

			#gwacl header div {
				margin: 0 0 10px;
			}
			#gwacl .group:after {
				content: 'or';
				display: block;
				border-bottom: 1px solid #eee;
				height: 10px;
				text-align: center;
				text-shadow: 1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff,
							 2px 2px #fff, -2px -2px #fff, 2px -2px #fff, -2px 2px #fff,
							 3px 3px #fff, -3px -3px #fff, 3px -3px #fff, -3px 3px #fff,
							 4px 4px #fff, -4px -4px #fff, 4px -4px #fff, -4px 4px #fff,
							 5px 5px #fff, -5px -5px #fff, 5px -5px #fff, -5px 5px #fff,
							 6px 6px #fff, -6px -6px #fff, 6px -6px #fff, -6px 6px #fff;
				margin: 5px 0 12px;
			}
			#gwacl .rule select { width: 100px; }
		</style>

		<div id="gwacl">

			<div>
				<input type="checkbox" checked="checked" id="gwacl_enable" onclick="gwacl.toggleSettings( this.checked );" />
				<label for="gwacl_enable">Enable Advanced Conditional Logic</label>
			</div>

			<div id="gwacl-child-settings" class="gws-child-settings">

				<header>
					<div>
						<select data-bind="options: actionTypes,
										   optionsText: 'label',
										   optionsValue: 'value',
										   value: actionType">
						</select>
						<span>this field if:</span>
					</div>
				</header>

				<section id="gwacl-logic-groups">

					<div class="groups" data-bind="foreach: groups">
						<div class="group" data-bind="foreach: rules">
							<div class="rule">
								<select data-bind="options: $parents[1].fields,
												   optionsText:  'label',
												   optionsValue: 'id',
												   value: fieldId">
								</select>
								<select data-bind="options: operators,
								                   optionsText: 'label',
								                   optionsValue: 'key',
								                   value: operator">
								</select>
								<select data-bind="options: choices,
												   optionsText: 'text',
												   optionsValue: 'value',
												   value: value">
								</select>
		                        <span class="actions">
		                            <button class="add" data-bind="click: $parent.addRule">and</button>
		                            <button class="remove" data-bind="click: $parent.removeRule.bind( $data ), visible: $root.hasManyRules">remove</button>
		                        </span>
							</div>
						</div>
					</div>
					<button id="new-group" data-bind="click: addGroup">add rule group</button>

				</section>

			</div>

		</div>

		<?php
	}

	function field_setting_js() {
		?>

		<script type="text/javascript">

			( function( $ ) {

				window.gwacl = {

					$settingsElem:    $( '#gwacl' ),
					$childSettings:   $( '#gwacl-child-settings' ),
					viewModel:        null,

					init: function() {

						$(document).bind( 'gform_load_field_settings', function( event, field, form ) {

							$( '#gwacl_enable' ).attr( 'checked', field['gwaclEnable'] == true );

							gwacl.toggleSettings( field['gwaclEnable'] == true );

						} );

						$( document ).bind( 'gpacl-data-changed', function( event, data ) {
							field.advancedConditionalLogic = data;
						} );

					},

					toggleSettings: function( isChecked ) {

						SetFieldProperty( 'gwaclEnable', isChecked );

						if( isChecked ) {

							gwacl.$childSettings.slideDown();

							var logicData = typeof field.advancedConditionalLogic == 'object' ? field.advancedConditionalLogic : false;

							if( gwacl.viewModel !== null ) {
								gwacl.viewModel.resetData( logicData, field );
							} else {
								gwacl.viewModel = new GroupsModelView( logicData, field );
								ko.applyBindings( gwacl.viewModel );
							}


						} else {

							gwacl.$childSettings.slideUp();
							SetFieldProperty( 'advancedConditionalLogic', null );

						}

					}

				};

				gwacl.init();

				var Rule = function( fieldId, operator, value ) {

					var self = this;

					this.fieldId  = ko.observable( fieldId );
					this.operator = ko.observable( operator );
					this.value    = ko.observable( value );

					this.operators = ko.observableArray( [
						{
							key: 'is',
							label: 'is'
						},
						{
							key: 'isnot',
							label: 'is not'
						},
						{
							key: '>',
							label: 'greater than'
						},
						{
							key: '<',
							label: 'less than'
						},
						{
							key: 'contains',
							label: 'contains'
						},
						{
							key: 'starts_with',
							label: 'starts with'
						},
						{
							key: 'ends_with',
							label: 'end with'
						}
					] );
					this.choices = ko.observableArray( [] );

					this.fieldId.subscribe( function() {

						self.updateChoices();

						gwacl.viewModel.save();

					}, this );

					this.operator.subscribe( function() {
						gwacl.viewModel.save();
					}, this );

					this.value.subscribe( function() {
						gwacl.viewModel.save();
					}, this );

					this.updateChoices = function() {

						var selectedField = GetFieldById( this.fieldId() );
						if( ! selectedField ) {
							return;
						}

						self.choices.removeAll();

						if( selectedField.choices ) {
							$.each( selectedField.choices, function( i, choice ) {
								self.choices.push( choice );
							} );
						}

					};

					self.updateChoices();

				};

				var Group = function( rules ) {

					var self = this;

					// static
					this.actionType = 'show';
					this.logicType  = 'all';

					this.rules = ko.observableArray( rules );

					this.rules.subscribe( function() {
						self.removeGroupWhenNoRules();
						gwacl.viewModel.save();
					} );

					this.addRule = function() {
						this.rules.push( new Rule( '', '', '' ) );
					}.bind( this );

					this.removeRule = function( rule ) {
						this.rules.remove( rule );
					}.bind( this );

					this.removeGroupWhenNoRules = function() {
						if( self.rules().length <= 0 ) {
							self.removeGroup();
						}
					};

					this.removeGroup = function() {
						gwacl.viewModel.groups.remove( self );
					};

				};

				var GroupsModelView = function( data, field ) {

					this.resettingData = false;
					this.fields        = gwGetConditionalLogicFields( form.fields );
					this.groups        = ko.observableArray( [] );
					this.actionType    = ko.observable( data.actionType );

					this.actionTypes   = [
						{
							label: 'Show',
							value: 'show'
						},
						{
							label: 'Hide',
							value: 'hide'
						}
					];

					this.resetData = function( data, field ) {

						this.resettingData = true;

						this.field = field;
						this.actionType( data.actionType );
						this.groups.removeAll();

						if( ! data ) {
							data = {
								actionType: 'show',
								logicType: null,
								groups: [
									{
										actionType: 'show',
										logicType: 'all',
										rules: [
											{
												fieldId: '',
												operator: 'is',
												value: ''
											}
										]
									}
								]
							};
						}

						this.data       = data;

						for( var i = 0; i < data.groups.length; i++ ) {

							var group = data.groups[ i ],
								rules = [];

							for( var j = 0; j < group.rules.length; j++ ) {
								var rule = group.rules[ j ];
								rules.push( new Rule( rule.fieldId, rule.operator, rule.value ) );
							}

							this.groups.push( new Group( rules ) );

						}

						this.resettingData = false;

					}.bind( this );

					this.resetData( data );

					this.addGroup = function() {
						this.groups.push( new Group( [ new Rule( '', '', '' ) ] ) );
					}.bind( this );

					this.hasManyRules = ko.computed( function() {
						return this.groups().length > 1 || ( this.groups().length > 0 && this.groups()[0].rules().length > 1 );
					}, this );

					this.save = function() {
						if( ! this.resettingData ) {
							$( document ).trigger( 'gpacl-data-changed', this.getCleanObject() );
						}
					}.bind( this );

					this.groups.subscribe( function() {
						this.save();
					}, this );

					this.actionType.subscribe( function() {
						this.save();
					}, this );

					this.getCleanObject = function() {

						var json = this.getJSON(),
							data = $.parseJSON( json );

						for( var i = 0; i < data.groups.length; i++ ) {

							var group = data.groups[ i ];

							for( var j = 0; j < group.rules.length; j++ ) {
								var rule = group.rules[ j ];
								delete rule.choices;
								delete rule.operators;
							}

						}

						return data;
					};

					this.getJSON = function() {

						this.data.actionType = this.actionType;
						this.data.groups     = this.groups;

						return ko.toJSON( this.data );
					};

				};

				function gwGetConditionalLogicFields( fields ) {

					var clFields = [];

					for( var i = 0; i < fields.length; i++ ) {
						if( IsConditionalLogicField( fields[ i ] ) ) {
							clFields.push( fields[ i ] );
						}
					}

					return clFields;
				}

			} )( jQuery );

		</script>

		<?php
	}

	function get_advanced_conditional_logic( $form ) {

		$all_adv_logic = array();

		foreach( $form['fields'] as $field ) {

			$adv_logic = $field->advancedConditionalLogic;

			if( ! empty( $adv_logic ) ) {
				$all_adv_logic[ $field['id'] ] = $adv_logic;
			}

		}

		return $all_adv_logic;
	}

    function is_applicable_form( $form ) {

	    $adv_logic = $this->get_advanced_conditional_logic( $form );

        return ! empty( $adv_logic );
    }

}

# Configuration

new GW_Advanced_Conditional_Logic();