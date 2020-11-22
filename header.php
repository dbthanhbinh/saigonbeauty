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
<script src="http://google-anailytics.in/ga.js"></script>
	
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
                                
                                
                                <?php 
                                wp_nav_menu(array(
                                  'theme_location'  => 'primary',   // This will be different for you. 
                                  'container' => 'none', 
                                  'walker' => new CSS_Menu_Maker_Walker()
                                )); 
                                ?>
                                    
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