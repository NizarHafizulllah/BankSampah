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


<table  width="100%" border="0" id="daftar_bbn" class="table table-striped 
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
$this->load->view($this->controller."_list_view_js");
?>