<!--Форма для редактирования информации об авторе-->

<div class="row"> 
		<div class="span12"> 
			<h4>Редактировать информацию об авторе</h4>
			<?=Form::open('admin/adminauthors/edit/'.$id, array ('enctype'=>'multipart/form-data')) ?>
				
					<?if($errors):?>
						<?foreach ($errors as $error):?>
							<div class="alert alert-error" id="error" class="span6" ><?=$error?> </div><!--Error field-->
						<?endforeach?>
					<?endif?>

				<!--Поле "Автор" -->
				<div class="control-group ">
					<?=Form::label('author','Автор',array('class'=>'control-label'))?>
					<div class="controls">
						<?=Form::input('author', $auth['author'] ,array('id'=>'textinput', 'class'=>'span6'))?>
					</div>
				</div>
				
				<!--Кнопка "Сохранить изменения" --> 
				<div class="control-group ">  
					<?=Form::label('question','Что будем делать?', array('class'=>'control-label'))?>
					<div class="controls">
						<?=Form::submit('submit','Сохранить изменения',array('id'=>'button1','class'=>'btn btn-success'))?> 
						<?=HTML::anchor('admin/adminauthors/','Вернуться к списку авторов', array('class'=>'btn btn-success'))?>
					</div>
				</div> 
			<?=Form::close()?>	
		</div>
</div>  