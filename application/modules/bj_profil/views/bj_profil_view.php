   <?php 
$userdata = $this->session->userdata('bj_login');
?>

              <!-- Start Page -->
              <div class="row">
              <div class="x_panel">
              <div class="col-md-3 col-sm-3 col-xs-12 profile-left">
                <div class="profil_img">
                  <div id="crop-avatar">
                    <div class="avatar-view" data-original-title="Ganti Avatar" title="" >
                      <img src="<?php echo base_url(); ?>assets/img/user_picture.png" alt="...">
                    </div>
                  </div>
                </div>
                <h3><?php echo $userdata['nama'] ?></h3>
                <ul class="list-unstyled user_data">
                  <li><i class="fa fa-envelope-o user-profile-icon"></i> <?php echo $userdata['email'] ?></li>
                  <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $userdata['alamat'] ?></li>
                </ul>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="profile_title">
                    <div class="col-md-6">
                      <h4>Ubah Password</h4>
                    </div>
                  </div>
                  <div class="x_panel">

          <form id="change_password" class="form-horizontal" method="post" action="<?php echo site_url('bj_profil/cek_password'); ?>" role="form">     
      
                
        
    <div class="panel panel-primary">
      <div class="panel-heading">
      <strong><h3 class="panel-title">Ubah Password</h3></strong>

    </div>
    <div class="panel-body" id="data_umum">
    <div class="form-group">
      <label class="col-sm-3 control-label">Password Lama</label>
      <div class="col-sm-9">
        <input type="password" name="pswd_lama" id="pswd_lama" class="form-control input-style" required="required">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Password Baru</label>
      <div class="col-sm-9">
      
        <input type="password" id="pswd_baru" name="pswd_baru" class="form-control input-style" required="required">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Ulang Password Baru</label>
      <div class="col-sm-9">
        <input type="password" id="repswd_baru" name="repswd_baru" class="form-control input-style" required="required">
      </div>
    </div>
    <div class="form-group pull-center">
        <div class="col-sm-offset-3 col-sm-9">
          <button id="tombolsubmit" style="border-radius: 0;" type="submit" class="btn btn-primary"  >Simpan</button>
          <button style="border-radius: 0;" id="reset" type="reset" class="btn btn-danger">Cancel</button>
        </div>

  </div>
</form>
                  
                  </div>
                </div>
                </div>
                </div>
                <!-- End Page -->
             
        
<?php 
$this->load->view("bj_profil_view_js");
?>