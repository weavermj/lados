<?php
/*
Template Name: Productions
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="main-block">
    <div id="content">
        <div class="pageheader"><h3><?php echo the_title(); ?></h3>
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
              	<li class="pagedesc" id="post-<?php the_ID(); ?>">
              		<div class="entry">
              		    <?php the_content('Continue&nbsp;reading&nbsp;&raquo;'); ?>
              		</div>
              	</li>
          	<?php endwhile; ?>
      </ul>
      <?php endif; ?>

        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
        <?php query_posts(array('post_parent' => $post->ID, 'post_type' => 'page', 'paged'=>$paged, 'orderby' => 'meta_value', 'meta_key'=> 'year', 'order' => 'DESC', 'posts_per_page' => '5')); ?>



    	<?php if (have_posts()) : ?>
            <ul>
            	<?php while (have_posts()) : the_post(); ?>

                	<li class="post" id="post-<?php the_ID(); ?>">

                        <div class="title">
                    	    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <span class="showyear"><?php echo get_post_meta(get_the_ID(), "year", "true");?>  </span></h2>
                        </div>

                        <div class="entry">
                            <?php if (get_post_meta(get_the_ID(), "thumbnail", "true")) : ?>
                                <a href="<?php the_permalink() ?>"><img class="showthumbnail" alt="<?php the_title(); ?> - <?php echo get_post_meta(get_the_ID(), "year", "true");?>" src="<?php bloginfo('url'); ?>/wp-content/images/shows/<?php echo get_post_meta(get_the_ID(), "year", "true");?>/<?php echo get_post_meta(get_the_ID(), "thumbnail", "true");?>" /></a>

                            <?php else: ?>
                                <a href="<?php the_permalink() ?>"><img class="showthumbnail" alt="<?php the_title(); ?> - <?php echo get_post_meta(get_the_ID(), "year", "true");?>" src="<?php bloginfo('url'); ?>/wp-content/themes/lados/img/awaitingimage.jpg" /></a>
                            <?php endif; ?>

                		     <?php echo get_post_meta(get_the_ID(), "synopsis", "true");?>
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
