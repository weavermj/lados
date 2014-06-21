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
            <?php while (have_posts()) : the_post(); ?>
            <div class="post page" id="post-<?php the_ID(); ?>">
                <div class="entry">
                    <?php the_content('Continue reading &raquo;'); ?>
                </div>
            </div>
            <?php endwhile; ?>
            <p><?php next_posts_link('&laquo; Previous Entries') ?> <?php previous_posts_link('Next Entries &raquo;') ?></p>
        <?php else : ?>
            <h2 class="t-center">Not Found</h2>
            <p class="t-center">Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>
    </div>
    <?php get_footer(); ?>