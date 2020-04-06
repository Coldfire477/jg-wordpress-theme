<?php get_header() ?>

<?php
$hideCarousel = get_theme_mod('carousel_enable');

if ($hideCarousel == 'enable') { ?>
    <!-- Start of the Carousel part -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="border:5px solid <?php echo esc_attr(get_theme_mod('carousel_contour_color', '#007bff')) ?> !important;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php carousel_image_reader('1') ?>" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php carousel_image_reader('2') ?>" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php carousel_image_reader('3') ?>" class="d-block w-100" alt="">
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
} else if ($hideCarousel == 'fixed_banner') {
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

<?php } ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4 <?php leftOrRight() ?>">
            <?php get_sidebar('homepage') ?>

        </div>
        <div class="col-lg-8  order-3">
            <?php while (have_posts()) : the_post(); ?>
                <div class="mt-4 mb-4">
                    <?php the_content() ?>
                </div>
            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </div>
</div>



















<?php get_footer() ?>