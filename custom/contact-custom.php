<?php
/**
* Template Name: Contact page
*
* @package WordPress
* @subpackage Justgreat
*/
?>

<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>
<p class="h3 mt-4 ml-4"><?php _e('Contact us', 'justgreat') ?></p>
    <?php the_content() ?>
    <div class="clear"></div>
<?php endwhile; wp_reset_query();?>

<?php get_footer() ?>