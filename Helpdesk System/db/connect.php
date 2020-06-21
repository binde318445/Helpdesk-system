<?php 
$db="support";
$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password,$db);
if ($conn) {
  //echo "you have successfully connected ";	# code...
}else{
	echo "connection fail".mysql_error();
}
?>