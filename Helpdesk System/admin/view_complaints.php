<?php 
include("header_admin.php");
include("../db/connect.php");

?>
<?php  include("../users/session.php");?>



<style>
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
  <th>Choose</th>
  <th>Message</th>
  <th>Address</th>
  <th>Image</th>
  <th>Date</th>
  <th>Action</th>
  </thead>
</tr>
<?php
$query=mysqli_query($conn,"SELECT * FROM messages");

while($row=mysqli_fetch_array($query)){
 ?>
<tr>
  <td><?php echo htmlentities($row['id']);?></td>
  <td><?php echo htmlentities($row['choose']);?></td>
  <td><?php echo htmlentities($row['message']);?></td>
  <td><?php echo htmlentities($row['address']);?></td>
  <td>
   <div class="thumnail">
   <img src="<?php echo htmlentities($row['image']);?>" height="100px" width="100px" ></div>
  </div>
  </td>
  <td><?php echo htmlentities($row['date']);?></td>
  <td>
  <a onclick="return confirm('Are you sure you want to delete this data!!!')" href="delete.php ?id=<?php echo $row["id"];?>"><input type="submit" name="delete" value="Delete" class="btn btn-danger">
  </a>
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