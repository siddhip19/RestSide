<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$conn = mysqli_connect("localhost", "root", "", "cards");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>