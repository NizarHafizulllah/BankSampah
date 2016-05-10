    <?php
    $userdata = $this->session->userdata('user_login');
    ?>    
      <link href="<?php echo base_url("assets") ?>/css/datepicker.css" rel="stylesheet">
    <script src="<?php echo base_url("assets") ?>/js/bootstrap-datepicker.js"></script>
     <script src="<?php echo base_url("assets") ?>/js/jquery.dataTables.min.js"></script>           
              <div class="x_title">
                  <h2>Tambah Data <small>Pengurusan BBN 2 </small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-plus"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo site_url($this->controller.'/baru'); ?>">Tambah Data</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>


          <form role="form" action="" id="btn-cari">

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
                <label for="nama">No. Rangka</label>
                
                <input id="no_rangka" name="no_rangka" type="text" class="form-control" placeholder="No. Rangka"></input>
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
            


<table width="100%" border="0" id="us_bbn_dua" class="table table-striped 
             table-bordered table-hover dataTable no-footer" role="grid">
<thead>
  <tr  >


        
        <th width="7%" rowspan="2" style='text-align:center;vertical-align:middle'>ID</th>
        <th width="10%" rowspan="2" style='text-align:center;vertical-align:middle'>Tgl. Entri</th>
        <th width="15%" rowspan="2" style='text-align:center;vertical-align:middle'>No. Rangka</th>
        <th width="15%" rowspan="2" style='text-align:center;vertical-align:middle'>No. Faktur</th>
        <th width="40%" colspan="3" style='text-align:center;vertical-align:middle'>Biaya</th>
        <th width="12%" rowspan="2" style='text-align:center;vertical-align:middle'>#</th>
    </tr>
    <tr>
      <th width="10%" style='text-align:center;vertical-align:middle'>Daftar</th>
        <th width="10%" style='text-align:center;vertical-align:middle'>Biaya</th>
        <th width="10%" style='text-align:center;vertical-align:middle'>Admin Fee</th>
    </tr>
  
</thead>
</table>
                  

<?php 
$this->load->view($this->controller.'_view_js');
?>

                
                <!-- End Page -->


      
