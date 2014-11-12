<?php
/*
  Edit entry to the database
*/
include_once('connect.php'); //connect to database
    
	
if (isset($_POST['submit'])) { 
    
	 $id=($_POST['id']);
		     //Validation  form to the server-side
		         if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) and !empty($_POST['first_name']) and  !empty($_POST['second_name']) and  !empty($_POST['email']))
				 				 
				 {   //if validation was successful enter the data into the database
				    
					$first_name=trim(htmlspecialchars($_POST['first_name']));  //echo  $first_name;
					$second_name=trim(htmlspecialchars($_POST['second_name'])); //echo  $second_name;
					$email=trim(htmlspecialchars($_POST['email'])); //echo $email; 
		
		   			$query_inform = "UPDATE users SET first_name='$first_name', second_name='$second_name', email='$email' WHERE id = '$id' ";
					mysqli_query($link, $query_inform) or die(mysql_error());
					Header("Location: index.php");
				 }
                    // else error output to the screen 
           			//else { Header("Location: add_form.php?error");}	
                        else {  Header("Location: edit_form.php?id=$id&error");}
					
 } 


?>
 