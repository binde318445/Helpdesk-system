<!DOCTYPE html>
<html lang="en">
<head>
<title>Helpdesk Support System</title>
<meta charset="utf-8">
<meta  name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Helpdesk System/w3.css">
<link rel="stylesheet" href="/Helpdesk System/font/css/font-awesome.min.css">
<link rel="stylesheet" href="/Helpdesk System/sections/assets/css/carousel.css">
<link rel="stylesheet" href="/Helpdesk System/font/css/font-awesome.css">
<link rel="stylesheet" href="/Helpdesk System/font/css/font-awesome.min.css">
<link rel="stylesheet" href="/Helpdesk System/font/css/font-awesome.css">
<link rel="stylesheet"  href="/Helpdesk System/sections/assets/bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet"  href="/Helpdesk System/sections/assets/bootstrap/css/bootstrap-theme.css.map">
<link rel="stylesheet"  href="/Helpdesk System/sections/assets/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet"  href="/Helpdesk System/sections/assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet"  href="/Helpdesk System/sections/assets/bootstrap/css/bootstrap.css.map">
<link href="/Helpdesk System /sections/assets/css/style.css" rel="stylesheet">
<link rel="stylesheet"  href="/Helpdesk System/sections/assets/bootstrap/css/bootstrap.min.css">
  </head>
  <style type="text/css">

  .fa-dashboard{
    font-size: 20px;
    padding: 6px;
    background-color: black;
    color: white;
  } 
.fa-cogs{
   font-size: 20px;
    padding: 6px;
    background-color: blue;
    color: white;
}
.fa-tasks{
  font-size: 20px;
    padding: 6px;
    background-color:brown;
    color: white;
}
.glyphicon{
  background-color: green;
  font-size: 20px;
  padding: 6px; 
}
.glyphicon:hover{
  background-color: red;
}
.glyphicon-envelope{
     background-color: green;
  font-size: 20px;
  padding: 6px; 
}
.glyphicon-envelope:hover{
  background-color: blue;
}
li:hover{
color: black;
}
a:hover{
 color: black;
}
</style>
<bod>
  <!-- Navigation bar --> 
 <nav class="navbar navbar-inverse navbar-fixed-top"  style="background:#000066!important;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php" style="color: white;padding-left: 5px"><span class="fa fa-dashboard"></span><b>Dashboard</b></a></li>
        <li><a href="add_staff.php" style="color: white"><span class="glyphicon glyphicon-user"></span><b>Add Staff</b></a></li>

        <li><a href="manage_users.php" style="color: white"><span class="glyphicon glyphicon-user"></span><b>Manage Users</b></a></li>
        <li>
            <a href="process_complaints.php" style="color: white">
            <span class="fa fa-tasks"></span><b>Process Complaints</b></a>
          </li>
          
      </ul>
         <ul class="nav navbar-nav navbar-right">
                <li>
                <a href="change_password.php" style="color: white">
                <b><span class="glyphicon glyphicon-pencil"></span>Change Password</b></a></li>
             <li>
               <a href="#" style="color: white">
               <span class="glyphicon glyphicon-log-out"></span><b>Log out</b></a></li>
          </ul>
    </div>
  </div>
</nav>
<div>
  <hr>
</div>