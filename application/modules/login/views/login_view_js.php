<script type="text/javascript">
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    
    
    /*
        Login form validation
    */
    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    

    $('.login-form').on('submit', function(e) {
    	 
        // alert('test');




    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
                 //alert('sukses'); return false;
    		}
    		else {
                $(this).removeClass('input-error');
            }

            });
            	
        
        // begin go . 



        //alert('go');

                        $("#mask").val($.md5($("#form-password").val()));
                        $("#form-password").val('');


                            $.ajax({
                                url : '<?php echo site_url("login/ceklogin") ?>',
                                type : 'post',
                                dataType : 'json',
                                beforeSend : function(){
                                    $('#myPleaseWait').modal('show');
                                },
                                data : $(this).serialize(),
                                success : function(hasil){
                                    $('#myPleaseWait').modal('hide');

                                    if(hasil.error == false) {

                                         BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_PRIMARY,
                                                title: 'Informasi',
                                                message: hasil.message,

                                                callback: function(result) {
                                                        location.href='<?php echo site_url("user"); ?>';
                                                }
                                                 
                                                 
                                                } 
                                            ); 
                                        //location.href('<?php echo site_url("user"); ?>')        
                  
                                    }
                                    else {
                                         BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_DANGER,
                                                title: 'Error',
                                                message: hasil.message
                                                 
                                            }); 
                                        
                                    }
                                }

                            });


        return false;




 

        // end of gone




    });
    
    /*
        Registration form validation
    */
    $('.registration-form input[type="text"], .registration-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.registration-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});

        $("#password").val($.md5($("#password").val()));
        $("#password2").val($.md5($("#password2").val()));



        $.ajax({
            url : '<?php echo site_url("login/register") ?>',
            type : 'post',
            dataType : 'json',
            beforeSend : function(){
                $('#myPleaseWait').modal('show');
            },
            data : $(this).serialize(),
            success : function(hasil){
                $('#myPleaseWait').modal('hide');

                if(hasil.error == false) {

                     BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_PRIMARY,
                            title: 'Informasi',
                            message: hasil.message,
                             
                        });     

                    //alert(hasil.message);
                    $(this).closest('form').find("input[type=text], textarea").val("");
                 
                }
                else {
                     BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_DANGER,
                            title: 'Error',
                            message: hasil.message,
                             
                        }); 
                    //alert(hasil.message);
                }
            }

        });



        return false;
    	
    });
    
    
});
	
	$(document).ready(function(){
		$('#frm_registrasi').bootstrapValidator({
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
							},
							stringLength: {
								min: 5, 
								message: 'Panjang nama minimal 5 karakter'
							},
						}
					},
					alamat: {
                		validators: {
                    		notEmpty: {
                        		message: 'Alamat tidak boleh kosong'
                    		},
                    		stringLength: {
                        		min: 10,
                        		message: 'panjang Alamat minimal 10 karakter'
                    		}
                		}
            		},
					nomor_hp: {
                		validators: {
                    		notEmpty: {
                        		message: 'No Hp tidak boleh kosong'
                    		},
                    		stringLength: {
                        		min: 11,
                        		message: 'Panjang No. Hp minimal 11 karakter'
                    		}
                		}
            		},
					nomor_ktp: {
                		validators: {
                    		notEmpty: {
                        		message: 'tidak boleh kosong'
                    		},
							regexp: {
                        		regexp: /^[0-9_\.]+$/,
                        		message: 'Hanya Angka'
                    		},
                    		stringLength: {
                        		min: 16,
                        		message: 'panjang minimal 16 karakter'
                    		}
							
                		}
            		},
					email: {
                		validators: {
                    		notEmpty: {
                        		message: 'Email tidak boleh kosong'
                    		},
							emailAddress: {
                        		message: 'Penulisan email harus valid'
                    		},
                    		remote: {
                        		type: 'POST',
                        		url: "<?php echo site_url('login/cekEmail'); ?>",
								message: 'Email ini sudah terdaftar',
								delay: 2000
                    		}
							
                		}
            		},
					password: {
                		validators: {
                    		notEmpty: {
								message: 'password tidak boleh kosong'
							},
							stringLength: {
								min: 6,
								message: 'panjang tidak boleh kurang dari 6 karakter'
							}
						}
					},
					password2: {
						validators: {
							notEmpty: {
								message: 'tidak boleh kosong'
							},
							identical: {
								field: 'password',
								message: 'passwod yang anda masukkan tidak sesuai'
							}
						}
					}
					
				}
				
			});
			
		$('#reset').click(function() {
        $('#frm_registrasi').data('bootstrapValidator').resetForm(true);
    	});
	});

</script>
