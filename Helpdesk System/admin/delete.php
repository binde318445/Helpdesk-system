<?php

include("../db/connect.php");
?>
<?php

$get_id =$_SESSION['email'];
	
	// sending query
	mysql_query("DELETE FROM register WHERE email ='".$_SESSION['email']."'")
	or die(mysql_error());  	

		echo"<script>alert('User deleted successfully');
		 window.location='dash_board.php';
	</script>";

?>
