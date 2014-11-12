		
<?php include_once('header.php');   // include header ?>

		<section>
					<div class="container" style='margin-top:20px;'> 
						<div class="row"> 
							<div class="span12"> 
							
					<form  id="add_form" class="form-horizontal" method="POST" action="add.php"> <!-- Add books form. Begin-->
						<h4>Add new entry</h4>
							<?php if (isset($_GET['error'])) {?><div class="alert alert-error" id="error"> All fields must be filled and field 'E-mail' must contain email!!! </div><?php } ?> <!--Error field-->
                            
						<!-- First name-->
                            <div class="control-group ">
                                <label class="control-label" for="first_name">First name</label>
								<div class="controls">
									<input id="first_name" name="first_name" type="text" placeholder="Enter first name" class="span6 validate[required]">
								</div>
							</div>
						
						<!-- Second name-->
                            <div class="control-group ">
                                <label class="control-label" for="second_name">Second name</label>
								<div class="controls">
									<input id="second_name" name="second_name" type="text" placeholder="Enter second name" class="span6 validate[required]">
								</div>
							</div>	
                        
						<!-- E-mail-->
                            <div class="control-group ">
                                <label class="control-label" for="email">E-mail</label>
								<div class="controls">
									<input id="email" name="email" type="text" placeholder="Enter e-mail" class="span6 validate[required,custom[email]]">
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