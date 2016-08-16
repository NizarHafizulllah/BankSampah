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
      <label class="col-sm-3 control-label">Jenis </label>
      <div class="col-sm-9">
       
        <?php echo form_dropdown("id_jenis",$arr_jenis,isset($id_jenis)?$id_jenis:'','id="id_jenis" class="form-control input-style"'); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Sub Jenis </label>
      <div class="col-sm-9">
      <input type="hidden" name="id" id="id" class="form-control input-style" value="<?php echo isset($id)?$id:""; ?>">
       
        <input type="text" name="sub_jenis" id="sub_jenis" class="form-control input-style" placeholder="Sub Jenis" 
        value="<?php echo isset($sub_jenis)?$sub_jenis:""; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Harga (Kg) </label>
      <div class="col-sm-9">
      
       
        <input type="text" name="harga_kg" id="harga_kg" class="form-control input-style" placeholder="Harga" 
        value="<?php echo isset($harga_kg)?$harga_kg:""; ?>">
      </div>
    </div>
    

    
    <div class="form-group pull-center">
        <div class="col-sm-offset-3 col-sm-9">
          <button id="<?php echo $action ?>" style="border-radius: 0;" type="submit" class="btn btn-lg btn-primary"  >Simpan</button>
          <a href="<?php echo site_url("$this->controller"); ?>"><button style="border-radius: 0;" id="reset" type="button" class="btn btn-lg btn-danger">Cancel</button></a>
        </div>
      </div>

  </div>
  </form>


      <?php 
$this->load->view($this->controller."_form_view_js");
?>