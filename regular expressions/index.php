<!DOCTYPE HTML>
<html>
<head>
   <meta charset="utf-8">
   <title>Cupid_test</title>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
   
   <script>
   

$(document).ready(function(){
   $("input:checkbox").bind("change", function () {
     if($(this).is(':checked')) {
	    $("#search_text").css('display','block');
	 } 
	 else{
	     $("#search_text").css('display','none');
	 } 
});
    
});
   
   
   </script>
</head>
<body>
    <form action = "action.php" method="post">  
				<p>
					<label>Search file:</label>
					<input type="text" name="search_file" >
				</p>
				<p>
					<input type="checkbox" name="search_check">Search text
				</p>
                <p id="search_text" style="display:none;">	
                    <label>Enter search text:</label>				
					<textarea style="height:200px; width:200px;" name="search_text" ></textarea>
			    </p>
				<p>
				   <input type="submit" value="Send"  name="Send">
				</p>
	</form>
</body>
</html>