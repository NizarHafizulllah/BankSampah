
   <?php 
  $userdata = $this->session->userdata('pengepul_login');
?>
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

      <link href="<?php echo base_url("assets") ?>/css/datepicker.css" rel="stylesheet">
    <script src="<?php echo base_url("assets") ?>/js/bootstrap-datepicker.js"></script> 
     
        <!-- Main content -->
        <form id="form_data" class="form-horizontal" method="post" 
        action="<?php echo site_url("$this->controller/$action"); ?>" role="form"> 

 


              <div class="panel panel-primary">
      <div class="panel-heading">
      <strong><h3 class="panel-title">Tambah data </h3></strong>
    </div>
    <div class="panel-body" id="data_umum">



    <div class="form-group">
      <label class="col-sm-3 control-label">Tgl </label>
      <div class="col-sm-9">
      <input type="hidden" name="id_pengepul" id="id_pengepul" value="<?php echo $userdata['id']; ?>" />
        <input type="text" name="tgl" id="tgl" class="tanggal form-control input-style" placeholder="Nama" 
        value="<?php echo isset($tgl)?$tgl:""; ?>" data-date-format="dd-mm-yyyy">
      </div>
    </div>
    

     <div class="form-group">
      <label class="col-sm-3 control-label">Nasabah
                      </label>
      <div class="col-sm-9">
        <?php echo form_dropdown("id_nasabah",$arr_nasabah,'','id="id_nasabah" class="form-control input-style"'); ?>
      </div>
    </div>
    
   
     
    
    
    <?php $jenis = $this->db->get('jenis');
      foreach ($jenis->result() as $row) {?>

      <div class="form-group">
        <h3><label class="col-sm-3 control-label"><strong><?php echo $row->jenis; ?></strong></label></h3>
          
        </div>

        <?php
        $this->db->where('id_jenis', $row->id);
        $sub_jenis = $this->db->get('sub_jenis');
          foreach ($sub_jenis->result() as $row) { ?>
            <div class="form-group">
              <label class="col-sm-3 control-label"><?php echo $row->sub_jenis; ?></label>
                <div class="col-sm-9">
              <input type="hidden" name="jenis[<?php echo $row->id; ?>]" value="<?php echo $row->id; ?>">
              <input type="text" name="berat[<?php echo $row->id; ?>]"  value="" id="<?php echo $row->id; ?>" class="form-control input-style" placeholder="Berat <?php echo $row->sub_jenis; ?>(Kg)"  >
            </div>
          </div>

        <?php
          }
         ?>

      <?php
      }

     ?>
    
    
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