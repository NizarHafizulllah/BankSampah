<script type="text/javascript" src="<?php echo base_url("assets") ?>/js/jquery.loadJSON.js"></script>
<script>
$(document).ready(function(){

	$("#vDAFT_DATE").datepicker();

	$.ajax({
		url : '<?php echo site_url("$controller/get_pendaftaran_detail/$daft_id") ?>',
		dataType:'json',
		success : function(hasil) {
			$("#frm_daftar").loadJSON(hasil);

			$("#warna_id").val(hasil.warna_id).attr('selected','selected');
			$("#jenis_id").val(hasil.jenis_id).attr('selected','selected');
			$("#merk_id").val(hasil.merk_id).attr('selected','selected');
		}
	});



	$("#frm_daftar").submit(function(){
			console.log('hallo..');
			
			$.ajax({
				url : '<?php echo site_url("$controller/update"); ?>',
				dataType:'json',
				type : 'post',
				data : $(this).serialize(),
				success : function(obj) {
					if(obj.error ==false){
						$("html, body").animate({ scrollTop: 0 }, "slow");
						$("#message2").html(obj.message);
						$("#salah").hide();
						$("#benar").show();
						
						//nonactif();
						 
						
					}
					else {
						$("html, body").animate({ scrollTop: 0 }, "slow");
						$("#message").html(obj.message);
						$("#salah").show();
						$("#benar").hide();
						
						
					}
				}
			});
			
			return false;
		});

});
</script>