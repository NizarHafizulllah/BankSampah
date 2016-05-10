 <link href="<?php echo base_url("assets") ?>/css/datepicker.css" rel="stylesheet">
<script src="<?php echo base_url("assets") ?>/js/bootstrap-datepicker.js"></script>
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
<style type="text/css">
  .merah{
    color : red;
  }

  .hijau {
    color: green;
  }

</style>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            DATA PENDAFTARAN BBN
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pendaftaran BBN</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">

            <form role="form" action="" id="btn-cari" >
            <div class="col-md-2">
              <div class="form-group">
                <label for="Tanggal">Tanggal Awal</label>
                <input name="tanggal_awal" id="tanggal_awal" type="text" class="form-control tanggal_awal" placeholder="Tanggal Awal" data-date-format="dd-mm-yyyy"></input>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="Tanggal">Tanggal Akhir</label>
                <input name="tanggal_akhir" id="tanggal_akhir" type="text" class="form-control tanggal_akhir" placeholder="Tanggal Akhir" data-date-format="dd-mm-yyyy"></input>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="nomor-rangka">No Rangka</label>
                <input id="nomor_rangka" name="nomor_rangka" type="text" class="form-control" placeholder="No. Rangka"></input>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama"></input>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label></label>
                <button type="submit" class="btn btn-primary form-control" id="btn_submit"><i class="fa fa-search">Cari</i></button>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label></label>
                <button type="reset" class="btn btn-primary form-control" id="btn_reset"><i class="fa fa-search">Reset</i></button>
              </div>
            </div>
            </form>


<table width="100%" border="0" id="daftar_bbn" class="table table-striped 
             table-bordered table-hover dataTable no-footer" role="grid">
<thead>
  <tr  >

        
        <th width="5%">JENIS BBN</th>
        <th width="7%">TANGGAL</th>
        <th width="16%">NO RANGKA </th>
<!--         <th width="15%">NO BPKB</th>  
 -->      <th width="15%">NO. MESIN </th>    
        
      <th width="19%">NAMA PEMOHON </th>
        <th width="14%">WARNA </th>
      <th width="10%">APPROVED</th>
    </tr>
  
</thead>
</table>






            </div>
            </div>
        </section>
</div>

<?php 
$this->load->view("admin_data_list_view_js");
?>