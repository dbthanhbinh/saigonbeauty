<?php get_header();?>						
	<!-- Container -->
	<div class="clear-line-10"></div>
	<div id="wrapper-container">
		<div class="wrapper">
			<div class="ms-cols-12 ms-cols-9-3">
				<div class="ms-cols-9">                            
					<div class="ms-cols-6">														
						<div class="ms-block-item ms-block-style-4">	
							<div class="ms-box-title">
								<h1>
									<?php 
									if (get_queried_object()->name == 'binh-chon') {
										echo 'Bình Chọn';
									} else {
										echo str_replace("Archives: ", "", get_the_archive_title());
									}
									?>
								</h1>
							</div> <div class="clear-line-3"></div>
							<div class="ms-box-content">
								<?php 
								global $post; 
								if (get_queried_object()->name == 'binh-chon') {
									get_template_part('content','binhchon');
								} else {
									get_template_part('content','loop');
								}
								?>	
							</div>
						</div>						
						<div class="clear-line-15"> </div>
						<div class="page-navigation">
							<?php get_template_part('includes/content','pagenavi');?>
						</div> <div class="clear"></div>	
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