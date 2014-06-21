<?php
if ( function_exists('register_sidebars') )
 register_sidebars(2,array(
        'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
 'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

function widget_aoe_search() {
?>
    	<div class="box">
		<h3>Search</h3>
			<form method="get" action="<?php bloginfo('url'); ?>/">
				<input type="text" value="" name="s" class="text" />
				<input type="submit" id="search-submit" class="button" value="Go!" />
			</form>
		</div>
	
<?php
}

function widget_aoe_tag_cloud($a) {
    $options = get_option('widget_tag_cloud');
    $title = empty($options['title']) ? __('Tags') : apply_filters('widget_title', $options['title']);
?>
	<div class="box">
	<h3><?php echo $title ?></h3>
		<div class="tags">
			<?php wp_tag_cloud();?>
		</div>
	</div>
<?php
}

if ( function_exists('register_sidebar_widget') ) {
    register_sidebar_widget(__('Search'), 'widget_aoe_search');
}

if ( function_exists('register_sidebar_widget') ) {
    register_sidebar_widget(__('tag_cloud'), 'widget_aoe_tag_cloud');
}



//Custom Theme Settings
add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
	add_options_page('Global Custom Fields', 'Global Custom Fields', '7', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields() {
	?>
	<div class='wrap'>
	<h2>Global Custom Fields</h2>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Facebook URL:</strong><br />
	<input type="text" name="facebook_url" size="100" value="<?php echo get_option('facebook_url'); ?>" /></p>

	<p><strong>Buy Tickets URL:</strong><br />
	<input type="text" name="buytickets_url" size="100" value="<?php echo get_option('buytickets_url'); ?>" /></p>

    <p><strong>Show "Buy Tickets" link?</strong><br />
    <input type="radio" name="show_buytickets" value="true" <? if (get_option('show_buytickets') == "true" ) { print "checked" ; }?>/>Yes  <br />
    <input type="radio" name="show_buytickets" value="false" <? if (get_option('show_buytickets') == "false") { print "checked" ; }?> />No
    </p>

    <p><strong>Current Show</strong><br />
    <select name="current_show">
    <?php
    $productions = new WP_Query();
    $productions->query('post_parent=313&post_type=page&showposts=10&orderby=meta_value&meta_key=year&order=DESC');
    while ($productions->have_posts()) : $productions->the_post(); ?>
        <option value="<? the_ID();?>" <? if(get_option('current_show') == get_the_ID()) { print "selected" ;}?> > <?  print get_post_meta(get_the_ID(), "year", "true") . " : " ; the_title(); ?></option>
    <?php endwhile; ?>
    </select>
    </p>

	<p><input type="submit" name="Submit" value="Update Options" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="facebook_url,buytickets_url,show_buytickets,current_show" />

	</form>
	</div>
	<?php
}

?>