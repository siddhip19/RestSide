<?php
session_start();
$con=mysqli_connect("localhost","root","","hotel") or die(mysql_error());


if(isset($_REQUEST["submit"]))
{
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    $query=mysqli_query($con,"select * from user where uname='$uname' && pass='$pass' ");
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
        $_SESSION["uname"]=$uname;
        //setcookie('uname' $row['name'],time ()+60*60*24*30);
        header('location:home.php');
    }
    else
     {
        echo "wrong";
    }
}

?>

<!-- <!DOCTYPE html>
<head>
    <title>

    </title>
</head> 
<body>
<form method="POST" action="">
    <label>Name:</label>
    <input type="text" name="uname"/>
    <br>
    <label>Password:</label>
    <input type="text" name="pass"/>
    <input type="submit" value="Login" name="submit"/>

</form>
</body> -->

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
  </head>

  <body>

    <form class="signup-form" action="" method="post">
      <!-- form header -->
    <div class="form-header">
      <h1>Login Account</h1>
    </div>

    <!-- form body -->
    <div class="form-body">
      <!-- Firstname and Lastname -->
        
<!-- Email -->
<div class="form-group">
  <label for="email" class="label-title">Username*</label>
  <input type="text"  name="uname" class="form-input" placeholder="enter your email" required="required">
</div>

<!-- Passwrod and confirm password -->
<div class="form-group">

  <div class="form-group left">
    <label for="password" class="label-title">Password *</label>
    <input type="password" name="pass" class="form-input" placeholder="enter your password" required="required">
  </div>





    <!-- form footer -->
    <div class="form-footer">
      <!-- form footer -->
<div class="form-footer">
  <span>* required</span>
  <button type="submit" name="submit" class="btn">Login</button>
</div>
    </div>
    </form>
    <center><a href="register">GET REGISTERED!!</a></center>
  </body>

</html>