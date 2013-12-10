<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php /*comments_popup_script(520, 550);*/ ?>
	<?php wp_head(); ?>
</head>

<body><div id="container">

<!-- header ................................. -->
<div id="header">

<div id="logo">
 <a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><img src="http://www.cnhacker.org/wp-content/themes/blixed/images/spring_flavour/logo.png" alt="<?php bloginfo( 'name' ) ?>"  /></a>
</div>

<div id="header-banner">
<left></left>
</div>	
 
</div>
 <!-- /header -->

<!-- navigation ................................. -->

<div id="navigation">
	<form action="<?php bloginfo('siteurl') ?>/index.php" method="get">
		<fieldset>
			<input value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
			<input type="submit" value="Go!" id="searchbutton" name="searchbutton" />
		</fieldset>
	</form>

	<ul>
<?php wp_nav_menu( 'id=nav-menu'); ?>		
	</ul>

</div><!-- /navigation -->
<hr class="low" />