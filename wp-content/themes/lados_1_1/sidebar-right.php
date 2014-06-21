<div id="right-block">

   <div class="box">
   <?
   $current_show_id =  get_option('current_show');

   $todays_date = date("d-m-Y");
   $final_show_date = get_post_meta($current_show_id, "final_night", "true");
   if(strtotime($todays_date) > strtotime($final_show_date)) {
    print "<p>Our last show was</p>";
   }
   else {
    print "<p>Our next show is</p>";
   }

   $current_show = new WP_Query();
   $current_show->query("page_id=$current_show_id");
   while ($current_show->have_posts()) : $current_show->the_post();  ?>
    <?php if (get_post_meta(get_the_ID(), "thumbnail", "true")) : ?>
        <p><a href="<?php the_permalink() ?>"><img class="showthumbnail" alt="<?php the_title(); ?> - <?php echo get_post_meta(get_the_ID(), "year", "true");?>" src="<?php bloginfo('url'); ?>/wp-content/images/shows/<?php echo get_post_meta(get_the_ID(), "year", "true");?>/<?php echo get_post_meta(get_the_ID(), "thumbnail", "true");?>" /></a></p>
   <?php else: ?>
        <p><a href="<?php the_permalink() ?>"><img class="showthumbnail" alt="<?php the_title(); ?> - <?php echo get_post_meta(get_the_ID(), "year", "true");?>" src="<?php bloginfo('url'); ?>/wp-content/themes/lados/img/awaitingimage.jpg" /></a></p>
   <?php endif; ?>
   <?php endwhile; ?>
   </div>


   <?php
   if(get_option('show_buytickets') == "true") {   ?>
   <div class="box">
   <a class="buyticketshover" href="<?php echo get_option('buytickets_url'); ?>" target="new"></a>
   <p>Book tickets online!</p>
   </div>
   <?php
   }
   ?>

    <div class="box">
   <a class="facebookhover" href="<?php echo get_option('facebook_url'); ?>" target="new"></a>
   <p>Follow us on Facebook</p>
   </div>

   <!-- Reset query -->
   <?php wp_reset_query(); ?>
</div><!--#left-block-->
