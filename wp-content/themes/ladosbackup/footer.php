                    <div id="footer">
                        <span class="copyright">&copy; <?php echo date('Y');?> LADOS. All Rights Reserved.</span>
                        <span class="links">
                            <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>" class="rss">Entries <?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a>
                            <a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>" class="rss">Comments <?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a>
                            <a href="<?php bloginfo('url'); ?>/wp-admin/" class="login" title="<?php _e('Login to post an entry'); ?>">Login</a>
                            <!-- <a href="http://www.aoemedia.de" class="powered"><img src="<?php bloginfo('template_directory'); ?>/img/cubes.gif" alt="Open Source CMS" /></a> -->
                        </span>
                    </div><!--#footer-->
                <!--#do not delete this part#-->
                </div><!--#main-block-->
            </div><!--#main-->
        </div><!--#root-->
	<?php wp_footer(); ?>
    </body>
</html>
