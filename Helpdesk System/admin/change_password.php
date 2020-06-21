
<?php 
include("header_admin.php");

include("../db/connect.php");
?>
<?php  include("../users/session.php");?>

<style type="text/css">
	.glyphicon-pencil{
		color: white;
		cursor: pointer;
	}
.glyphicon-pencil:hover{
	background-color: blue;
}
</style>
<div class="w3-container">
<div class="jumbotron" style="height: 400px; width:80%; margin: 0 auto;margin-top: 50px; border-radius:5px">
<h4 style="text-align: center;"><b><span class="glyphicon glyphicon-pencil"></span>Change Password</b></h4>
<form class="w3-container" method="post" action="" enctype="multipart/data">
<label class="w3-label w3-validate"><b>Current Password</b></label>
<input class="w3-input" type="password" required placeholder="Enter current password" name="current"><br>
<label class="w3-label w3-validate"><b>New Password</b></label>
<input class="w3-input" type="password" required placeholder="Enter new password" autocomplete="on" name="new"><br>

<label class="w3-label w3-validate"><b>Confirm Password</b></label>
<input class="w3-input" type="password" required placeholder="Confirm password" autocomplete="on" name="new"><br>
<input type="submit" name="update" value="update" class="btn btn-primary" style="margin-top: 5px;">
</form>
</div>
<?php 
include("footer.php");
?>