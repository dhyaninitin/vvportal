 
</div>

<!-- Add employee modal -->
<div class="modal animated bounceIn" id="addDepartments" tabindex="-1" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document" style="max-width: 1024px;">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel"><i class="icon-user"></i> Employee Information Form</h6>
                <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="icon-close"></i></button>
            </div>

                <div class="modal-body" style="overflow-y: scroll;max-height: 500px;">
                    <div class="row clearfix" style="padding: 17px;">
                        <form id="wizard_with_validation" method="POST">
                            <h3>Personal Information</h3>
                            <fieldset>
                            	<div class="row">
	                                <div class="form-group col-md-12">
	                                	<label>Full Name <span class="req">*</span></label>
	                                    <input type="text" class="form-control" name="personal1" placeholder="Full Name *" required>
	                                </div>
	                                <div class="form-group col-md-6">
	                                	<label>Home Phone <span class="req">*</span></label>
	                                    <input type="number" class="form-control" placeholder="Home Phone *" name="personal2" required>
	                                </div>
	                                <div class="form-group col-md-6">
	                                	<label>Cell Phone <span class="req">*</span></label>
	                                    <input type="number" class="form-control" placeholder="Cell Phone *" name="personal3" required >
	                                </div>
	                                <div class="form-group col-md-6">
	                                	<label>Email Address <span class="req">*</span></label>
	                                    <input type="email" class="form-control" placeholder="Email Address *" name="personal4" required>
	                                </div>
	                                <div class="form-group col-md-6">
	                                	<label>Government ID Type and Number <span class="req">*</span></label>
	                                    <input type="text" class="form-control" placeholder="Government ID Type and Number  *" name="personal5" required>
	                                </div>

	                                <div class="form-group col-md-4">
	                                	<label>Birth Date <span class="req">*</span></label>
	                                    <input type="date" class="form-control" placeholder="Birth Date *" name="personal6" required >
	                                </div>

	                                <div class="form-group col-md-4">
	                                	<label>Marital Status<span class="req">*</span></label>
	                                    <input type="text" class="form-control" placeholder="Marital Status *" name="personal7" required >
	                                </div>

	                                <div class="form-group col-md-4">
	                                	<label>Blood Group <span class="req">*</span></label>
	                                    <input type="text" class="form-control" placeholder="Blood Group *" name="personal8" required>
	                                </div>
	                                <div class="form-group col-md-12">
	                                	<label>Father/Spouse Name <span class="req">*</span></label>
	                                    <input type="text" class="form-control" placeholder="Father/Spouse Name *" name="personal9"required >
	                                </div>
	                                <div class="form-group col-md-6">
	                                	<label>Father/Spouse Occupation <span class="req">*</span></label>
	                                    <input type="text" class="form-control" placeholder="Father/Spouse Occupation *" name="personal10" required>
	                                </div>
	                                <div class="form-group col-md-6">
	                                	<label>Father/Spouse Phone <span class="req">*</span></label>
	                                    <input type="text" class="form-control" placeholder="Father/Spouse Phone *" name="personal11" required>
	                                </div>
	                                <div class="form-group col-md-12">
	                                	<label>Full Address  <span class="req">*</span></label>
                                    	<textarea name="personal12" cols="30" rows="3" placeholder="Full Address *" class="form-control no-resize" required></textarea>
                                	</div>
                                </div>
                            </fieldset>
                            <h3>Educational Info</h3>
	                            <fieldset>
	                            	<div class="row">
		                                <div class="form-group col-md-6">
		                                	<label>High School Name & city <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="High School Name & city *" name="educational" required>
		                                </div>
		                                <div class="form-group col-md-6">
		                                	<label>High School Percentage  <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="High School Percentage *" name="educational1" required>
		                                </div>
		                               
		                                <div class="form-group col-md-6">
		                                	<label>Intermediate School Name& city  <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Intermediate School Name& city *" name="educational2" required>
		                                </div>
		                                <div class="form-group col-md-6">
		                                	<label>Intermediate Percentage  <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Intermediate Percentage *" name="educational3" required>
		                                </div>

		                                <div class="col-md-12">
		                                	<label>Bachelor Degree</label>
		                                </div>
		                                 
		                                <div class="form-group col-md-6">
		                                	<label>College Name & Course  <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="College Name & Course  *" name="educational4" required>
		                                </div>

		                                <div class="form-group col-md-6">
		                                	<label>Bachelor Percentage   <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Bachelor Percentage *" name="educational5" required>
		                                </div>

		                                <div class="col-md-12">
		                                	<label>Master’s Degree</label>
		                                </div>
		                                 
		                                <div class="form-group col-md-6">
		                                	<label>College Name & Course  <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="College Name & Course  *" name="educational6" required>
		                                </div>

		                                <div class="form-group col-md-6">
		                                	<label>Bachelor Percentage <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Bachelor Percentage *" name="educational7" required>
		                                </div>
  
	                                </div>
                            	</fieldset>
                            <h3>Job Information</h3>
	                             <fieldset>
	                            	<div class="row">
	                            		<div class="col-md-12"><label>Last 2 Employment Details</label></div>
	                            		<div class="col-md-12"><label>1 Company Details</label></div>
		                                <div class="form-group col-md-6">
		                                	<label>Position <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Position *" name="jobinformation" required>
		                                </div>
		                                <div class="form-group col-md-6">
		                                	<label>Company Name <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Company Name *" name="jobinformation1" required>
		                                </div>
		                               
		                                <div class="form-group col-md-6">
		                                	<label>Location <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Location *" name="jobinformation2" required>
		                                </div>
		                                <div class="form-group col-md-6">
		                                	<label>Email Address <span class="req">*</span></label>
		                                    <input type="email" class="form-control" placeholder="Email Address *" name="jobinformation3" required>
		                                </div>
		                                 
		                                <div class="form-group col-md-6">
		                                	<label>Work Phone <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Work Phone  *" name="jobinformation4" required>
		                                </div>

		                                <div class="form-group col-md-6">
		                                	<label>Cell Phone <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Cell Phone *" name="jobinformation5" required>
		                                </div>

		                                <div class="form-group col-md-6">
		                                	<label>Start Date <span class="req">*</span></label>
		                                    <input type="date" class="form-control" placeholder="Start Date *" name="jobinformation6" required>
		                                </div>

		                                <div class="form-group col-md-6">
		                                	<label>End Date <span class="req">*</span></label>
		                                    <input type="date" class="form-control" placeholder="End Date *" name="jobinformation7"required>
		                                </div>

		                                <div class="col-md-12"><label>2 Company Details</label></div>
		                                <div class="form-group col-md-6">
		                                	<label>Position <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Position *" name="jobinformation8" required>
		                                </div>
		                                <div class="form-group col-md-6">
		                                	<label>Company Name <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Company Name *" name="jobinformation9" required>
		                                </div>
		                               
		                                <div class="form-group col-md-6">
		                                	<label>Location <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Location *" name="jobinformation10" required>
		                                </div>
		                                <div class="form-group col-md-6">
		                                	<label>Email Address <span class="req">*</span></label>
		                                    <input type="email" class="form-control" placeholder="Email Address *" name="jobinformation11"required >
		                                </div>
		                                 
		                                <div class="form-group col-md-6">
		                                	<label>Work Phone <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Work Phone  *" name="jobinformation12" required>
		                                </div>

		                                <div class="form-group col-md-6">
		                                	<label>Cell Phone <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Cell Phone *" name="jobinformation13" required>
		                                </div>

		                                <div class="form-group col-md-6">
		                                	<label>Start Date <span class="req">*</span></label>
		                                    <input type="date" class="form-control" placeholder="Start Date *" name="jobinformation14"required >
		                                </div>

		                                <div class="form-group col-md-6">
		                                	<label>End Date <span class="req">*</span></label>
		                                    <input type="date" class="form-control" placeholder="End Date *" name="jobinformation15"required >
		                                </div>

		                                <div class="col-md-12"><label>Skills</label></div>
		                                <div class="col-md-12">
		                                	<label>Skills <span class="req">*</span></label>
		                                	<textarea name="jobinformation16" cols="30" rows="5" placeholder="Skills *" class="form-control no-resize"required ></textarea>
		                                </div>
  
	                                </div>
                            	</fieldset>

                            <h3>Emergency Contact Info</h3>
	                             <fieldset>
	                            	<div class="row">
		                                <div class="form-group col-md-12">
		                                	<label>Full Name <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Full Name *" name="emergency"required >
		                                </div>
		                                <div class="form-group col-md-6">
		                                	<label>Primary Phone <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Primary Phone *" name="emergency1"required>
		                                </div>
		                               
		                                <div class="form-group col-md-6">
		                                	<label>Cell Phone <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Cell Phone *" name="emergency2" required>
		                                </div>
		                                <div class="form-group col-md-6">
		                                	<label>Relationship <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Relationship *" name="emergency3" required>
		                                </div>
		                                 <div class="form-group col-md-12">
		                                 	<label>Full Address <span class="req">*</span></label>
		                                	<textarea name="emergency4" cols="30" rows="3" placeholder="Full Address *" class="form-control no-resize" required></textarea>
		                                </div>
	                                </div>
                            	</fieldset>

                             <h3>Banking Details</h3>
	                             <fieldset>
	                            	<div class="row">
		                                <div class="form-group col-md-12">
		                                	<label>Full Name on Account <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Full Name on Account *" name="banking" required>
		                                </div>
		                                <div class="form-group col-md-12">
		                                	<label>Bank Account Number <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Bank Account Number *" name="banking1" required>
		                                </div>
		                                <div class="form-group col-md-6">
		                                	<label>Pan Card Number <span class="req">*</span></label>
		                                    <input type="number" class="form-control" placeholder="Pan Card Number *" name="banking2" required>
		                                </div>
		                               
		                                <div class="form-group col-md-6">
		                                	<label>IFSC Code <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="IFSC Code *" name="banking3" required>
		                                </div>

		                                <div class="form-group col-md-6">
		                                	<label>Bank Name <span class="req">*</span></label>
		                                    <input type="text" class="form-control" placeholder="Bank Name *" name="banking4" required>
		                                </div>

		                                <div class="form-group col-md-12">
		                                	<label>Note <span class="req">*</span></label>
		                                	<textarea name="banking5" cols="30" rows="3" placeholder="Note *" class="form-control no-resize" required></textarea>
		                                </div>

		                                 
	                                </div>
                            	</fieldset>
                        </form>
                    </div>
                </div>
 
        </div>
    </div>
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

	$(document).ready(function() {
		var sessionid = '<?php echo $_SESSION['id'];?>';
		// console.log(sessionid);
		$.ajax({
	        url:"checkemployeedetails",
	        type:"POST",
	        data: {sessionid:sessionid},
	            success:function(data){
	            	if(data <= 0){
	            		$('#addDepartments').modal('show');
	            	}else{
	            		$('#addDepartments').modal('hide');
	            	}	               
	            }
	    });

    	// $('#addDepartments').modal('show');
	});


</script>
<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/vendor/toastr/toastr.js"></script>
<script src="assets/bundles/chartist.bundle.js"></script>
<script src="assets/bundles/knob.bundle.js"></script> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/index.js"></script>

<script src="assets/vendor/jquery-steps/jquery.steps.js"></script> 
<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
<script src="assets/js/pages/forms/form-wizard.js"></script>

<script src="assets/bundles/datatablescripts.bundle.js"></script>

<script src="assets/js/pages/tables/jquery-datatable.js"></script>

</body>

</html>
