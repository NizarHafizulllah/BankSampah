<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     
        <!-- Main content -->
        <form id="form_edit" class="form-horizontal" method="post" action="<?php echo site_url("$this->controller/$action"); ?>" role="form"> 


              <div class="panel panel-primary">
      <div class="panel-heading">
      <strong><h3 class="panel-title">Edit</h3></strong>
    </div>
    <div class="panel-body" id="data_umum">

    
    <div class="form-group">
      <label class="col-sm-3 control-label">KODE</label>
      <div class="col-sm-9">
        <input type="hidden" name="kode1" id="kode1" value="<?php echo $kode; ?>"></input>
        <input type="text" name="kode" id="kode" class="form-control input-style" value="<?php echo $kode; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">NAMA</label>
      <div class="col-sm-9">
        <input type="hidden" name="nama" id="nama" value="<?php echo $nama; ?>"></input>
        <input type="text" name="nama" id="nama" class="form-control input-style" value="<?php echo $nama; ?>">
      </div>
    </div>

    <div class="form-group pull-center">
        <div class="col-sm-offset-3 col-sm-9">
          <button id="tombolsubmitupdate" style="border-radius: 0;" type="submit" class="btn btn-lg btn-primary"  >Simpan</button>
          <a href="<?php echo site_url('sa_merk'); ?>"><button style="border-radius: 0;" id="reset" type="button" class="btn btn-lg btn-danger">Cancel</button></a>
        </div>
      </div>

  </div>
  </form>


      <?php 
$this->load->view($this->controller."_form_view_js");
?>