
<script src="<?php echo base_url("assets") ?>/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url("assets") ?>/js/jquery.dataTables.min.js"></script>


 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">


        <!-- Content Header (Page header) -->
        

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Transaksi </h3>
              <div class="box-tools pull-right">
              <a href="<?php echo site_url("$this->controller/baru"); ?>"><button type="button" class="btn btn-primary form-control"><i class="fa fa fa-plus-circle "></i> Tambah Transaksi</button></a>
              </div>
            </div>
            <div class="box-body">
<div style="font-family: arial; font-size: 25px">
<div class="row">
  <div class="col-md-2">No. Nasabah</div>
  <div class="col-md-5">: <?php echo $id ?></div>
</div>
<div class="row">
  <div class="col-md-2">Nama</div>
  <div class="col-md-5">: <?php echo $nama ?></div>
</div>
<div class="row">
  <div class="col-md-2">Saldo</div>
  <div class="col-md-3">: <?php echo $saldo ?></div>
</div>
</div>

<br/>
<hr/>
<br/>

<div class="row">
            

            <form role="form" action="" id="btn-cari" >
            <div class="col-md-3">
              <div class="form-group">
                <label for="nama">No. Transaksi</label>
                <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama"></input>
                <input id="id" name="id" type="hidden" class="form-control" value="<?php echo $id ?>"></input>
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
<table width="100%" border="0" id="biro_jasa" class="table table-striped 
             table-bordered table-hover dataTable no-footer" role="grid">
<thead>
  <tr>

        <th width="15%">Tanggal</th>
        <th width="18%">No.</th>
        <th width="14%">Debit</th>
        <th width="14%">Kredit</th>
        <th width="20%">Saldo </th>


    </tr>
  
</thead>
</table>
</div>
</div>
            </div>
            </div>



<?php 
$this->load->view("transaksi_view_js");
?>