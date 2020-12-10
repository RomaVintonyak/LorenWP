<!--foter-->
<footer class="page-footer font-small unique-color-dark pt-0 mb-0">
    <div style="background-color: #717171">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text"><?php the_field('social_title'); ?></h6>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <a href="<?php the_field('link_facebook'); ?>" target="_blank" class="fb-ic ml-0">
                       <?php the_field('icon_facebook'); ?> 
                    </a>
                    <a href="<?php the_field('link_instagram'); ?>" target="_blank" class="fb-ic ml-0">
                    <?php the_field('icon_instagram'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center text-md-left">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold"><strong><?php the_field('copyright_title'); ?></strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 48px">
                <p><?php the_field('copyright_suptitle'); ?></p>
                <p class="footer-copyright"><?php the_field('copyright_lock'); ?> <script type="text/javascript">document.write(new Date().getFullYear());</script></p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold"><strong><?php the_field('insta_title'); ?></strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 45px">
                <div id="instafeed"></div>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold"><strong><?php the_field('contact_title'); ?></strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px">
                <p><i class="fas fa-phone mr-3"></i><?php the_field('contact_phone'); ?></p>
                <p><i class="fab fa-viber mr-3"></i><?php the_field('contact_viber'); ?></p>
                <p><i class="fas fa-envelope mr-3"></i><?php the_field('contact_email'); ?></p>
            </div>
        </div>
    </div>
</footer>
<!--scroll top btn-->
<div class="scroll_top" id="topBtn">
    <img src="<?php the_field('top_btn'); ?>" alt="arrow">
</div>
<!-- SCRIPTS -->
<!--seting instafeed.js-->
<script type="text/javascript">
    (function($){
      $(window).on('load', function(){
          $.instagramFeed({
              'username': '<?php the_field('insta_hash'); ?>',
              'container': "#instafeed",
              'display_profile': false,
              'display_biography': false,
              'display_gallery': true,
              'callback': null,
              'styling': true,
              'items': <?php the_field('insta_num'); ?>,
              'items_per_row': <?php the_field('insta_row'); ?>,
              'margin': 1,
              'image_size': <?php the_field('insta_size'); ?>
          });
      });
  })(jQuery);
</script>
<?php wp_footer(); ?>
</body>
</html>
