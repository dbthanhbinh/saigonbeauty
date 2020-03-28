
			<div class="clear"></div>
			<div class="web-line">
				<div class="wrapper">
					<span></span>
				</div>
			</div><div class="clear"></div>
			
			<!-- footer -->
			<div id="wrapper-footer">
				<div class="wrapper">
					<div class="ms-cols-12">	
						<div class="clear-line-10"></div>
						<div class="ms-cols-6">
							<div class="f-logo"><a href="<?php bloginfo('url');?>"> <img alt="" src="<?php echo get_template_directory_uri();?>/images/logo.png"/> </a></div>
							<div class="f-info">
								<h5>Trụ sở tp.Hồ chí minh</h5>
								<p>
									Lầu 9 Số 224 Điện Biên Phủ, Phường 7, Quận 3, Tp. Hồ Chí Minh. 
								</p>
								<p>
									<strong>Điện thoại:</strong> 08.62 711 112 - 08.66 815 526
								</p>
								<p>
									<strong>Email:</strong> sgb@gmail.com
								</p>
							</div>
						</div>
						<div class="ms-cols-5">
							<div class="f-tag-cloud">
								<h5>Từ khóa tìm kiếm</h5>
								<div class="testDiv-block-tag" id="testDiv-tag">
                                <?php 
                                $args = array(
                                	'smallest'                  => 12, 
                                	'largest'                   => 16,
                                	'unit'                      => 'px', 
                                	'number'                    => 45,  
                                	'format'                    => 'flat',
                                	'separator'                 => "\n",
                                	'orderby'                   => 'name', 
                                	'order'                     => 'ASC',
                                	'exclude'                   => null, 
                                	'include'                   => null,                                 
                                	'link'                      => 'view', 
                                	'taxonomy'                  => 'post_tag', 
                                	'echo'                      => true,
                                	'child_of'                  => null, // see Note!
                                );
                                wp_tag_cloud($args);?>
                                </div>
							</div>
						</div>
						<div class="clear-line-10"></div>
					</div>
				
				</div>
			</div>
			<!-- End footer -->
			
			<!-- footer copyright-->
			<div id="wrapper-copyright">
				<div class="wrapper">
					<div class="ms-cols-12">
						<div class="site-copyright">
							© Saigonbeautyonline.com 2015. All Rights Reserved.
						</div>
						<div class="site-designby">
							Thiết kế bởi: <a href="http://webseo24h.com">webseo24h.com</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End footer copyright -->
			
		</div>
		<div class="clear"></div>
        
        <?php 
        if(tie_get_option('left-right-banner-slider')):        
            dynamic_sidebar('left-slider');
            dynamic_sidebar('right-slider');        
        ?>
            <script type="text/javascript">
            
                function left_right_init()
                {
                    var main_content_id = ".wrapper";
                    var main_content_percent = 0;
                    var left_right_space_percent = 0;
                    var left_pos_percent = 0;
                    var right_pos_percent = 0;
                    var _fixed = "fixed";
                    var _pos_top = 90;
                    var _display = "block";
                    var _minimum_size = 1200;
                    
                    var window_w = document.body.clientWidth;
                    var window_main = $(main_content_id).width();
                    var objAdDivLeft = document.getElementById("divAdLeft");
                    var objAdDivRight = document.getElementById("divAdRight");
                    
                    main_content_percent = (window_main * 100)/window_w;
                    left_right_space_percent = (100 - main_content_percent)/2;
                    left_right_space_percent -= 0;
                
                    left_pos_percent = right_pos_percent = left_right_space_percent + main_content_percent;
                
                    if(objAdDivLeft)
                    {
                        right_pos_percent +=0.2;
                        left_right_space_percent -= 0.3;
                        objAdDivLeft.style.position = _fixed;
                        objAdDivLeft.style.top = _pos_top + "px";
                        objAdDivLeft.style.right = right_pos_percent + "%";
                        objAdDivLeft.style.display = _display;
                        objAdDivLeft.style.width = left_right_space_percent + "%"; 
                    }
                    
                    if(objAdDivRight)
                    {
                        right_pos_percent +=0.2
                        left_right_space_percent -= 0.3;
                        objAdDivRight.style.position = _fixed;
                        objAdDivRight.style.top = _pos_top + "px";
                        objAdDivRight.style.left = right_pos_percent + "%";
                        objAdDivRight.style.display = _display;
                        objAdDivRight.style.width = left_right_space_percent + "%";
                    }
                }
            
                function left_right_fc()
                {                  
                    left_right_init();
                    
                    var objAdDivLeft = document.getElementById("divAdLeft");
                    var objAdDivRight = document.getElementById("divAdRight");
                    
                    if (document.body.clientWidth < _minimum_size)
        	        {
        	            objAdDivRight.style.display = "none";
        	            objAdDivLeft.style.display = "none";                    
        	        }
        	        else
        	        {
        	            objAdDivRight.style.display = "block";
        	            objAdDivLeft.style.display = "block";                      
        	        }                            
                }
                                      
                // init left right fc
                left_right_init();
            
                $(window).resize(function() {
                    left_right_fc();
                });
    
                //alert(right_pos_percent);
            </script>
        <?php endif;?>
        <?php
        wp_footer();
        ?>
		
        
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>  
        
        <!-- Social Google+ -->
    	<!-- Place this tag after the last share tag. -->
    	<script type="text/javascript">
    	  window.___gcfg = {lang: 'vi'};
    	
    	  (function() {
    	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    	    po.src = 'https://apis.google.com/js/platform.js';
    	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    	  })();
    	</script>
        
	</body>
	
</html>