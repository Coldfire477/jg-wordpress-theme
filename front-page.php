<?php get_header() ?>

<?php

    $fixedBanner = str_replace(".jpg","-1090x290.jpg",get_option('showBanner'));
?>

<?php 
    $hideCarousel = get_theme_mod('carousel_enable');

    if($hideCarousel == 'enable' ){ ?>
<!-- Start of the Carousel part -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php carousel_image_reader('1') ?>" class="d-block w-100" alt="first">
        </div>
        <div class="carousel-item">
            <img src="<?php carousel_image_reader('2') ?>" class="d-block w-100" alt="second">
        </div>
        <div class="carousel-item">
            <img src="<?php carousel_image_reader('3') ?>" class="d-block w-100" alt="third">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="clear"></div>
<!-- End of the Carousel part -->
    <?php 
    }else if($hideCarousel == 'fixed_banner' ){
    ?>
<!-- Start of the fixed banner part -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php fixed_banner_display() ?>" class="d-block w-100" alt="first">
        </div>
    </div>
</div>
<div class="clear"></div>
 <!--End of the fixed banner part -->

<?php   }else{} ?>

<div class="container columnAlignement">

    <?php
    $query = new WP_Query([
        'posts_per_page' => 1,
        'post__in' => get_option('sticky_posts'),
        'ignore_sticky_posts' => 1
    ]);

    while ($query->have_posts()) : $query->the_post();
    ?>
        <div class="row first">
            <div class="col-0"></div>
            <div class="card mt-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title modTitle"><u>Latest news</u></h5>
                    <h6 class="card-subtitle mt-4"><?php the_title() ?></h6>
                    <p class="modDate ml-4">- <?php the_date() ?></p>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink() ?>" class="card-link">Read more...</a>
                </div>
            </div>
        </div>

    <?php endwhile;
    wp_reset_postdata(); ?>

    <div class="row second">
        <div class="col-0"></div>
        <div class="card mt-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title modTitle">Follow me</h5>
                <div class="social">
                    <ul class="nav">
                        <li class="nav-item mt-3 ml-4">
                            <a href="#">
                                <div class="facebook"></div>
                            </a>
                        </li>
                        <li class="nav-item mt-3 ml-4">
                            <a href="#">
                                <div class="instagram"></div>
                            </a>
                        </li>
                        <li class="nav-item mt-3 ml-4">
                            <a href="#">
                                <div class="linkdin"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content ml-2 mt-4 mb-4">
    <?php the_content() ?>
</div>
<div class="clear"></div>
</div>


















<?php get_footer() ?>