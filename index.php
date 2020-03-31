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
        <a href="<?php the_permalink() ?>"> <p class="h2"><?php the_title(); ?></p></a><p class="modDate"><?php the_author() ?> - <?= get_the_date() ?></p>
        <?php the_excerpt(  ) ?>
        <a href="<?php the_permalink() ?>"><p>Read more...</p></a>
    </article>
 <?php endwhile; else : ?>
    <p class="h2">Aucun articles ;(</p>
 <?php endif; ?>


<div class="clear mb-4"></div>

<?php justgreat_pagination() ?>




<?php get_footer() ?>