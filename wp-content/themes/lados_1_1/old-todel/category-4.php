<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="main-block">
    <div id="content">
        <div class="pageheader"><h3><?php echo single_cat_title(); ?></h3>
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
                            <div class="newsdate"><?php the_time('F') ?> <?php the_time('d') ?><?php the_time('S') ?>, <?php the_time('Y') ?></div>
                            </h2>
                        </div>

                        <!--<div class="postdata">
                            <span class="category"><?php the_category(', ') ?></span>
                            <span class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
                        </div>  -->
                		<div class="entry">
                		    <?php the_content('Continue&nbsp;reading&nbsp;&raquo;'); ?>
                		</div>
                		<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
                	</li>
            	<?php endwhile; ?>
             </ul>

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
    </div>

    <div id="recent">
       <!-- <div class="posts">
            <h3>Recent Posts</h3>
            <?php query_posts('showposts=5'); ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                <li>
                    <div class="date"><?php the_time('m-d-Y') ?></div>
                    <div class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></div>
                </li>
            <?php endwhile;?>
            </ul>
        </div>

        <div class="comments">
            <?php include (TEMPLATEPATH . '/simple_recent_comments.php'); /* recent comments plugin by: www.g-loaded.eu */?>
            <?php if (function_exists('src_simple_recent_comments')) { src_simple_recent_comments(5, 60, '<h3>Recent Comments</h3>', ''); } ?>
        </div> -->
    </div><!--#recent-->

    <?php get_footer(); ?>