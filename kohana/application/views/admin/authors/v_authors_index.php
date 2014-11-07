
<!-- Вывод общей информации о книгах-->
<div class="row"> 
		<div class="span12"> 
			<h4>Список всех авторов</h4>
				<table class="table table-striped table-bordered  "> <!-- Begin table "Book list"-->
					<thead>
						<tr>
							<th>Автор</th>
							<th>Действие</th>
						</tr> 
                    </thead>
					<tbody>
						<?php foreach ($authors as $author):?>
							<tr>
								<td><?php echo $author->author;?></td>
								<td>
									<div>
										<?=HTML::anchor('admin/adminauthors/edit/'.$author->id,"<i class='icon-edit icon-white'></i>".'Редактировать', array('class'=>'btn btn-info'))?>
										<?=HTML::anchor('admin/adminauthors/delete/'.$author->id,"<i class='icon-remove icon-white'></i>".'Удалить',array('class'=>'btn btn-danger')) ?>
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
										<?=HTML::anchor('/admin/adminauthors/add/',"<i class='icon-pencil icon-white'></i>".'Добавить', array('class'=>'btn btn-inverse'))?> 
									<br>	
								</td>
							</tr>
							<tr>
								<td colspan="2">
									Общее число авторов: <i><?=$count?></i>	
								</td>
							</tr>
					</tbody>
				</table> <!-- End table "Book list"-->	
		</div>
</div>