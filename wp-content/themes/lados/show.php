<?php
/*
Template Name: Production Details
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="main-block">
    <div id="content">
        <div class="pageheader"><h3><?php echo the_title(); ?></h3>
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
              	<li class="pagedesc" id="post-<?php the_ID(); ?>">
              		<div class="entry">
              		    <?php the_content('Continue&nbsp;reading&nbsp;&raquo;'); ?>
              		</div>
              	</li>
          	<?php endwhile; ?>
      </ul>
      <?php endif; ?>


        <?php query_posts(array('post_parent' => $post->ID, 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => '-1')); ?>


    	<?php if (have_posts()) : ?>

            <ul>
            	<?php while (have_posts()) : the_post(); ?>

                	<li class="post" id="post-<?php the_ID(); ?>">
                         <div class="title">
                    	    <h2><?php the_title(); ?></h2>
                        </div>

                		<div class="entry">
                		    <?php the_content('Continue&nbsp;reading&nbsp;&raquo;'); ?>
                		</div>
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

    <?php get_footer(); ?>