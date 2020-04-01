<?php

class latestNews_widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('latestnews_widget', 'Justgreat Latest News');
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (isset($instance['title'])) {
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'] . $title . $args['after_title'];
        }
        $latestnews_widget = isset($instance['latestnews_widget']) ? $instance['latestnews_widget'] : '';
        echo displayMyNews();
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        $latestnews_widget = isset($instance['latestnews_widget']) ? $instance['latestnews_widget'] : '';
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
