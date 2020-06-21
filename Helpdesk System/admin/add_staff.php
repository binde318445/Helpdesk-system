<?php 
include("header_admin.php");
include("../db/connect.php");
?>
<?php  include("../users/session.php");?>

 <?php
   if (isset($_POST['submit'])) {

      $name=$_POST['name'];

      $staff=$_POST['staff_num'];

      $address=$_POST['address'];

      $email=$_POST['email'];

      $level=$_POST['level'];

      $chose=$_POST['choose'];
      if (isset($_POST['email'])) {

        $select=mysqli_query($conn,"SELECT * FROM staff WHERE email ='$email'");

        $count = mysqli_num_rows($select);

        if($count>0){
          echo"<script>window.alert('the email"."$email"."already exist')</script>";
      }else{

      $query="INSERT INTO staff (name,staff_num,address,email,level,choose) VALUES('$name','$staff','$address','$email','$level','$chose')";
       if(mysqli_query($conn,$query)==TRUE){
      echo"<script>window.alert('New staff added successfully')</script>";
    }
    }
  }
   }
  ?>
    

<style type="text/css">
	.general{
		padding: 10px;
	}
   .fa-envelope{
   	font-size: 30px;
   	margin-left: 280px;
   	padding-right: 10px;
   	margin-bottom: 40px;
   	color: green;
   }
   b{
   	text-align: center;
   }
   .one{
   	font-size: 16px;
   }
   .btn-primary{
   	margin-left: 50px;
   }
   .btn-danger{
   	margin-left: 150px;
   }
   .fa-user{
    margin-left: 150px;
   	font-size: 30px;
   	padding-right: 5px;
   }

</style>

<div class="jumbotron">
<span class="fa fa-user"></span><b class="one">Add New Staff</b>
 <div  class="container" style="background-color: white; margin-bottom:130px;height: 500px; border-radius: 5px; width: 500px">
    <form style="width: 300px; margin: 0 auto; margin-top: 20px" Method="POST" action="../admin/add_staff.php" autocomplete="on">	
     <div class="form-group">
     	<label><b>Staff Name</b></label>
     	<input type="text" name="name" class="form-control" required placeholder="Enter full name">
     </div>
     <div class="form-group">
     	<label><b>Staff Number</b></label>
     	<input type="text" name="staff_num" class="form-control" required placeholder="Enter full name">
     </div>
     <div class="form-group">
      <label>Address</label>
      <input type="text" name="address" class="form-control" required placeholder="Enter contact address">
     </div>
     <div class="form-group">
     	<label>Email Address</label>
     	<input type="email" name="email" class="form-control" required placeholder="Enter email address">
     </div>
     <div class="form-group">
     	<label><b>Staff qualification</b></label>
     	<input type="text" name="level" class="form-control" required placeholder="Staff qualification">
     </div>
         <div class="form-group">
     	<label><b>Department</b></label>
     	<select class="w3-select" name="choose">
  <option value="" disabled selected>Choose your option</option>
  <option value="CIS">CIS</option>
  <option value="ID CARD">Id Card Unit</option>
  <option value="NIS">NIS</option>
  <option value="Maintenance">Maintenance</option>
  <option value="general">General issues</option>
</select>
     </div>
      <input type="submit" name="submit" class="btn btn-primary" value="Add">
     </form>
</div>
</div>
<?php 
include("footer.php");
?>