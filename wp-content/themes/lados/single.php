<?php get_header(); ?>
<?php get_sidebar(); ?>
    <div id="main-block">
        <div class="left-line">
            <div id="content">
            <?php
              $category = end(get_the_category());
              $current_name = $category->cat_name;
            ?>
            <div class="pageheader"><h3><?php echo $current_name; ?></h3>
                <div class="pagenav_top">&nbsp;

                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                <?php query_posts(array('post_parent' => $post->ID, 'post_type' => 'page', 'paged'=>$paged, 'orderby' => 'meta_value', 'meta_key'=> 'year', 'order' => 'DESC', 'posts_per_page' => '5')); ?>
                <?php
                    if(function_exists('wp_pagenavi')) {
                        wp_pagenavi();
                        }
                    else {
                       previous_posts_link('&laquo; Previous '); next_posts_link('Next &raquo;');
                    }
                    ?>
                    <?php    wp_reset_query(); ?>
                </div>
                </div>

            	<?php if (have_posts()) : ?>
                    <ul>
                    	<?php while (have_posts()) : the_post(); ?>

                        	<li class="post" id="post-<?php the_ID(); ?>">
                                <div class="title">
                            	    <h2><?php the_title(); ?>
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
                <?php else : ?>
                	<h3 class="t-center">Not Found</h2>
                	<p class="t-center">Sorry, but you are looking for something that isn't here.</p>
            	<?php endif; ?>
            </div><!--#content-->
             <div id="recent"> </div>
        </div><!--.left-line-->

<?php get_footer(); ?>