<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<!--<meta name="keywords" content="LADOS, L.A.D.O.S, L.A.D.O.S., operatic, dramatic, pajama game, The Pajama Game, theatre, grand theatre, Lancaster and Morecambe, drama, society">-->
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

            <div id="topbox" class="trans_white">

                <div id="heading-text">

                   <form action="<?php bloginfo('home'); ?>/" id="searchform"><div class="search">
                   <div class="spyglass"><img class="spyglass" alt="Search" src="<?php bloginfo('template_directory'); ?>/img/spyglass.png" /></div>
                   <input type="text" class="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input class="button" type="submit" value="Go!" /></div></form>
                   <a href="<?php bloginfo('url'); ?>"><img alt="Lancaster Amateur Dramatic &amp; Operatic Society" src="<?php bloginfo('template_directory'); ?>/img/banner.png" /></a>
                   <div class="email"><img alt="email" src="<?php bloginfo('template_directory'); ?>/img/email.png" /></div>
                </div>
            </div>

    	</div><!--#header-->
        <div id="main">
