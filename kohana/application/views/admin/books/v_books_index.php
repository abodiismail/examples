
<!-- Вывод общей информации о книгах-->
	<div class="row"> 
		<div class="span12"> 
			<h4>Список книг библиотеки</h4>
				<table class="table table-striped table-bordered "> <!-- Begin table "Book list"-->
					<thead>
						<tr>
						    <th>Название</th>
							<th>Категория</th>
							<th>Автор</th>
							<th>Действие</th>
						</tr> 
                    </thead>
					<tbody>
						<?php foreach ($books as $book):?>	
						<?php foreach($book->categories->find_all() as $category):?>
						 <?php foreach($book->authors->find_all() as $author):?>       
							<tr>
										
								<td><?php echo $book->title;?></td>
								
								<td>
								
									<?php echo $category->category;?>
								</td>	
							
								<td>
									<?php echo $author->author;?>
								</td>
								<td>
									<div>
										<?=HTML::anchor('admin/adminbooks/edit/'.$book->id,"<i class='icon-edit icon-white'></i>".'Редактировать', array('class'=>'btn btn-info'))?>
										<?=HTML::anchor('admin/adminbooks/delete/'.$book->id,"<i class='icon-remove icon-white'></i>".'Удалить',array('class'=>'btn btn-danger')) ?>
									</div>
								</td>
										
									
							</tr>
							        <?php endforeach ?>	
									<?php endforeach ?>
									<?php endforeach ?>						
							<tr>	
								<td>
									</br>
									Общее число </br> книг: <i><?=$count?></i>
								</td>
								<td colspan='2'>	
									<?=$pagination?>
								</td>	
								<td>
									<br>
										<?=HTML::anchor('/admin/adminbooks/add/',"<i class='icon-pencil icon-white'></i>".'Добавить', array('class'=>'btn btn-inverse'))?> 
									<br>	
								</td>			
							</tr>
					</tbody>
				</table> <!-- End table "Book list"-->	
				
		</div>
</div>