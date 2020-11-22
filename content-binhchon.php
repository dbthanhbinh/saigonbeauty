<?php
if(have_posts()):
	// Start the loop.
	while ( have_posts() ) : the_post();
		?>
        <div class="ms-box-item left-thumb-item ms-box-item-first binh-chon-archive">	
            <?php if(has_post_thumbnail()):?>								
			<div class="item-thumb">
				<a href="<?php the_permalink();?>" title="<?php the_title();?>">
				    <?php the_post_thumbnail('medium');?>
				</a>
			</div>
            <?php endif;?>
			<div class="item-lead">					
				<div class="title_news"><a href="<?php the_permalink();?>" title="<?php the_title();?>">
				THƯƠNG HIỆU: <?php the_title();?></a></div>
				<?php 
				global $wpdb;
				//$wpdb->prefix
				$postMetas = get_post_custom();				
				// print_r($postMetas);
				echo (isset($postMetas[$wpdb->prefix.'ceo'][0]) && $postMetas[$wpdb->prefix.'ceo'][0]) ? '<p class="bc-item"><strong>CEO: </strong>'.$postMetas[$wpdb->prefix.'ceo'][0].'</p>' : '';
				echo (isset($postMetas[$wpdb->prefix.'struct'][0]) && $postMetas[$wpdb->prefix.'struct'][0]) ? '<p class="bc-item"><strong>Soạn cú pháp: </strong>'.$postMetas[$wpdb->prefix.'struct'][0].'</p>' : '';
				echo (isset($postMetas[$wpdb->prefix.'sms_code'][0]) && $postMetas[$wpdb->prefix.'sms_code'][0]) ? '<p class="bc-item"><strong>Gửi: </strong>'.$postMetas[$wpdb->prefix.'sms_code'][0].'</p>' : '';
				?>

			</div>			
		</div>
        <?php 
	// End the loop.
	endwhile;    
else:
    ?>
    <div class="ms-box-item left-thumb-item ms-box-item-first">	
        <p style="padding: 10px 0;">Nội dung đang được cập nhật...!.</p>
    </div>
    <?php
endif;
?>