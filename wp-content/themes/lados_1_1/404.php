<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_sidebar('right'); ?>  
<div id="main-block">
<div id="content">
<div class="title">
    <h2>Sorry, that page cannot be found (Error 404)</h2>
</div>
<div class="entry">
<p>We have recently updated our website, and some of our pages have moved.</p>

<p>You can search our site below, or use the side menu to browse our content.</p>

<form action="<?php bloginfo('home'); ?>/" id="searchform">
<div class="contentsearch">
    <div class="spyglass">
        <img class="spyglass" alt="Search" src="<?php bloginfo('template_directory'); ?>/img/spyglass.png" />
    </div>
    <input type="text" class="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
    <input class="button" type="submit" value="Go!" />
</div>
</form>



</div>
</div>
<?php get_footer(); ?>