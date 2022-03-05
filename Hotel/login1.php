
 <?php

$conn = mysqli_connect("localhost", "root", "", "reg");


if(isset($_POST['email'])&&isset($_POST['password'])){
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);

$sql = "SELECT * FROM users WHERE email='$email' && password='$password'";

$result = mysqli_query($conn,$sql);

$array = mysqli_fetch_assoc($result);

 if ($array) 
 {
    // echo "success";

    $_SESSION['logged_in']='1';
    include('welcome.php');
 }
     
else 
{
    echo "fail";
    //header("Location:tp.php");
} 
}

?>