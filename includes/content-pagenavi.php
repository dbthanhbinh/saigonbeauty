<?php

### Function: Page Navigation: Boxed Style Paging
function tie_get_pagenavi($before = '', $after = '') 
{
	global $wpdb, $wp_query;
	$pagenavi_options = tie_pagenavi_init(); 
	
	if (!is_single()) {
		$request = $wp_query->request;
		$posts_per_page = intval(get_query_var('posts_per_page'));
		$paged = intval(get_query_var('paged'));
		$numposts = $wp_query->found_posts;
		$max_page = $wp_query->max_num_pages;
		if(empty($paged) || $paged == 0) {
			$paged = 1;
		}
		$pages_to_show = intval($pagenavi_options['num_pages']);
		$larger_page_to_show = intval($pagenavi_options['num_larger_page_numbers']);
		$larger_page_multiple = intval($pagenavi_options['larger_page_numbers_multiple']);
		$pages_to_show_minus_1 = $pages_to_show - 1;
		$half_page_start = floor($pages_to_show_minus_1/2);
		$half_page_end = ceil($pages_to_show_minus_1/2);
		$start_page = $paged - $half_page_start;
		if($start_page <= 0) {
			$start_page = 1;
		}
		$end_page = $paged + $half_page_end;
		if(($end_page - $start_page) != $pages_to_show_minus_1) {
			$end_page = $start_page + $pages_to_show_minus_1;
		}
		if($end_page > $max_page) {
			$start_page = $max_page - $pages_to_show_minus_1;
			$end_page = $max_page;
		}
		if($start_page <= 0) {
			$start_page = 1;
		}
		$larger_per_page = $larger_page_to_show*$larger_page_multiple;
		$larger_start_page_start = (tie_n_round($start_page, 10) + $larger_page_multiple) - $larger_per_page;
		$larger_start_page_end = tie_n_round($start_page, 10) + $larger_page_multiple;
		$larger_end_page_start = tie_n_round($end_page, 10) + $larger_page_multiple;
		$larger_end_page_end = tie_n_round($end_page, 10) + ($larger_per_page);
		if($larger_start_page_end - $larger_page_multiple == $start_page) {
			$larger_start_page_start = $larger_start_page_start - $larger_page_multiple;
			$larger_start_page_end = $larger_start_page_end - $larger_page_multiple;
		}
		if($larger_start_page_start <= 0) {
			$larger_start_page_start = $larger_page_multiple;
		}
		if($larger_start_page_end > $max_page) {
			$larger_start_page_end = $max_page;
		}
		if($larger_end_page_end > $max_page) {
			$larger_end_page_end = $max_page;
		}
		if($max_page > 1 || intval($pagenavi_options['always_show']) == 1) 
        {
			$pages_text = str_replace("%CURRENT_PAGE%", number_format_i18n($paged), $pagenavi_options['pages_text']);
			$pages_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pages_text);
			//echo $before.'<div class="pagenavi">'."\n";

					if(!empty($pages_text)) {
						echo '<div class="pages_text"><span>'.$pages_text.'</span></div>';
					}
                    echo '<ul class="pagination pagination-lg">';
					if ($start_page >= 2 && $pages_to_show < $max_page) 
                    {
						$first_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['first_text']);
						echo '<li><a href="'.esc_url(get_pagenum_link()).'" class="first" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
						if(!empty($pagenavi_options['dotleft_text'])) {
							echo '<li><span class="extend">'.$pagenavi_options['dotleft_text'].'</span></li>';
						}
					}
					if($larger_page_to_show > 0 && $larger_start_page_start > 0 && $larger_start_page_end <= $max_page) {
						for($i = $larger_start_page_start; $i < $larger_start_page_end; $i+=$larger_page_multiple) {
							$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
							echo '<li><a href="'.esc_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a></li>';
						}
					}
					echo '<li>';
                    previous_posts_link($pagenavi_options['prev_text']);
					echo '</li>';
                    for($i = $start_page; $i  <= $end_page; $i++) {						
						if($i == $paged) {
							$current_page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['current_text']);
							echo '<li class="active"><a>'.$current_page_text.'</a></li>';
						} else {
							$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
							echo '<li><a href="'.esc_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a></li>';
						}
					}
                    echo '<li>';
					next_posts_link($pagenavi_options['next_text'], $max_page);
                    echo '</li>';
					if($larger_page_to_show > 0 && $larger_end_page_start < $max_page) {
						for($i = $larger_end_page_start; $i <= $larger_end_page_end; $i+=$larger_page_multiple) {
							$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
							echo '<li><a href="'.esc_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a></li>';
						}
					}
					if ($end_page < $max_page) {
						if(!empty($pagenavi_options['dotright_text'])) {
							echo '<li><span class="extend">'.$pagenavi_options['dotright_text'].'</span></li>';
						}
						$last_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['last_text']);
						echo '<li><a href="'.esc_url(get_pagenum_link($max_page)).'" class="last" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
					}

			echo "</ul>\n";
		}
	}
}


### Function: Round To The Nearest Value
function tie_n_round($num, $tonearest) {
   return floor($num/$tonearest)*$tonearest;
}


### Function: Page Navigation Options
function tie_pagenavi_init() {
	$pagenavi_options = array();
	$pagenavi_options['pages_text'] = __('Trang %CURRENT_PAGE% / %TOTAL_PAGES%','tie');
	$pagenavi_options['current_text'] = '%PAGE_NUMBER%';
	$pagenavi_options['page_text'] = '%PAGE_NUMBER%';
	$pagenavi_options['first_text'] = __('&laquo; Trang trước ','tie');
	$pagenavi_options['last_text'] = __('Trang sau &raquo;','tie');
	$pagenavi_options['next_text'] = __('&raquo;','tie');
	$pagenavi_options['prev_text'] = __('&laquo;','tie');
	$pagenavi_options['dotright_text'] = __('...','tie');
	$pagenavi_options['dotleft_text'] = __('...','tie');
	
	
	$pagenavi_options['num_pages'] = 5;
	
	$pagenavi_options['always_show'] = 0;
	$pagenavi_options['num_larger_page_numbers'] = 3;
	$pagenavi_options['larger_page_numbers_multiple'] = 10;
	
	return $pagenavi_options;
}

/*-----------------------------------------------------------------------------------*/
# Page Navigation
/*-----------------------------------------------------------------------------------*/
function tie_pagenavi( $query = false, $num = false ){
	?>
    
    <style type="text/css">
        .pagination{}
        .pagination .pages_text{float: left; margin-right: 10px;} 
        .pagination .pages_text span{padding: 2px 10px; display: inline-block;}
        
        ul.pagination-lg{}
        ul.pagination-lg li{display: inline-block; margin: 2px;}
        ul.pagination-lg li.active{}
        ul.pagination-lg li a{padding: 5px 10px; background-color: #eee; transition: all 0.3s; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; -o-transition: all 0.3s;}
        ul.pagination-lg li.active a,
        ul.pagination-lg li a:hover
        {background-color: #bbb;}
    </style>
    
	<div class="pagination">	
		<?php tie_get_pagenavi( $query, $num ) ?>	
	</div>
	<?php
}

if ($wp_query->max_num_pages > 1) tie_pagenavi();
?>