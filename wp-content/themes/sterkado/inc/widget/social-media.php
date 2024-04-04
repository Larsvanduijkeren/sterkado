<?php
class Custom_Social_Profile extends WP_Widget {
    function __construct() {
        parent::__construct(
                'Custom_Social_Profile',
                __('Social Networks Profiles', 'translation_domain'), // Name
                array('description' => __('Links to Author social media profile', 'translation_domain'),)
        );
    }
    public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'My Social Profile' : null;
 
        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['youtube']) ? $youtube = $instance['youtube'] : null;
        isset($instance['instaram']) ? $instaram = $instance['instaram'] : null;
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('instaram'); ?>"><?php _e('Instaram:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('instaram'); ?>" name="<?php echo $this->get_field_name('instaram'); ?>" type="text" value="<?php echo esc_attr($instaram); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
        </p>
 
        <?php
    }
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['youtube'] = (!empty($new_instance['youtube']) ) ? strip_tags($new_instance['youtube']) : '';
        $instance['instaram'] = (!empty($new_instance['instaram']) ) ? strip_tags($new_instance['instaram']) : '';
        $instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';
 
        return $instance;
    }
    public function widget($args, $instance) {
 
        $title = apply_filters('widget_title', $instance['title']);
        $facebook = $instance['facebook'];
        $youtube = $instance['youtube'];
        $instaram = $instance['instaram'];
        $linkedin = $instance['linkedin'];
 
        // social profile link
            $youtube_profile = '<a class="youtube" href="' . $youtube . '" target="_blank"><i class="fab fa-youtube"></i></a>';
            $linkedin_profile = '<a class="linkedin" href="' . $linkedin . '" target="_blank"><i class="fab fa-linkedin-square"></i></a>';
            $instaram_profile = '<a class="instaram" href="' . $instaram . '" target="_blank"><i class="fab fa-instagram"></i></a>';
            $facebook_profile = '<a class="facebook" href="' . $facebook . '" target="_blank"><i class="fab fa fa-facebook-square"></i></a>';
            
            
       
    
        echo $args['before_widget'];
        if (!empty($title)) {
        echo $args['before_title'] . $title . $args['after_title'];
        }
        
                echo '<div class="social-icons">';
            
                echo (!empty($youtube) ) ? $youtube_profile : null;
                echo (!empty($linkedin) ) ? $linkedin_profile : null;
                echo (!empty($instaram) ) ? $instaram_profile : null;
                echo (!empty($facebook) ) ? $facebook_profile : null;
                echo '</div>';
                echo $args['after_widget'];
    }
}