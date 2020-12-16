<?php
/**
 * Template Name: About Us
 */
?>
<?php get_header('page'); ?>
<main class="mt-5">
    <div class="container">
        <section class="text-center mainBlock">
            <h4 class="mb-5 font-weight-bold h1"><?php the_field('about_title'); ?></h4>
            <div class="row d-flex text-justify justify-content-center mb-4 wow bounceInLeft">
                <div class="col-md-8">
                    <p class="black-text"><?php the_field('about_text'); ?></p>
                </div>
            </div>
            <h4 class="mb-5 font-weight-bold h2"><?php the_field('stage_work'); ?></h4>
            <?php
                $stage_posts = get_field('post_stage');
                if( $stage_posts ): ?>
                    <div class="row">
                        <?php foreach( $stage_posts as $post ): 
                            setup_postdata($post); ?>
                            <div class="col-md-6 mb-5 mainBlock wow bounceInLeft">
                            <?php the_field('post_icon'); ?>
                            <h4 class="my-4 font-weight-bold text-center"><?php the_title(); ?></h4>
                            <p class="black-text text-justify hower padding"><?php the_field('text_post'); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php 
                    wp_reset_postdata(); ?>
                <?php endif; ?>
        </section>
        <hr class="my-4">
        <section id="galery">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div id="corouselExample" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="corouselExample" data-slide-to="0" class="active"></li>
                            <li data-target="corouselExample" data-slide-to="1"></li>
                            <li data-target="corouselExample" data-slide-to="2"></li>
                            <li data-target="corouselExample" data-slide-to="3"></li>
                            <li data-target="corouselExample" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner z-depth-1-half" role="listbox">
                            <div class="carousel-item active">
                                <img src="<?php the_field('slider1'); ?>" alt="wweding" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php the_field('slider2'); ?>" alt="wweding" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php the_field('slider3'); ?>" alt="wweding" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php the_field('slider4'); ?>" alt="wweding" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php the_field('slider5'); ?>" alt="wweding" class="d-block w-100">
                            </div>
                        </div>
                        <a href="#corouselExample" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a href="#corouselExample" class="carousel-control-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="mb-1"><strong><?php the_field('slider_title'); ?></strong></h4>
                    <ul>
                        <li><p><?php the_field('sliderText1'); ?></p></li>
                        <li><p><?php the_field('sliderText2'); ?></p></li>
                        <li><p><?php the_field('sliderText3'); ?></p></li>
                        <li><p><?php the_field('sliderText4'); ?></p></li>
                        <li><p><?php the_field('sliderText5'); ?></p></li>
                    </ul>
                </div>
            </div>
        </section>
        <hr class="my-5">
        <div class="container wow bounceInLeft">
            <div class="justify-content-center text-center">
                <p class="black-text pt-2 mb-5"><?php the_field('aboutFooter'); ?></p>
            </div>
        </div>
    </div>
    <div type="button" class="callback-bt waves-effect waves-circle">
        <a href="tel:<?php the_field('call_link'); ?>" rel="nofollow">
            <div>
                <i class="fa fa-phone"></i>
            </div>
        </a>
    </div>
</main>
<?php get_footer(); ?>