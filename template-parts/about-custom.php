<?php
/**
* Template Name: About page
*
* @package WordPress
* @subpackage Justgreat
*/
?>
<?php get_header() ?>



<?php while (have_posts()) : the_post(); ?>
<div class="about-content mt-4">
    <?php the_content() ?>
</div>
<?php endwhile; wp_reset_query();?>












<?php get_footer() ?>