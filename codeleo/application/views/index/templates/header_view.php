<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>Home - SmartStart</title>
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if !lte IE 6]><!-->
	
		<link rel="stylesheet" href="<?=base_url();?>css/style.css" media="screen" />

		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
		
		<link rel="stylesheet" href="<?=base_url();?>css/fancybox.min.css" media="screen" />

		<link rel="stylesheet" href="<?=base_url();?>css/video-js.min.css" media="screen" />

		<link rel="stylesheet" href="<?=base_url();?>css/audioplayerv1.min.css" media="screen" />
	<!--<![endif]-->

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	
	<script type="text/javascript" src="<?=base_url();?>js/jquery-1.7.1.min.js"></script> 
	
	<script type="text/javascript" src="<?=base_url();?>js/send_form.js"></script>
	 
	
	<!-- HTML5 Shiv + detect touch events -->
	<script src="<?=base_url();?>js/modernizr.custom.js"></script>

	<!-- HTML5 video player -->
	<script src="<?=base_url();?>js/video.min.js"></script>
	<script>_V_.options.flash.swf = 'http://localhost/smartstart/js/video-js.swf';</script>
</head>
<body>

<header id="header" class="container clearfix">

	<a href = "<?=base_url()." "?>" id="logo">
		<img src="<?=base_url();?>img/logo.png" alt="SmartStart">
	</a>

	<nav id="main-nav">
		
		<?php $uri = $_SERVER["REQUEST_URI"];?>
		<ul>
			
			<li <?php if ($uri =="/") {echo 'class="current"';}?> >
				<a href = "<?=base_url()." "?>" class="project-meta">Главная</a>
			</li>
			
			<li <?php if ($uri =="/about") {echo 'class="current"';}?> >
				<a href = "<?=base_url()."about"?>" class="project-meta">О нас</a>
			</li>
			
			<li <?php if ($uri =="/posts") {echo 'class="current"';}?> >
				<a href = "<?=base_url()."posts"?>" class="project-meta">Блог</a>
			</li>
			
			<li <?php if ($uri =="/actions") {echo 'class="current"';}?> >
				<a href = "<?=base_url()."actions"?>" class="project-meta">Акции</a>
			</li>
			<li <?php if ($uri =="/contact") {echo 'class="current"';}?> >
				<a href = "<?=base_url()."contact"?>" class="project-meta">Контакты</a>
			</li>
			<? if($this->session->userdata('username')==false){ ?>
			<li <?php if ($uri =="/login") {echo 'class="current"';}?> >
				<a href = "<?=base_url()."login"?>" class="project-meta">Вход</a>
			</li>
			<?} else {?>
			<li>
				<a href=" ">Привет,<? echo $this->session->userdata('username'); ?></a>
				<ul>
					<li><a href="<?=base_url()."users/logout"?>">Выход</a></li>
				</ul>
			</li>
			<? } ?>
		</ul>
		
		
	</nav><!-- end #main-nav -->
	
</header><!-- end #header -->

