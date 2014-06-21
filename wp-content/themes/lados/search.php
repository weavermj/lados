<?php get_header(); ?>
<?php get_sidebar(); ?>
    <div id="main-block">
        <div class="left-line">
            <div id="content"><?php
            $mySearch =& new WP_Query("s=$s & showposts=-1");
            $num = $mySearch->post_count;?>
            <div class="pageheader"><h3><?php echo "Search results for" . " \"" . trim($_REQUEST[s]) . "\" - " . $num . " articles found"; ?></h3>
            <div class="pagenav_top">&nbsp;
            <?php
            if(function_exists('wp_pagenavi')) {
                wp_pagenavi();
                }
            else {
               previous_posts_link('&laquo; Previous '); next_posts_link('Next &raquo;');
            }
            ?>

            </div>
            </div>

            <?php if (have_posts()) : ?>
                    <ul>
                    	<?php while (have_posts()) : the_post(); ?>

                        	<li class="post" id="post-<?php the_ID(); ?>">
                                <div class="title">
                            	    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    <?php if (in_category('7')) : ?>
                                        <span class="newsdate"><?php the_time('F') ?> <?php the_time('d') ?><?php the_time('S') ?>, <?php the_time('Y') ?></span>
                                    <?php endif; ?>
                                    </h2>
                                </div>

                        		<div class="entry">
                        		    <?php the_content('Continue reading &raquo;'); ?>
                        		</div>
                        	</li>

                    	<?php endwhile; ?>
                     </ul>
                    <?php comments_template(); ?>
                    <div class="pagenav_bottom">
            <?php
            if(function_exists('wp_pagenavi')) {
                wp_pagenavi();
                }
            else {
               previous_posts_link('&laquo; Previous '); next_posts_link('Next &raquo;');
            }
            ?>
            </div>
                <?php else : ?>
                	<p>Sorry, but no articles were found matching your search parameters of '<?php print trim($_REQUEST[s]) ; ?>'.</p>

                    <form action="<?php bloginfo('home'); ?>/" id="searchform">
<div class="contentsearch">
    <div class="spyglass">
        <img class="spyglass" alt="Search" src="<?php bloginfo('template_directory'); ?>/img/spyglass.png" />
    </div>
    <input type="text" class="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
    <input class="button" type="submit" value="Go!" />
</div>
</form>
            	<?php endif; ?>
            </div><!--#content-->
             <div id="recent"> </div>
        </div><!--.left-line-->

<?php get_footer(); ?>