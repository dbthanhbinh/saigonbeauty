<?php get_header();?>
						
			<!-- Container -->
			<div class="clear-line-10"></div>
			<div id="wrapper-container">
				<div class="wrapper">
					<div class="ms-cols-12 ms-cols-9-3">
						
						<div class="ms-cols-9">
                            <!--
							<div class="ms-cols-12-fix">
								<div class="ms-cols-6">
									<div class="ms-block-item ms-block-style-1">								
										<div class="ms-box-content">											
											<div class="ms-box-item ms-box-item-first">									
												<div class="item-thumb">
													<a href="#">
													<img alt="" src="<?php echo get_template_directory_uri();?>/images/demo/item.jpg" />
													</a>
												</div>
												<div class="item-lead">
													<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>
													Suốt 30 km truy đuổi, cảnh sát giao thông nổ 3 phát súng chỉ thiên nhưng nam thanh niên vẫn lái ôtô chở hơn 20 nghìn gói thuốc lá lậu bỏ chạy. 
												</div>
												
											</div>
											
										</div>
									</div> <div class="clear"></div>
								</div>
								<div class="ms-cols-2 ms-block-mid-2">
									<div class="ms-block-item  ms-block-style testDiv-block" id="testDiv">										
										<div class="ms-box-content">
											<div class="ms-box-item ms-box-item-first">																				
												<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>	
																														
											</div>
											<div class="ms-box-item">																				
												<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>	
																														
											</div>
											<div class="ms-box-item">																				
												<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>	
																														
											</div>
											<div class="ms-box-item">																				
												<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>																															
											</div>
											<div class="ms-box-item">																				
												<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>																															
											</div>
											<div class="ms-box-item">																				
												<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>																															
											</div>
											<div class="ms-box-item">																				
												<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>																															
											</div>
											<div class="ms-box-item">																				
												<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>																															
											</div>
											<div class="ms-box-item">																				
												<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>																															
											</div>
											
										</div>
									</div>
									
									
								</div>
								<div class="clear-line-1"></div>
							</div>
							-->
						
							<div class="ms-cols-6">
																
								<div class="ms-block-item ms-block-style-4">	
									<div class="ms-box-title">
										<h1><?php single_cat_title();?></h1>
									</div> <div class="clear-line-3"></div>
									<div class="ms-box-content">
                                                                            
										<?php get_template_part('content','loop');?>	
										
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