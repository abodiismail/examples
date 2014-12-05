<!--Файл вида. Админка. Добавление поста-->

<!-- Отправка формы по Ajax -->
<script type="text/javascript"> 
	//Wait until the DOM is fully loaded
	$(document).ready(function(){
	   $('#registerModalform').submit(registerUser); //отправка формы с содержимым поста
	   
	   
	   //---Загрузка миниатюры поста.Начало---
	   $('#photoimg').live('change', function() //photoimg изменился?!
		{ 
			$("#preview").html(''); // чистим preview
			$("#mes").html(''); // чистим сообщения об ошибках
			$("#preview").html('<img src="<?=base_url();?>js/form/loading.gif" alt="Uploading...."/>'); //показываем картинку загрузки
			
			//настройки для плагина Jquery 'ajaxForm'. Форма для добавления превью
			var options = {
			                dataType:"json",
							success:function(data){
										if(data.error_upload != undefined){       //Если пришло сообщение об ошибке загрузки
											$('#mes').html('<div class="error">'+data.error_upload+'</div>');    //то выводим на экран сообщение
										    $("#preview").html('');               //Убираем картинку загрузки
										}else{ 
										        if(data.error_resize != undefined){         //Если пришло сообщение об ошибке ресайза
													$('#mes').html('<div class="error">'+data.error_resize+'</div>');      //то выводим на экран сообщение       
												    $("#preview").html('');                 //Убираем картинку загрузки
												}else{
												     $('#preview').html('<img src ='+data.mini_foto+'>'); //выводим миниатюру
												     $('#prew_name').val(data.foto_name);                 //заносим имя миниатюры в скрытое поле формы для удаления миниатюры
													 $('#file').val(data.foto_name);                      //заносим имя миниатюры в скрытое поле формы добавления поста 
													 $('#prewForm').show();
												     $('#imageform').hide();
													  
										       }
											
										}
									}	
						 }		
			
			//подключение плагина Jquery 'ajaxForm'
			 $("#imageform").ajaxForm(options).submit();
		}); //---Загрузка миниатюры поста.Конец---
		 
	      
		   //---Удаление миниатюры поста.Начало---
		   //настройки для плагина Jquery 'ajaxForm'. Форма для удаления превью 
			var options_del = {
			                url: "<?php echo base_url();?>admin/posts/do_delete",
			               	type: "POST", 
							dataType: "json",
							success:function(data){
										if(data.error_delete != undefined){       //Если пришло сообщение об ошибке удаления
											$('#mes').html('<div class="error">'+data.error_delete+'</div>');    //то выводим на экран сообщение
										}else{
												$('#mes').html('<div class="success">'+data.success_delete+'</div>');    //Выводим на экран сообщение
										        $('#prewForm').hide();
												$('#imageform').show();
												$(".clear_prew").val('').html(''); // чистим preview
												
											 }
											
										}
							}	
		    //подключение плагина Jquery 'ajaxForm'
		    $("#prewForm").ajaxForm(options_del);
		 });//---Удаление миниатюры поста.Конец--- 

	 
		//The function that handles the process
		function registerUser(event)
			{
				//Stop the form from submitting
				event.preventDefault();

				var main_text = encodeURI(tinyMCE.activeEditor.getContent());//Снимаем значение поля textarea
				var form_data = $('#registerModalform').serialize() + '&main_text=' + main_text; //собираем значения с формы методом serialize и добавляем значения main_text (textarea)	
		
	//Begin the ajax call
    $.ajax({
            url: "<?php echo base_url();?>admin/posts/add_post_ajax",
            type: "POST",      
            data: form_data,
            dataType: "json",
            cache: false,
            success: function (json) {              
                if (json.err==1) 
                { 
                    //Show the user the errors.
                   $('#registerModalerror').html(json.message).show();
                   
                } else {
                    //Hide our form
                    $('#registerModalform').slideUp();
                    //Show the success message
                    $('#registerModalerror').html(json.message).show();
					//Hide post prew form
					$('#uploadForm').hide();
					$('#prewForm').hide();
					$('#post_prew').hide();
					$('#uploadOutput').hide();
					$('#result').show();
				}              
            }
        });
   }
</script> 

<section id="content" class="container clearfix">

	<header class="page-header">
	
		<header class="page-header">
		
			<h1 class="page-title">Блог</h1> 
					
			
		</header><!-- end .page-header -->
		
	</header><!-- end .page-header -->

	
	
	
	<div class="two-third"> <!--ДОБАВЛЕНИЕ ЗАПИСИ В БЛОГ. НАЧАЛО -->	
    
	     <h3>Добавить запись в блог</h3>
			
            <div id="registerModalerror" style="display: none;"></div>
			</br>
			
			<form class="contact-form" id="registerModalform" enctype="multipart/form-data" action = "" method="post">  
				<p>Название:<br>
					<input type="text" name="title" style="width:70%;" value="">
				</p>
				
				<p>Дата и время добавления:<br>
				    <input type="text" name="calendar" id="datatime"><br>
				</p>
				
				<p>Статус записи:<br>
						<select name="swich">
							<option value="0" selected="selected">Невидима</option>
							<option value="1">Видима</option>
						</select>
				</p>
																		
				<p>Выбрать категорию записи:<br>
						<select name="category_id">
						    <?php foreach ($all_categories as $cat):?> 
							    	<option value="<?php echo $cat['id_cat'];?>" <?php if ($cat['name']=='Без категории') echo 'selected="selected"';?>><?php echo $cat['name'];?></option>
							<?php endforeach;?>	
			           </select>
				</p>
								
			  	<!--Скрытое поле, которое передаст на сервер имя миниатюры для записи в БД-->
				<!--<input id="file" type="hidden" name="file">-->
				<input id="file" name="file">
				   
				<?php echo tinymce(); ?> <!--Подключение helper для подключения редактора TinyMCE -->
				<p>Полный текст:<br>
					<textarea name="main_text" id="tinyMCE" style="width:7%;resize:none;"></textarea><br>
				</p>
				
				<p>Мета-описание записи блога (необязательное поле, используется для поисковой оптимизации):<br>
					<input type="text" name="desc" style="width:70%;" value=""/><br>
				</p>

				<p>Ключевые слова (необязательное поле, используется для поисковой оптимизации):<br>
					<input type="text" name="keywords" style="width:70%;" value=""/><br>
				</p>
			    
				<input type = "submit" name = "save_button" value = "Сохранить" id="registerModalsubmit">
			    <input type = "reset" name = "reset" value = "Очистить поля формы" id="registerModalsubmit"> 
				</br>
				<a class="button medium"  href="<?=base_url()."admin/posts/posts"?>">ВЕРНУТЬСЯ К СПИСКУ ВСЕХ ЗАПИСЕЙ</a>	
			    <div class="clear"></div>

				</form>
				<div id="result" style="display:none;">
			        <a class="button medium"  href="<?=base_url()."admin/posts/add_post"?>">ДОБАВИТЬ ЕЩЕ ОДНУ ЗАПИСЬ</a> 
					<a class="button medium"  href="<?=base_url()."admin/posts/index"?>">ВЕРНУТЬСЯ К СПИСКУ ВСЕХ ЗАПИСЕЙ</a> 
				</div>
	</div> <!--ДОБАВЛЕНИЕ ЗАПИСИ В БЛОГ. КОНЕЦ -->
	
	<div class="one-third last"> 
       
	   <div> <!--ДОБАВЛЕНИЕ МИНИАТЮРЫ К ЗАПИСИ БЛОГА. НАЧАЛО -->  
		   <h3>Добавить миниатюру поста</h3>      
				<div id="mes"></div> </br>                   <!--В этот DIV выводится ошибки загрузки и ресайза-->
				<div id="preview" class="clear_prew"></div>  <!--В этот DIV выводится, при успехе, превью-->
		
				<!--Форма загрузки миниатюры поста. Начало -->
				<form id="imageform" method="post"  action='do_upload' enctype="multipart/form-data">
					<p><input type="file" name="userfile" id="photoimg" class="clear_prew"/></p>
				</form>
                <!--Форма загрузки миниатюры поста. Конец -->

				<!--Форма для удаления миниатюры поста. Начало-->
				<form id="prewForm" style="display:none;" method="post" action="" enctype="multipart/form-data">
					<p><input type="hidden" id="prew_name" size=100 name="prew" class="clear_prew"></p> 
					<p><input id="delete" value="Удалить" type="submit"/></p> 
				</form>
                <!--Форма для удаления миниатюры поста. Конец-->
		</div><!--ДОБАВЛЕНИЕ МИНИАТЮРЫ К ЗАПИСИ БЛОГА. КОНЕЦ -->
		
	</div>

	<div class="clear"></div>
	</section>
	
	
	
	
	