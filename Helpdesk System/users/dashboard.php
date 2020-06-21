
<?php  
include("../users/include/head.php");

include("../db/connect.php");

include("../users/session.php");
?>

<style type="text/css">
th{
	background-color: black;
	color: white;
}
.glyphicon-edit{
	color: white;
}
.glyphicon-edit:hover{
	color: green;
	background-color: blue;
	cursor: pointer;
}
.glyphicon-trash{
	color: white;
	background-color: red;
}
.glyphicon-trash:hover{
cursor: pointer;
}
<style type="text/css">
th{
	background-color: black;
	color: white;
}

</style>

<div class="jumbotron" style="height: 400px">
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
  $query=mysqli_query($conn,"SELECT * FROM register WHERE email='".$_SESSION['email']."'");

  while($row=mysqli_fetch_array($query)){
 ?>
<tr>
  <td><?php echo htmlentities($row['id']);?></td>
  <td><?php echo htmlentities($row['name']);?></td>
  <td><?php echo htmlentities($row['email']);?></td>
  <td>
   <div class="thumnail">
   <img src="<?php echo htmlentities($row['image']);?>" height="100px" width="100px" class="img-circle" ></div>
  </div>
  </td>
  <td><?php echo" ".date('d-m-Y h:i:s A')."";?></td>
  <td>
  <a onclick="return confirm('Are you sure you want to delete this data!!!')" href="delete.php ?id=<?php echo $row["id"];?>"><input type="submit" name="delete" value="Delete" class="btn btn-danger">
  </a>
  <a href="#"><button class="btn btn-primary">Edit</button></a>
  </td>
</tr>
<?php };?>
</table>

</div>
</div>
<?php  include("../users/include/footer1.php");?>