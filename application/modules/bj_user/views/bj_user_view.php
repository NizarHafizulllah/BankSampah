   <?php 
$userdata = $this->session->userdata('bj_login');
?>
      <div class="right_col" role="main">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
              <div class="row x_title">
                <div class="col-md-6">
                  <h3>User Biro Jasa</h3>
                </div>
              </div>
              <div>
              <!-- Start Page -->
              <div class="row">
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


              
                <!-- End Page -->
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
        
<?php 
$this->load->view("bj_user_view_js");
?>