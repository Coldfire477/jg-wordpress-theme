<?php get_header() ?>


<?php $i =0; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php 
    if($i % 2 == 0){
        $style = 'style="float:left;"';
        ++$i;
    }
    else{
        $style = 'style="float:right;"';
        ++$i;
    }
?>

    <article class="articleBehavior mt-4" <?= $style; ?>>
        <a href="<?php the_permalink() ?>" style="color:<?= get_theme_mod('blog_link_color', '#007bff') ?>;"> <p class="h2"><?php the_title(); ?></p></a><p class="modDate"><?php the_author() ?> - <?= get_the_date() ?></p>
        <div class="justgreat-thumbnail mb-4"><?php the_post_thumbnail('justgreat_thumbnail'); ?></div>
        <?php the_excerpt(  ) ?>
        <a href="<?php the_permalink() ?>" style="color:<?= get_theme_mod('blog_link_color', '#007bff') ?>;"><p><?php _e('Read more...','justgreat') ?></p></a>
    </article>
 <?php endwhile; else : ?>
    <p class="h2"><?php _e('Aucun articles', 'justgreat') ?> ;(</p>
 <?php endif; ?>


<div class="clear mb-4"></div>

<?php justgreat_pagination() ?>




<?php get_footer() ?>