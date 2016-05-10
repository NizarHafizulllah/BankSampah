<script type="text/javascript">



	$(document).ready(function() {

        $(".tanggal").datepicker().on('changeDate', function(ev){                 
             $('.tanggal').datepicker('hide');
        });

        
		$("#btn_submit1").click(function(){
 			$.ajax({

            url : '<?php echo site_url("us_bbn_satu/update1") ?>',
            data : $('#form_update1').serialize(),
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

                    
                    // $('#form_update').data('bootstrapValidator').resetForm(true);
                    $("#proses").html(obj.nama_status);
                    $("#proses").attr('data-target',obj.status);

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
 			$('.modal').modal('hide');
	});



    $("#btn_submit2").click(function(){
            $.ajax({

            url : '<?php echo site_url("us_bbn_satu/update2") ?>',
            data : $('#form_update2').serialize(),
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
                    
                      // $('#form_update').data('bootstrapValisdator').resetForm(true);
                      $("#proses").html(obj.nama_status);
                    $("#proses").attr('data-target',obj.status);

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
            $('.modal').modal('hide');
    });

    $("#btn_submit3").click(function(){
            $.ajax({

            url : '<?php echo site_url("us_bbn_satu/update3") ?>',
            data : $('#form_update3').serialize(),
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
                      
                      // $('#form_update').data('bootstrapValidator').resetForm(true);
                      $("#proses").html(obj.nama_status);
                    $("#proses").attr('data-target',obj.status);

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
            $('.modal').modal('hide');
    });




      $("#btn_submit4").click(function(){
            $.ajax({

            url : '<?php echo site_url("us_bbn_satu/update4") ?>',
            data : $('#form_update4').serialize(),
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
                     
                      // $('#form_update').data('bootstrapValidator').resetForm(true);
                       $("#proses").html(obj.nama_status);
                    $("#proses").attr('data-target',obj.status);

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
            $('.modal').modal('hide');
    });

       $("#btn_submit5").click(function(){
            $.ajax({

            url : '<?php echo site_url("us_bbn_satu/update5") ?>',
            data : $('#form_update5').serialize(),
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
                     
                      // $('#form_update').data('bootstrapValidator').resetForm(true);
                      $("#proses").html(obj.nama_status);
                    $("#proses").attr('data-target',obj.status);

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
            $('.modal').modal('hide');
    });


        $("#btn_submit6").click(function(){
            $.ajax({

            url : '<?php echo site_url("us_bbn_satu/update6") ?>',
            data : $('#form_update6').serialize(),
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
                      
                      // $('#form_update').data('bootstrapValidator').resetForm(true);
                      $("#proses").html(obj.nama_status);
                    $("#proses").attr('data-target',obj.status);

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
            $('.modal').modal('hide');
    });

 $("#btn_submit7").click(function(){
            $.ajax({

            url : '<?php echo site_url("us_bbn_satu/update7") ?>',
            data : $('#form_update7').serialize(),
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
                      
                      // $('#form_update').data('bootstrapValidator').resetForm(true);
                      $("#proses").html(obj.nama_status);
                    $("#proses").attr('data-target',obj.status);

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
            $('.modal').modal('hide');
    });





});
</script>