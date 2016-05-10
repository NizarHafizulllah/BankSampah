<script type="text/javascript">

$(document).ready(function(){


$('#form_data').bootstrapValidator({
                message: 'This value is not valid', 
                feedbackIcons: { 
                    valid: 'glyphicon glyphicon-ok', 
                    invalid: 'glyphicon glyphicon-remove', 
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    nama: {
                        validators: {
                            notEmpty: {
                                message : 'Nama tidak boleh kosong' 
                            }
                        }
                    },

                    alamat: {
                        validators: {
                            notEmpty: {
                                message : 'Alamat tidak boleh kosong' 
                            }
                        }
                    },
                    hp: {
                        validators: {
                            notEmpty: {
                                message : 'No. HP tidak boleh kosong' 
                            }
                        }
                    },
                    telp: {
                        validators: {
                            notEmpty: {
                                message : 'No. Telp tidak boleh kosong' 
                            }
                        }
                    },

                    email: {
                        validators: {
                            notEmpty: {
                                message : 'Email tidak boleh kosong'    
                            },
                            emailAddress: {
                                message : 'Email harus valid'
                            },
                            remote: {
                                type: 'POST',
                                url: "<?php echo site_url('sa_birojasa/cekEmail'); ?>",
                                message: 'Biro jasa dengan email ini sudah terdaftar',
                                delay: 2000
                            }
                        }
                    },
                    no_siup: {
                        validators: {
                            notEmpty: {
                                message : 'Email tidak boleh kosong'    
                            },
                            remote: {
                                type: 'POST',
                                url: "<?php echo site_url('sa_birojasa/ceksiup'); ?>",
                                message: 'Biro jasa dengan nomor SIUP ini sudah terdaftar',
                                delay: 2000
                            }
                        }
                    },
                    no_tdp: {
                        validators: {
                            notEmpty: {
                                message : 'No. TDP tidak boleh kosong'    
                            },
                            remote: {
                                type: 'POST',
                                url: "<?php echo site_url('sa_birojasa/cektdp'); ?>",
                                message: 'Biro jasa dengan nomor TDP ini sudah terdaftar',
                                delay: 2000
                            }
                        }
                    },
                    no_npwp: {
                        validators: {
                            notEmpty: {
                                message : 'Email tidak boleh kosong'    
                            },
                            remote: {
                                type: 'POST',
                                url: "<?php echo site_url('sa_birojasa/ceknpwp'); ?>",
                                message: 'Biro jasa dengan nomor NPWP ini sudah terdaftar',
                                delay: 200
                            }
                        }
                    }


                    
                }
                
            });



        $('#reset').click(function() {
            $('#form_data').data('bootstrapValidator').resetForm(true);
        });



$("#tombolsubmitsimpan").click(function(){
 console.log('tests');

    $.ajax({
        url:'<?php echo site_url("$this->controller/simpan"); ?>',
        data : $('#form_data').serialize(),
        type : 'post',
        dataType : 'json',
        success : function(obj){

            console.log(obj.error);

            if(obj.error == false) { // berhasil 

                // alert('hooooo.. error false');
                     BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_PRIMARY,
                            title: 'Informasi',
                            message: obj.message
                             
                        });   
                      $('#form_data').data('bootstrapValidator').resetForm(true);
            }
            else {
                 BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_DANGER,
                            title: 'Error',
                            message: obj.message 
                             
                        }); 
            }
        }
    });

    return false;
});



$("#tombolsubmitupdate").click(function(){ 
    $.ajax({
        url:'<?php echo site_url("$this->controller/update"); ?>',
        data : $('#form_edit').serialize(),
        type : 'post',
        dataType : 'json',
        success : function(obj){

            console.log(obj.error);

            if(obj.error == false) { // berhasil 

                // alert('hooooo.. error false');
                     BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_PRIMARY,
                            title: 'Informasi',
                            message: obj.message
                             
                        });   
                     // $('#form_data').data('bootstrapValidator').resetForm(true);
            }
            else {
                 BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_DANGER,
                            title: 'Error',
                            message: obj.message 
                             
                        }); 
            }
        }
    });

    return false;
});







});
</script>