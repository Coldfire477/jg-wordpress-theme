<?php

function displayMyNews(){
    $query = new WP_Query([
        'posts_per_page' => 1,
        'post__in' => get_option('sticky_posts'),
        'ignore_sticky_posts' => 1
    ]);

    while ($query->have_posts()) : $query->the_post();
    ?>

        <h6 class="card-subtitle mt-4"><?php the_title() ?></h6>
        <p class="modDate ml-4">- <?php the_date() ?></p>
        <p class="card-text"><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>" class="card-link"><?php _e('Read more...', 'justgreat') ?></a>

    <?php endwhile; wp_reset_postdata(); ?>
<?php
}

//Set the widgets column to the right or the left 
function leftOrRight()
{

    $direction = get_theme_mod('leftOrRight');

    if($direction == 'left'){
        echo 'order-2';
    }
    else if($direction == 'right'){
        echo 'order-5';
    }
    else {
        echo 'Ohoh there is a problem here !';
    }

}





