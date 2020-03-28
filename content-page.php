<?php 
if(have_posts()): the_post();
$showpostview = ws24h_tie_showpostview();
?>
    <div class="ms-box-title">
        <h2><?php the_title();?></h2>        
    </div> 
    <div class="ms-box-title-date">Ngày: <?php the_date('d-m-Y');?> </div>

    <div class="clear-line-3"></div>
    
    <div class="ms-box-content box-content-detail">
                                            
       	<?php 
        the_content();   
        ?>
    	
    </div>
<?php
    
endif;

?>