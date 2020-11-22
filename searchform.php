<div class="get_search_form">
    <form method="GET" action="<?php bloginfo('url');?>">
        <input type="text" id="s" class="s" name="s" value="<?php echo get_query_var('s');?>"/>
        <input type="submit" value="Tìm kiếm"/>
    </form>
</div>