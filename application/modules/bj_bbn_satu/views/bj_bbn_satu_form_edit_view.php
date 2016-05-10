    <?php
    $userdata = $this->session->userdata('bj_login');
    ?>

    <link href="<?php echo base_url("assets") ?>/css/datepicker.css" rel="stylesheet">
    <script src="<?php echo base_url("assets") ?>/js/bootstrap-datepicker.js"></script>   
              <!-- Start Page -->
                <!-- Selsai -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Tambah Data <small>Pengurusan BBN 1 </small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-eye"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo site_url($this->controller); ?>">Lihat Data</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  
                  <form id="form_edit" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url("$this->controller/$action"); ?>" method="post">


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Entri 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                        <input type="text" id="tanggal" class="tanggal form-control col-md-7 col-xs-12" name="tgl_entri" class="form-control input-style" placeholder="Tanggal BBN2"  data-date-format="dd-mm-yyyy" value="<?php echo $tgl_entri; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Rangka
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="no_rangka" name="no_rangka" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nomor Rangka" value="<?php echo $no_rangka; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Mesin
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="no_mesin" name="no_mesin" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nomor Mesin" value="<?php echo $no_mesin; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Faktur
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="no_faktur" name="no_faktur" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nomor Faktur" value="<?php echo $no_faktur; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Faktur 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="tanggal" class="tanggal form-control col-md-7 col-xs-12" name="tgl_faktur" class="form-control input-style" placeholder="Tanggal BBN2"  data-date-format="dd-mm-yyyy" value="<?php echo $tgl_faktur; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Merek
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("id_merek",$arr_merek,$id_merek,'id="id_merek" class="form-control input-style"'); ?>
                       </div> 
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Type
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="type" name="type" required="required" class="form-control col-md-7 col-xs-12" placeholder="Type" value="<?php echo $type; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("id_jenis",$arr_jenis,$id_jenis,'id="id_jenis" class="form-control input-style"'); ?>
                       </div> 
                    </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Model
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("id_model",$arr_model,'','id="id_model" class="form-control input-style"'); ?>
                       </div> 
                    </div>
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Warna
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("id_warna",$arr_warna,$id_warna,'id="id_warna" class="form-control input-style"'); ?>
                       </div> 
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Silinder
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="silinder" name="silinder" required="required" class="form-control col-md-7 col-xs-12" placeholder="Silinder" value="<?php echo $silinder; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bahan Bakar
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="bahan_bakar" name="bahan_bakar" required="required" class="form-control col-md-7 col-xs-12" placeholder="Bahan Bakar" value="<?php echo $bahan_bakar; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tahun Buat
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="tahun_buat" name="tahun_buat" required="required" class="form-control col-md-7 col-xs-12" placeholder="Tahun Buat" value="<?php echo $tahun_buat; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Dealer
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kode_dealer" name="kode_dealer" required="required" class="form-control col-md-7 col-xs-12" placeholder="Kode Dealer" value="<?php echo $kode_dealer; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Dealer
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nama_dealer" name="nama_dealer" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nama Dealer" value="<?php echo $nama_dealer; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pemilik
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nama_pemilik" name="nama_pemilik" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nama Dealer" value="<?php echo $nama_pemilik; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat Pemilik
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="alamat_pemilik" id="alamat_pemilik" class="form-control" rows="3" placeholder='Alamat'><?php echo $alamat_pemilik; ?></textarea>
                       </div> 
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Provinsi
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("id_provinsi",$arr_provinsi,$id_provinsi,'id="id_provinsi" class="form-control input-style"'); ?>
                       </div> 
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kabupaten
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("id_kota",$arr_kota,$id_kota,'id="id_kota" class="form-control input-style"'); ?>
                       </div> 
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kecamatan
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("id_kecamatan",$arr_kecamatan,$id_kecamatan,'id="id_kecamatan" class="form-control input-style"'); ?>
                       </div> 
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kelurahan/Desa
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("id_desa",$arr_desa,$id_desa,'id="id_desa" class="form-control input-style"'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Polda
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("id_polda",$arr_polda,$id_polda,'id="id_polda" class="form-control input-style"'); ?>
                       </div> 
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Samsat
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("id_samsat",$arr_samsat,$id_samsat,'id="id_samsat" class="form-control input-style"'); ?>
                       </div> 
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pengurus
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo form_dropdown("user_entri",$arr_user,$user_entri,'id="user_entri" class="form-control input-style"'); ?>
                       </div> 
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button id="tombolsubmitupdate" type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo site_url('bj_bbn_satu'); ?>"><button type="button" class="btn btn-danger">Batal</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>



<?php 
$this->load->view($this->controller.'_form_view_js');
?>
                
         