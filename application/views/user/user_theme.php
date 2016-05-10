<?php 
$userdata = $this->session->userdata('user_login');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $title; ?> </title>

  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="<?php echo base_url(); ?>assets/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/floatexamples.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-dialog.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-dialog.min.css">
   


  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/nprogress.js"></script>



  
  
 

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
   

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-home"></i> <span>Biro Jasa</span></a>
          </div>
          <div class="clearfix"></div>

          <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo base_url(); ?>assets/img/user_picture.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Wellcome</span>
              <h2><?php echo $userdata['nama'] ?></h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo site_url('/'); ?>user"><i class="fa fa-dashboard"></i> Home </a>
                </li>

                <li><a><i class="fa fa-folder-open-o"></i> Pengurusan BBN <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('us_bbn_satu'); ?>">BBN 1</a>
                    </li>
                    <li><a href="<?php echo site_url('us_bbn_dua'); ?>">BBN 2</a>
                    </li>
                  </ul>
                </li>
                </li>
                <li><a href="<?php echo site_url('/'); ?>us_add_user"><i class="fa fa-users"></i> User </span></a>
                </li>
              </ul>
            </div>
            <div class="menu_section">
            </div>

          </div>

          <div class="sidebar-footer hidden-small">
            <a href="<?php echo site_url(); ?>/login/logout_bj" data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url(); ?>assets/img/user_picture.png" alt="..."><?php echo $userdata['nama'] ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="<?php echo site_url(); ?>/bj_profil">Profile</a>
                  </li>
                  <li><a href="<?php echo site_url(); ?>/login/logout_bj"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="right_col" role="main">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
              <div class="row x_title">
                <div class="col-md-6">
                  <h3><?php echo $subtitle; ?></h3>
                </div>
              </div>
              <div>
      <?php echo $content ?>
      </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <footer>
          <div class="copyright-info">
            <p class="pull-right"><a href="https://www.tigapilarmajumandiri.com">Tiga Pilar Maju Mandiri</a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flot/date.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.resize.js"></script>

       <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="<?php echo base_url(); ?>assets/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url(); ?>assets/js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="<?php echo base_url(); ?>assets/js/chartjs/chart.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>

   <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap-dialog.min.js"></script>

   <script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/plugins/fastclick/fastclick.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>

      <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
  <!-- form wizard -->



  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>

