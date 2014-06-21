<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/print.css" type="text/css" media="print" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
<!--[if IE ]>
<link type="text/css" rel="stylesheet" media="screen" href="<?php bloginfo('template_directory'); ?>/ie.css" />
<![endif]-->
</head>
<body>
    <div id="root">
    	<div id="header">
            <ul class="menu">
                <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                <?php wp_list_pages('title_li=&depth=1'); ?>
            </ul>
            <form action="<?php bloginfo('home'); ?>/" id="searchform"><div class="search"><label for="s">Search:</label><input type="text" class="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input class="button" type="submit" value="Go!" /></div></form>
            <div id="heading">
                <!--<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <div class="description"><?php bloginfo('description'); ?></div>-->
                <div id="breadcrumb">
                  <?php
                  if(function_exists('bcn_display'))
                  {
                  	bcn_display();
                  }
                  ?>
                </div>
            </div>

            <div id="about">
                <?php include (TEMPLATEPATH . '/about_text.php'); /* Open about_text.txt in the theme folder to edit this text */?>
            </div>
    	</div><!--#header-->

        <div id="main">
