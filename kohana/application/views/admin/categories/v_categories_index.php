
<!-- Вывод общей информации о категориях-->
<div class="row"> 
		<div class="span12"> 
			<h4>Список всех категорий</h4>
				<table class="table table-striped table-bordered  "> <!-- Начало таблицы "Категории"-->
					<thead> <!-- Начало "шапки" таблицы "Категории"-->
						<tr>
							<th>Категория</th>
							<th>Действие</th>
						</tr> 
                    </thead><!-- Конец "шапки" таблицы "Категории"-->
					<tbody><!-- Начало "тела" таблицы "Категории"-->
						<?php foreach ($categories as $category):?>
							<tr>
								<td><?php echo $category->category;?></td>
								<td>
									<div>
										<?=HTML::anchor('admin/admincategories/edit/'.$category->id,"<i class='icon-edit icon-white'></i>".'Редактировать', array('class'=>'btn btn-info'))?>
										<?=HTML::anchor('admin/admincategories/delete/'.$category->id,"<i class='icon-remove icon-white'></i>".'Удалить',array('class'=>'btn btn-danger')) ?>
									</div>
								</td>
							</tr>
								<?php endforeach ?>	
							<tr>
								<td>									
									<?=$pagination?>
								</td>
								<td>
									<br>
										<?=HTML::anchor('/admin/admincategories/add/',"<i class='icon-pencil icon-white'></i>".'Добавить', array('class'=>'btn btn-inverse'))?> 
									<br>	
								</td>
							</tr>
							<tr>
								<td colspan="2">
									Общее число категорий: <i><?=$count?></i>	
								</td>
							</tr>
					</tbody><!-- Конец "тела" таблицы "Категории"-->
				</table> <!-- Конец таблицы "Категории"-->
	</div>
</div>