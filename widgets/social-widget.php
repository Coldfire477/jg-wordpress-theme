<?php

class social_widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('social_widget', 'Justgreat Social');
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (isset($instance['title'])) {
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'] . $title . $args['after_title'];
        }
        $social_widget = isset($instance['social_widget']) ? $instance['social_widget'] : '';
        echo justgreat_socials();
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        $social_widget = isset($instance['social_widget']) ? $instance['social_widget'] : '';
        ?>
        <p>
        <label for="<?= $this->get_field_id('title') ?>"><?php _e('Title', 'justgreat') ?></label>
        <input 
            class="widefat" 
            type="text" 
            name="<?= $this->get_field_name('title') ?>"
            value="<?= esc_attr($title) ?>" 
            id="<?= $this->get_field_name('title') ?>">
        </p>
        <?php
    }
    

    public function update($newInstance, $oldInstance)
    {
        return ['title' => $newInstance['title']];
    }
}