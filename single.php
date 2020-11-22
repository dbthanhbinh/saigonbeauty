<?php get_header();?>
						
			<!-- Container -->
			<div class="clear-line-10"></div>
			<div id="wrapper-container">
				<div class="wrapper">
					<div class="ms-cols-12 ms-cols-9-3">
						
						<div class="ms-cols-9">												
							<div class="ms-cols-6">
																
								<div class="ms-block-item ms-block-style-4">	
									<?php                         
                                    get_template_part('content','page');?>
								</div>
								
								<div class="clear-line-15"> </div>
                                <div style="float: left; min-width: 250px;">                            
                    				<div style="float: left; margin-right: 6px;" class="fb-like" data-href="<?php the_permalink();?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                    <!-- Place this tag where you want the share button to render. -->
                    				<div style="margin:0;">
                                        <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php the_permalink();?>"></div>
                                    </div>				
                    			</div>
                                <div class="clear-line-15"> </div>	
								
                                <!-- INsert comment here-->
                                <!-- Comments -->
                                <?php            
                        			// If comments are open or we have at least one comment, load up the comment template.
                        			if ( comments_open() || get_comments_number() ) :    				
                                        include TEMPLATEPATH.'/comments/tpl-comment.php';                    
                        			endif;
                                ?>	
                                <div class="clear-line-10"></div>							
								
                                <?php require_once('templates/tpl-related-post.php');?>
                                
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