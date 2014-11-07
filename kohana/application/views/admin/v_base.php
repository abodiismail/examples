<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	  	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title>Моя библиотека</title>
		<meta name="keywords" content="" />
	    <meta name="description" content="" />
		<!--<link rel="stylesheet" type="text/css" href="media/css/bootstrap.css"> -->
		<!--<link rel="stylesheet" type="text/css" href="media/css/user_css.css"> -->
		<?foreach ($styles as $file_style):?>
			<?=html::style($file_style)?>
		<?endforeach?>
		
		<?foreach ($scripts as $file_script):?>
			<?=html::script($file_script)?>
		<?endforeach?>
			
	</head>
	<body>
			<div id="wrap"> <!-- wrap. Начало--> 
				
				<header> <!-- header. Начало-->	
					<?if (isset($header)):?>
						<? foreach ($header as $head):?>
							<?=$head?>
						<?endforeach?>
					<?endif?>
				</header> <!-- header. Окончание-->	
		
				<section> <!-- Центральный блок. Начало-->
					<? if (isset($content)):?>
						<div class="container" style='padding-top:20px;'>
							<? foreach ($content as $cont):?>
								<?=$cont?>
							<?endforeach?>
						</div>
					<?endif?>
				</section>	<!-- Центральный блок. Окончание-->		
			</div> <!-- wrap. Окончание-->
	
			<div id="push" ></div>
			
				<footer id="footer"> <!-- footer. Начало-->	
					<? if (isset($footer)):?>
						<div class="container">
							<? foreach ($footer as $foot):?>
								<?=$foot?>
							<?endforeach?>
						</div>
					<?endif?>
				</footer> <!-- footer. Окончание-->		
	</body>
</html>		
		
		
		
		
		
		

