<?php
session_start();
error_reporting(0);


if (empty($_SESSION['namaadmin']) AND empty($_SESSION['leveladmin'])){
	
	echo "<link href='css/screen.css' rel='stylesheet' type='text/css'><link href='css/reset.css' rel='stylesheet' type='text/css'>
	<center>Anda harus login dulu <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
  
}else{
	
	include "../system/koneksi.php";
	include "../system/z_setting.php";
	include "../system/fungsi_indotgl2.php";
	include "../system/fungsi_rupiah.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $namaweb; ?> | <?php echo $_SESSION['halaman']; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
    <link rel="shortcut icon" href="../images/favicon.ico">
	
    <link href="../system/css/font-awesome.min.css" rel="stylesheet">
    <link href="../system/css/font-awesome.css" rel="stylesheet">
	
                
	
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="media.php?module=home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><?php echo $namaweb; ?></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg" title="Admin <?php echo $namaweb; ?>"><b>Admin</b> <?php echo $namaweb; ?></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
		  
		  
		  
		  
		  <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
			  
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
				
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="avatar1.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php $_SESSION['namalengkapadmin']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="avatar1.png" class="img-circle" alt="User Image">
                    <p style="text-transform: capitalize;">
                      <?php echo $_SESSION['namalengkapadmin']; ?> - <?php echo $_SESSION['leveladmin']; ?>
                      <!-- <small>Member since Nov. 2012</small> -->
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="media.php?module=admin&act=edit&id=1" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
		  
		  
		  
		  
		</nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel
          <center><div class="user-panel">
            <div class="image">
				<img src="../images/<?php echo $deskrip[22]; ?>">
            </div>
          </div></center>
		   -->
			
          <!-- sidebar menu: : style can be found in sidebar.less -->
		<?php include "menu.php"; ?>
		  
		  
		  
        </section>
        <!-- /.sidebar -->
      </aside>

	  
	  
	  
	  
	  
	  
	  
	  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

		<?php include "content.php"; ?>
		
		
	  </div><!-- /.content-wrapper -->
      <footer class="main-footer no-print">
        <div class="pull-right hidden-xs">
          <b>Version</b> 17.12.1
        </div>
        <strong>Copyright &copy; 2018-2019 </strong> All rights reserved.
      </footer>
	 <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

	
	
    
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../system/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
	
	
    <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script> -->
    <!-- bootstrap color picker -->
    <script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
	
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
	
	
	
    <script src="ckeditor/ckeditor.js"></script>
    <!--
    <script src="editor/ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'editor1' );
	</script>
	-->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
        $('#example3').DataTable({
          "paging": false,
          "lengthChange": false,
          "searching": false,
          "ordering": false,
          "info": false,
          "autoWidth": false
        });
      });
    </script>
    <script>
      $(function () {
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY/MM/DD hh:mm A'});
        
      });
    </script>
	
  </body>
</html>
<?php
}
?>
