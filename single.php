<?php get_header(  ) ?>

<div class="articleConteneur">

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <p class="h2 mb-4"><?php the_title() ?></p>
    <?php the_content() ?>
    <p class="modDate"><?php the_author()?> - <?php the_date() ?></p>

<?php endwhile; endif; ?>

</div>




<?php get_footer() ?>