 
 <?php include("head.php"); ?>
<!-- end of it -->
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

</style>

<div class="jumbotron" style="height: 700px; margin: 0 auto; border-radius:5px">
<span class="fa fa-envelope"></span><b class="one">Message Complaints</b>
 <div  class="container" style="background-color: white; margin-bottom:130px;height: 500px; border-radius: 5px; width: 700px">
     <form role="form" style="width: 600px; margin: 0 auto; margin-top: 20px" method="post" enctype="multipart/data">
     	
     <div class="form-group">
     	<label><b>Subject</b></label>
     	<input type="text" name="name" class="form-control" required placeholder="Enter full name">
     </div>

      <div class="form-group">
     	<label><b>Category</b></label>
     	<select class="w3-select" name="option">
  <option value="" disabled selected>Choose your option</option>
  <option value="1">General issue</option>
  <option value="2">Maintenance</option>
  <option value="3">urgent attention</option>
   <option value="3">Critical attention</option>
</select>
     </div>
     <div class="form-group">
     	<label><b>Message</b></label>
     	<input type="text" name="name" class="form-control" required placeholder="Enter full name" style="height: 100px">
     </div>
     
     <div class="form-group">
     	<label>Home Address</label>
     	<input type="" name="name" class="form-control" required placeholder="Enter full name">
     </div>
     <div class="form-group">
     	<label><b>Choose File if Any</b></label>
     	<input type="file" name="name" class="form-control" required placeholder="Enter full name">
     </div>
      
      <input type="submit" name="submit" class="btn btn-primary" value="submit">
     </form>
</div>
</div>
<?php include("footer1.php"); ?>