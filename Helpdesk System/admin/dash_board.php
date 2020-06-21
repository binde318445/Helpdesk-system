
<?php  
include("../users/include/head.php");

include("../db/connect.php");

//include("../users/session.php");
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
</style>
<div class="jumbotron" style="height: 600px; margin: 0 auto;border-radius:5px">
	<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead>
			 <th>ID</th>
			 <th>Name</th>
			 <th>Staff_Num</th>
			 <th>Email</th>
			 <th>Address</th>
			 <th>Level</th>
			 <th>choose</th>
			 <th>Date</th>
			 <th>Action</th>
		</thead>
		<?php 
           $query=mysqli_query($conn,"SELECT * FROM staff");

       while ($row=mysqli_fetch_array($query)){
       	 ;?>
       	 <tr>
       	 	 <td><?php echo $row['id']; ?></td>
       	 	 <td><?php echo $row['name']; ?></td>
       	 	 <td><?php echo $row['staff_num']; ?></td>
       	 	 <td><?php echo $row['email']; ?></td>
       	 	 <td><?php echo $row['address']; ?></td>
       	 	 <td><?php echo $row['level']; ?></td>
       	 	 <td><?php echo $row['choose']; ?></td>
       	 	 <td><?php echo $row['date']; ?></td>
       	 	 <td>
       	 	 <span class="glyphicon glyphicon-trash"></span><b style="color: red"><a href="#">Remove</a></b>
       	 	 <span class="glyphicon glyphicon-edit"></span><b style="color: blue"><a href="#">Edit</a></b>
       	 	 </td>
       	 </tr>
       <?php };?>
	</table>
</div>
</div>
<?php  include("../users/include/footer1.php");?>