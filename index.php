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
<div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
    <article class="articleBehavior mt-4" <?php echo esc_attr($style); ?>>
        <a href="<?php the_permalink() ?>" style="color:<?php echo esc_attr(get_theme_mod('blog_link_color', '#007bff')) ?>;"> <p class="h2"><?php the_title(); ?></p></a><p class="modDate"><?php the_author() ?> - <?php echo get_the_date() ?></p>
        <div class="justgreat-thumbnail mb-4"><?php the_post_thumbnail('justgreat_thumbnail'); ?></div>
        <?php the_excerpt(  ) ?>
        <a href="<?php the_permalink() ?>" style="color:<?php echo esc_attr(get_theme_mod('blog_link_color', '#007bff')) ?>;"><p><?php esc_html_e('Read more...','justgreat') ?></p></a>
    </article>
</div>
 <?php endwhile; else : ?>
    <p class="h2"><?php esc_html_e('Aucun articles', 'justgreat') ?> ;(</p>
 <?php endif; ?>


<div class="clear mb-4"></div>

<?php justgreat_pagination() ?>




<?php get_footer() ?>