<?php 

include('../users/include/head1.php');

?>
 <style>
  input[type='text']{
    text-align: center;
  }
  input[type='password']{
    text-align: center;
  }
  input{
    margin: 0 auto;
  }
  label{
    margin-left: 100px;
  }
 </style>
<!-- Modal -->
 <div class="jumbotron">
    <!-- Modal content-->
    <div class="content" style="width: 350px; margin: 0 auto;border: 1px solid #000066;height:380px; margin-top: -15px; margin-bottom: 20px;border-radius: 5px">
      <div class="modal-header" style="background-color:#000066">
        <h4 class="modal-title" style="color: white; text-align: center;font-size: 30px; text-shadow: 5px 7px 9px black"><b><span class="glyphicon glyphicon-user"></span>Admin Login Page</b></h4>
      </div>
    <form class="w3-container" method="post" action="">
    <label style="margin-top: 20px">Email Address</label>
    <input type="text" name="" placeholder="Example@email.com" required class="w3-input w3-animate-input" style="width:80%">
    <br>
    
    <label>Password</label>
    <input type="Password" name="" placeholder="Enter password" required class="w3-input w3-animate-input" style="width:80%"><br>
   <b style="margin-left: 50px; padding: 5px;">Don't have account?</b><g style="margin-right: 15px;"><a href="../users/register.php" style="text-decoration: none">Register</a></g>
    <button class="btn btn-success btn-block" style=" margin-top: 20px;"><span class="glyphicon glyphicon-log-in"><b style="padding-left: 5px">Login</b></span></button>
    <div class="modal-footer">
     <a href="../users/change_password.php" style="text-decoration: none">Forgot password?</a>
     </div>
      </div>
     </form>
      </div>
      </div>
<?php
 include('../users/include/footer1.php');
    ?>
