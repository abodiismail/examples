<?php
/*
  List of all users here
*/

  include_once('connect.php');  //connect to database
  include_once('header.php');   // include header
  
 
  // Select from table USERS all information about users
  $query_inform = "SELECT * FROM `users` ";
  $inform= mysqli_query($link, $query_inform) or die(mysql_error());
  $row_inform = mysqli_fetch_assoc($inform);
  $total = mysqli_num_rows($inform); 
  ?>
  
  <!-- Display information about users-->
 <section>
					<div class="container" style='margin-top:20px;'> 
						<div class="row"> 
							<div class="span12"> 
							<h2>Users list</h2>
								<table class="table table-striped table-bordered "> 
									<thead>
									    <tr>
											<th>N</th>
											<th>First name</th>
											<th>Second name</th>
											<th>e-mail</th>
											<th>Action</th>
										</tr> 
                          			</thead>
									<tbody>
									 
								
									 
						<?php 
						  if ($total>0){
						            $i=1;
								    do {
						?>
									    <tr>
										
											<td><?php echo $i;?></td>
											<td><?php echo $row_inform['first_name'];?></td>
											<td><?php echo $row_inform['second_name'];?></td>
											<td><?php echo $row_inform['email'];?></td>   
											<td>
											    <div>
													<a href="edit_form.php?id=<?php echo $row_inform['id'];?>"   class="btn btn-info"  ><i class="icon-edit icon-white"></i> Edit</a>
  													<a href="delete.php?id=<?php echo $row_inform['id'];?>" class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</a>
												</div>
											</td>
							 			</tr> 
										
						<?php          $i++;
 						               } while ($row_inform = mysqli_fetch_assoc($inform)); 
 						        } else echo "<div class='alert alert-error' id='error'>No information about users in database! <div>";
								
								/* Освобождаем используемую память */ 
                                 mysqli_free_result($inform); 
								 
								/* Закрываем соединение */ 
                                mysqli_close($link); 
						?>							
										<tr>
											<td colspan="4">
											</td>
											<td><br> <a href="add_form.php" class=" btn btn-inverse"><i class="icon-pencil icon-white"></i> Add entry</a></td>  
										</tr>
									</tbody>
								</table> 
							</div> 
						</div> 
					</div>
			</section>			
	</div> <!-- End wrap-->
	
	
 <?php include_once('footer.php');	?>
 