<script>
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch(window.location.origin+"/bbn/assets/img/backgrounds/1.jpg");
    
    /*
        Login form validation
    */
    $('#form_lupa_password').bootstrapValidator({
				message: 'This value is not valid', 
				feedbackIcons: { 
					valid: 'glyphicon glyphicon-ok', 
					invalid: 'glyphicon glyphicon-remove', 
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
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
                        		url: "<?php echo site_url('lupa_password/cekEmail'); ?>",
								message: 'Email ini belum terdaftar',
								delay: 2000
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