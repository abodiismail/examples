<!--Файл вида. Форма регистрации-->


<script>
<!--Передаем в скрипт send_form.js значение url сервера, на который перенаправляем-->
var url="<?php echo base_url();?>users/register_ajax";
<!--Передаем в скрипт send_form.js url, куда переходим в случае успешного запроса-->
var redirect = "<?php echo base_url();?>login";
</script>


<section id="content" class="clearfix">

	<div class="container clearfix">

		<header class="page-header">
		
			<h1 class="page-title">Форма регистрации</h1>
			
		</header><!-- end .page-header -->

	</div><!-- end .container -->

	
	<div class="container clearfix">
		
				
		<section id="main">
			
			<h3>Введите данные для регистрации</h3>
			
			
            <div id="registerModalerror" style="display: none;"></div>
			</br>
			
			<form class="contact-form" id="registerModalform" enctype="multipart/form-data" action = "" method="post">  
						
				<p class="textarea-block">
					<label ><strong>Логин</strong></label>
					<input type="text" name="username" value="">
				</p>
				
				<p class="textarea-block">
					<label ><strong>e-mail</strong></label>
					<input type="text" name="email" value="" >
				</p>

				<p class="textarea-block">
					<label><strong>Пароль</strong></label>
					<input type="password" name="password" value="" >
				</p>
				
				<p class="textarea-block">
					<label><strong>Повторите пароль</strong></label>
					<input type="password" name="confirm_password" value="" >
				</p>
				
			
				<input type="submit" value="Отправить" name="send_data"> <input type="reset" value="Очистить поля">
				
				<p>
				<strong><a href="<?=base_url()."login"?>"  style="text-decoration:underline;">Авторизация</a></strong> 			
				</p>
				
				<div class="clear"></div>

			</form>
       
		
</section>
	</div><!-- end .container -->
		
</section><!-- end #content -->

