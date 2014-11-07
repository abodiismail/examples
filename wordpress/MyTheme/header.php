<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Spanning
Version    : 1.0
Released   : 20100419
Description: A two-column fixed-width template suitable for small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<meta http-equiv="content-type" content="text/html; charset=utf-8" />-->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type')?>; charset=<?php bloginfo('charset')?>" />


<!--<title>Spanning by Free Css Templates</title>-->
<title><?php bloginfo('name')?></title>

<!--<title>Spanning by Free Css Templates</title>-->
<meta name="keywords" content="" />
<meta name="description" content="" />

<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
            <h2 class="description"><?php bloginfo('description'); ?></h2>
		</div>
		<!-- end div#logo -->
		<div id="menu">
			<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
		</div>
		<!-- end div#menu -->
	</div>
	
