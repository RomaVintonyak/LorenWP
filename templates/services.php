<?php
/**
 * Template Name: Services
 */
?>
<?php get_header('page'); ?>

<main class="mt-5">
    <div class="container">
        <section id="example" class="text-center mainBlock">
            <h4 class="mb-5 font-weight-bold h2"><?php the_field('services_title'); ?></h4>
            <?php
                $post_services = get_field('price_services');
                if( $post_services ): ?>
                    <div class="row wow lightSpeedIn">
                        <?php foreach( $post_services as $post ): 
                            setup_postdata($post); ?>
                            <div class="col-lg-4 col-md-12 mb-4 jump">
                                <div class="card">
                                    <div class="view overlay zoom">
                                        <img src="<?php the_field('img_post'); ?>" alt="wedding" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="my-1 font-weight-bold card-title"><?php the_title(); ?></h4>
                                        <p class="card-text text-center pt-1"><?php the_field('text_post'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php 
                    wp_reset_postdata(); ?>
                <?php endif; ?>
        </section>
        <hr class="my-5">
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