<script>
	jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch(window.location.origin+"/bbn/assets/img/backgrounds/1.jpg");
    
		
		});
    /*
        Ubah Password form validation
    */
    
		$(document).ready(function(){
			$('#form').bootstrapValidator({
				message: 'This value is not valid', 
				feedbackIcons: { 
					valid: 'glyphicon glyphicon-ok', 
					invalid: 'glyphicon glyphicon-remove', 
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					pswd: {
						validators: {
							notEmpty: {
								message : 'Password tidak boleh kosong'	
							},
							stringLength: {
								min: 6, 
								message: 'Panjang minimal 6 karakter'
							}
						}
					},
					repswd: {
                		validators: {
                    		notEmpty: {
                        		message: 'tidak boleh kosong'
                    		},
                    		identical: {
                        		field: 'pswd',
                        		message: 'passwod yang anda masukkan tidak sesuai'
                    		}
                		}
            		}
					
				}
				
			});
			
		$('#reset').click(function() {
        $('#form_reg').data('bootstrapValidator').resetForm(true);
    	});
	});
		
		
</script>