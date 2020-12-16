<?php
/*conect script & style*/
add_action('wp_enqueue_scripts', 'scriptStyle');
    function scriptStyle(){
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/asets/vendor/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style( 'mdb', get_template_directory_uri() . '/asets/vendor/bootstrap/css/mdb.min.css');
		wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/asets/vendor/lightbox/lightbox.min.css');
        wp_enqueue_style( 'mainStyle', get_template_directory_uri() . '/asets/css/style.css');
        wp_enqueue_style( 'accesScc', get_template_directory_uri() . '/asets/css/access.css');
        wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri() . '/asets/vendor/jquery/jquery-3.3.1.min.js');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'popper', get_template_directory_uri() . '/asets/vendor/bootstrap/js/popper.min.js');
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/asets/vendor/bootstrap/js/bootstrap.min.js');
		
		wp_enqueue_script( 'mdb', get_template_directory_uri() . '/asets/vendor/bootstrap/js/mdb.js');
		wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/asets/vendor/lightbox/lightbox-plus-jquery.min.js');
		wp_enqueue_script( 'instaFeed', get_template_directory_uri() . '/asets/vendor/instaFeed/jquery.instagramFeed.min.js');
		wp_enqueue_script( 'access', get_template_directory_uri() . '/asets/js/access.js');
		wp_enqueue_script( 'main', get_template_directory_uri() . '/asets/js/main.js');
    }
    function regMenu(){
		register_nav_menu( 'primary', 'PrimaryMenu' );
		register_nav_menu( 'social', 'SocialMenu' );
	}
add_action( 'after_setup_theme', 'regMenu' );
//main menu
add_filter( 'nav_menu_css_class', 'ClassToLI', 10, 4 );
function ClassToLI( $classes, $item, $args, $depth ){
	if($args->theme_location == 'primary') {
		$classes[] = 'nav-link';
		if ( $item->current ) {
			$class = 'active';
			$classes['class'] = isset( $classes['class'] ) ? "{$classes['class']} $class" : $class;
		}
	  }
	return $classes;
}
add_filter( 'nav_menu_link_attributes', 'ClassToLInks', 10, 4 );
function ClassToLInks( $atts, $item, $args, $depth ) {
	if($args->theme_location == 'primary') {
		$class = 'nav-link waves-effect waves-light';
		$atts['class'] = isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;
	}
	return $atts;
}
//social nav menu
add_filter( 'nav_menu_css_class', 'ClassToLI_social', 10, 4 );
function ClassToLI_social( $classes, $item, $args, $depth ){
	if($args->theme_location == 'social') {
		$classes[] = 'nav-item';
	  }
	return $classes;
}
add_filter( 'nav_menu_link_attributes', 'ClassToLInks_social', 10, 4 );
function ClassToLInks_social( $atts, $item, $args, $depth ) {
	if($args->theme_location == 'social') {
		$class = 'nav-link waves-effect waves-light';
		$atts['class'] = isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;
		$target = '_blank';
		$atts['target'] = isset( $atts['target'] ) ? "{$atts['target']} $target" : $target;
	}
	return $atts;
}
?>