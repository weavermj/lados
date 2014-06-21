<div id="left-block">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
     <div class="box">
    	<!--<h3><?php _e('Category:'); ?></h3>-->
    	<ul class="categories">
    	    <?php wp_list_pages('depth=1&title_li='); ?>
    	</ul>
    </div>

    <div class="box">
    	<!--<h3><?php _e('Category:'); ?></h3>-->
    	<ul class="categories">
    	    <?php wp_list_cats('sort_column=name&hierarchical=1&exclude=1,4'); ?>
    	</ul>
    </div>

	<div class="box">
        	<h3><?php _e('Productions'); ?></h3>
        	<ul class="categories">
        	    <?php wp_list_categories('title_li=&sort_column=name&hierarchical=0&exclude=1&child_of=4'); ?>
        	</ul>
        </div>

	<div class="box">
        	<h3><?php _e('E-Mail Us'); ?></h3>
        	<ul class="email">
        		<li>enquiries@lados.org.uk</li>
		</ul>
        </div>

	<div class="box-black">
        	<ul class="email">
			<a href="http://www.noda.org.uk" target="_new"><img src="<?php bloginfo('template_directory'); ?>/img/noda-logo-sml2.png" alt="Noda Logo" class="nodalogo" /></a>
		</ul>
        </div>


	<!--<div class="box">
        	<h3><?php #_e('Archives:'); ?></h3>
        	<ul class="archive">
        	    <?php #wp_get_archives('type=monthly'); ?>
        	</ul>
        </div>-->
        <!--<div class="box">
        	<h3><?php _e('Meta:'); ?></h3>
        	<ul class="meta">
            	<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
            	<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
            	<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
            	<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
            	<?php wp_meta(); ?>
        	</ul>
        </div>

	<?php endif; ?>-->
</div><!--#left-block-->
