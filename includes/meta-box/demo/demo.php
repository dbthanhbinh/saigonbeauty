<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
global $meta_boxes,$wpdb,$options;
$prefix = $wpdb->prefix;



$meta_boxes = array();

// 2nd meta box
$meta_boxes[] = array(
	'id'    => 'additional_info',
	'title' => 'Thêm thông tin',
	'pages' => array( 'post', 'binh-chon'),

	'fields' => array(
        		
        array(
			'name' => 'Lượt Xem',
			'desc' => 'Tổng số lượt xem bài viết: vd:10',
			'id'   => "{$prefix}showpostview",
			'type' => 'text',
            'std'  => 1 
		)				
	)
);

$meta_boxes[] = array(
	'id'    => 'binhchon_info',
	'title' => 'Thông tin',
	'pages' => array( 'binh-chon'),

	'fields' => array(        		
        array(
			'name' => 'CEO',
			'desc' => 'Tên CEO',
			'id'   => "{$prefix}ceo",
			'type' => 'text',
            'std'  => '' 
		),
		array(
			'name' => 'Cú Pháp',
			'desc' => 'Cú pháp bình chọn',
			'id'   => "{$prefix}struct",
			'type' => 'text',
            'std'  => '' 
		),
		array(
			'name' => 'Gửi',
			'desc' => 'Gửi tin SMS',
			'id'   => "{$prefix}sms_code",
			'type' => 'text',
            'std'  => '8100' 
		),
		// array(
		// 	'name' => 'Where do you live?',
		// 	'id'   => "{$prefix}place",
		// 	'type' => 'select',
		// 	// Array of 'value' => 'Label' pairs for select box
		// 	'options' => array(
		// 		'usa'		=> 'USA',
		// 		'vn'		=> 'Vietnam',
		// 	),
		// 	// Select multiple values, optional. Default is false.
		// 	'multiple' => true,
		// 	// Default value, can be string (single value) or array (for both single and multiple values)
		// 	'std'  => array( 'vn' ),
		// 	'desc' => 'Select the current place, not in the past',
		// ),	
	)
);

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );

function listData () {
	$pre = 'THV ';
	$data = [
		['CEO'=> 'NGUYỄN THỊ TỐ QUYÊN', 'STRUCT'=>$pre.'TOQUYEN' ],
		['CEO'=> 'VOONG MIÊU THUẬN','STRUCT'=>$pre.'BALE'],
		// 'TANTHEGIOI',
		// 'LEHIEU',
		// 'HUNGDONGTINH',
		// 'HUYNGUYEN',
		// 'SAIGONTOC',
		// 'HOANGTRANG',
		// 'XUANHUONG',
		// 'ADOAN',
		// 'NYSPA',
		// 'QUYNHHUONG',
		// 'MAILEE',
		// 'KIMTUYEN',
		// 'PHUONGHOANGANH',
		// 'PHUONGSG',
		// 'PHUCLINH',
		// 'PHONGVAN',
		// 'JASMINESPA',
		// 'THAOVY',
		// 'THAOTAY',
		// 'DUCNGUYEN',
		// 'PHUONGHAIR',
		// 'HOANGAN',
		// 'KHANHVINHHOANG',
		// 'VUSALON',
		// 'NGUYENTATTHANH',
		// 'ROMANTIC',
		// 'VIETBEAUTY',
		// 'VIENTOCHIEPKY',
		// 'VINASPA',
		// 'LEDUNG',
		// 'TOKYOBEAUTY',
		// 'DUNGTRAN',
		// 'LINHCHI',
		// 'NHANDAO',
		// 'TOMILUC',
		// 'WINNIE',
		// 'BANGKOK',
		// 'KELLYPANG',
		// 'COCOPANG',
		// 'NAMKIET',
		// 'BANGBEAUTY',
		// 'HOAAN',
		// 'THUYHANG',
		// 'NGUYENDAM',
		// 'YENBINH',
		// 'PHUONGMAI'
	];
	return $data;
}
?>