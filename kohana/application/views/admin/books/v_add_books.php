<!--Форма для добавления книг-->
<div class="row"> 
		<div class="span12"> 
			<h4>Добавить новую книгу</h4>
			<?=Form::open('admin/adminbooks/add', array ('enctype'=>'multipart/form-data')) ?>
				<!--<legend>Добавить новую книгу</legend>-->
					<?if($errors):?>
						<?foreach ($errors as $error):?>
							<div class="alert alert-error" id="error" class="span6" ><?=$error?> </div><!--Error field-->
						<?endforeach?>
					<?endif?>

				<!--Поле "Название книги" -->
				<div class="control-group ">
					<?=Form::label('title','Название',array('class'=>'control-label'))?>
					<div class="controls">
						<?=Form::input('title', $data['title'],array('id'=>'textinput', 'class'=>'span6'))?>
					</div>
				</div>
				
							
				<!--Поле "Категория"--> 	
				<div class="control-group ">
					<?=Form::label('title','Категория',array('class'=>'control-label'))?>
					<div class="controls">
						<?=Form::select('cat[]', $cats, $data['cat'], array('multiple' =>'multiple','size'=>5,'id'=>'selectmultiple1','class'=>'span6'))?>
					</div>
				</div>

				<!--Поле "Автор"--> 
				<div class="control-group ">                                                                                               
					<?=Form::label('author', 'Автор', array('class'=>'control-label'))?>
					<div class="controls">
						<?=Form::select('author[]', $autr, $data['author'],array('multiple' =>'multiple','size'=>5,'id'=>'selectmultiple2','class'=>'span6'))?>
					</div>
				</div>   
	
				<!--Поле "Описание" --> 
				<div class="control-group ">  
					<?=Form::label('editor1','Описание', array('class'=>'control-label'))?>
					<div class="controls">
						<?=Form::textarea('editor1', $data['editor1'], array('cols' => 80, 'rows' => 20,'id'=>'textarea', 'class'=>'span8'))?>	
						<script type="text/javascript">
							CKEDITOR.replace( 'editor1' );
						</script>
					</div>
				</div> 
								
				<!--Кнопка "Добавить" --> 
				<div class="control-group ">  
					<?=Form::label('question','Что будем делать?', array('class'=>'control-label'))?>
					<div class="controls">
						<?=Form::submit('submit','Добавить',array('id'=>'button1','class'=>'btn btn-success'))?> 
						<?=HTML::anchor('admin/adminbooks/','Вернуться к списку книг', array('class'=>'btn btn-success'))?>
					</div>
				</div> 
			<?=Form::close()?>	
		</div>
</div>