<!--Файл вида. форма авторизации-->

<script>
<!--Передаем в скрипт send_form.js значение url сервера, на который перенаправляем-->
var url="<?php echo base_url();?>users/login_ajax";
<!--Передаем в скрипт send_form.js url, куда переходим в случае успешного запроса-->
var redirect = "<?php echo base_url();?>admin";
</script>


<section id="content" class="clearfix">

	<div class="container clearfix">

		<header class="page-header">
		
			<h1 class="page-title">Форма авторизации</h1>
			
		</header><!-- end .page-header -->

	</div><!-- end .container -->

	
	<div class="container clearfix">
		
				
		<section id="main">
			
			<h3>Введите данные для авторизации</h3>
			
			
            <div id="registerModalerror" style="display: none;"></div>
			</br>
			
			<form class="contact-form" id="registerModalform" enctype="multipart/form-data" action = "" method="post">  
			
			
				<p class="input-block">
					<label for="contact-name"><strong>Логин</strong></label>
					<input type="text" name="username" value="" id="contact-name">
				</p>

								
				<p class="textarea-block">
					<label for="contact-message"><strong>Пароль</strong></label>
					<input type="password" name="password" value="" >
				</p>
					
				
				<input type="submit" value="Отправить"  name="send_data">
				
				<p>
				<strong><a href="<?=base_url()."register"?>" style="text-decoration:underline;" >Регистрация</a></strong> 
				</p>
				
				<div class="clear"></div>

			</form>
       
		
</section>
	</div><!-- end .container -->
		
</section><!-- end #content -->

