<script type="text/javascript">
jQuery(document).ready(function() {
    

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
                                url : '<?php echo site_url("admin_login/ceklogin") ?>',
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
                                                        location.href='<?php echo site_url("admin"); ?>';
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




    });

    
    
});
    


</script>
