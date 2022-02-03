<?php

// Ładowanie styli
function load_stylesheets() {
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
        array(), false, 'all' );
    wp_enqueue_style( 'bootstrap');

    wp_register_style( 'style', get_template_directory_uri() . '/style.css',
        array(), false, 'all' );
    wp_enqueue_style( 'style');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );


// Ładowanie jQuery i skryptów
function include_jquery() {
    wp_deregister_script( 'jquery' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true );
}
add_action( 'wp_enqueue_scripts', 'include_jquery' );

function loadjs() {
    wp_register_script( 'customjs', get_template_directory_uri() . '/js/script.js', '', 1, true );
    wp_enqueue_script( 'customjs' );
}
add_action( 'wp_enqueue_scripts', 'loadjs' );


// Logotyp
add_theme_support( 'custom-logo', array(
	'height'      => 50,
	'width'       => 190,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );


// Wsparcie różnych funkcjonalności wordpress`a
add_theme_support( 'admin-bar' );
add_theme_support( 'align-wide' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'core-block-patterns' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-line-height' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-spacing' );
add_theme_support( 'custom-units' );
add_theme_support( 'dark-editor-style' );
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'disable-custom-font-sizes' );
add_theme_support( 'editor-color-palette' );
add_theme_support( 'editor-gradient-presets' );
add_theme_support( 'editor-font-sizes' );
add_theme_support( 'editor-styles' );
add_theme_support( 'featured-content' );
add_theme_support( 'html5' );
add_theme_support( 'menus' );
add_theme_support( 'post-formats' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'starter-content' );
add_theme_support( 'title-tag' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'widgets' );


// Ścieżki
function breadcrumbs($id = null){
    ?>
    <div id="breadcrumbs">
        <a href="<?php bloginfo('url'); ?>">GEMMA</a></span> >
        <?php if(!empty($id)): ?>
        <a href="<?php echo get_permalink( $id ); ?>" ><?php echo get_the_title( $id ); ?></a> >
        <?php endif; ?>
        <span class="breadcrumb_last"><?php the_title(); ?></span>
    </div>
    <?php }


// MENU
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'MENU' ),
        'left-menu' => __( 'Left Menu' ),
        'left-sub-menu' => __( 'Left Sub Menu' ),
        'footer-one' => __( 'Pierwsze Footer Menu' ),
        'footer-two' => __( 'Drugie Footer Menu' ),
        'footer-three' => __( 'Trzecie Footer Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


// BURGER MENU
wp_enqueue_script( 'wpb_togglemenu', get_template_directory_uri() . '/js/burger-menu.js', array('jquery'), '20160909', true );


// Przycisk Do Góry
function button_up() {
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/topbutton.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'button_up' );
