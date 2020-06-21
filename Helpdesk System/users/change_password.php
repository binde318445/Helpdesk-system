<?php 
session_start();
 include('../users/include/head1.php');


include("../db/connect.php");
?>

<?php
if(isset($_POST['submit'])){
    
    $_SESSION['id'] ='id';

    $email = htmlentities($_SESSION['email']);

    
    $password =md5(htmlentities($_POST['password']));

    date_default_timezone_set('Africa/Lagos');

    $currentTime = date( 'd-m-Y h:i:s A', time () );

//checcking if information alreday exist in the database before updating password
$query = mysqli_query($conn, "SELECT name, email FROM register WHERE email='".$_SESSION['email']."'");
//assigning the row data from the database a variable $row, using the function mysqli_fetch_array to hold the array of the data
$row = mysqli_fetch_array($query);

if ($row>0) {
	 $query= mysqli_query($conn, " UPDATE register SET password= '$password' WHERE email ='".$_SESSION['email']."'");
	 }if ($query) {
	   	echo"<script>window.alert('password updated successfully')</script>";
	   }
	   else{
	echo"<script>window.alert('password update failed')</script>";

}
}

 ?>

<style type="text/css">
	.glyphicon-pencil{
		color: green;
		cursor: pointer;
		font-size: 20px;
	}
.glyphicon-pencil:hover{
	background-color: blue;
}
</style>
<div class="w3-container">
<div class="jumbotron" style="height: 400px; width:80%; margin: 0 auto;margin-top: 50px; border-radius:5px">
<h4 style="text-align: center;"><b><span class="glyphicon glyphicon-pencil"></span>Change Password</b></h4>
<form class="w3-container" Method="POST" action="change_password.php">
<label class="w3-label w3-validate"><b>Email</b></label>
<input class="w3-input" type="text" required placeholder="Enter current password" name="email"><br>
 
<label class="w3-label w3-validate"><b>Confirm Password</b></label>
<input class="w3-input" type="password" required placeholder="Enter email" autocomplete="on" name="password"><br>

<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-top: 5px;">
</form>
</div>
<?php  include("../users/include/footer1.php"); ?>