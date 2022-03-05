<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RestSide Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style/style.css" />
</head>
<body>
  <div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
  <h1>RestSide Booking</h1>
      <!-- <img src="logo.png" class="img-fluid" width="300" alt="RestSide booking" /> -->
  </div>

  <div class="container">
      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <span id="message"></span>
            <div class="card">
              <div class="card-header">Booking Registration</div>
              <div class="card-body">
                  <form method="POST" >
                    <!-- <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="text" name="email_address" value="Email" class="form-control" data-parsley-checkemail data-parsley-checkemail-message='Email Address already Exists' />
                    </div>
                    <div class="form-group">
                      <label>Enter full name</label>
                      <input type="text" name="username" value="Name" class="form-control" />
                    </div>
                    <div class="form-group">
                      <label>Enter ID</label>
                      <input type="number" name="num" value="Number" class="form-control" />
                    </div> -->
                    <!-- <div class="form-group">
                      <label>Members</label>
                      <input type="number" name="members" id="confirm_admin_password" class="form-control" />
                    </div> -->
                    <!-- <div class="form-group">
                      <input type="hidden" name="page" value="register" />
                      <input type="hidden" name="action" value="register" /> -->
                      <!-- <input type="submit" name="submit" class="btn btn-info" value="Book" /> 
                     </div> -->
                    <!-- <form action="" method="POST">
                      email<input type="text" name="email_address" value=""/><br>
                      name<input type="text" name="username" value=""/><br>
                      id<input type="number" name="num" value=""/><br>
                    <input type="submit" name="submit" value="Book" /> -->

                    <!-- <div class="form-group">
                      <label>SR Number</label>
                      <input type="number" name="id" value="" class="form-control" />
                    </div> -->
                    <div class="form-group">
                      <label>Enter full name</label>
                      <input type="text" name="username" value="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="text" name="email_address" value="" class="form-control" data-parsley-checkemail data-parsley-checkemail-message='Email Address already Exists' />
                    </div>
                    <div class="form-group">
                      <label>Enter Mobile Number</label>
                      <input type="number" name="num" value="" class="form-control" />
                    </div>
                    <!-- <div class="form-group">
                      <label>Enter Your Address</label>
                      <input type="text" name="add" value="" class="form-control" />
                    </div>  -->
                    <div class="form-group">
                       <label>Room Type</label>
                       <select name="type" value="" class="form-control" >
                      <option value="">--Select--</option>
                      <option value="Luxury">Luxury</option>
                      <option value="Family">Family</option>
                      <option value="Deluxe">Deluxe</option>
                      
                      </select>
                     </div>
                     <div class="form-group">
                      <label>Check In Date</label>
                      <input type="date" name="indate" value="" class="form-control" />
                    </div> 
                    <!-- <div class="form-group">
                      <label>Check In Time</label>
                      <input type="time" name="intime" value="" class="form-control" />
                    </div> -->
                    <div class="form-group">
                      <label>Check Out Date</label>
                      <input type="date" name="outdate" value="" class="form-control" />
                    </div>
                    
                      <input type="submit" name="submit" class="btn btn-info" value="Book" /> 
                     </div>
                  </form>

    <?php
      if($_POST['submit']) 
      {
        $email=$_POST['email_address'];
        $name=$_POST['username'];
        $no=$_POST['num'];
        $type=$_POST['type'];
        $check_in=date('y-m-d',strtotime($_POST['indate']));
        $check_out=date('y-m-d',strtotime($_POST['outdate']));
        if($email!="" && $name!="" && $no!="" && $type!="" && $check_in!="" && $check_out!="" )
        {
          $query="INSERT INTO booking1 VALUES ('$no','$name','$email','$type', '$check_in' , '$check_out')";
          $data=mysqli_query($con,$query);
          if($data)
          {
            
              echo"Done!!";
          }
        }
        else{
         echo "all required";
        }
      }     
    ?>

              </div>
            </div>
        </div>
        <div class="col-md-3">

        </div>
      </div>
  </div>

  
</body>
</html>
