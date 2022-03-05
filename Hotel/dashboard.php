<!DOCTYPE html>

</html>

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

$query="select * from roombook where user_id='$id'";
$result = mysqli_query($link,$query);
$rowcount=mysqli_num_rows($result);
?>
<?php
for($i=1; $i<=$rowcount; $i++)
{
    $row=mysqli_fetch_array($result);
 
?>

<!-- <?php echo $row["name"];?>
<?php echo $row["Title"];?>
<?php echo $row["Fname"];?>
<?php echo $row["Lname"];?>
<?php echo $row["Email"];?> -->

<?php
echo "<table class='table table-striped projects'>";
echo "<thead>";
    echo "<tr>";
        echo "<th style='width: 1%'>";
           // echo "Phone Number";
        echo "</th>";
        echo "<th style='width: 20%'>";
            echo $row["Title"];
        echo "</th>";
        echo "<th style='width: 30%'>";
            echo $row["FName"];
        echo "</th>";
        echo "<th>";
            echo $row["LName"];
        echo "</th>";
        echo "<th>";
            echo $row["Email"];
        echo "</th>";
        echo "<th>";
            // echo $row["check_out"];
        echo "</th>";
        echo "<th>";
        echo "<center>";
        echo "Action";
        echo "</center>";
        echo "</th>";
    echo "<tr>";
echo "</thead>";
echo "<tbody>";

echo "<tr>";

echo "<td class='project-actions text-right'>";
echo "<center>";
echo "<a class='btn btn-primary btn-sm' href='users_crud/users_read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'>";
      echo "<i class='fas fa-folder'>";
      echo "</i>";
      echo "View";
        echo "</a>";

?>
<!-- table end -->
<?php
}
?>

