<!DOCTYPE html>
<html>

<head>
	<title>Ubah Password</title>
	
       

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css">

      
</head>
<body>

<!-- Modal ends Here -->





        <!-- Top content -->
      <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>SISFO BBN</strong> Ubah Password </h1>
                            <div class="description">
                            	<p>Sistem Informasi Biaya Balik Nama Kendaraan</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Pemulihan Akun</h3>
	                            		<p>Masukkan Password Baru :</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                           <div class="form-bottom">
								   
				                    <form role="form" action="<?php echo site_url('ubah_password/update_password'); ?>" method="post" class="login-form" id="form">
										
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="pswd" placeholder="Masukkan Password Baru..." class="form-control input-style" id="form-password">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-ulangi-password">Ulangi Password</label>
				                        	<input type="password" name="repswd" placeholder="Ulangi Password..." class="form-password form-control" id="form-ulangi-password">
				                        
                                        	<input type="hidden" id="mask" name="mask" />
											
											<input type="hidden" value="<?php echo $id_user; ?>" name="id">
											<input type="hidden" value="<?php echo $hash; ?>" name="hash">
                                        
                                        </div>
                                        
				                        <button type="submit" class="btn">Ubah Password</button>
                                        
				                    </form>
			                    </div>
		                    </div>
		                
		                	<!-- <div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div> -->
	                        
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Dikelola oleh <a href="http://tigapilarmandiri.com" target="_blank"><strong>TIGA PILAR MAJU MANDIRI</strong></a> 
        					hak cipta dilindungi undang undang. </p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.md5.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
        
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script>
        <?php 
        $this->load->view("ubah_password_js");
        ?>        
        <!--[if lt IE 10]>
            <script src="<?php echo base_url(); ?>assets/js/placeholder.js"></script>
        <![endif]-->
    
                
			         
</body>
</html>
