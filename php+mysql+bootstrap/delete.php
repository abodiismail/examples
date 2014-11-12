<?php
/*
  Delete entry from the database
*/
include_once('connect.php'); //connect to database
    
	//GET-parameter exists?
if (isset($_GET['id'])) { 
    
	// GET-parameter exist 
	
	// GET-parameter is Numeric?
	if (is_numeric($_GET['id'])) {  
	
	    //GET-parameter is  numeric. Delete entry from the database
	    $query_inform = "DELETE  FROM `users` WHERE `id`='".$_GET['id']."'";
        $inform= mysqli_query($link, $query_inform) or die(mysql_error());
		Header("Location: index.php");
		
	 } else  
	     //GET-parameter is not numeric. Go to index page
	     echo "<h3 style='color:red;'>Go away,haker!</h3>";
	
 } else 
     // GET-parameter is not exist. Go to index page   
     {Header("Location: index.php");}



?>
 