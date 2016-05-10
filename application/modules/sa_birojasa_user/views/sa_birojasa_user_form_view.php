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
      <label class="col-sm-3 control-label">Email</label>
      <div class="col-sm-9">
        <input type="text" name="email" id="email" class="form-control input-style" placeholder="Email . . ." value="<?php echo isset($email)?$email:""; ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Password</label>
      <div class="col-sm-9">
        <input type="password" name="p1" id="p1" class="form-control input-style" placeholder="Password.."  >
      </div>
    </div>
      <div class="form-group">
      <label class="col-sm-3 control-label">Ulangi Password</label>
      <div class="col-sm-9">
        <input type="password" name="p2" id="p2" class="form-control input-style" placeholder="Ulangi Password.."  >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label">Nama </label>
      <div class="col-sm-9">
       
        <input type="text" name="nama" id="nama" class="form-control input-style" placeholder="Nama" 
        value="<?php echo isset($nama)?$nama:""; ?>">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="col-sm-3 control-label">Birojasa </label>
      <div class="col-sm-9">
       
        <?php echo form_dropdown("birojasa_id",$arr_birojasa,'','id="birojasa_id" class="form-control input-style"'); ?>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="col-sm-3 control-label">No. HP</label>
      <div class="col-sm-9">
        <input type="text" name="nomor_hp"  value="<?php echo isset($nomor_hp)?$nomor_hp:""; ?>" id="nomor_hp" class="form-control input-style" placeholder="Nomor HP . . ."  >
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