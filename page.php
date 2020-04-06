<?php get_header();
while (have_posts()) : the_post();
    the_content();
    wp_link_pages(
        array(
            'before' => '<div class="page-links">' . __('Pages:', 'justgreat'),
            'after'  => '</div>',
        )
    );

endwhile;
wp_reset_query();

get_footer();
