<?php
/**
 * Template Name: Contact
 */
?>
<?php get_header('page');?>
<main class="mt-5">
    <div class="container mainBlock">
        <section id="contact" class="mb-5">
            <h4 class="mb-5 font-weight-bold text-center h2"><?php the_field('contactPage_title'); ?></h4>
            <div class="row">
                <div class="col-lg-6 col-md-12 wow bounceInLeft">
                    <form class="p-4" id="contactForm">
                        <div class="md-form">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="name" name="name" class="form-control form-control-sm">
                            <label for="name"><?php the_field('forma_name'); ?></label>
                            <p class="error_name" id="errorName" style="display: none;"><?php the_field('error_name'); ?></p>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="email" name="email" class="form-control form-control-sm">
                            <label for="email"><?php the_field('forma_email'); ?></label>
                            <p class="error_email" id="errorEmail" style="display: none;"><?php the_field('error_email'); ?></p>
                        </div>
                        <div class="md-form ">
                            <i class="fas fa-phone-volume prefix grey-text"></i>
                            <input type="tel" id="phone" name="phone" class="form-control form-control-sm">
                            <label for="phone"><?php the_field('forma_phone'); ?></label>
                            <p class="error_phone" id="errorPhone" style="display: none;"><?php the_field('error_phone'); ?></p>
                        </div>
                        <div class="md-form ">
                            <i class="fas fa-pencil-alt prefix grey-text"></i>
                            <textarea name="message" id="message" class="md-textarea form-control form-control-sm" rows="2"></textarea>
                            <label for="message"><?php the_field('form_messag'); ?></label>
                            <p class="error_message" id="errorMessage" style="display: none;"><?php the_field('error_messag'); ?></p>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" id="radio_button" class="form-check-input">
                                <?php the_field('forma_check'); ?>
                            </label>
                        </div>
                        <div class="text-center mt-4">
                            <button id="sendMail" type="button" class="btn btn-outline-elegant waves-effect waves-float">
                                <?php the_field('form_button'); ?> 
                            </button>
                        </div>
                        <div id="errorText" class="red-text" style="height: 16px; width: 100%"></div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 p-5 wow bounceInRight">
                    <div class="row mb-3">
                        <p>
                            <i class="fas fa-map fa-2x mr-2 grey-text"></i><?php the_field('location_forma'); ?>
                        </p>
                    </div>
                    <div class="row mb-3">
                        <p>
                            <i class="fas fa-building fa-2x mr-2 grey-text"></i><?php the_field('time_manager'); ?>
                        </p>
                    </div>
                    <div class="row mb-3">
                        <p>
                            <i class="fab fa-viber fa-2x mr-2 grey-text"></i><?php the_field('contact_viber'); ?>
                        </p>
                    </div>
                    <div class="row mb-3">
                        <p>
                            <i class="fas fa-phone fa-2x mr-2 grey-text"></i><?php the_field('contact_phone'); ?>
                        </p>
                    </div>
                </div>
            </div>
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
<?php get_footer();?>