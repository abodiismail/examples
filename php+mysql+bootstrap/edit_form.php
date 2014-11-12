<?php include_once('header.php');   // include header
      include_once('connect.php'); 		
	
	//GET-parameter exists?
if (isset($_GET['id'])) { 
    
	// GET-parameter exist 
	
	// GET-parameter is Numeric?
	if (is_numeric($_GET['id'])) {  
	
	    //GET-parameter is  numeric. Delete entry from the database
		
	    $query_inform = "SELECT * FROM `users` WHERE `id`='".$_GET['id']."'";
        $inform= mysqli_query($link, $query_inform) or die(mysql_error());
        $row_inform = mysqli_fetch_assoc($inform);	
		
	 } else  
	     //GET-parameter is not numeric. Go to index page
	     echo "<h3 style='color:red;'>Go away,haker!</h3>";
	
 } else 
     // GET-parameter is not exist. Go to index page   
     {Header("Location: index.php");}		
		
 ?>		
		
		<section>
					<div class="container" style='margin-top:20px;'> 
						<div class="row"> 
							<div class="span12"> 
							
					<form id="edit_form" class="form-horizontal" method="POST" action="edit.php"> <!-- Add books form. Begin-->
						<h4>Edit entry</h4>
							<?php if (isset($_GET['error'])) {?><div class="alert alert-error" id="error"> All fields must be filled and field 'E-mail' must contain email!!! </div><?php } ?> <!--Error field-->
						
						<!-- ID-->
						 <input id="id" name="id" type="hidden"  value="<?php echo $row_inform['id'];?>">
												
						<!-- First name-->
                            <div class="control-group ">
                                <label class="control-label" for="first_name">First name</label>
								<div class="controls">
									<input id="first_name" name="first_name" type="text" placeholder="Enter first name"  class="span6 validate[required]" value="<?php echo $row_inform['first_name'];?>">
								</div>
							</div>
						
						<!-- Second name-->
                            <div class="control-group ">
                                <label class="control-label" for="second_name">Second name</label>
								<div class="controls">
									<input id="second_name" name="second_name" type="text" placeholder="Enter second name" class="span6 validate[required]" value="<?php echo $row_inform['second_name'];?>">
								</div>
							</div>	
                        
						<!-- E-mail-->
                            <div class="control-group ">
                                <label class="control-label" for="email">E-mail</label>
								<div class="controls">
									<input id="email" name="email" type="text" placeholder="Enter e-mail" class="span6 validate[required,custom[email]]" value="<?php echo $row_inform['email'];?>" >
								</div>
							</div>			
                        
												
							<div class="control-group">
								<label class="control-label" for="button1id">What must we do?</label>
									<div class="controls">
										<button type="submit"  name="submit" class="btn" >Save entry</button>
										<button type="reset"  name="reset" class="btn ">Reset</button>
										<a href="index.php" class="btn">Back to list</a>
									</div>
							</div>
					</form><!-- Add books form. End-->	
							
							
							</div> 
						</div> 
					</div>
			</section>			
	</div> <!-- End wrap-->
	
<?php include_once('footer.php');	?>	