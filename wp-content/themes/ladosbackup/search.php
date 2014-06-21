<?php get_header(); ?>
<?php get_sidebar(); ?>
    <div id="main-block">
        <div class="left-line">
            <div id="content">
            <?php $mySearch =& new WP_Query("s=$s & showposts=-1");
            $num = $mySearch->post_count; ?>
            <div class="pageheader"><h3><?php echo "Search Results for" . " \"" . trim($_REQUEST[s]) . "\" - " . $num . " articles found"; ?></h3>
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
                                <!--<div class="date"><?php the_time('d') ?><span><?php the_time('M') ?></span></div>-->
                                <div class="title">
                            	    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    <?php if (in_category('7')) : ?>
                                        <div class="newsdate"><?php the_time('F') ?> <?php the_time('d') ?><?php the_time('S') ?>, <?php the_time('Y') ?></div>
                                    <?php endif; ?>
                                    </h2>
                                </div>
                                <!--<div class="postdata">
                                    <span class="category"><?php the_category(', ') ?></span>
                                </div>   -->
                        		<div class="entry">
                        		    <?php the_content('Continue reading &raquo;'); ?>
                        		</div>
                                <div class="entry-postdata">
                                    <p><b>Author:</b>&nbsp; <?php the_author() ?> <b>Added:</b> &nbsp;<?php the_time('F') ?> <?php the_time('d') ?><?php the_time('S') ?>, <?php the_time('Y') ?> <?php edit_post_link(__('[Edit]')); ?></p>
                                </div>
                        		<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
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
                	<h3 class="t-center">Not Found</h2>
                	<p class="t-center">Sorry, but you are looking for something that isn't here.</p>
            	<?php endif; ?>
            </div><!--#content-->
             <div id="recent"> </div>
        </div><!--.left-line-->

<?php get_footer(); ?>