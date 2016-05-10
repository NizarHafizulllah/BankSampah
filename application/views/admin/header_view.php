<?php 
$userdata = $this->session->userdata('admin_login');
?>

<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title><?php echo $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
	  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
	  <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Theme style -->
	  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
	  
	  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css'); ?>">
        
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
	  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-dialog.min.css">


    
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <!-- mask -->
    <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/plugins/fastclick/fastclick.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap-dialog.min.js"></script>



	</head>
	<body class="hold-transition skin-blue sidebar-mini">
	  <!-- Site wrapper -->
	  <div class="wrapper"> 

		<header class="main-header">
        <!-- Logo -->
		  <a href="<?php echo site_url('user'); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>B</b>J</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Administrator</b></span>
		  </a>
        <!-- Header Navbar: style can be found in header.less -->
		  <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</a>
			<div class="navbar-custom-menu">
			  <ul class="nav navbar-nav">
				  <!-- User Acount -->
				  <li class="dropdown user user-menu">
				  	<a href="#" class="dropdown-toggle" data-toggle = "dropdown"><i class="glyphicon glyphicon-user"></i><span class="hidden-xs"><?php echo $userdata['nama'] ?></span></a>
				  	<ul class="dropdown-menu">
					  <li class="user-header">
							<p><?php echo $userdata['nama'] ?>
						  	<small><?php echo $userdata['email'] ?></small>
								</p>
								<p><h2 style="color: white;">Admin</h2></p>
						</li>	
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo site_url('admin_profil'); ?>" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url('login/logout_admin'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
					  </ul>
				  </li>
				  
						
				  <!-- Control Sidebar Toggle Button -->
				  <li>
					<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
				  </li>
			  </ul>
			</div>
		  </nav>
		</header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->


      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->

      
