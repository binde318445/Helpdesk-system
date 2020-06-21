<?php 
include("header_admin.php");
include("../db/connect.php");
?>
<?php // include("../users/session.php");?>

 

<style type="text/css">
th{
	background-color: black;
	color: white;
}

</style>
<div class="jumbotron">
 <div class="table-responsive">
<table class="table table-bordered table-striped table-hover" style="margin-top: 100px; margin:0 auto;margin-top: 10px;">
<tr>
<thead>
  <th>Id</th>
  <th>Full name</th>
  <th>Email</th>
  <th>image</th>
  <th>Date</th>
  <th>Actions</th>
  </thead>
</tr>
<?php
  $query=mysqli_query($conn,"SELECT * FROM register");

  while($row= mysqli_fetch_array($query)){
 ?>
<tr>
  <td><?php echo htmlentities($row['id']);?></td>
  <td><?php echo htmlentities($row['name']);?></td>
  <td><?php echo htmlentities($row['email']);?></td>
  <td>
   <div class="thumnail">
   <img src="<?php echo htmlentities($row['image']);?>" height="100px" width="100px" ></div>
  </div>
  </td>
  <td><?php echo htmlentities($row['date']);?></td>
  <td>
  <a href="delete.php<?php echo '?email='.$row['email']; ?>" title="Delete your comment"><button class="btn btn-danger">Delete</button></a>

  <a href="#"><button class="btn btn-primary">View</button></a>
  </td>
</tr>
<?php };?>
</table>
</div>
</div>
<?php
include("footer.php");
?>