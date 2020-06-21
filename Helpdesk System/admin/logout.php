	<?php 
	
	session_start();
	if(session_destroy()){
      echo "onclick"= return confirm('are you sure you want to logout!!!');
       
      header('location:../users/index.php');   
}
?>