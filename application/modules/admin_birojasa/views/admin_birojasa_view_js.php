<script src="<?php echo base_url("assets") ?>/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
	$(".tanggal_awal").datepicker().on('changeDate', function(ev){                 
   			 $('.tanggal_awal').datepicker('hide');
		});
	$(".tanggal_akhir").datepicker().on('changeDate', function(ev){                 
   			 $('.tanggal_akhir').datepicker('hide');
		});

	 var dt = $("#daftar_bbn").DataTable(
		 	{
		 		// "order": [[ 0, "desc" ]],
		 		// "iDisplayLength": 50,
				"columnDefs": [ { "targets": 0, "orderable": false } ],
				"processing": true,
		        "serverSide": true,
		        "ajax": '<?php echo site_url("admin_data_list/get_data") ?>'
		 	});

		 
		 $("#daftar_bbn_filter").css("display","none");  
	
	 
		 $("#btn_submit").click(function(){
		 	  // alert('hello');
		 	  

		 	  dt.columns(1).search($("#tanggal_awal").val())
				 .column(2).search($("#tanggal_akhir").val())
				 .column(3).search($("#nomor_rangka").val())
				 .column(4).search($("#nama").val())
				 .draw();

				 return false;
		 });


		 $("#btn_reset").click(function(){
		 	$("#tanggal_awal").val('');
			$("#tanggal_akhir").val('');
			$("#nomor_rangka").val('');
			$("#nama").val('');

			$("#btn_submit").click();
		 });


});
	




</script>