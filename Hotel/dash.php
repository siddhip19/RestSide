<!DOCTYPE html>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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


   <!-- for-mobile-apps -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
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
<a href="logout.php">  logout </a>

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

<div class="w3_navigation">
		<div class="container pink">
			<nav class="navbar navbar-default " >
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">REST <span>SIDE</span><p class="logo_w3l_agile_caption">Your Dreamy Resort</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="home">About</a></li>
							<li class="menu__item"><a href="home">Gallery</a></li>
							<li class="menu__item"><a href="home">Rooms</a></li>
							<li class="menu__item"><a href="home">Offers</a></li>
							<!-- <li class="menu__item"><a href="welcome">dashboard</a></li> -->
							<li class="menu__item"><a href="dash">my bookings</a></li>
              <li class="menu__item"><a href="pay">Pay</a></li>

							</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>

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


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body p-0">

<?php
echo "<table class='table table-striped projects' style='  width:100%,table-layout: fixed'   >";
echo "<thead  >";
    echo "<tr >";
        echo "<th style='width: 5% ,align:left'   >";
            echo "#";
        echo "</th>";
        echo "<th   style='width: 35%, align:left ' >";
            echo "Name";
        echo "</th>";
        echo "<th   style='width: 35% '  >";
           // echo " Email ";
        echo "</th>";
        echo "<th   style='width: 15% ' >";
            echo "Room Type";
        echo "</th>";
        echo "<th   style='width: 22% '  >";
            echo "Bed Type";
        echo "</th>";
        echo "<th   style='width: 22% '   >";
            echo "Meal plan";
        echo "</th>";
        echo "<th  style='width: 22% '  >";
         
        echo "Action";
       
        echo "</th>";
    echo "<tr>";
echo "</thead>";
echo "<tbody>";
?>
<?php
echo "<table class='table table-striped projects' style=' width:100%,table-layout: fixed'>";
echo "<thead  >";
    echo "<tr  >";
        echo "<td  style='width: 5%, ' >" . $row['Title'] . "</td>";
        echo "<td  style='width: 8% ' >" . $row['FName']. $row['LName']  . "</td>";
        echo "<td  style='width: 20% ' >" . $row['Email'] . "</td>" ;
        echo "<td   style='width: 25% '  >" . $row['TRoom'] . "</td>";
        echo "<td  style='width: 25% '>" . $row['Bed'] . "</td>";
        echo "<td   style='width: 20% ' >" . $row['Meal'] . "</td>";
        echo "<td   style='width: 20% '>";
        echo "<a class='btn btn-primary '  href='finalbook.php?pid=". $row['id'] ."' title='Wait untill your booking is confirmed' data-toggle='tooltip'>";
        echo "<i class='fas fa-folder'>";
        echo "</i>";
        echo "View";
          echo "</a>";
        
          
    echo "</tr>";
echo "</thead>";
echo "<tbody>";

?>
<!-- table end -->
<?php
}
?>

</div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>



</body>
</html>