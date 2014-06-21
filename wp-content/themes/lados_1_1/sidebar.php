<div id="left-block">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
     <div class="box">
    	<ul class="categories">
    	    <?php wp_list_pages('depth=1&title_li='); ?>
             <?php wp_list_cats('sort_column=name&hierarchical=1&exclude=1,4'); ?>
    	</ul>
    </div>

	<div class="box-black">
        	<ul class="email">
                <li>
                <a href="http://www.noda.org.uk" target="_new"><img src="<?php bloginfo('template_directory'); ?>/img/noda-logo-sml2.png" alt="Noda Logo" class="nodalogo" /></a>
                </li>
		</ul>
    </div>
    <?php endif; ?>
</div><!--#left-block-->
