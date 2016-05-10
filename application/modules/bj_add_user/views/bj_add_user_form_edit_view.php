    <?php
    $userdata = $this->session->userdata('bj_login');
    ?> 

     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     
        <!-- Main content -->
        <form id="form_edit" class="form-horizontal" method="post" action="<?php echo site_url("$this->controller/$action"); ?>" role="form"> 


              <div class="panel panel-primary">
      <div class="panel-heading">
      <strong><h3 class="panel-title">Edit</h3></strong>
    </div>
   <div class="x_content">
                  <br />
                  
                  <form id="form_edit" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url("$this->controller/$action"); ?>" method="post">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"></input>
                        <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nama" value="<?php echo $nama; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Email" value="<?php echo $email; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="pswd" name="pswd" required="required" class="form-control col-md-7 col-xs-12" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Ulangi Password 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="re_pswd" name="re_pswd" class="date-picker form-control col-md-7 col-xs-12 tgl" required="required" type="password" placeholder="Ulangi Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder='Alamat'><?php echo $alamat; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor HP
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nomor_hp" name="nomor_hp" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nomor HP"value="<?php echo $nomor_hp; ?>">
                      </div>
                    </div>
                   
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button id="tombolsubmitupdate" type="submit" class="btn btn-primary">Simpan</button>
                         <a href="<?php echo site_url('bj_add_user'); ?>"><button id="reset" type="button" class="btn btn-danger">Cancel</button></a>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
  </form>


      <?php 
$this->load->view($this->controller."_form_view_js");
?>