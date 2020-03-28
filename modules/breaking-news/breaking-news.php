<?php
$args=array('posts_per_page'=> 5, 'no_found_rows' => 1 );
$breaking_query = new wp_query( $args  );
if( $breaking_query->have_posts() ) : $count=0;
?>
<div class="web-hotnews">
	<div class="wrapper breaking-news">
		<label><span></span> Tin nóng</label>
		<ul>
            <?php while( $breaking_query->have_posts() ) : $breaking_query->the_post();	$count++;?>            
            <li><a href="<?php the_permalink()?>" title="<?php the_title(); ?>"><?php the_title(); ?> </a> </li>
            <?php endwhile;?>			
		</ul>
                
        <script type="text/javascript">
        
            function createTicker(){    	
            	var tickerLIs = jQuery(".breaking-news ul").children();          
            	tickerItems = new Array();                                
            	tickerLIs.each(function(el) {                             
            		tickerItems.push( jQuery(this).html() );                
            	});                                                       
            	i = 0  ;                                                 
            	rotateTicker();                                           
            }                                                           
            function rotateTicker(){                                    
            	if( i == tickerItems.length ){                            
            	  i = 0;                                                  
            	}                                                         
              tickerText = tickerItems[i];                              
            	c = 0;                                                    
            	typetext();                                               
            	setTimeout( "rotateTicker()", 8000 );                     
            	i++;                                                      
            }                                                           
            var isInTag = false;                                        
            function typetext() {
            	if(jQuery('.breaking-news ul').length>0){
            		var thisChar = tickerText.substr(c, 1);                   
            		if( thisChar == '<' ){ isInTag = true; }                  
            		if( thisChar == '>' ){ isInTag = false; }                 
            		jQuery('.breaking-news ul').html('<li>' + tickerText.substr(0, c++) + '<!--<span class="breaking-hot"></span>--></li>');   
            		if(c < tickerText.length+1)                                     
            			if( isInTag ){                                                
            				typetext();                                                 
            			}else{                                                        
            				setTimeout("typetext()", 80);                               
            			}                                                             
            		else {                                                          
            			c = 1;                                                        
            			tickerText = "";                                              
            		}
            	}
            } 
        
			jQuery(document).ready(function(){
				
				createTicker(); 
			
			});
		</script>
        
        <?php get_search_form();?>
        
	</div>
</div>
<div class="clear"></div>
<div class="web-line">
	<div class="wrapper">
		<span></span>
	</div>
</div><div class="clear"></div>
<?php
endif;