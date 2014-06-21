<?php // Do not delete these lines
 if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
  die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) {  // and it doesn't match the cookie
    ?>

    <p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>

    <?php
    return;
            }
        }

  /* This variable is for alternating comment background */
  $oddcomment = "graybox";
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
    <h3 class="comments-list"><?php comments_number('No Comments','1 Comment','% Comments' );?><a name="comments"></a></h3><img src="<?php bloginfo('template_directory'); ?>/img/spacer.gif" alt="WP_Cloudy" border="0" />

    <ul class="comments-list">

        <?php foreach ($comments as $comment) : ?>
        <li class="<?=$oddcomment;?>">
            <div class="comment-metadata">
                <small class="commentmetadata"><a class="grey" href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('[Edit]','',''); ?></small>
            </div>
            <?php
               if (function_exists('get_avatar')) {
                  echo get_avatar( $comment->comment_author_email, $size = '50', $default = 'ad516503a11cd5ca435acc9bb6523536');
               } else {
                  $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
                     " . md5($email) . "&default=" . urlencode($default) . "&size=" . $size;
                  echo "<img src='$grav_url' alt='' />";
               }
            ?>
            <div class="comment-says">
                <a name="comment-<?php comment_ID() ?>"></a><cite><?php comment_author_link() ?></cite> says:
            </div>

            <div class="comment"><?php comment_text() ?></div>
        </li>

        <?php /* Changes every other comment to a different class */
            #if("graybox" == $oddcomment) {$oddcomment="";}
            #else { $oddcomment="graybox"; }
        ?>

        <?php endforeach; /* end for each comment */ ?>

    </ul>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post-> comment_status) : ?>
  <!-- If comments are open, but there are no comments. -->

  <?php else : // comments are closed ?>
  <!-- If comments are closed. -->
  <!--<p class="nocomments">Comments are closed.</p>-->

  <?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<a name="respond"></a><h3 id="leavecomment" class="comments-list">Leave a Comment</h3>
<form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
	<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a><input type="hidden" id="author" value="<?php echo $user_identity; ?>" /><input type="hidden" id="email" value="<?php echo $user_email; ?>" /><input type="hidden" id="url" value="<?php echo $user_url; ?>" /></p>
<?php else : ?>
	<p><input type="text" name="author" class="text" id="author" value="<?php echo $comment_author; ?>" tabindex="1" /> <label for="author"><small>Name</small></label><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /><input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" /></p>
	<p><input type="text" class="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" />
	<label for="email"><small>E-Mail (will not be published)</small></label></p>
	<p><input type="text" class="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
	<label for="url"><small>Website URL (optional)</small></label></p>
<?php endif; ?>

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<?php if ('none' != get_settings("comment_moderation")) { ?>
 <p><small><strong>Please note:</strong> Comment moderation is enabled and may delay your comment. There is no need to resubmit your comment.</small></p>
<?php } ?>

<p><input name="submit" type="submit" class="button" id="submit-button" tabindex="5" value="Submit Comment" /></p>
<p><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
<?php do_action('comment_form', $post->ID); ?>
</form>

<?php // if you delete this the sky will fall on your head
endif; ?>