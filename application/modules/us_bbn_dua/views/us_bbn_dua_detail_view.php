</br>
 
    <style type="text/css">
    .datepicker{ z-index: 1151 !important; }
    </style>
    

    <link href="<?php echo base_url("assets") ?>/css/datepicker.css" rel="stylesheet">
    <script src="<?php echo base_url("assets") ?>/js/bootstrap-datepicker.js"></script>



          <button id="proses" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".<?php echo $status; ?>"><?php echo $nama_status; ?></button>


<div class="row" style="font-size: 30px;">
	<div class="col-md-2" >
		No. Rangka
	</div>
	<div class="col-md-4">
		: <?php echo $no_rangka; ?>
	</div>
</div>
<div class="row" style="font-size: 20px;">
	<div class="col-md-2">
		No. Mesin
	</div>
	<div class="col-md-4">
		: <?php echo $no_mesin; ?>
	</div>
</div>
</br>


<div class="row">

            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Detail Pengurusan</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">





<table width="100%" border="0" class="table table-striped table-hover no-footer" role="grid">
<thead>
  <tr>
        <th colspan="2" align="center">Data Pengurusan</th>
  </tr>
</thead>
<tbody >
    <tr>
        <th width="20%">Polda</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $polda; ?></th>
   </tr>
   <tr>
        <th width="20%">Samsat</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $samsat; ?></th>
   </tr>
   <tr>
        <th width="20%">Tgl. Entri</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $tgl_entri; ?></th>
   </tr>
   <tr>
        <th width="20%">Pengurus</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $pengurus; ?></th>
   </tr>
   <tr>
        <th width="20%">Jenis Perubahan</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $jenis_perubahan; ?></th>
   </tr>
   <tr>
        <th width="20%">Biaya Pendaftaran</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $rp_daftar; ?></th>
   </tr>
   <tr>
        <th width="20%">Biaya Perubahan</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $rp_biaya; ?></th>
   </tr>
   <tr>
        <th width="20%">Admin Fee</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $rp_admin_fee; ?></th>
   </tr>
  </tbody>
</table>

</div>
</div>
</div>
</div>


		<div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Detail Kendaraan</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

<table width="100%" border="0" class="table table-striped table-hover no-footer" role="grid">
<thead>
  <tr>
        <th colspan="2" align="center" >Detail Kendaraan </th>
  </tr>
</thead>
<tbody >
	<tr>
        <th width="20%">No. Rangka</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $no_rangka; ?></th>
  </tr>
	<tr>
        <th>No. Mesin</th>
        <th>:</th>
        <th><?php echo $no_mesin; ?></th>
  </tr>
   <tr>
        <th >No. Faktur</th>
        <th >:</th>
        <th ><?php echo $no_faktur; ?></th>
  </tr>
  <tr>
        <th>Tgl. Faktur</th>
        <th>:</th>
        <th><?php echo $tgl_faktur; ?></th>
  </tr>
	<tr>
        <th>Merk</th>
        <th> : </th>
        <th><?php echo $merek; ?></th>
  </tr>
	<tr>
        <th>Type</th>
        <th>:</th>
        <th><?php echo $type; ?></th>
  </tr>
	<tr>
        <th >Jenis</th>
        <th>:</th>
        <th ><?php echo $jenis; ?></th>
  </tr>
  <tr>
        <th >Model</th>
        <th>:</th>
        <th><?php echo $model; ?></th>
  </tr>
  <tr>
        <th>Warna</th>
        <th>:</th>
        <th><?php echo $warna; ?></th>
  </tr>
  <tr>
        <th>Silinder</th>
        <th>:</th>
        <th><?php echo $silinder; ?></th>
  </tr>
  <tr>
        <th>Bahan Bakar</th>
        <th>:</th>
        <th><?php echo $bahan_bakar; ?></th>
  </tr>
  <tr>
        <th>Tahun Buat</th>
        <th>:</th>
        <th><?php echo $tahun_buat; ?></th>
  </tr>
  <tr>
        <th>Kode Dealer</th>
        <th>:</th>
        <th><?php echo $kode_dealer; ?></th>
  </tr>
  <tr>
        <th>Nama Dealer</th>
        <th>:</th>
        <th><?php echo $nama_dealer; ?></th>
  </tr>

</tbody>
</table>

</div>
</div>
</div>
</div>



<div class="row">

            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Detail Pemilik Kendaraan</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">





<table width="100%" border="0" class="table table-striped table-hover no-footer" role="grid">
<thead>
  <tr>
        <th colspan="2" align="center" >Data Pemilik Kendaraan</th>
  </tr>
</thead>
<tbody >
    <tr>
        <th width="20%">Nama</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $nama_pemilik; ?></th>
   </tr>
   <tr>
        <th width="20%">Alamat</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $alamat_pemilik; ?></th>
   </tr>
   <tr>
        <th width="20%">Provinsi</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $provinsi; ?></th>
   </tr>
   <tr>
        <th width="20%">Kota</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $kota; ?></th>
   </tr>
   <tr>
        <th width="20%">Kecamatan</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $kecamatan; ?></th>
   </tr>
   <tr>
        <th width="20%">Desa</th>
        <th width="1%">:</th>
        <th width="70%"><?php echo $desa; ?></th>
   </tr>
  </tbody>
</table>

</div>
</div>
</div>
</div>



            <form id="form_update1" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url("us_bbn_dua/update1"); ?>" method="post">
                <div class="modal fade 1" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Konfirmasi</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="kembali">Masuk Samsat</label>
                              <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                              <p>Anda Dapat Mengkonfirmasi Data BBN Yang Anda Urus Telah Masuk Ke Samsat Dengan Cara Klik Tombol <b>Konfirmasi</b></p>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                              <label for="kembali">Tgl. Masuk Samsat</label>
                              <input type="text" id="tanggal" name="samsat_masuk_tgl" class="tanggal ui-datepicker form-control" placeholder="Tanggal Pembayaran"  data-date-format="dd-mm-yyyy">
                            </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" id="btn_submit1" class="btn btn-primary">Konfirmasi</button>
                      </div>

                    </div>
                  </div>
                </div>
                </form>


                <form id="form_update2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url("us_bbn_dua/update2"); ?>" method="post">
                <div class="modal fade 2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Konfirmasi</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="kembali">Samsat Selesai</label>
                              <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                              <p>Anda Dapat Mengkonfirmasi Data BBN Yang Anda Urus Telah Selsai Di Samsat Dengan Cara Klik Tombol <b>Konfirmasi</b></p>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                              <label for="kembali">Tgl. Selesai Samsat</label>
                              <input type="text" id="tanggal" name="samsat_selesai_tgl" class="tanggal ui-datepicker form-control" placeholder="Tanggal Pembayaran"  data-date-format="dd-mm-yyyy">
                            </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" id="btn_submit2" class="btn btn-primary">Konfirmasi</button>
                      </div>

                    </div>
                  </div>
                </div>
                </form>


                <form id="form_update3" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url("us_bbn_dua/update3"); ?>" method="post">
                <div class="modal fade 3" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Konfirmasi</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="kembali">Penyerahan Berkas</label>
                              <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                              <p>Anda Dapat Mengkonfirmasi Data BBN Yang Anda Urus Diserahkan Berkasnya Dengan Cara Klik Tombol <b>Konfirmasi</b></p>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                              <label for="kembali">Tgl. Penyerahan Berkas</label>
                              <input type="text" id="tanggal" name="berkas_serah_tgl" class="tanggal ui-datepicker form-control" placeholder="Tanggal Pembayaran"  data-date-format="dd-mm-yyyy">
                            </div>
                      </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" id="btn_submit3" class="btn btn-primary">Konfirmasi</button>
                      </div>

                    </div>
                  </div>
                </div>
                </form>



                <!-- PEMBAYARAN -->

                <form id="form_update4" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url("us_bbn_satu/update4"); ?>" method="post">
                <div class="modal fade 4" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Konfirmasi</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="kembali">Pembayaran</label>
                              <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                              <p>Anda Dapat Mengkonfirmasi Pembayaran Dengan Cara Klik Tombol <b>Konfirmasi</b></p>
                            </div>
                            <div class="form-group">
                              <label for="kembali">Tgl. Pembayaran</label>
                              <input type="text" id="tanggal" name="bayar_tgl" class="tanggal ui-datepicker form-control" placeholder="Tanggal Pembayaran"  data-date-format="dd-mm-yyyy">
                            </div>
                            <div class="form-group">
                              <label for="kembali">Metode Pembayaran</label>
                              <input id="bayar_metode" name="bayar_metode" type="text" class="form-control" placeholder="Metode Pembayaran"></input>
                            </div>
                            <div class="form-group">
                              <label for="kembali">No. Kartu Debit</label>
                              <input id="bayar_no_cc" name="bayar_no_cc" type="text" class="form-control" placeholder="No. Kartu Debit"></input>
                            </div>
                            <div class="form-group">
                              <label for="kembali">Ref ID Debit</label>
                              <input id="bayar_ref_cc" name="bayar_ref_cc" type="text" class="form-control" placeholder="Ref ID Debit"></input>
                            </div>
                            <div class="form-group">
                              <label for="kembali">Jumlah Bayar</label>
                              <input id="bayar_jumlah" name="bayar_jumlah" type="text" class="form-control" placeholder="Jumlah Bayar"></input>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" id="btn_submit4" class="btn btn-primary">Konfirmasi</button>
                      </div>

                    </div>
                  </div>
                </div>
                </form>


                <div class="modal fade 5" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Selesai</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="kembali">Proses Selesai</label>
                              <p>Proses Telah Selesai Di Kerjakan Dengan Baik</p>
                              <p><b>TERIMAKASIH</b></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        
                        <a href="<?php echo site_url('us_bbn_dua/index') ?>">
                        <button type="button" class="btn btn-primary">Selesai</button></a>
                      </div>

                    </div>
                  </div>
                </div>
                 
              
<?php 
$this->load->view('us_bbn_dua_detail_view_js');
?>