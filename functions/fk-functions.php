<?php
function ws24h_tie_session_init()
{   global $sessionID;
    if(!session_id())
    {
        @session_start();
        $sessionID = session_id();        
    }
}
add_action('init','ws24h_tie_session_init');

/*--------------------------------------------------------------------------------
Single show post view
---------------------------------------------------------------------------------*/
function ws24h_tie_get_real_current_ip_client()
{
    if (!empty($_SERVER["HTTP_CLIENT_IP"]))
    {
     //check for ip from share internet
     $ip = $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
    {
     // Check for the Proxy User
     $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    else
    {
     $ip = $_SERVER["REMOTE_ADDR"];
    }
    
    // This will print user's real IP Address
    // does't matter if user using proxy or not.
    return $ip;
}

function ws24h_tie_showpostview()
{      
    global $wpdb;
    $showpostview = get_post_meta(get_the_ID(),$wpdb->prefix.'showpostview',true);        
    $tshowpostview = intval($showpostview);
    $showpostviewnew  = $tshowpostview+1;						
    update_post_meta(get_the_ID(), $wpdb->prefix.'showpostview',$showpostviewnew);      
    return $showpostview;
}

/*--------------------------------------------------------------------------------
Menu
---------------------------------------------------------------------------------*/
class CSS_Menu_Maker_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'nav-submenu';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'><span>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span></a>';
    $item_output .= $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}

/*--------------------------------------------------------------------------------
Banner Adv
---------------------------------------------------------------------------------*/
function ws24h_tie_top_banner()
{
    $banner_top = '';
    $banner_top_link = '';
    $banner_top_tab  = '';
    if(tie_get_option('banner_top') && tie_get_option('banner_top_img'))
    {
        $banner_top_link = tie_get_option('banner_top_url')? 'href="'.tie_get_option('banner_top_url').'"' : '';
        $banner_top_tab = tie_get_option('$banner_top_tab')?'target="_blank"':'';
        
        $banner_top = '<a '.$banner_top_tab.' '.$banner_top_link.'> <img alt="'.tie_get_option("banner_top_alt").'" src="'.tie_get_option('banner_top_img').'"/> </a>';
    }    
    return $banner_top;
}

/*--------------------------------------------------------------------------------
Logo
---------------------------------------------------------------------------------*/
function ws24h_tie_logo()
{
    $logo = '';
    
    if(function_exists('tie_get_option'))
        $logo = tie_get_option('logo');
    if(!empty($logo))
        return '<a href="'.get_bloginfo("url").'"> <img alt="" src="'.$logo.'"/> </a>';
    else
        return '<a href="'.get_bloginfo("url").'"> <img alt="" src="'.get_template_directory_uri().'/images/logo.png"/></a>';
}

/*--------------------------------------------------------------------------------
Favicon
---------------------------------------------------------------------------------*/
function ws24h_tie_favicon()
{
    $favicon = '';
    
    if(function_exists('tie_get_option'))
        $favicon = tie_get_option('favicon');
    if(!empty($favicon))
        echo '<link rel="icon" type="image/png" href="'.$favicon.'" />';
    else
        echo '<link REL="SHORTCUT ICON" HREF="'.get_template_directory_uri().'/favicon.ico">';
}
add_action('site_head','ws24h_tie_favicon');

/*--------------------------------------------------------------------------------
Limit excerpt length
---------------------------------------------------------------------------------*/
function db_shortDesc($str, $len, $charset='UTF-8')
{
	$len = $len?$len:80;
	$str = html_entity_decode($str, ENT_QUOTES, $charset);
	if(mb_strlen($str)> $len)
	{
		$arr = explode(' ', $str);
		$str = substr($str, 0, $len);
		$arrRes = explode(' ', $str);
		$last = $arr[count($arrRes)-1];
		unset($arr);
		if(strcasecmp($arrRes[count($arrRes)-1], $last))
		{
			unset($arrRes[count($arrRes)-1]);
		}
		return implode(' ', $arrRes)."...";
	}
	return $str;
}

/*----------------------------------------------------------------------------------
Change WordPress Excerpt length
------------------------------------------------------------------------------------*/
function custom_excerpt_length( $content ) {
	
    $excerpt = db_shortDesc($content,150);    
    //$excerpt .= '<a class="fix-mores" style="display:block;" href="'.get_permalink().'">Chi tiết.</a>';
    return $excerpt;
}
add_filter( 'the_excerpt', 'custom_excerpt_length', 999 );


/*-----------------------------------------------------------------------------------
tag_cloud_filter
-------------------------------------------------------------------------------------*/
function tcr_tag_cloud_filter($args = array()) {
    $args['smallest'] = 12;
    $args['largest'] = 18;
    //$args['number']  = 10;   
    $args['separator'] = '&nbsp;';
    $args['unit'] = 'px';
    return $args;
}

add_filter('widget_tag_cloud_args', 'tcr_tag_cloud_filter', 90);



##==========================================================================================
// Change featured image default
if(is_admin())
{
   add_filter('admin_post_thumbnail_html','change_thumbnail_html');    
}

function change_thumbnail_html( $content ) 
{
    return str_replace(__('Set featured image'), __('Set Image size: 700x448 px'),$content);
}