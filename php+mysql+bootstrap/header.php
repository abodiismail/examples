<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	  	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title>Form</title>
		<meta name="keywords" content="" />
	    <meta name="description" content="" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/user_css.css">
		<link rel="stylesheet" type="text/css" href="plugins/validate/validationEngine.jquery.css">
		
		<script src="js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="plugins/validate/jquery.validationEngine-ru.js" type="text/javascript" charset="utf-8"></script>
        <script src="plugins/validate/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
		
		<!-- Validation add and edit forms to the client-side-->
		<script language="javascript" type="text/javascript">
			$(document).ready(function()
			{
				jQuery("#add_form").validationEngine();
				jQuery("#edit_form").validationEngine();
			});
		</script> 
		
		
	</head>
	<body>
	<div id="wrap"> <!-- begin wrap--> 
		<header>	
					<div class="navbar navbar-static-top">                         
						<div class="navbar-inner">                                   
							<div class="container" >   
								<a class="brand" href="#about">Form</a>
								<div class="nav-collapse collapse">
									<!--Navigation must be here-->
								</div>
							</div> 
						</div> 
					</div>  
        </header>