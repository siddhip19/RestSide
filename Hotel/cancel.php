<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
</html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RestSide</title>
	<!-- Bootstrap Styles-->
    <link href="css/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="css/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="css/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

<?php
session_start();
$link=mysqli_connect("localhost","root","","hotel") or die(mysql_error());
if($_SESSION["uname"]==true)
{
echo "welcome"." ".$_SESSION["uname"];
}
else 
{
header('location:dashboard.php');
}

?>
<a href="logout.php">logout</a>

<?php

// can create table
$uname=$_SESSION["uname"];
echo $uname;
$sql="select * from user where uname='$uname'";
$result = mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
$id=$row["id"];
}

$query="DELETE FROM roombook WHERE user_id='$id'";
$result = mysqli_query($link,$query);
$rowcount=mysqli_num_rows($result);
?>
<?php
for($i=1; $i<=$rowcount; $i++)
{
    $row=mysqli_fetch_array($result);
 
?>
<?php
}
?>