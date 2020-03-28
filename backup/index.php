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
    							<div class="ms-block-item ms-block-style-1">								
    								<div class="ms-box-content">
    									<div class="ms-box-title">
    										<h2><span></span>Tin hot</h2>
    									</div> <div class="clear-line-3"></div>
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
    									<div class="ms-box-item left-thumb-item">											
    										<div class="item-thumb">
    											<a href="#">
    											<img alt="" src="<?php echo get_template_directory_uri();?>/images/demo/item2.jpg" />
    											</a>
    										</div>
    										<div class="item-lead">					
    											<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>
    											<p>Suốt 30 km truy đuổi, cảnh sát giao thông nổ 3 phát súng chỉ thiên nhưng nam thanh niên vẫn lái ôtô chở hơn 20 nghìn gói thuốc lá lậu bỏ chạy. </p>
    										</div>
    										
    									</div>
    									<div class="ms-box-item left-thumb-item">	
    										<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>
    										<div class="item-thumb">
    											<a href="#">
    											<img alt="" src="<?php echo get_template_directory_uri();?>/images/demo/item2.jpg" />
    											</a>
    										</div>
    										<div class="item-lead">										
    											Suốt 30 km truy đuổi, cảnh sát giao thông nổ 3 phát súng chỉ thiên nhưng nam thanh niên vẫn lái ôtô chở hơn 20 nghìn gói thuốc lá lậu bỏ chạy. 
    										</div>
    										
    									</div>
    									<div class="ms-box-item-list">
    										<ul>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    										</ul>
    									</div>
    								</div>
    							</div> <div class="clear-line-10"></div>
    							
    							<div class="ms-block-item ms-block-style-2">	
    								<div class="ms-box-title">
    									<h2>Tin mới</h2>
    								</div> <div class="clear-line-3"></div>
    								<div class="ms-box-content">
    									<div class="ms-box-item left-thumb-item ms-box-item-first">									
    										<div class="item-thumb">
    											<a href="#">
    											<img alt="" src="<?php echo get_template_directory_uri();?>/images/demo/item2.jpg" />
    											</a>
    										</div>
    										<div class="item-lead">					
    											<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>
    											<p>Suốt 30 km truy đuổi, cảnh sát giao thông nổ 3 phát súng chỉ thiên nhưng nam thanh niên vẫn lái ôtô chở hơn 20 nghìn gói thuốc lá lậu bỏ chạy. </p>
    										</div>
    										
    									</div>									
    									<div class="ms-box-item left-thumb-item">	
    										<div class="item-thumb">
    											<a href="#">
    											<img alt="" src="<?php echo get_template_directory_uri();?>/images/demo/item2.jpg" />
    											</a>
    										</div>
    										<div class="item-lead">					
    											<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>
    											<p>Suốt 30 km truy đuổi, cảnh sát giao thông nổ 3 phát súng chỉ thiên nhưng nam thanh niên vẫn lái ôtô chở hơn 20 nghìn gói thuốc lá lậu bỏ chạy. </p>
    										</div>
    										
    									</div>
    									<div class="ms-box-item-list">
    										<ul>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    										</ul>
    									</div>
    								</div>
    							</div><div class="clear-line-10"></div>
    							
    							<div class="ms-block-item ms-block-style-3 ms-block-item-split-2c">
    								<div class="ms-box-title">
    									<h2>Tin mới</h2>
    								</div> <div class="clear-line-3"></div>
    								
    								<div class="ms-block-item-split-l">
    									<div class="ms-box-content">
    										<div class="ms-box-item left-thumb-item ms-box-item-first">									
    											<div class="item-thumb">
    												<a href="#">
    												<img alt="" src="<?php echo get_template_directory_uri();?>/images/demo/item.jpg" />
    												</a>
    											</div>
    											<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>
    											
    											
    										</div>
    										<div class="ms-box-item left-thumb-item">											
    											<div class="item-thumb">
    												<a href="#">
    												<img alt="" src="<?php echo get_template_directory_uri();?>/images/demo/item.jpg" />
    												</a>
    											</div>
    											<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>
    											
    											
    										</div>
    																				
    									</div>
    								</div>
    								<div class="ms-block-item-split-r">
    									<div class="ms-box-item-list">
    										<ul>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    											<li><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></li>
    										</ul>
    									</div>
    								</div>	
    							</div><div class="clear-line-10"></div>
    							
    							<div class="ms-block-item ms-block-style-4">	
    								<div class="ms-box-title">
    									<h2>Tin mới</h2>
    								</div> <div class="clear-line-3"></div>
    								<div class="ms-box-content">
    									<div class="ms-box-item left-thumb-item ms-box-item-first">									
    										<div class="item-thumb">
    											<a href="#">
    											<img alt="" src="<?php echo get_template_directory_uri();?>/images/demo/item2.jpg" />
    											</a>
    										</div>
    										<div class="item-lead">					
    											<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>
    											<p>Suốt 30 km truy đuổi, cảnh sát giao thông nổ 3 phát súng chỉ thiên nhưng nam thanh niên vẫn lái ôtô chở hơn 20 nghìn gói thuốc lá lậu bỏ chạy. </p>
    										</div>
    										
    									</div>									
    									<div class="ms-box-item left-thumb-item">	
    										<div class="item-thumb">
    											<a href="#">
    											<img alt="" src="<?php echo get_template_directory_uri();?>/images/demo/item2.jpg" />
    											</a>
    										</div>
    										<div class="item-lead">					
    											<div class="title_news"><a href=""> Cảnh sát nổ súng, truy bắt ôtô biển xanh chở hàng lậu</a></div>
    											<p>Suốt 30 km truy đuổi, cảnh sát giao thông nổ 3 phát súng chỉ thiên nhưng nam thanh niên vẫn lái ôtô chở hơn 20 nghìn gói thuốc lá lậu bỏ chạy. </p>
    										</div>
    										
    									</div>									
    								</div>
    							</div>
    							
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