<?php
if(have_posts()):
	// Start the loop.
	while ( have_posts() ) : the_post();

		?>
        <div class="ms-box-item left-thumb-item ms-box-item-first">	
            <?php if(has_post_thumbnail()):?>								
			<div class="item-thumb">
				<a href="<?php the_permalink();?>" title="<?php the_title();?>">
				    <?php the_post_thumbnail('thumbnail');?>
				</a>
			</div>
            <?php endif;?>
			<div class="item-lead">					
				<div class="title_news"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></div>
				<?php the_excerpt();?>
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