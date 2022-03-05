<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RestSide Admin</title>
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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RestSide</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-plus-circle"></i>Users</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> New Updates</a>
                    </li>
                    <li>
                        <a class="active-menu" href="notice_edit.php"><i class="fa fa-desktop"></i> Edit Offers</a>
                    </li>
                    <li>
                        <a href="room_upload.php"><i class="fa fa-desktop"></i> Room Settings</a>
                    </li>
					<li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Receipt</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Edit Offers<small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-12 col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            OFFERS
                        </div>

  

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
      </div>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    </div>
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12">
            <h1>Edit Offers</h1>
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body p-0">
          <?php
          // Include config file
          $conn = mysqli_connect("localhost", "root", "", "cards");
                    
          // Attempt select query execution
          $sql = "SELECT * FROM notices";
          if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
          echo "<table class='table table-striped projects'>";
              echo "<thead>";
                  echo "<tr>";
                      echo "<th style='width: 1%'>";
                          echo "#";
                      echo "</th>";
                      echo "<th style='width: 20%'>";
                          echo "Title";
                      echo "</th>";
                      echo "<th>";
                          echo "Description";
                      echo "</th>";
                      echo "<th>";
                      echo "<center>";
                      echo "Action";
                      echo "</center>";
                      echo "</th>";
                  echo "<tr>";
              echo "</thead>";
            echo "<tbody>";

            while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['topic'] . "</td>";
                  echo "<td>" . $row['description'] . "</td>";
                  echo "<td class='project-actions text-right'>";
                  echo "<center>";
                  echo "<a class='btn btn-primary btn-sm' href='notice_crud/notice_read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'>";
                        echo "<i class='fas fa-folder'>";
                        echo "</i>";
                        echo "View";
                          echo "</a>";
                        echo "<a class='btn btn-info btn-sm' href='notice_crud/notice_update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'>";
                        echo "<i class='fas fa-pencil-alt'>";
                        echo "</i>";
                        echo "Edit";
                          echo "</a>";
                        echo "<a class='btn btn-danger btn-sm' href='notice_crud/notice_delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>";
                        echo "<i class='fas fa-trash'>";
                        echo "</i>";
                        echo "Delete";
                          echo "</a>";
                  echo "</center>";
                      echo "</td>";
                  echo "</tr>";
                  
             }

              echo "</tbody>";
          echo "</table>";
          // Free result set
              mysqli_free_result($result);
                        } else{
              echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
               // Close connection
               mysqli_close($conn);
               ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

 

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
