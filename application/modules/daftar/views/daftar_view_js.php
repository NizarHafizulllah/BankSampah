<script type="text/javascript">
	$(document).ready(function(){

    $(".tanggal").datepicker().on('changeDate', function(ev){                 
             $('.tanggal').datepicker('hide');
        });
        
        


$("#form_data").hide();

$('#form_data').bootstrapValidator({
                message: 'This value is not valid', 
                feedbackIcons: { 
                    valid: 'glyphicon glyphicon-ok', 
                    invalid: 'glyphicon glyphicon-remove', 
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    warna: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong' 
                            }
                        }
                    },
                    nomor_rangka: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong' 
                            }
                        }
                    },
                    tanggal: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong' 
                            }
                        }
                    },
                    jenis: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    
                    pekerjaan: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    bentuk: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    nomor_polisi: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    warna_tnkb: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    nomor_mesin: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    nomor_identitas: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    nama: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    alamat: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    kode_pos: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    nomor_ponsel: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    wilayah: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    dasar: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    pemohon: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    }


                    


                    
                }
                
            });



        $('#reset').click(function() {
            $('#form_data').data('bootstrapValidator').resetForm(true);
        });



		$("#cekbbn").submit(function(){
            $("#form_data").hide();

			$.ajax({
				url : '<?php echo site_url("$this->controller/get_data_bbn") ?>',
				data : $(this).serialize(),
				type : 'post',
				dataType : 'json',
				success  : function(ret){
					//console.log(ret);

                    if(ret.error==true){
                         BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_DANGER,
                                                title: 'Error',
                                                message: ret.pesan
                                                 
                        }); 
                    }
                    else 
                    {

                     BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_PRIMARY,
                            title: 'Informasi',
                            message: ret.pesan  
                             
                            } 
                        ); 

                        
                    $("#nomor_rangka").val(ret.data.NoRangka);
                    $("#warna").val(ret.data.Warna);
                    $("#jenis").val(ret.data.Jenis);
                    $("#bentuk").val(ret.data.Model);
                    $("#nomor_mesin").val(ret.data.NoMesin);
                    $("#nama").val(ret.data.Pemilik);
                    $("#nomor_identitas").val(ret.data.NoIdentitas);

                    $("#alamat").val(ret.data.Alamat);
                    // $("#kode_pos").val(ret.data.NoIdentitas);
                    $("#form_data").show();

                    }

                    
                    








				}
			});
			return false;

		}); 








/*
$("#form_data").submit(function(){

                $.ajax({
                url : '<?php echo site_url("$this->controller/simpan") ?>',
                data : $(this).serialize(),
                type : 'post',
                dataType : 'json',
                success  : function(ret){
                    console.log(ret);


                if(ret.error == false) { 
                    BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_PRIMARY,
                            title: 'Informasi',
                            message: ret.message // ,

                            // callback: function(result) {
                            //         location.href='<?php echo site_url("user"); ?>';
                            // }
                             
                             
                            } 
                        ); 
                    // $('#form_data').data('bootstrapValidator').resetForm(true);
                }
                else {
                    BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_DANGER,
                                                title: 'Error',
                                                message: ret.message
                                                 
                                            }); 
                    }
                }
            });

    return false;
});
*/



}); 


$(document).on('click', '#tombolsubmit', function(){
    // $('#form_data').submit();
    // return false;

    $.ajax({
                url : '<?php echo site_url("$this->controller/simpan") ?>',
                data : $("#form_data").serialize(),
                type : 'post',
                dataType : 'json',
                success  : function(ret){
                    console.log(ret);


                if(ret.error == false) { 
                    BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_PRIMARY,
                            title: 'Informasi',
                            message: ret.message // ,

                            // callback: function(result) {
                            //         location.href='<?php echo site_url("user"); ?>';
                            // }
                             
                             
                            } 
                        ); 
                    $('#form_data').data('bootstrapValidator').resetForm(true);
                }
                else {
                    BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_DANGER,
                                                title: 'Error',
                                                message: ret.message
                                                 
                                            }); 
                    }
                }
            });

    return false;



});


       

</script>
 