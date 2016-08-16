
 <link href="<?php echo base_url("assets") ?>/css/datepicker.css" rel="stylesheet">
<script src="<?php echo base_url("assets") ?>/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url("assets") ?>/js/jquery.dataTables.min.js"></script>

 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">


        <!-- Content Header (Page header) -->
        

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Sub Jenis </h3>
              <div class="box-tools pull-right">
              <a href="<?php echo site_url("$this->controller/baru"); ?>"><button type="button" class="btn btn-primary form-control"><i class="fa fa fa-plus-circle "></i> Tambah Sub Jenis</button></a>
              </div>
            </div>
            <div class="box-body">


<div class="row">
            

            <form role="form" action="" id="btn-cari" >
            <div class="col-md-3">
              <div class="form-group">
                <label for="jenis">Sub Jenis</label>
                <input id="sub_jenis" name="sub_jenis" type="text" class="form-control" placeholder="Sub Jenis"></input>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label></label>
                <button type="submit" class="btn btn-primary form-control" id="btn_submit"><i class="fa">Cari</i></button>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label></label>
                <button type="reset" class="btn btn-danger form-control" id="btn_reset"><i class="fa">Reset</i></button>
              </div>
            </div>
            </form>
  </div>          
<div class="row">
<div class="table-responsive">
<table width="100%" border="0" id="f_jenis" class="table table-striped 
             table-bordered table-hover dataTable no-footer" role="grid">
<thead>
  <tr>


        
        <th width="7%">ID</th>
        <th width="7%">Jenis</th>
        <th width="7%">Harga (Kg)</th>
        <th width="23%">#</th>
    </tr>
  
</thead>
</table>
</div>
</div>
            </div>
            </div>



<?php 
$this->load->view($this->controller."_view_js");
?>