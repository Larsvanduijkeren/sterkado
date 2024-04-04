<?php
class ContactInformation_Widget extends WP_Widget {

/**
 * Register widget with WordPress.
 */
function __construct() {
    parent::__construct(
        'contactinformation_widget', // Base ID
        __( 'Contact Information Widget', 'contact-information-widget' ), // Name
        array( 'description' => __( 'Display your company name and contact information. ', 'contact-information-widget' ), ) // Args
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
        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
    }
    
    
    if ( ! empty( $instance['title'] ) || ! empty( $instance['email_dec'] ) || ! empty( $instance['phone'] ) || ! empty( $instance['contact_email'] )) {
        $output .=' <div class="footer-contact">';
          
            if($instance['phone_text'] || $instance['phone'] || $instance['phone_dec']){
            $output .=' <div class="mobile-contact">
                <a href="tel:'.$instance['phone'].'">'.$instance['phone_text'].'</a>
                <p>'.$instance['phone_dec'].'</p>
            </div>';
            }
            if($instance['contact_email_text'] || $instance['contact_email'] || $instance['email_dec']){
                $output .=' <div class="email-contact">
                    <a href="mailto:'.$instance['contact_email'].'">'.$instance['contact_email_text'].'</a>
                    <p>'.$instance['email_dec'].'</p>
                </div>';
                }
            if( ! empty( $instance['location'] ) || ! empty( $instance['location_dec'] ) ){
                $output .=' <div class="location-contact">
                    <h6>'.$instance['location'].'</h6>
                    <p>'.$instance['location_dec'].'</p>
                </div>';
                }
          
                            			
        $output .='</div>';
    }
    
    
//$output .='</ul>';
        echo $output;
    //echo __( $output, 'contact-information-widget' );
        
    
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
    $title = ! empty( $instance['title'] ) ? $instance['title'] : __( '', 'contact-information-widget' );

    $phone_text = ! empty( $instance['phone_text'] ) ? $instance['phone_text'] : __( '', 'contact-information-widget' );
    $phone = ! empty( $instance['phone'] ) ? $instance['phone'] : __( '', 'contact-information-widget' );
    $phone_dec = ! empty( $instance['phone_dec'] ) ? $instance['phone_dec'] : __( '', 'contact-information-widget' );

    $contact_email_text = ! empty( $instance['contact_email_text'] ) ? $instance['contact_email_text'] : __( '', 'contact-information-widget' );
    $contact_email = ! empty( $instance['contact_email'] ) ? $instance['contact_email'] : __( '', 'contact-information-widget' );
    $email_dec = ! empty( $instance['email_dec'] ) ? $instance['email_dec'] : __( '', 'contact-information-widget' );
    $location = ! empty( $instance['location'] ) ? $instance['location'] : __( '', 'contact-information-widget' );
    $location_dec = ! empty( $instance['location_dec'] ) ? $instance['location_dec'] : __( '', 'contact-information-widget' );
    
    ?>
    
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'phone_text' ); ?>"><?php esc_html_e( 'Phone No Text:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'phone_text' ); ?>" name="<?php echo $this->get_field_name( 'phone_text' ); ?>" type="text" value="<?php echo esc_attr( $phone_text ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php esc_html_e( 'Phone No:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'phone_dec' ); ?>"><?php esc_html_e( 'Phone Description:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'phone_dec' ); ?>" name="<?php echo $this->get_field_name( 'phone_dec' ); ?>" type="text" value="<?php echo esc_attr( $phone_dec ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'contact_email_text' ); ?>"><?php esc_html_e( 'Email Text:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'contact_email_text' ); ?>" name="<?php echo $this->get_field_name( 'contact_email_text' ); ?>" type="text" value="<?php echo esc_attr( $contact_email_text ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'contact_email' ); ?>"><?php esc_html_e( 'Email ID:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'contact_email' ); ?>" name="<?php echo $this->get_field_name( 'contact_email' ); ?>" type="email" value="<?php echo esc_attr( $contact_email ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'email_dec' ); ?>"><?php esc_html_e( 'Email Description' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'email_dec' ); ?>" name="<?php echo $this->get_field_name( 'email_dec' ); ?>" type="text" value="<?php echo esc_attr( $email_dec ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'location' ); ?>"><?php esc_html_e( 'Location' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'location' ); ?>" name="<?php echo $this->get_field_name( 'location' ); ?>" type="text" value="<?php echo esc_attr( $location ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'location_dec' ); ?>"><?php esc_html_e( 'Location Description' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'location_dec' ); ?>" name="<?php echo $this->get_field_name( 'location_dec' ); ?>" type="text" value="<?php echo esc_attr( $location_dec ); ?>">
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
   
    $instance['phone_text'] = ( ! empty( $new_instance['phone_text'] ) ) ? strip_tags( $new_instance['phone_text'] ) : '';
    $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
    $instance['phone_dec'] = ( ! empty( $new_instance['phone_dec'] ) ) ? strip_tags( $new_instance['phone_dec'] ) : '';
    $instance['contact_email_text'] = ( ! empty( $new_instance['contact_email_text'] ) ) ? strip_tags( $new_instance['contact_email_text'] ) : '';
    $instance['contact_email'] = ( ! empty( $new_instance['contact_email'] ) ) ? strip_tags( $new_instance['contact_email'] ) : '';
    $instance['email_dec'] = ( ! empty( $new_instance['email_dec'] ) ) ?  $new_instance['email_dec']  : '';
    $instance['location'] = ( ! empty( $new_instance['location'] ) ) ?  $new_instance['location']  : '';
    $instance['location_dec'] = ( ! empty( $new_instance['location_dec'] ) ) ?  $new_instance['location_dec']  : '';
    return $instance;
}

}