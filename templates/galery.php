<?php
/**
 * Template Name: Galery
 */
?>
<?php get_header('page');?>
<main>
    <div class="mt-5">
        <div class="container justify-content-center">
            <section id="galery" class="text-center mainBlock">
                <h4 class="mb-5 font-weight-bold h2"><?php the_field('arka_title'); ?></h4>
                    <?php
                    $post_arka = get_field('gelery_arka');
                    if( $post_arka ): ?>
                        <div class="row wow rotateInUpLeft">
                            <?php foreach( $post_arka as $post ): 
                                setup_postdata($post); ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <div class="view overlay zoom mask flex-center">
                                        <figure class="photo">
                                            <a href="<?php the_field('img_post'); ?>" data-lightbox="roadtrip" alt="wedding">
                                                <img src="<?php the_field('miniatyura_galereyi'); ?>" alt="wedding"/>
                                            </a>
                                        </figure> 
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php 
                        wp_reset_postdata(); ?>
                    <?php endif; ?>    
                <h4 class="mb-5 font-weight-bold h2"><?php the_field('fotozona_title'); ?></h4>
                    <?php
                        $post_fotozona = get_field('gelery_fotozona');
                        if( $post_fotozona ): ?>
                            <div class="row wow rotateInUpLeft">
                                <?php foreach( $post_fotozona as $post ): 
                                    setup_postdata($post); ?>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                                        <div class="view overlay zoom mask flex-center">
                                            <figure class="photo">
                                                <a href="<?php the_field('img_post'); ?>" data-lightbox="roadtrip" alt="wedding">
                                                    <img src="<?php the_field('miniatyura_galereyi'); ?>" alt="wedding"/>
                                                </a>
                                            </figure> 
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php 
                            wp_reset_postdata(); ?>
                        <?php endif; ?>
                <h4 class="mb-5 font-weight-bold h2"><?php the_field('prezydiya_title'); ?></h4>
                    <?php
                        $post_prezydia = get_field('galery_prezydia');
                        if( $post_prezydia ): ?>
                            <div class="row wow rotateInUpLeft">
                                <?php foreach( $post_prezydia as $post ): 
                                    setup_postdata($post); ?>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                                        <div class="view overlay zoom mask flex-center">
                                            <figure class="photo">
                                                <a href="<?php the_field('img_post'); ?>" data-lightbox="roadtrip" alt="wedding">
                                                    <img src="<?php the_field('miniatyura_galereyi'); ?>" alt="wedding"/>
                                                </a>
                                            </figure> 
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php 
                            wp_reset_postdata(); ?>
                    <?php endif; ?>
                <h4 class="mb-5 font-weight-bold h2"><?php the_field('florystyka_title'); ?></h4>
                    <?php
                        $post_florystyka = get_field('galery_florystyka');
                        if( $post_florystyka ): ?>
                            <div class="row wow rotateInUpLeft">
                                <?php foreach( $post_florystyka as $post ): 
                                    setup_postdata($post); ?>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                                        <div class="view overlay zoom mask flex-center">
                                            <figure class="photo">
                                                <a href="<?php the_field('img_post'); ?>" data-lightbox="roadtrip" alt="wedding">
                                                    <img src="<?php the_field('miniatyura_galereyi'); ?>" alt="wedding"/>
                                                </a>
                                            </figure> 
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php 
                            wp_reset_postdata(); ?>
                    <?php endif; ?>
                <h4 class="mb-5 font-weight-bold h2"><?php the_field('poligrafiya_title'); ?></h4>
                    <?php
                        $post_poligrafiya = get_field('galery_poligrafiya');
                        if( $post_poligrafiya ): ?>
                            <div class="row wow rotateInUpLeft">
                                <?php foreach( $post_poligrafiya as $post ): 
                                    setup_postdata($post); ?>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                                        <div class="view overlay zoom mask flex-center">
                                            <figure class="photo">
                                                <a href="<?php the_field('img_post'); ?>" data-lightbox="roadtrip" alt="wedding">
                                                    <img src="<?php the_field('miniatyura_galereyi'); ?>" alt="wedding"/>
                                                </a>
                                            </figure> 
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