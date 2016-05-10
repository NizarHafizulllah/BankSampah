<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Biro Jasa | </title>

  <!-- Bootstrap core CSS -->
  

  <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/icheck/flat/green.css" rel="stylesheet">

  

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-dialog.min.css">

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;" class="hold-transition login-page">

  <div class="modal fade bs-example-modal-sm" id="myPleaseWait" tabindex="-1"
    role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <span class="glyphicon glyphicon-time">
                    </span>Sedang memproses. Harap Tunggu...
                 </h4>
            </div>
            <div class="modal-body">
                <div class="progress">
                    <div class="progress-bar progress-bar-info
                    progress-bar-striped active"
                    style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form role="form" action="login/ceklogin" method="post" class="login-form">
            <h1>Login</h1>
            <div>
              <input name="form-username" id="form-username" type="text" class="form-username form-control" placeholder="Username" />
            </div>
            <div>
              <input name="form-password" id="form-password" type="password" class="form-password form-control" placeholder="Password" />
              <input type="hidden" id="mask" name="mask" />
            </div>
            <div>
            <button type="submit" class="btn btn-primary">Log in</button>
              
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Kesalahan
                <a href="#toregister" class="to_register"> Lupa password? </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1></i> Biro Jasa!</h1>

                <p>Dikelola oleh TIGA PILAR MAJU MANDIRI hak cipta dilindungi undang undang. </p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      <div id="register" class="animate form">
        <section class="login_content">
          <form>
            <h1>Lupa Password</h1>
            <div>
              <input name="email" id="email" type="text" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" >Submit</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Ingat Password ?
                <a href="#tologin" class="to_register"> Log in </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1></i> Biro Jasa!</h1>

                <p>Dikelola oleh TIGA PILAR MAJU MANDIRI hak cipta dilindungi undang undang. </p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.md5.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-dialog.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
     

        <?php 
        $this->load->view("login_view_js");
        ?>    

</body>

</html>