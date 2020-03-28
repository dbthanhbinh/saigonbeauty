<?php get_header();?>
			
            <?php 
            $tie_slider_enable = tie_get_option('slider');
            $tie_slider_pos = tie_get_option('slider_pos');
            
            if($tie_slider_enable && ($tie_slider_pos=='big' || !$tie_slider_pos)):
            ?>            
			<!-- slide show here-->
            <div class="clear-line-5"></div>
            <?php include TEMPLATEPATH . ('/modules/owl-carousel/slide-show.php')?>
			
            <?php endif;?>
            
			<!-- Container -->
			<div class="clear-line-10"></div>
			<div id="wrapper-container">
				<div class="wrapper">
					<div class="ms-cols-12 ms-cols-9-3">
                        <div class="ms-cols-9">
                            <?php if($tie_slider_enable && $tie_slider_pos=='small'):?>
                            <div class="ms-cols-12-fix">
                                 <?php include TEMPLATEPATH . ('/modules/owl-carousel/slide-show.php')?>
                                <div class="clear-line-1"></div>
							</div>
                            <?php endif;?>
                        
    						<div class="ms-cols-6">
   							<?php
                            ////print_r(tie_get_option('on_home'));
                            if( tie_get_option('on_home') != 'boxes' )
                            {
                                $args = array(
                                    'post_type'         => 'post',
                                    'orderby'           => 'modified',
                                    'posts_per_page'    => 10,    
                                );
                                query_posts($args);
                                
                           	    get_template_part('content','loop');
                            }
                            else
                            {
                
                                $cats = get_option( 'tie_home_cats' ) ;  
                                //print_r($cats); 
                                                                             
                                if($cats)
                                {
                                    $tamp_pos = -1;
                                    $cat['box_pos'] = $tamp_pos;
                                    
                                    foreach ($cats as $cat)  
                                    {
                                    	tie_get_home_cats($cat);                                        
                                    }
                                }    
                                else 
                                    _e( 'You can use Homepage builder to build your homepage' , WS24H_THEME_NAME );
                
                              }  
                            ?>
    							
    						</div>
                            
                           	<?php 
                            get_sidebar('col-2');
                            ?>
                            
						</div>										
						<?php get_sidebar();?>
											
					</div> <div class="clear-line-10"></div>
					
				</div>
			
			</div>
			<!-- End container -->
			
<?php
get_footer();