<?php get_header(  ) ?>

<div class="articleConteneur">

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <p class="h2 mb-4"><?php the_title() ?></p>
    <?php the_content() ?>
    <p class="modDate"><?php the_author()?> - <?php the_date() ?> - <?php the_tags() ?></p>

<?php endwhile; endif; ?>

<?php if (comments_open() || get_comments_number()){
    comments_template();
}
?>
</div>




<?php get_footer() ?>