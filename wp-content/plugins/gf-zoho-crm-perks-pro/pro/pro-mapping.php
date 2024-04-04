<?php 
// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

$users=$this->post('users',$info_meta);
$layouts=$this->post('layouts',$info_meta);
$meta_user=isset($meta['user']) ? $meta['user'] : '';
$meta_layout=isset($meta['layout']) ? $meta['layout'] : '';
?>
<div class="vx_div vx_refresh_panel ">    
      <div class="vx_head ">
<div class="crm_head_div"> <?php echo sprintf(__('%s. Object Owner Assignment ',  'gravity-forms-zoho-crm' ),$panel_count+=1); ?></div>
<div class="crm_btn_div"><i class="fa crm_toggle_btn fa-minus" title="<?php esc_html_e('Expand / Collapse','gravity-forms-zoho-crm') ?>"></i></div>
<div class="crm_clear"></div> 
  </div>                 
    <div class="vx_group ">
   <div class="vx_row"> 
   <div class="vx_col1"> 
  <label for="crm_owner"><?php esc_html_e("Assign Owner ", 'gravity-forms-zoho-crm'); gform_tooltip('vx_owner_check');?></label>
  </div>
  <div class="vx_col2">
  <input type="checkbox" style="margin-top: 0px;" id="crm_owner" class="crm_toggle_check <?php if(empty($users)){echo 'vx_refresh_btn';} ?>" name="meta[owner]" value="1" <?php echo !empty($meta["owner"]) ? "checked='checked'" : ""?> autocomplete="off"/>
    <label for="owner"><?php esc_html_e("Enable", 'gravity-forms-zoho-crm'); ?></label>
  </div>
<div class="clear"></div>
</div>
    <div id="crm_owner_div" style="<?php echo empty($meta["owner"]) ? "display:none" : ""?>">
  <div class="vx_row">
  <div class="vx_col1">
  <label for="crm_sel_camp"><?php esc_html_e('Users List ','gravity-forms-zoho-crm'); gform_tooltip('vx_owners'); ?></label>
  </div>
  <div class="vx_col2">
  <button class="button vx_refresh_data" data-id="refresh_users" type="button" autocomplete="off" style="vertical-align: baseline;">
  <span class="reg_ok"><i class="fa fa-refresh"></i> <?php esc_html_e('Refresh Data','gravity-forms-zoho-crm') ?></span>
  <span class="reg_proc"><i class="fa fa-refresh fa-spin"></i> <?php esc_html_e('Refreshing...','gravity-forms-zoho-crm') ?></span>
  </button>
  </div> 
   <div class="clear"></div>
  </div> 

  <div class="vx_row">
   <div class="vx_col1">
  <label for="crm_sel_user"><?php esc_html_e('Select User ','gravity-forms-zoho-crm');   gform_tooltip('vx_sel_owner'); ?></label>
</div> 
<div class="vx_col2">

  <select id="crm_sel_user" name="meta[user]" style="width: 100%;" class="vx_input_100" autocomplete="off">
  <?php echo $this->gen_select($users,$meta_user,__('Select User','gravity-forms-zoho-crm')); ?>
  </select>

   </div>

   <div class="clear"></div>
   </div>
 
  
  </div>
<?php if(empty($crm)){ ?>
      
    <div class="vx_row">
   <div class="vx_col1">
  <label for="crm_sel_rule"><?php esc_html_e('Assignment Rule ','gravity-forms-zoho-crm');   ?></label>
</div> 
<div class="vx_col2">
<input type="text" id="crm_sel_rule" name="meta[assign_rule]" style="width: 100%;" value="<?php if(!empty($meta['assign_rule'])){ echo $meta['assign_rule']; }; ?>" class="vx_input_100" autocomplete="off" placeholder="<?php esc_html_e('Assignment Rule ID','gravity-forms-zoho-crm');   ?>" />
<div class="howto"><?php esc_html_e('Enter Assignment Rule ID to trigger rule in Zoho.','gravity-forms-zoho-crm');   ?></div>

   </div>

   <div class="clear"></div>
   </div>
 <?php
}      
   ?>  

  </div>
  </div>
<?php
if(vxg_zoho::$is_pr){

if( $crm =='' && in_array($module,array('Leads','Contacts'))){ 
      $panel_count++;
      $campaigns=$this->post('campaigns',$info_meta);
      $member_status_arr=$this->post('member_status',$info_meta);
  ?>
  <div class="vx_div vx_refresh_panel">    
      <div class="vx_head ">
<div class="crm_head_div"> <?php echo sprintf(__('%s. Object Layout and Approval Mode',  'gravity-forms-zoho-crm' ),$panel_count++); ?></div>
<div class="crm_btn_div"><i class="fa crm_toggle_btn fa-minus" title="<?php esc_html_e('Expand / Collapse','gravity-forms-zoho-crm') ?>"></i></div>
<div class="crm_clear"></div> 
  </div>                 
    <div class="vx_group ">
   <div class="vx_row"> 
   <div class="vx_col1"> 
  <label for="crm_layout"><?php esc_html_e("Assign Layout ", 'gravity-forms-zoho-crm'); ?></label>
  </div>
  <div class="vx_col2">
  <input type="checkbox" style="margin-top: 0px;" id="crm_layout" class="crm_toggle_check <?php if(empty($layouts)){echo 'vx_refresh_btn';} ?>" name="meta[add_layout]" value="1" <?php echo !empty($meta["add_layout"]) ? "checked='checked'" : ""?> autocomplete="off"/>
    <label for="layout"><?php esc_html_e("Enable", 'gravity-forms-zoho-crm'); ?></label>
  </div>
<div class="clear"></div>
</div>
    <div id="crm_layout_div" style="<?php echo empty($meta["add_layout"]) ? "display:none" : ""?>">
  <div class="vx_row">
  <div class="vx_col1">
  <label for="crm_sel_layout"><?php esc_html_e('Layouts ','gravity-forms-zoho-crm'); ?></label>
  </div>
  <div class="vx_col2">
  <button class="button vx_refresh_data" data-id="refresh_layouts" type="button" autocomplete="off" style="vertical-align: baseline;">
  <span class="reg_ok"><i class="fa fa-refresh"></i> <?php esc_html_e('Refresh Data','gravity-forms-zoho-crm') ?></span>
  <span class="reg_proc"><i class="fa fa-refresh fa-spin"></i> <?php esc_html_e('Refreshing...','gravity-forms-zoho-crm') ?></span>
  </button>
  </div> 
   <div class="clear"></div>
  </div> 

  <div class="vx_row">
   <div class="vx_col1">
  <label for="crm_sel_layout"><?php esc_html_e('Select Layout ','gravity-forms-zoho-crm'); ?></label>
</div> 
<div class="vx_col2">

  <select id="crm_sel_layout" name="meta[layout]" style="width: 100%;" class="vx_input_100" autocomplete="off">
  <?php echo $this->gen_select($layouts,$meta_layout,__('Select Layout','gravity-forms-zoho-crm')); ?>
  </select>

   </div>

   <div class="clear"></div>
   </div>
 
  
  </div>
  
   <div class="vx_row"> 
   <div class="vx_col1"> 
  <label for="crm_approve"><?php esc_html_e('Approval mode ', 'gravity-forms-zoho-crm'); ?></label>
  </div>
  <div class="vx_col2">
  <input type="checkbox" style="margin-top: 0px;" id="crm_approve" name="meta[approve]" value="1" <?php echo !empty($meta["approve"]) ? "checked='checked'" : ""?> autocomplete="off"/>
    <label for="crm_approve"><?php esc_html_e('Yes, i will manually approve in Zoho', 'gravity-forms-zoho-crm'); ?></label>
  </div>
<div class="clear"></div>
</div>


  </div>
  </div>
    <div class="vx_div vx_refresh_panel">    
      <div class="vx_head ">
<div class="crm_head_div"> <?php  echo sprintf(__('%s. Add as Campaign Member',  'gravity-forms-zoho-crm' ),$panel_count); ?></div>
<div class="crm_btn_div"><i class="fa crm_toggle_btn fa-minus" title="<?php esc_html_e('Expand / Collapse','gravity-forms-zoho-crm') ?>"></i></div>
<div class="crm_clear"></div> 
  </div>                 
    <div class="vx_group ">
   <div class="vx_row"> 
   <div class="vx_col1"> 
  <label for="crm_camp"><?php esc_html_e("Add to Campaign ", 'gravity-forms-zoho-crm'); gform_tooltip('vx_camp_check');?></label>
  </div>
  <div class="vx_col2">
  <input type="checkbox" style="margin-top: 0px;" id="crm_camp" class="crm_toggle_check <?php if(empty($member_status_arr) && empty($campaigns)){echo 'vx_refresh_btn';} ?>" name="meta[add_to_camp]" value="1" <?php echo !empty($meta["add_to_camp"]) ? "checked='checked'" : ""?> autocomplete="off"/>
    <label for="crm_optin"><?php esc_html_e("Enable", 'gravity-forms-zoho-crm'); ?></label>
  </div>
<div class="clear"></div>
</div>
    <div id="crm_camp_div" style="<?php echo empty($meta["add_to_camp"]) ? "display:none" : ""?>">
   <?php  if($api_type != "web"){  ?> 
  <div class="vx_row">
  <div class="vx_col1">
  <label><?php esc_html_e('Campaign Lists ','gravity-forms-zoho-crm'); gform_tooltip('vx_camps'); ?></label>
  </div>
  <div class="vx_col2">
  <button class="button vx_refresh_data" data-id="refresh_campaigns" type="button" autocomplete="off" style="vertical-align: baseline;">
  <span class="reg_ok"><i class="fa fa-refresh"></i> <?php esc_html_e('Refresh Data','gravity-forms-zoho-crm') ?></span>
  <span class="reg_proc"><i class="fa fa-refresh fa-spin"></i> <?php esc_html_e('Refreshing...','gravity-forms-zoho-crm') ?></span>
  </button>
  </div> 
   <div class="clear"></div>
  </div> 
  <?php } ?>
  <div class="vx_row">
   <div class="vx_col1">
  <label for="crm_sel_camp"><?php esc_html_e('Select Campaign ','gravity-forms-zoho-crm'); gform_tooltip('vx_sel_camp'); ?></label>
</div> <div class="vx_col2">

  <select id="crm_sel_camp" class="vx_input_100" name="meta[campaign]" style="width: 100%; <?php if($this->post('camp_type',$meta) != ""){echo 'display: none';} ?>" autocomplete="off">
  <?php echo $this->gen_select($campaigns,$this->post('campaign',$meta),__('Select Campaign','gravity-forms-zoho-crm')); ?>
  </select>
  <input type="text" name="meta[campaign_id]" id="crm_camp_id" value="<?php echo $this->post('campaign_id',$meta); ?>" style="vertical-align: middle; width: 100%; <?php if($this->post('camp_type',$meta) == ""){echo 'display: none';} ?>" placeholder="<?php esc_html_e('Enter Campaign ID','gravity-forms-zoho-crm') ?>" autocomplete="off">

  </div>
   <div class="clear"></div>
   </div>
  
  
  </div>
  

  </div>
  </div>
    <?php
  }
}

