<?php
function get_home_cats( $cat_data )
{    
    $Cat_ID = $cat_data['id'];
	$Posts = $cat_data['number'];

	$cat_query = new WP_Query('cat='.$Cat_ID.'&posts_per_page='.$Posts); 
    if(isset($cat_data['custom_title']) && !empty($cat_data['custom_title']))
        $cat_title = $cat_data['custom_title'];
    else    
	   $cat_title = get_the_category_by_ID($Cat_ID);
    
    $show_excerpt = '';
    if(isset($cat_data['show_excerpt']))
        $show_excerpt = $cat_data['show_excerpt'];   
       
    $color_style = 1;
    if(isset($cat_data['color_style']))
        $color_style = $cat_data['color_style'];
        
	$count = 0;
            
    if($cat_data['style']=='12')
    { 
    ?>
    <div class="ms-block-item ms-block-style-<?php echo $color_style;?>">
        <?php if($cat_data['show_title']=='y'):?>	
		<div class="ms-box-title">
			<h2><?php echo $cat_title ; ?></h2>
		</div> <div class="clear-line-3"></div>
        <?php endif;?>
		<div class="ms-box-content">
            <?php if($cat_query->have_posts()): ?>
            <?php while ( $cat_query->have_posts() ) : $cat_query->the_post(); $count ++ ;?>
			<?php if($count == 1 || $count == 2) : ?>
        
			<div class="ms-box-item left-thumb-item <?php if($count==1) echo 'ms-box-item-first';?>">									
				<?php if(has_post_thumbnail()):?>							
				<div class="item-thumb">
					<a href="<?php the_permalink();?>" title="<?php the_title();?>">
					   <?php the_post_thumbnail('medium');?>
					</a>
				</div>
                <?php endif;?>
				<div class="item-lead">
					<div class="title_news">
                    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                    <?php the_title();?></a></div>
					<?php the_excerpt();?> 
				</div>
				
			</div>								
			
            <?php else:?> 
			<div class="ms-box-item-list">
				<ul>
                    <?php if($count>2):?>
					<li><a href="<?php the_permalink();?>" title="<?php the_title();?>"> <?php the_title();?></a></li>
					<?php endif;?>
				</ul>
			</div>
            
            <?php endif;?>			
            <?php endwhile;?>
            <?php endif;?>
		</div>
	</div><div class="clear-line-10"></div>
    <?php    
    }
    else if($cat_data['style']=='13')
    {
    ?>
    <div class="ms-block-item ms-block-style-<?php echo $color_style;?>">	
        <?php if($cat_data['show_title']=='y'):?>
		<div class="ms-box-title">
			<h2><?php echo $cat_title ; ?></h2>
		</div> <div class="clear-line-3"></div>
        <?php endif;?>
		<div class="ms-box-content">
            <?php if($cat_query->have_posts()): ?>
            <?php while ( $cat_query->have_posts() ) : $cat_query->the_post(); $count ++ ;?>
			
			<div class="ms-box-item left-thumb-item <?php if($count==1) echo 'ms-box-item-first';?>">									
				<?php if(has_post_thumbnail()):?>							
				<div class="item-thumb">
					<a href="<?php the_permalink();?>" title="<?php the_title();?>">
					   <?php the_post_thumbnail('medium');?>
					</a>
				</div>
                <?php endif;?>
				<div class="item-lead">
					<div class="title_news">
                    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                    <?php the_title();?></a></div>
					<?php the_excerpt();?> 
				</div>
				
			</div>	
            <?php endwhile;?>
            <?php endif;?>
		</div>
	</div><div class="clear-line-10"></div>
    <?php    
    }
    else if($cat_data['style']=='14')
    {        
    ?>
    <div class="ms-block-item ms-block-style-<?php echo $color_style;?>">								
		<div class="ms-box-content">
            <?php if($cat_data['show_title']=='y'):?>
			<div class="ms-box-title">
				<h2><?php echo $cat_title ; ?></h2>
			</div> <div class="clear-line-3"></div>
            <?php endif;?>
            <?php if($cat_query->have_posts()): ?>
            <?php while ( $cat_query->have_posts() ) : $cat_query->the_post(); $count ++ ;?>
			<?php if($count == 1) : ?>
			<div class="ms-box-item ms-box-item-first">		
                <?php if(has_post_thumbnail()):?>							
				<div class="item-thumb">
					<a href="<?php the_permalink();?>" title="<?php the_title();?>">
					   <?php the_post_thumbnail('medium');?>
					</a>
				</div>
                <?php endif;?>
				<div class="item-lead">
					<div class="title_news">
                    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                    <?php the_title();?></a></div>
					<?php 
                        the_excerpt();
                    ?> 
				</div>
				
			</div>
            <?php else:?>               
               <div class="ms-box-item left-thumb-item">                    
    				<div class="item-lead">					
    					<div class="title_news <?php if($show_excerpt!='y') echo 'title_none_excerpt';?>"><a href="<?php the_permalink();?>" title="<?php the_title();?>"> <?php the_title();?></a></div>
    					<?php 
                        
                        if($show_excerpt=='y'):
                            the_excerpt();
                        endif;
                        
                        ?>
    				</div>
    				
    			</div>                 
            <?php endif;?>
			
            <?php endwhile;?>
            <?php endif;?>
		</div>
	</div> <div class="clear-line-10"></div>
    <?php    
    }
    else
    {        
    ?>
    <div class="ms-block-item ms-block-style-<?php echo $color_style;?>">								
		<div class="ms-box-content">
            <?php if($cat_data['show_title']=='y'):?>
			<div class="ms-box-title">
				<h2><?php echo $cat_title ; ?></h2>
			</div> <div class="clear-line-3"></div>
            <?php endif;?>
            <?php if($cat_query->have_posts()): ?>
            <?php while ( $cat_query->have_posts() ) : $cat_query->the_post(); $count ++ ;?>
			<?php if($count == 1) : ?>
			<div class="ms-box-item ms-box-item-first">		
                <?php if(has_post_thumbnail()):?>							
				<div class="item-thumb">
					<a href="<?php the_permalink();?>" title="<?php the_title();?>">
					   <?php the_post_thumbnail('medium');?>
					</a>
				</div>
                <?php endif;?>
				<div class="item-lead">
					<div class="title_news">
                    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                    <?php the_title();?></a></div>
					<?php the_excerpt();?> 
				</div>
				
			</div>
            <?php else:?>               
               <div class="ms-box-item left-thumb-item">
                    <?php if(has_post_thumbnail()):?>												
    				<div class="item-thumb">
    					<a href="<?php the_permalink();?>" title="<?php the_title();?>">
    					   <?php the_post_thumbnail('medium');?>
    					</a>
    				</div>
                    <?php endif;?>
    				<div class="item-lead">					
    					<div class="title_news"><a href="<?php the_permalink();?>" title="<?php the_title();?>"> <?php the_title();?></a></div>
    					<?php the_excerpt();?>
    				</div>
    				
    			</div>                 
            <?php endif;?>
			
            <?php endwhile;?>
            <?php endif;?>
		</div>
	</div> <div class="clear-line-10"></div>
    <?php
    }
}