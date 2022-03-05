<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Register Form Start</title>
    <link rel="stylesheet" href="css/login.css">
  </head>

  <body>

    <form class="signup-form" action="" method="post">
      <!-- form header -->
    <div class="form-header">
      <h1>Create Account</h1>
    </div>

    <!-- form body -->
    <div class="form-body">
      <!-- Firstname and Lastname -->
        <div class="form-group ">
            <label for="name" class="label-title">Full Name *</label>
            <input type="text" name="uname" class="form-input" placeholder="enter your first name" required="required" />
        </div>
 
<!-- Email -->
<div class="form-group">
  <label for="email" class="label-title">Email*</label>
  <input type="email" name="email" class="form-input" placeholder="enter your email" required="required">
</div>

<!-- Passwrod and confirm password -->
<div class="horizontal-group">

  <div class="form-group left">
    <label for="password" class="label-title">Password *</label>
    <input type="password" name="pass" class="form-input" placeholder="enter your password" required="required">
  </div>

  <div class="form-group right">
    <label for="confirm-password" class="label-title">Confirm Password *</label>
    <input type="password" class="form-input" name="confirm_pass" placeholder="enter your password again" required="required">
  </div>


<!-- Gender and Hobbies
<div class="horizontal-group">

    <div class="form-group left">
        <label class="label-title">Gender:</label>
        <div class="input-group">
            <label for="male">
                <input type="radio" name="gender" value="male" id="male"> Male</label>
            <label for="female">
                <input type="radio" name="gender" value="female" id="female"> Female</label>
        </div>
    </div>
</div> -->

<!-- Bio -->
<div class="form-group">
  <label for="phone" class="label-title">Phone Number*</label>
  <input type="number" name="phone" class="form-input" placeholder="enter your number" required="required">
</div>
    </div>
    
    <!-- form footer -->
    <div class="form-footer">
      <!-- form footer -->
<div class="form-footer">
  <span>* required</span>
  <input type="submit" name="submit_reg" class="btn"/>
  <a href="login">Login Now</a>
</div>
    </div>
    
    </form>

  </body>
</html>

<?php
include "db.php";

if(isset($_POST['uname'])&& isset($_POST['email'])&&isset($_POST['pass'])&&isset($_POST['confirm_pass'])&&isset($_POST['phone'])){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pass=$_POST['pass'];
    $confirm_pass=$_POST['confirm_pass'];
    
  

$conn =new mysqli('localhost','root','','hotel');
// if($conn->connect_error){
//  die('connection Failed:'.$conn->connect_error);
//}
    
    if($pass===$confirm_pass){

   
  $stmt=$conn->prepare("INSERT INTO user(uname,email,phone,pass,confirm_pass)VALUES(?,?,?,?,?)");
  $stmt->bind_param("ssiss",$uname,$email,$phone,$pass,$confirm_pass);
  $stmt->execute();
  $stmt->close();
  $conn->close();

          echo "User registered successfully";

          }else{
          echo "Not registered";
          }

}  

?>