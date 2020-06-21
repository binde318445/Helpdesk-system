<?php 
include("header_admin.php");
include("../db/connect.php");
?>
<?php  include("../users/session.php");?>

<style type="text/css">
th{
	background-color: black;
	color: white;
}

</style>
<div class="jumbotron" style="height: 700px; margin: 0 auto; border-radius:5px">
<table class="w3-table w3-bordered w3-border w3-white" style="margin-top: 100px; width: 90%; margin:0 auto;margin-top: 100px">
<tr>
  <th>Id</th>
  <th>Reg Date</th>
  <th>Subject</th>
  <th>message</th>
  <th>Actions</th>

</tr>
<tr>
  <td>Jill</td>
  <td>Smith</td>
  <td>50</td>
   <td>50</td>
  <td>
  <a href="#"><button class="btn btn-danger">Delete</button></a>
  <a href="#"><button class="btn btn-primary">View</button></a>
  </td>
</tr>
<tr>
  <td>Eve</td>
  <td>Jackson</td>
  <td>94</td>
   <td>50</td>
  <td>
  <a href="#"><button class="btn btn-danger">Delete</button></a>
   <a href="#"><button class="btn btn-primary">View</button></a>
  </td>
</tr>
<tr>
  <td>Adam</td>
  <td>Johnson</td>
  <td>67</td>
   <td>50</td>
  <td>
  <a href="#"><button class="btn btn-danger">Delete</button></a>
  <a href="#"><button class="btn btn-primary">View</button></a>
  </td>
</tr>
<tr>
  <td>Adam</td>
  <td>Johnson</td>
  <td>67</td>
   <td>50</td>
  <td>
  <a href="#"><button class="btn btn-danger">Delete</button></a>
   <a href="#"><button class="btn btn-primary">View</button></a>
  </td>
</tr>
</table>
</div>

<?php 
include("footer.php");
?>