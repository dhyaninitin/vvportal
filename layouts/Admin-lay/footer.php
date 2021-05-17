 
</div>

<script type="text/javascript">
	function logout() {
		swal({
	        title: "Are you sure want to logout !",
	        text: "",
	        type: "info",
	        showCancelButton: true,
	        confirmButtonColor: "#dc3545",
	        cancelButtonText: "Cancel",
	        confirmButtonText: "Logout",
	         closeOnCancel: true,
	        closeOnConfirm: true
	       
	    }, function (isConfirm) {
	        if (isConfirm) {
	           window.location.assign("Logout");
	        }
	    });
	}
</script>
<!-- Javascript -->
<script src="<?php echo $base_url;?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo $base_url;?>assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo $base_url;?>assets/vendor/toastr/toastr.js"></script>
<script src="<?php echo $base_url;?>assets/bundles/knob.bundle.js"></script> 

<script src="<?php echo $base_url;?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo $base_url;?>assets/bundles/datatablescripts.bundle.js"></script>

<script src="<?php echo $base_url;?>assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>
