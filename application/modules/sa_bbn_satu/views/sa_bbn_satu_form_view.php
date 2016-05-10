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
      <label class="col-sm-3 control-label">Tipe Kendaraan</label>
      <div class="col-sm-9">
        <input type="hidden" name="id" id="id" value="<?php echo isset($id)?$id:""; ?>">
        <input type="text" name="tipe_kendaraan" id="tipe_kendaraan" class="form-control input-style" placeholder="Tipe Kendaraan" 
        value="<?php echo isset($tipe_kendaraan)?$tipe_kendaraan:""; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Tahun Kendaraan</label>
      <div class="col-sm-9">
      <select name="tahun_kendaraan" id="tahun_kendaraan" class="form-control input-style"  >
          <?php
          for($i=date('Y'); $i>=date('Y')-32; $i-=1){
              echo"<option value='$i'> $i </option>";
                }
              ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Warna TNKB</label>
      <div class="col-sm-9">
        <?php echo form_dropdown("id_warna",$arr_warna,'','id="id_warna" class="form-control input-style"'); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Polda</label>
      <div class="col-sm-9">
        <?php echo form_dropdown("id_polda",$arr_polda,'','id="id_polda" class="form-control input-style"'); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Samsat</label>
      <div class="col-sm-9">
      <?php echo form_dropdown("id_samsat",array(),'','id="id_samsat" class="form-control input-style"'); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Rp. Daftar STNK</label>
      <div class="col-sm-9">
        <input type="text" name="rp_daftar_stnk" id="rp_daftar_stnk" class="form-control input-style" placeholder="Rp. Daftar STNK" value="<?php echo isset($rp_daftar_stnk)?$rp_daftar_stnk:""; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Rp. Daftar BPKB</label>
      <div class="col-sm-9">
        <input type="text" name="rp_daftar_bpkb" id="rp_daftar_bpkb" class="form-control input-style" placeholder="Rp. Daftar BPKB" value="<?php echo isset($rp_daftar_bpkb)?$rp_daftar_bpkb:""; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Rp. Pajak Kendaraan</label>
      <div class="col-sm-9">
        <input type="text" name="rp_pajak_kendaraan" id="rp_pajak_kendaraan" class="form-control input-style" placeholder="Rp. Pajak Kendaraan" value="<?php echo isset($rp_pajak_kendaraan)?$rp_pajak_kendaraan:""; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Rp. Admin Fee</label>
      <div class="col-sm-9">
        <input type="text" name="rp_admin_fee" id="rp_admin_fee" class="form-control input-style" placeholder="Rp. Admin Fee" value="<?php echo isset($rp_admin_fee)?$rp_admin_fee:""; ?>">
      </div>
    </div>
    <div class="form-group pull-center">
        <div class="col-sm-offset-3 col-sm-9">
          <button id="tombolsubmitsimpan" style="border-radius: 0;" type="submit" class="btn btn-lg btn-primary"  >Simpan</button>
          <a href="<?php echo site_url('sa_bbn_satu'); ?>"><button style="border-radius: 0;" id="reset" type="button" class="btn btn-lg btn-danger">Cancel</button></a>
        </div>
      </div>

  </div>
  </form>


      <?php 
$this->load->view($this->controller."_form_view_js");
?>