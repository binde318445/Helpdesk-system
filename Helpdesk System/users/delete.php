<?php 

include("../users/include/head.php");

include("../db/connect.php");
?>
<?php
if (isset($_POST['delete'])) {
	$_SESSION['id'] = $_POST['id'];


$query=mysqli_query( $conn, "DELETE FROM register WHERE id ='".$_SESSION['id']."' ");
if ($query) {
	echo "<script>window.alert('message deleted ')</script>";
}

else{
 echo "you can't delete".mysql_error();
}
}
?>