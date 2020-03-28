<?php 
$_posttype = get_post_type(get_the_ID());

//if(tie_get_option('related')):
    $related_number = 3; //tie_get_option('related_number')?tie_get_option('related_number'):4;
    $related_query = 'category'; //tie_get_option('related_query')?tie_get_option('related_query'):'default';
    $args = array();
    
    if($related_query=='tag')
    {
        $tags = wp_get_post_tags($post->ID);
        if ($tags) {
        	$tag_ids = array();
        	foreach($tags as $individual_tag) 
        		$tag_ids[] = $individual_tag->term_id;
        	 
        	$args=array(
                'post_type' => $_posttype,
        		'tag__in' => $tag_ids,
        		'post__not_in' => array($post->ID),
        		'showposts'=>$related_number,  // Number of related posts that will be shown.
        		
        	);
         }
    }
    else if($related_query=='author')
    {
        $author_obj = get_the_author_ID();
        
        $args=array(
                'post_type' => $_posttype,
        		'author' => $author_obj,
        		'post__not_in' => array($post->ID),
        		'showposts'=>$related_number,  // Number of related posts that will be shown.
        		
        	);
    }
    else if($related_query=='category')
    {
        $obj = wp_get_object_terms($post->ID,'category');
        $cat_obj = array();
        if($obj)
        {
            foreach($obj as $value)
            {
                $cat_obj[] = $value->term_id; 
            }
        }
        
        $args=array(
                'post_type' => $_posttype,
        		'category__in' => $cat_obj,
        		'post__not_in' => array($post->ID),
        		'showposts'=>$related_number,  // Number of related posts that will be shown.
        		
        	);
    }
    else
    {
        $args=array(      
                'post_type' => $_posttype,  		
        		'post__not_in' => array($post->ID),
        		'showposts'=>$related_number,  // Number of related posts that will be shown.
        		
        	);
    }
    
    $my_query = new wp_query($args);
?>
<!-- Related Projects Row -->
<div class="row related-post-list">

	<div class="col-lg-12">
		<h3 class="page-header">Tin liên quan</h3>
	</div>
	<div class="clear"></div>
    
    <?php 
    if($my_query->have_posts())
    {
        while($my_query->have_posts())
        {
            $my_query->the_post();
            ?>
            <div class="col-md-<?php echo $related_number;?> img-portfolio">
        		
                <?php if(has_post_thumbnail()):?>
        		<a href="<?php the_permalink();?>" title="<?php the_title();?>">
        			<?php the_post_thumbnail("medium");?>
        		</a>
                <?php endif;?>
        		<h5>
        			<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
        		</h5>
        		<div class="end-fix-excerpt">
                    <?php the_excerpt();?>  
                </div> 
                 <div class="end-fix-more">
                    <?php
                    if(function_exists('ws24h_tie_arc_meta_datetime'))
                        ws24h_tie_arc_meta_datetime();
                    ?>
                    <?php echo '<a class="fix-mores" style="display:block;" href="'.get_permalink().'">Chi tiết.</a>'; ?>
                </div>
                
        	</div>
            <?php
        }
        
    }
    else
    {
        ?>
        <p style="padding: 20px; font-size: 13px;">
        Đang cập nhật nội dung.
        </p>
        <?php    
    }
    
    $my_query->rereset_postdata();
    ?>
    
</div>
<!-- /.row -->
<?php
//endif;