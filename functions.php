<?php
define('WS24H_THEME_NAME', 'webseo24htheme');
define('theme_name','WS24H_FK');

$reset_size_thumb = get_option('reset_size_thumb');
if($reset_size_thumb!='yes')
{
    update_option('large_size_h',655);
    update_option('large_size_w',1024);
    
    update_option('medium_size_h',448);
    update_option('medium_size_w',700);
    
    update_option('thumbnail_size_h',192);
    update_option('thumbnail_size_w',300);
    
    update_option('reset_size_thumb','yes');
}

/*********** Remove default ***********/
require_once('includes/modifys/remove-defaults.php');

/*********** Remove default ***********/
require_once('includes/rewrites/remove-category-slug.php');

/*********** Widget ***********/
require_once('includes/widgets/widgets.php');

/*********** Functions ***********/
require_once('functions/fk-functions.php');

// Setup theme ***************************************************************
function webseo24h_theme_setup(){
    
    if(is_admin())
    {
        //// Re-define meta box path and URL
        define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/includes/meta-box' ) );
        define( 'RWMB_DIR', trailingslashit( STYLESHEETPATH . '/includes/meta-box' ) );
        //// Include the meta box script
        require_once RWMB_DIR . 'meta-box.php';
        //// Include the meta box definition (the file where you define meta boxes, see `demo/demo.php`)
        require_once TEMPLATEPATH.'/includes/meta-box/demo/demo.php';
  	}
	/*
	 * Switches default core markup for search form, comment form,
	* and comments to output valid HTML5.
	*/
	add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
	
	#####add_theme_support( 'post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video') );
    		
	// This theme uses wp_nav_menu() in two locations.
    
	register_nav_menus( array(
		'primary'   => __( 'Main menu (primary)', WS24H_THEME_NAME ),
		//'secondary' => __( 'Secondary menu (secondary)', WS24H_THEME_NAME ),
        'top-menu' => __( 'Top menu (top-menu)', WS24H_THEME_NAME ),
        //'design-menu' => __( 'Design menu (design-menu)', WS24H_THEME_NAME ),
        'footer-menu' => __( 'Footer menu (footer-menu)', WS24H_THEME_NAME ),
	) );
	
	
	/*
	 * This theme uses a custom image size for featured images, displayed on
	* "standard" posts and pages.
	*/
	add_theme_support( 'post-thumbnails' );    
    //add_image_size('medium_big', 700, 448, true );
        
}

add_action( 'after_setup_theme', 'webseo24h_theme_setup' );

/********************** THEME FRAMEWORK ***********************/
include TEMPLATEPATH . '/panel/fk-setting.php';

/********************** THEME MODULES ***********************/
include TEMPLATEPATH . '/modules/modules.php';
