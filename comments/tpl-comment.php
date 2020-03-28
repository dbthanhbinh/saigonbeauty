<?php
#### BLOG COMMENT STYLE
####################################
function my_customComments($comment,$args,$depth)
{
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
	case 'pingback' :

	case 'trackback' :
		echo '<li class="post pingback">';
	echo "<p>";
	_e( 'Pingback:','');
	comment_author_link();
	edit_comment_link( __('Sửa',''), ' ' ,'');
	echo "</p>";
	break;
	default :

	case '' :
		echo "<li ";
		comment_class();
		echo ' id="li-comment-';
		comment_ID();
		echo '">';
		echo '<div id="comment-';
		comment_ID();
		echo '">';
		echo '<div class="comment-author">';
		echo '<div class="gravatar"> <span>';
		echo get_avatar( $comment, 50 );
		echo '</span></div>';

		echo '<cite>'.ucfirst(get_comment_author_link()).'</cite>';
		echo '<div class="comment-meta">';
		printf(__( ' Lúc %1$s - %2$s',''),get_comment_time() ,get_comment_date('d/m/Y'));
		echo '</div>';
		echo '</div><!--.comment-author -->';
		echo '<div class="reply">';

		echo '</div><!-- .reply -->';
		echo '<div class="comment-body">';
		comment_text();
		if ( $comment->comment_approved == '0' ) :
		_e( 'Bình luận đang được xử lý.','');
		endif;
		echo comment_reply_link( array_merge( $args, array('reply_text' => 'Trả lời', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
		//edit_comment_link( __('Sửa','') );
		echo '</div><!-- .comment-body -->';
		echo '</div><!-- .comment-ID -->';
		break;
		endswitch;
}

?>
<style type="text/css">
    .product-detail-comment{float:left; width:99.9%; border: 1px solid #ddd; color: #010101;}    
    #comments{display:block; float:left; width: 100%; margin:0;}
        
    .commentlist{
        display: block;        
        float: left;
        width: 97.95%;
        border: 1px solid #ddd;
        margin: 1%;
        list-style: none;
        padding: 10px 1%;
    }
    .commentlist li.depth-1{margin-bottom: 5px; display: inline-block; width: 100%;}
    .commentlist li.comment
    {
        border-top: 1px solid #ddd;
        padding-top: 10px;
        margin-top: 10px;
    }
    
    .commentlist li.comment:first-child
    {
        border-top:none;
        margin-top: 0;
        padding-top: 0;
    }
    
    .commentlist li ul.children{margin: 10px 0; background-color: #F5F5F5; border: 1px solid #ddd; padding: 1%;
        margin-left: 64px;
        list-style: none;
    }
    .commentlist li ul.children li ul.children{background: rgba(229, 240, 234, 0.46); list-style: none;}
    .commentlist li ul.children li ul.children li ul.children{background: #f5f5f5; list-style: none;}
    
    .comment-author{}
    .comment-author .fn{font-weight: bold; margin-right: 10px;}
    .commentmetadata {color: #ed6c9e; margin-bottom: 5px;}
    .commentmetadata a{color: rgb(253, 167, 0);}
    
    
    .comment-author img{float: left; margin-right: 1%; width: 10%; height: auto;}
    .comment-body{display: inline-block; line-height: 20px; width: 100%;}
    .comment-body p{float: right; width: 93%;}
    .comment-body .reply{display: inline-block; margin-top: 5px; width: 100%;}
    .commentlist li ul.children .comment-body p{float: right; width: 93%;}
    a.comment-reply-link,p.logged-in-as a{color: #336699; font-weight: bold;}
    
    .form-allowed-tags{width:80%!important;}
    .comment-form-author label,.comment-form-email label,.comment-form-comment label{display: block!important; margin-bottom: 5px!important;}
    .product-comment-icon h6{font-size: 18px; margin: 0;}
    
    .comment-form input[type='text'] {    
        height: 30px;
        border-top: 1px solid #c2c2c2;
        border-left: 1px solid #c2c2c2;
        border-right: 1px solid #e6e6e6;
        border-bottom: 1px solid #e6e6e6;
        padding: 0 4px;
        font-size: 13px;
        min-width: 50%;
        padding: 5px!important;
    }
    .comment-form textarea{padding: 5px 1%; border: 1px solid #c2c2c2; width: 97.8%;}
    
    .comment-form input[type='submit'] {color: #fff; background: #FDA700; padding: 7px 10px!important; border: none;}
    .comment-form{background: rgba(229, 240, 234, 0.46); padding: 5px 1%; border: 1px solid #ddd;}
    .comment-form p{padding: 2px 0;}
    #respond .form-submit{position:static!important;}
    #cptch_input{width: 50px; min-width: 50px; margin-top: 5px;}
    
    /************ Comments ***********/
    .product-comment-icon{display: block; margin:0;}
    .product-comment-title{
        display: block; float: left; margin:0; line-height: 25px; font-size: 18px;
        background-color: #f1f1f1; padding: 5px 2%; width: 100%;
    }
    .product-comment-title img{float: left; margin-right: 10px;}
    
    #commentform{}
    #commentform p{display: block; margin: 5px 0;}
    #commentform p input[type='text']{width: 50%; padding: 1%;}
    ul.commentlist{}
    ul.commentlist li{display: block; margin-bottom: 2%; float: left; width: 100%;}
    ul.commentlist li .comment-author img{float: left; margin-right: 2%; }
    ul.commentlist li .comment-author cite{font-weight: bold; display: block; margin-bottom: 3px;}
    ul.commentlist li .comment-author .comment-meta{font-style: italic;}
    
    ul.commentlist li .comment-body{display: block; margin-top: 1%; padding-left: 65px;}
    ul.commentlist li .comment-body p{}
    ul.commentlist li .comment-body a.comment-reply-link{display: block; text-align: center; background-image: url("../images/reply.jpg"); background-repeat: no-repeat; float: right; width: 60px; height: 22px; line-height: 23px; padding-left: 8px; color: #bbb;}
    
    ul.commentlist li ul.children{padding-left: 65px; margin: 1.5% 0;}
    
    #commentform textarea#comment{width: 97%; height: 60px; padding: 1%; border: 1px solid #ddd; margin: 5px 0;}
    #respond{position: relative; float: left; width: 98%; display: block; margin: 10px 1% 0 1%;}
    #respond h3.comment-reply-title{display: block; float: left; width: 100%; margin-bottom: 1%;}
    
    #respond .form-submit{position: absolute; right: 15px; bottom: 15px; color: #fff; border: none;}
    #respond .form-submit input{background: #ed6c9e; border: none; color: #fff; padding: 3px 5px;}
    .product-detail-comment-onface .fb-comments{width: 100%!important;}
    .product-detail-comment-onface iframe,.product-detail-comment-onface span,#feedback_0mpHLJ0LK4ZSnH4BR{width: 100%!important;}
    

    
</style>
<div class="" style="width:100%; float: left; height: 10px; clear: both;"></div>
<div class="product-detail-comment">
	<div class="product-comment-title">
		<div class="product-comment-icon">
            <h6>Bình luận (<?php comments_number(__('0',''), __('1',''), __('%','') );?>)</h6>            
		</div>				
	</div>
		
	<div class="product-detail-comment-onlocal">
		<!-- **Comment Entries** -->   	
        <div id="comments" class="comment-entry">   
            <a name="respond"></a>
            <?php  
                /*
                $comments_args = array(
                        // change the must log in text and link url
                        'must_log_in'=> '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), 'http://khoedep360.vn/shop/thanh-vien' ) . '</p>'
                );
                */
                
                $commenter = wp_get_current_commenter();
                $req = get_option( 'require_name_email' );
                $aria_req = ( $req ? " aria-required='true'" : '' );
                $required_text = '*';
                            
                $args = array(
                   'id_form'           => 'commentform',
                   'id_submit'         => 'submit',
                   'title_reply'       => __( '' ),
                   'title_reply_to'    => __( 'Tới trả lời %s' ),
                   'cancel_reply_link' => __( 'Hủy trả lời' ),
                   'label_submit'      => __( 'Gửi bình luận' ),

                   'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Ý kiến của bạn', 'noun' ) .
                     '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
                     '</textarea></p>',

                   'must_log_in' => '<p class="must-log-in">' .
                     sprintf(
                       __( 'Bạn phải &nbsp; <a href="%s">Đăng nhập</a> &nbsp; Để gửi bình luận.' ),
                       get_bloginfo('url')
                     ) . '</p>',

                    'logged_in_as' => '<p class="logged-in-as">' .
                     sprintf(
                     __( 'Đăng nhập với <a href="%1$s">%2$s</a>. <a href="%3$s" title="Đăng xuất "> &nbsp;|&nbsp; Đăng xuất?</a>' ),
                       admin_url( 'profile.php' ),
                       $user_identity,
                       wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                     ) . '</p>',

                   'comment_notes_before' => '<p class="comment-notes">' .
                     __( 'Địa chỉ email của bạn sẽ không được công khai.' ) . ( $req ? $required_text : '' ) .
                     '</p>',

                   'fields' => apply_filters( 'comment_form_default_fields', array(

                     'author' =>
                       '<p class="comment-form-author">' .
                       '<label for="author">' . __( 'Tên bạn', 'domainreference' ) . '</label> ' .
                       ( $req ? '<span class="required">*</span>' : '' ) .
                       '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                       '" size="30"' . $aria_req . ' /></p>',

                     'email' =>
                       '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
                       ( $req ? '<span class="required">*</span>' : '' ) .
                       '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                       '" size="30"' . $aria_req . ' /></p>',

                     )
                   ),
                 ); 
                 comment_form($args);
            ?>
            
            <ol class="commentlist">
            <?php
                    //Gather comments for a specific page/post 
                    $comments = get_comments(array(
                            'post_id' => get_the_ID(),
                            'status' => 'approve' //Change this to the type of comments to be displayed
                    ));

                    if($comments)
                    {
                        //Display the list of comments
                        wp_list_comments(array(
                                'per_page' => 10, //Allow comment pagination
                                'reverse_top_level' => false //Show the latest comments at the top of the list
                        ), $comments);
                    }
                    else
                    {
                        echo '<li> <p style="color:#336699; margin:10px 0;"> Chưa có phản hồi. </p> </li>';
                    }
            ?>
            </ol>
        </div><!-- **Comment Entries - End** -->
	</div>
        
</div>