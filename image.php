<?php  
    
   
session_start();

    $q = $_SESSION['image'];

?>

<html>
  <head></head>
  
	
	<body>
	
	
	  <img src="    <?php         echo  $q;         ?> ">
	
	
	
	</body>



</html>