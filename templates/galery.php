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
                                <div class="col-lg-4 col-md-12 mb-4">
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
                                    <div class="col-lg-4 col-md-12 mb-4">
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


                <!--<h4 class="mb-5 font-weight-bold h2">Зона молодих</h4>
                <div class="row wow rotateInUpLeft">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/pz/big/1.jpeg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="pr1"
                                        src="../img/galery/pz/small/1.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/pz/big/2.jpeg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="pr2"
                                        src="../img/galery/pz/small/2.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/pz/big/5.jpeg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="pr5"
                                        src="../img/galery/pz/small/5.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/pz/big/4.jpeg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="pr4"
                                        src="../img/galery/pz/small/4.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay mask flex-center zoom">
                            <figure class="photo">
                                <a href="../img/galery/pz/big/6.jpeg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="pr6"
                                        src="../img/galery/pz/small/6.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay mask flex-center zoom">
                            <figure class="photo">
                                <a href="../img/galery/pz/big/3.jpg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="pr3"
                                        src="../img/galery/pz/small/3.jpg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                </div>
                <h4 class="mb-5 font-weight-bold h2">Флористика</h4>
                <div class="row wow rotateInUpRight">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/kvity/big/1.jpg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="kv1"
                                        src="../img/galery/kvity/small/1.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/kvity/big/2.jpeg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="kv2"
                                        src="../img/galery/kvity/small/2.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/kvity/big/3.jpeg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="kv3"
                                        src="../img/galery/kvity/small/3.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/kvity/big/4.jpeg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="kv4"
                                        src="../img/galery/kvity/small/4.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay mask flex-center zoom">
                            <figure class="photo">
                                <a href="../img/galery/kvity/big/5.jpeg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="kv5"
                                        src="../img/galery/kvity/small/5.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay mask flex-center zoom">
                            <figure class="photo">
                                <a href="../img/galery/kvity/big/6.jpeg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="kv6"
                                        src="../img/galery/kvity/small/6.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                </div>
                <h4 class="mb-5 font-weight-bold h2">Поліграфія</h4>
                <div class="row wow rotateInUpLeft">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/poligraphy/big/1.jpg" data-lightbox="roadtrip"
                                   alt="wedding"><img
                                        id="pg1"
                                        src="../img/galery/poligraphy/small/1.jpg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/poligraphy/big/2.jpeg" data-lightbox="roadtrip"
                                   alt="wedding"><img
                                        id="pg2"
                                        src="../img/galery/poligraphy/small/2.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/poligraphy/big/3.jpg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="pg3"
                                        src="../img/galery/poligraphy/small/3.jpg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="view overlay zoom mask flex-center">
                            <figure class="photo">
                                <a href="../img/galery/poligraphy/big/4.jpeg" data-lightbox="roadtrip"
                                   alt="wedding"><img
                                        id="pg4"
                                        src="../img/galery/poligraphy/small/4.jpeg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay mask flex-center zoom">
                            <figure class="photo">
                                <a href="../img/galery/poligraphy/big/5.jpg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="pg5"
                                        src="../img/galery/poligraphy/small/5.jpg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="view overlay mask flex-center zoom">
                            <figure class="photo">
                                <a href="../img/galery/poligraphy/big/6.jpg" data-lightbox="roadtrip" alt="wedding"><img
                                        id="pg6"
                                        src="../img/galery/poligraphy/small/6.jpg"
                                        alt="wedding"/></a>
                            </figure>
                        </div>
                    </div>
                </div>-->



            </section>
            <hr class="my-5">
        </div>
    </div>
    <div type="button" class="callback-bt">
        <a href="tel: +380972349231" rel="nofollow">
            <div class="">
                <i class="fa fa-phone"></i>
            </div>
        </a>
    </div>
</main>

<?php get_footer(); ?>