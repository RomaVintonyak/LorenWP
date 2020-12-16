<?php get_header();?>

<main class="mt-5">
    <div class="container mainBlock">
        <section id="#best-features" class="text-center">
            <div class="smoke pt-3">
                <ul>
                    <li><?php the_field('smoke_l'); ?></li>
                    <li><?php the_field('smoke_o'); ?></li>
                    <li><?php the_field('smoke_r'); ?></li>
                    <li><?php the_field('smoke_e'); ?></li>
                    <li><?php the_field('smoke_n'); ?></li>
                </ul>
            </div>
            <br>
            <div class="row d-flex justify-content-center mb-5 pt-5">
                <div class="col-md-8">
                    <h2 class="font-weight-bold"><?php the_field('main_services'); ?></h2>
                </div>
            </div>
            <?php
                $services_posts = get_field('post_services');
                if( $services_posts ): ?>
                    <div class="row">
                        <?php foreach( $services_posts as $post ): 
                            setup_postdata($post); ?>
                            <div class="col-md-4 mb-5 text-center info-block wow bounceInLeft">
                                <img src="<?php the_field('img_post'); ?>" class="rotate">
                                <h4 class="my-4 font-weight-bold text-center"><?php the_title(); ?></h4>
                                <p class=" hower padding"><?php the_field('text_post'); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php 
                    wp_reset_postdata(); ?>
                <?php endif; ?>
        </section>
        <hr class="hr-bold my-5">
    </div>
    <div type="button" class="callback-bt waves-effect waves-circle">
        <a href="tel:<?php the_field('call_link'); ?>" rel="nofollow">
            <div>
                <i class="fa fa-phone"></i>
            </div>
        </a>
    </div>
</main>
<?php get_footer();?>