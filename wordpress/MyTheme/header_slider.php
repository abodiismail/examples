<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<meta http-equiv="content-type" content="text/html; charset=utf-8" />-->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type')?>; charset=<?php bloginfo('charset')?>" />

<!--<title>Spanning by Free Css Templates</title>-->
<title><?php bloginfo('name')?></title>

<meta name="keywords" content="" />
<meta name="description" content="" />

<script src="<?php bloginfo('template_url'); ?>/jquery/jquery-1.4.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/jquery/jquery.gallerax-0.2.js"></script>

<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
            <h2><?php bloginfo('description'); ?></h2>
		</div>
		<!-- end div#logo -->
		<div id="menu">
			<?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?>
		</div>
		<!-- end div#menu -->
	</div>
	<div>
		<div id="gallery">
			<div id="gallery-wrapper"><img class="output" src="<?php bloginfo('template_url'); ?>/images/img01.jpg" width="512" height="202" alt="" />
				<div class="caption-box"> <span class="caption">Monument Valley</span> <span class="caption2">A scenic shot of Monument Valley in Utah.</span> </div>
				<br class="clear" />
				<ul class="thumbnails">
					
					
					<li><img class="active" src="<?php bloginfo('template_url'); ?>/images/img01.jpg" title="Grilled Shrimp ; A nicely grilled shrimp." alt=""/></li>
					<li><img src="<?php bloginfo('template_url'); ?>/images/img04.jpg" title="Blackened Shrimp ; Shrimp cooked in a tasty sauce." alt=""  /></li>
					<li><img src="<?php bloginfo('template_url'); ?>/images/img05.jpg" title="Hot Wings ; A delicious deep fry chicken wings." alt="" /></li>
					
					
				</ul>
				<br class="clear" />
			</div>
		</div>
		<script type="text/javascript">

						$('#gallery').gallerax({
							outputSelector: 		'.output',					// Output selector
							thumbnailsSelector:		'.thumbnails li img',		// Thumbnails selector
							captionSelector:		'.caption',					// Caption selector
							captionLines:			2,							// Caption lines (2 lines)
							fade: 					'fast',						// Transition speed (fast)
						});

					</script>
		<!-- end -->
	</div>
	