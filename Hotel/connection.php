<?php
$servername="localhost";
$username="root";
$password="";
$db="hotel";

$con=mysqli_connect($servername,$username,$password,$db);
if($con){
    //echo"done";
}
else{
    echo"Not done";
}
?>