<!DOCTYPE html>
<html lang="vi">
	<head>
		<title><?php wp_title();?></title>
		<meta charset="UTF-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo get_template_directory_uri();?>/css/reset.css" rel="stylesheet" type="text/css" >
		<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css" >
		
		<!-- Slider -->
		<script src="<?php echo get_template_directory_uri();?>/modules/owl-carousel/jquery-1.9.1.min.js"></script>		
		
		<!-- Owl Carousel Assets -->
		<link href="<?php echo get_template_directory_uri();?>/modules/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/modules/owl-carousel/owl.theme.css" rel="stylesheet">    
		<script src="<?php echo get_template_directory_uri();?>/modules/owl-carousel/owl.carousel.js"></script>
		
		<!-- Sticky -->		
		<!-- hcSticky script -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/modules/sticky/theia-sticky-sidebar.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/modules/sticky/test.js"></script>
		<script>
			$(document).ready(function() {
				$('.ms-cols-3,.ms-cols-2-stick')
					.theiaStickySidebar({
						additionalMarginTop: 30
					});
			});
		</script>	
		<!-- End stick -->
		
		<!-- Scroll -->
		<link href="<?php echo get_template_directory_uri();?>/modules/slimScroll/prettify/prettify.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/modules/slimScroll/prettify/prettify.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/modules/slimScroll/jquery.slimscroll.js"></script>
		
		<script type="text/javascript">
			$(function(){

			  $('#testDiv').slimScroll({
				  start: 'top',
				  height: '385px'
			  });
              
              $('.widget_tag_cloud .tagcloud').slimScroll({
				  start: 'top',
				  height: '175px'
			  });
              
              $('#testDiv-tag').slimScroll({
				  start: 'top',
				  height: '85px'
			  });

			});
		</script>

		<!-- End scroll -->	
        <?php do_action('site_head');?>	
		<?php wp_head();?>
		
	</head>
	
	<body <?php body_class();?>>
		<div id="page">
			<!-- top -->
			<!-- <div id="wrapper-top"></div> -->
			<!-- Endtop-->
			
			<!-- header -->
			<div id="wrapper-header">
				<div class="web-banner">
					<div class="wrapper">
						<div class="logo">
                            <?php echo ws24h_tie_logo();?>
                        </div>
						<div class="banner-top">
                            <?php echo ws24h_tie_top_banner();?>
                        </div>
                        <a href="#" class="nav-button">Menu</a>
					</div>
				</div> <div class="clear"></div>
				
				<div class="web-menu">
					<div class="wrapper">
						<!--<ul class="desktop">-->
						
                        
                        <!-- Menu -->
                        
                        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/modules/menu/css/defaults.css">
                        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/modules/menu/css/nav-core.css">
                        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/modules/menu/css/nav-layout.css">
                        
                        <div class="desktop">                                                 
                        
                            <nav class="nav">               
	<ul id="menu-primary" class="menu">
		<li id="menu-item-54" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home">
			<a href="http://saigonbeauty.com.vn/"><span>Trang chủ</span></a>
		</li>
		<li id="menu-item-52" class="menu-item menu-item-type-taxonomy menu-item-object-category ">
			<a href="http://saigonbeauty.com.vn/tin-tuc-su-kien"><span>Tin tức & Sự kiện</span></a>	   
		</li>
		<li id="menu-item-47" class="menu-item menu-item-type-taxonomy menu-item-object-category current-category-ancestor current-menu-ancestor current-menu-parent current-category-parent menu-item-has-children nav-submenu"><a href="http://saigonbeauty.com.vn/category/lam-dep/"><span>Làm đẹp</span></a>
			<ul style="display: none;">
				<li id="menu-item-85" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/lam-dep/nha-tao-mau-toc"><span>Nhà tạo mẫu tóc</span></a></li>
				<li id="menu-item-105" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/category/lam-dep/spa-da/"><span>Da &amp; Spa</span></a></li>
				<li id="menu-item-106" class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item active"><a href="http://saigonbeauty.com.vn/category/lam-dep/make-up/"><span>Make up</span></a></li>
				<li id="menu-item-107" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/lam-dep/nail"><span>Nail</span></a></li>				
			</ul>
		</li>
		<li id="menu-item-51" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children nav-submenu"><a href="http://saigonbeauty.com.vn/category/thoi-trang/"><span>Thời trang</span></a>
			<ul style="display: none;">
				<li id="menu-item-94" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/category/thoi-trang/thoi-trang-thoi-trang/"><span>Thời trang +</span></a></li>
				<li id="menu-item-93" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/category/thoi-trang/thoi-trang-sao/"><span>Thời trang sao</span></a></li>				
				<li id="menu-item-92" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/category/thoi-trang/nha-thiet-ke/"><span>Nhà thiết kế</span></a></li>
			</ul>
		</li>
		<li id="menu-item-116" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children nav-submenu"><a href="http://saigonbeauty.com.vn/category/san-pham-dich-vu/"><span>SẢN PHẨM – DỊCH VỤ</span></a>
			<ul style="display: none;">
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/san-pham-dich-vu/san-pham/"><span>Sản phẩm</span></a></li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/san-pham-dich-vu/dao-tao"><span>Đào tạo</span></a></li>
			</ul> 
		</li>
		<li id="menu-item-49" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children nav-submenu"><a href="http://saigonbeauty.com.vn/category/giai-tri/"><span>GIẢI TRÍ</span></a>
			<ul style="display: none;">
				<li id="menu-item-113" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/category/giai-tri/chuyen-lang-sao/"><span>Chuyện làng sao</span></a></li>			
				<li id="menu-item-114" class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/category/giai-tri/tin-tuc-giai-tri-giai-tri/"><span>Tin tức giải trí</span></a></li>
			</ul>
		</li>
		<li id="menu-item-118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children nav-submenu"><a href="http://saigonbeauty.com.vn/category/gia-tri-song/"><span>GIÁ TRỊ SỐNG</span></a>
			<ul style="display: none;">
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/gia-tri-song/am-thuc"><span>Ẩm thực</span></a></li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/gia-tri-song/du-lich"><span>Du lịch</span></a></li>
				<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="http://saigonbeauty.com.vn/gia-tri-song/bai-hoc-y-nghia"><span>Bài học ý nghĩa</span></a></li>				
			</ul> 
		</li>			
		<li id="menu-item-117" class="menu-item menu-item-type-taxonomy menu-item-object-category">
			<a href="http://saigonbeauty.com.vn/binh-chon"><span>BÌNH CHỌN</span></a>			
		</li>
	</ul>                                    
</nav>
                            
                            <a href="#" class="nav-close">Close Menu</a>
                            
                            
                        
                        </div>
                        
                        <script src="<?php echo get_template_directory_uri();?>/modules/menu/js/nav.jquery.min.js"></script>
                        <script>
                            $('.nav').nav();
                        </script>                                                                        
                        <!-- End menu -->                                                                                                                                                
					
					</div>
				</div><div class="clear"></div>
				<!--Breaking news-->
				<?php require ('modules/breaking-news/breaking-news.php')?>
				
			</div>
			<!-- End header -->