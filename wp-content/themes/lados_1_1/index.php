<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>
<?php get_sidebar('right'); ?>

<div id="main-block">

    <div id="content">
         <div class="pageheader"><h3>Welcome to LADOS Online</h3>
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
    	<!-- Get the sticky main page post -->
    	<?php query_posts('page_id=279'); ?>
    	<?php if (have_posts()) : ?>
            <ul>
            	<?php while (have_posts()) : the_post(); ?>

                	<li class="post" id="post-<?php the_ID(); ?>">
                		<div class="entry">
                		    <?php the_content('Continue&nbsp;reading&nbsp;&raquo;'); ?>
                		</div>
                	</li>
            	<?php endwhile; ?>
             </ul>

        	<?php else : ?>

        	<h3 class="t-center">Not Found</h2>

        	<p class="t-center">Sorry, but you are looking for something that isn't here.</p>

    	<?php endif; ?>


    <!-- Get sticky news posts at the top -->
    <? $sticky = get_option('sticky_posts') ;   ?>
    <? $args = array( 'cat' => 7, 'showposts' => 1,'post__in'  => get_option('sticky_posts') );  ?>
	<?php query_posts($args); ?>
        <?if(sizeof($sticky) > 0) {  ?>
    	<?php if (have_posts()) : ?>
            <ul>
            	<?php while (have_posts()) : the_post(); ?>
                	<li class="post" id="post-<?php the_ID(); ?>">
                        <div class="title">
                    	    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                            <span class="newsdate"><?php the_time('F') ?> <?php the_time('d') ?><?php the_time('S') ?>, <?php the_time('Y') ?></span>
                            </h2>
                        </div>

                		<div class="entry">
                		    <?php the_content('Continue&nbsp;reading&nbsp;&raquo;'); ?>
                		</div>
                	</li>
            	<?php endwhile; ?>
             </ul>

        	<?php else : ?>

        	<h3 class="t-center">Not Found</h2>

        	<p class="t-center">Sorry, but you are looking for something that isn't here.</p>

    	<?php endif; ?>
        <? } ?>


    <!-- Get the 3 most recent news posts (non-sticky) -->
    <? $args = array( 'cat' => 7, 'showposts' => 3,'post__not_in'  => get_option('sticky_posts') );  ?>
	<?php query_posts($args); ?>
    	<?php if (have_posts()) : ?>
            <ul>
            	<?php while (have_posts()) : the_post(); ?>
                	<li class="post" id="post-<?php the_ID(); ?>">
                        <div class="title">
                    	    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                            <span class="newsdate"><?php the_time('F') ?> <?php the_time('d') ?><?php the_time('S') ?>, <?php the_time('Y') ?></span>
                            </h2>
                        </div>

                		<div class="entry">
                		    <?php the_content('Continue&nbsp;reading&nbsp;&raquo;'); ?>
                		</div>
                	</li>
            	<?php endwhile; ?>
             </ul>

        	<?php else : ?>

        	<h3 class="t-center">Not Found</h2>

        	<p class="t-center">Sorry, but you are looking for something that isn't here.</p>

    	<?php endif; ?>

    </div>



    <?php get_footer(); ?>
