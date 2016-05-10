<script src="<?php echo base_url("assets") ?>/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	


 var dt = $("#daftar_bbn").DataTable(
		 	{
		 		// "order": [[ 0, "desc" ]],
		 		// "iDisplayLength": 50,
				"columnDefs": [ { "targets": 0, "orderable": false } ],
				"processing": true,
		        "serverSide": true,
		        "ajax": '<?php echo site_url("$this->controller/get_data") ?>'
		 	});

		 
		 $("#daftar_bbn_filter").css("display","none");  


</script>