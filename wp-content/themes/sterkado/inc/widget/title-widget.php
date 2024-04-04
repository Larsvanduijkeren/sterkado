<?php
class Title_Widget extends WP_Widget {

/**
 * Register widget with WordPress.
 */
function __construct() {
    parent::__construct(
        'title_widget', // Base ID
        __( 'Title Widget', 'title-widget' ), // Name
        array( 'description' => __( 'Display your company name and contact information. ', 'title-widget' ), ) // Args
    );
}

/**
 * Front-end display of widget.
 *
 * @see WP_Widget::widget()
 *
 * @param array $args     Widget arguments.
 * @param array $instance Saved values from database.
 */
public function widget( $args, $instance ) {
    
    //$show_count = $instance['post_limit'];
    $output='';
    echo $args['before_widget'];
    
    if ( ! empty( $instance['title'] ) ) {
        echo '<h4 class="title_widget">' . apply_filters( 'widget_title', $instance['title'] ). '</h4>';
    }
    
    
    
//$output .='</ul>';
        echo $output;
    //echo __( $output, 'title-widget' );
        
    
echo $args['after_widget'];
}

/**
 * Back-end widget form.
 *
 * @see WP_Widget::form()
 *
 * @param array $instance Previously saved values from database.
 */
public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : __( '', 'title-widget' );

   
    ?>
    
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    </p>
      <?php 
}

/**
 * Sanitize widget form values as they are saved.
 *
 * @see WP_Widget::update()
 *
 * @param array $new_instance Values just sent to be saved.
 * @param array $old_instance Previously saved values from database.
 *
 * @return array Updated safe values to be saved.
 */
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
}

}