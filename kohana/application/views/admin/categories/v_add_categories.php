 <!--Форма для добавления категорий-->
<div class="row"> 
		<div class="span12"> 
			<h4>Добавить категорию</h4>
			<?=Form::open('admin/admincategories/add', array ('enctype'=>'multipart/form-data')) ?>
					<?if($errors):?>
						<?foreach ($errors as $error):?>
							<div class="alert alert-error" id="error" class="span6" ><?=$error?> </div><!--Error field-->
						<?endforeach?>
					<?endif?>

				<!--Поле "Категория" -->
				<div class="control-group ">
					<?=Form::label('category','Категория',array('class'=>'control-label'))?>
					<div class="controls">
						<?=Form::input('category', $data['category'] ,array('id'=>'textinput', 'class'=>'span6'))?>
					</div>
				</div>
				
				<!--Кнопка "Добавить" --> 
				<div class="control-group ">  
					<?=Form::label('question','Что будем делать?', array('class'=>'control-label'))?>
					<div class="controls">
						<?=Form::submit('submit','Добавить',array('id'=>'button1','class'=>'btn btn-success'))?> 
						<?=HTML::anchor('admin/admincategories/','Вернуться к списку авторов', array('class'=>'btn btn-success'))?>
					</div>
				</div> 
			<?=Form::close()?>	
		</div>
</div>    

 