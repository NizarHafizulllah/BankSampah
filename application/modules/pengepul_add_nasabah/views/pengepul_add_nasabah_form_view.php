
   <?php 
  $userdata = $this->session->userdata('pengepul_login');
?>
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     
        <!-- Main content -->
        <form id="form_data" class="form-horizontal" method="post" 
        action="<?php echo site_url("$this->controller/$action"); ?>" role="form"> 

 


              <div class="panel panel-primary">
      <div class="panel-heading">
      <strong><h3 class="panel-title">Tambah data </h3></strong>
    </div>
    <div class="panel-body" id="data_umum">



    <div class="form-group">
      <label class="col-sm-3 control-label">Nama </label>
      <div class="col-sm-9">

      <input type="hidden" name="id_pengepul" id="id_pengepul" value="<?php echo $userdata['id']; ?>" />
       
        <input type="text" name="nama" id="nama" class="form-control input-style" placeholder="Nama" 
        value="<?php echo isset($nama)?$nama:""; ?>">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="col-sm-3 control-label">No. HP</label>
      <div class="col-sm-9">
        <input type="text" name="no_hp"  value="<?php echo isset($no_hp)?$no_hp:""; ?>" id="no_hp" class="form-control input-style" placeholder="Nomor HP . . ."  >
      </div>
    </div>
     <div class="form-group">
      <label class="col-sm-3 control-label">Kota </label>
      <div class="col-sm-9">
       
        <?php echo form_dropdown("id_kota",$arr_kota,'','id="id_kota" class="form-control input-style"'); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Kecamatan </label>
      <div class="col-sm-9">
       
        <?php echo form_dropdown("id_kecamatan",array(),'','id="id_kecamatan" class="form-control input-style"'); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Desa </label>
      <div class="col-sm-9">
       
        <?php echo form_dropdown("id_desa",array(),'','id="id_desa" class="form-control input-style"'); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Alamat</label>
      <div class="col-sm-9">
      <textarea name="alamat" id="alamat" class="form-control input-style" placeholder="Alamat . . ."><?php echo isset($alamat)?$alamat:""; ?></textarea>
      </div>
    </div>
    
    <div class="form-group pull-center">
        <div class="col-sm-offset-3 col-sm-9">
          <button id="tombolsubmitsimpan" style="border-radius: 0;" type="submit" class="btn btn-lg btn-primary"  >Simpan</button>
          <a href="<?php echo site_url("$this->controller"); ?>"><button style="border-radius: 0;" id="reset" type="button" class="btn btn-lg btn-danger">Cancel</button></a>
        </div>
      </div>

  </div>
  </form>


      <?php 
$this->load->view($this->controller."_form_view_js");
?>