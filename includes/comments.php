<?php
function minttheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li id="comment-<?php echo get_comment_ID() ?>">
     	<div class="holder">
        
         <?php echo get_avatar($comment,$size='60',$default='<path_to_url>' ); ?>
		
        <div class="entity">
			<div class="meta"><strong class="author"><?php comment_author_link(); ?></strong><em class="date"><?php comment_date('F j, Y at g:i a'); ?></em><?php echo comment_reply_link(array('depth' => $depth, 'max_depth' => $args['max_depth'])); ?></div>
            
            <?php comment_text() ?>
            </div>
        </div>
            
            
            <?php if ($comment->comment_approved == '0') : ?>
            <em><?php _e('Your comment is awaiting moderation.') ?></em>
            <br />
            <?php endif; ?>
            
     

      
      </li>
<?php 
}