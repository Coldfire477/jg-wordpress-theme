<?php

class social_widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('social_widget', 'Justgreat Social');
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        if (isset($instance['title'])) {
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'] . esc_html($title) . $args['after_title'];// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
        $social_widget = isset($instance['social_widget']) ? $instance['social_widget'] : '';
        echo justgreat_socials();// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo $args['after_widget'];// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }

    public function form($instance)
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        $social_widget = isset($instance['social_widget']) ? $instance['social_widget'] : '';
        ?>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('title')) ?>"><?php esc_html_e('Title', 'justgreat') ?></label>
        <input 
            class="widefat" 
            type="text" 
            name="<?php echo esc_attr($this->get_field_name('title')) ?>"
            value="<?php echo esc_attr($title) ?>" 
            id="<?php echo esc_attr($this->get_field_name('title')) ?>">
        </p>
        <?php
    }
    

    public function update($newInstance, $oldInstance)
    {
        return ['title' => $newInstance['title']];
    }
}