<style type="text/css">
    .deletetext{
        font-size: 20px;
        text-align: center;
        padding: 43px;
    }
    .leave {   
        padding: 2px 2px;
        text-transform: uppercase;
        line-height: 4px;
        font-size: 11px;
        border: 2px solid;
        font-weight: 900;
        border-radius: 9%;
    }
    .leave-danger {
    background: transparent;
    border-color: #de4848;
    color: #de4848;
    }   

    /*put on the header*/
    .sweet-alert .sa-icon {
        width: 60px !important;
        height: 60px !important;
        border: 4px solid gray !important;
        margin: 5px auto !important;
    }
    .sweet-alert .sa-icon.sa-info::before {
        width: 4px !important;
        height: 18px !important;
        bottom: 12px !important;
    }
    .sweet-alert h2 {
        font-size: 21px !important;
        margin: 15px 0 !important;
    }
    .sweet-alert {
        width: 380px !important;
        padding: 18px !important;
        border-radius: 15px !important;
        left: 53% !important;
        top: 51% !important;
    }
    a:not([href]):not([tabindex]) {
    cursor: pointer;
}
</style>
<div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" onclick="window.history.go(-1); return false;" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Check & Apply Leave </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="Admin-Dashboard" ><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Employee</li>
                            <li class="breadcrumb-item active">Check & Apply Leave </li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>Running Porject</small>
                                <h6 class="mb-0 mt-1 text-center"><i class="icon-grid"></i> 1,784</h6>
                            </div>
                            <!-- <span class="bh_visitors float-right">20,1,0</span> -->
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Employee On Leave</small>
                                <h6 class="mb-0 mt-1 text-center"><i class="icon-user"></i> 325</h6>
                            </div>
                            <!-- <span class="bh_visits float-right">20</span> -->
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Total Employee</small>
                                <h6 class="mb-0 mt-1 text-center"><i class="icon-users"></i> 13</h6>
                            </div>
                            <!-- <span class="bh_chats float-right">30</span> -->
                        </div>
                    </div>
                </div>
            </div>
                <?php 
                    $row11 = mysqli_fetch_row(mysqli_query($con,"SELECT MAX(emp_id) FROM users "));
                        $iparr = explode("-", $row11[0]);  
                        if($iparr[1] < 9){$count = $iparr[1] + intval(1);  $vvempid = 'VVT-00'.$count;}
                        elseif($iparr[1] < 99){$count = $iparr[1] + intval(1);  $vvempid = 'VVT-0'.$count;}
                        else{$count = $iparr[1] + intval(1);  $vvempid = 'VVT-'.$count;}
                    ?>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addDepartments"><i class="icon-plus icon-style" ></i> Apply for leave </a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input class="select-all" type="checkbox" name="checkbox">
                                                <span></span>
                                            </th>
                                            <th>Department</th>
                                            <th>EmpName</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>Leave Reason</th>
                                            <th>Leave Type</th>
                                            <th>Totel Days</th>
                                            <th>Contact No</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $emp_que=mysqli_query($con,"SELECT * FROM emp_apply_leave   ");
                                            $cnt = 1; while($emp=mysqli_fetch_assoc($emp_que)) { 
                                                $fatchemp = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id ='".$emp['emp_priid']."' "))
                                                ?>
                                                <tr>
                                                    <td class="width45">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                        <span></span><span></span>
                                                    </td>
                                                    <td><?php echo str_replace('_',' ', $fatchemp['user_type']);?></td>
                                                    <td><?php echo $fatchemp['name'];?></td>
                                                    <td><?php echo date("d F Y", strtotime($emp['leave_from']));?></td>
                                                    <td><?php echo date("d F Y", strtotime($emp['leave_to']));?></td>
                                                    <td class="text-capitalize"><?php echo $emp['leave_reason'] ;?></td>
                                                    <td><span class="leave leave-danger"><?php echo $emp['leave_type'] ;?></span></td>
                                                    <td><?php echo $emp['leave_days'] ;?></td>
                                                    <td><?php echo $emp['contact_num'] ;?></td>
                                                    <td><?php if($emp['leave_status'] == '1'){?>
                                                            <span class="badge badge-success" style="cursor: pointer;">approved</span>
                                                            <?php }elseif($emp['leave_status'] == '2'){?>
                                                            <span class="badge badge-danger" style="cursor: pointer;">Cancel</span>
                                                            <?php }else{?>
                                                                <span class="badge badge-danger" style="cursor: pointer;">pending</span>
                                                            <?php }?>
                                                    </td>
                                                   <td> 
                                                            
                                                        <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#viewempdetails" title="View Leave Details"
                                                         onclick="view_employee(`<?php echo $emp['id'];?>`,`<?php echo $emp['leave_from']?>`,`<?php echo $emp['leave_to'];?>`,
                                                         `<?php echo $emp['leave_reason'];?>`,`<?php echo $emp['leave_type'];?>`,`<?php echo $emp['contact_num'];?>`,
                                                         `<?php echo $emp['leave_purpose'];?>`,`<?php echo $emp['addressduring_leave'];?>`,`<?=$fatchemp['user_type'];?>`,
                                                         `<?=$fatchemp['name'];?>`,`<?=$fatchemp['id'];?>`,`<?=$emp['leave_days'];?>`)"><i class="icon-info"></i></button>

                                                        <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" 
                                                        aria-haspopup="true" aria-expanded="false"><i class=" icon-link"></i></button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" 
                                                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item"onclick="leavestatus('1',`<?php echo $emp['emp_priid'];?>`,`<?php echo $emp['id'];?>`,
                                                            `<?php echo $emp['leave_type'];?>`)"><i class="icon-check badge-success"></i> Approved</a>
                                                            <a class="dropdown-item" onclick="leavestatus('0',`<?php echo $emp['emp_priid'];?>`,`<?php echo $emp['id'];?>`,
                                                             `<?php echo $emp['leave_type'];?>`)"><i class="icon-close badge-danger " ></i> Pending</a>

                                                            <a class="dropdown-item" onclick="leavestatus('2',`<?php echo $emp['emp_priid'];?>`,`<?php echo $emp['id'];?>`,
                                                             `<?php echo $emp['leave_type'];?>`)"><i class="icon-shield badge-danger " ></i> Cancel</a>

                                                            </div>

                                                        <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#updateDepartments" title="Edit"
                                                         onclick="update_employee(`<?php echo $emp['id'];?>`,`<?php echo $emp['leave_from']?>`,`<?php echo $emp['leave_to'];?>`,
                                                         `<?php echo $emp['leave_reason'];?>`,`<?php echo $emp['leave_type'];?>`,`<?php echo $emp['contact_num'];?>`,
                                                         `<?php echo $emp['leave_purpose'];?>`,`<?php echo $emp['addressduring_leave'];?>`,`<?=$fatchemp['user_type'];?>`,
                                                         `<?=$fatchemp['name'];?>`,`<?=$fatchemp['id'];?>`)"><i class="icon-pencil"></i></button>

                                                        <button type="button" class="btn btn-sm js-sweetalert" data-toggle="modal" data-target="#defaultModal"
                                                         title="Delete" data-type="confirm" onclick="deleteemp('<?php echo $emp['id'];?>')"><i class="icon-trash"></i></button>
                                                        
                                                    </td>
                                                </tr>
                                        <?php $cnt = $cnt+1; } ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form  action="Admindelete-leave" method="POST" >
            <div class="modal-content">
                <input type="hidden" name="delete_id" id="deleteid">
                <div class="modal-body deletetext">Are you sure want to Delete This Leave ! </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="icon-trash"></i> Delete</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="icon-close"></i> CLOSE</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- View employee leave Details modal -->
<div class="modal animated bounceIn" id="viewempdetails" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel"><i class="icon-info" ></i>   View Leave Detail</h6>
            </div>
            
                <div class="modal-body">
                    <div class="row clearfix">
                        <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                            <tr>
                                <th>Department<th>
                                <td class="departname"></td>

                                <th>Employee Name<th>
                                <td class="empname"></td>
                            </tr>

                            <tr>
                                <th>Leave Type<th>
                                <td class="update_leavetype"></td>

                                <th>Leave From<th>
                                <td class="update_leavefrom"></td>
                            </tr>
                            <tr>
                                <th>Leave To<th>
                                <td class="update_leaveto"></td>

                                <th>Contact-No. During Leave<th>
                                <td class="update_contactnumber"></td>
                            </tr>
                            <tr>
                                <th>Leave Reason<th>
                                <td class="update_leavereson"></td>

                                <th>Leave Purpose<th>
                                <td class="update_leave_purpose"></td>
                            </tr>
                            <tr>
                                <th>Address During Leave<th>
                                <td class="update_addressduring_leave"></td>

                                <th>Totel Days<th>
                                <td class="toteldays"> </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon-close"></i>  CLOSE</button>
                </div>
        </div>
    </div>
</div>

<!-- Add employee modal -->
<div class="modal animated bounceIn" id="addDepartments" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel"><i class="icon-plus" ></i> Apply For leave</h6>
            </div>
            <form  action="Adminapply-leave-employee" method="POST" name="addemployeeform"  >
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group option-width">
                                <label>Department</label>
                                <select name="emp_departnmae" class="form-control" required onchange="departmentemp(this.value)">
                                    <option value="">Select Department</option>
                                    <?php $emp_dep=mysqli_query($con,"SELECT * FROM users WHERE id != '1' GROUP BY user_type   ");
                                            $cnt = 1; while($dept=mysqli_fetch_assoc($emp_dep)) { ?>
                                            <option value= "<?=$dept['user_type'];?>"><?php echo str_replace('_',' ',$dept['user_type']);?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Employee Name</label>
                                <select name="employeenmae" class="form-control all-emp" required >
                                    <option value="">Employee Name</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Leave Type</label>
                                <div class=" form-group fancy-radio">
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="check1">
                                            <input name="leave_type" value="Half Day" type="radio" id="check1" >
                                            <span>
                                                <i></i>Half Day
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <div class=" form-group fancy-radio">
                                            <label class="form-check-label" for="check2">
                                                <input name="leave_type" value="Full Day" type="radio" id="check2" checked>
                                                <span>
                                                    <i></i>Full Day
                                                </span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Leave From</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                    <input type="date" data-provide="datepicker" data-date-autoclose="true" class="form-control datetime"
                                     placeholder="" name="from_date" required>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Leave To</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                    <input type="date" data-provide="datepicker"  data-date-autoclose="true" class="form-control datetime" 
                                    placeholder="" name="to_date" required>
                                </div>
                            </div>
                        </div>

                        
                         <div class="form-group col-sm-6">
                            <label>Contact-No. During Leave</label>
                            <input type="number" class="form-control"  name="Contact_No_during_leave">
                        </div>

                        <div class="form-group option-width col-sm-6">
                            <label>Leave Reason</label>
                            <select name="leave_reason" class="form-control" required>
                                <option value="">Reason</option>
                                <option value="urgent work">Urgent Work</option>
                                <option value="personal work">Personal Work</option>
                                <option value="sick leave">Sick Leave</option>
                                <option value="schedule leave">Schedule Leave</option>
                            </select>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label>Leave Purpose</label>
                            <textarea class="form-control" rows="3" cols="20" required name="leave_purpose"></textarea>
                        </div>

                        <div class="form-group col-sm-6 ">
                            <label>Address During Leave</label>
                            <textarea class="form-control" rows="3" cols="20" required name="address_during_leave"></textarea>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="icon-plus icon-style" ></i> Apply</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon-close"></i>  CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add employee modal -->
<div class="modal animated bounceIn" id="updateDepartments" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel"><i class="icon-pencil" ></i> Update Employee</h6>
            </div>
           <form  action="adminupdate-leave-employee" method="POST" name="addemployeeform"  onsubmit="return addempvalidationn()">
                <div class="modal-body">
                    <div class="row clearfix">
                    <input type="hidden" id="update_id" name="updateid">
                        <div class="col-sm-6">
                            <div class="form-group option-width">
                                <label>Department</label>
                                <select name="emp_departnmae" class="form-control" id="departname" required onchange="departmentemp(this.value)">
                                    <option value="">Select Department</option>
                                    <?php $emp_dep=mysqli_query($con,"SELECT * FROM users WHERE id != '1' GROUP BY user_type   ");
                                            $cnt = 1; while($dept=mysqli_fetch_assoc($emp_dep)) { ?>
                                            <option value= "<?=$dept['user_type'];?>"><?php echo str_replace('_',' ',$dept['user_type']);?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Employee Name</label>
                                <select name="updateemployeenmae" class="form-control all-emp" required >
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Leave Type</label>
                                <div class=" form-group fancy-radio">
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="check1">
                                            <input name="upleave_type" value="Half Day" type="radio" id="check1" checked>
                                            <span>
                                                <i></i>Half Day
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <div class=" form-group fancy-radio">
                                            <label class="form-check-label" for="check2">
                                                <input name="upleave_type" value="Full Day" type="radio" id="check2">
                                                <span>
                                                    <i></i>Full Day
                                                </span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Leave From</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                    <input type="date" data-provide="datepicker" id="update_leavefrom"  data-date-autoclose="true" class="form-control datetime" 
                                    placeholder="" name="update_leavefrom">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Leave To</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                    <input type="date" data-provide="datepicker"  id="update_leaveto" data-date-autoclose="true" class="form-control datetime" 
                                    placeholder="" name="update_leaveto">
                                </div>
                            </div>
                        </div>

                        
                         <div class="form-group col-sm-6">
                            <label>Contact-No. During Leave</label>
                            <input type="number" class="form-control" id="update_contactnumber" required name="update_contactnumber">
                        </div>

                        <div class="form-group option-width col-sm-6">
                            <label>Leave Reason</label>
                            <select name="update_leavereson" id="update_leavereson" class="form-control">
                                <option value="reson">Reason</option>
                                <option value="urgent work">Urgent Work</option>
                                <option value="personal work">Personal Work</option>
                                <option value="sick leave">Sick Leave</option>
                                <option value="schedule leave">Schedule Leave</option>
                            </select>
                        </div>

                        <div class="col-sm-6 form-group">
                            <label>Leave Purpose</label>
                            <textarea class="form-control" id="update_leave_purpose" rows="3" cols="20" required name="update_leave_purpose"></textarea>
                        </div>

                        <div class="form-group col-sm-6 ">
                            <label>Address During Leave</label>
                            <textarea class="form-control" id="update_addressduring_leave" rows="3" cols="20" required name="update_addressduring_leave"></textarea>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="icon-plus icon-style" ></i> Update Leave Details</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon-close"></i>  CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script type="text/javascript">
  
    function deleteemp(id){
        $('#deleteid').val(id);
    }

    function view_employee(id,leave_form,leave_to,leave_reason,leave_type,contact_number,leave_purpose,addressduring_leave,deptnmae,name,idd,dayss){
        $('.update_leavefrom').html(leave_form);
        $('.update_leaveto').html(leave_to);
        $('.update_leavereson').html(leave_reason);
        $('.update_contactnumber').html(contact_number);
        $('.update_leave_purpose').html(leave_purpose);
        $('.update_addressduring_leave').html(addressduring_leave);
        $('.update_leavetype').html(leave_type);
        $('.departname').html(deptnmae);
        $('.empname').html(name);
        $('.toteldays').html(dayss);
    }
 

    function update_employee(id,leave_form,leave_to,leave_reason,leave_type,contact_number,leave_purpose,addressduring_leave,deptnmae,name,idd){
        $('#update_id').val(id);
        $('#update_leavefrom').val(leave_form);
        $('#update_leaveto').val(leave_to);
        $('#update_leavereson').val(leave_reason);
        $('#update_contactnumber').val(contact_number);
        $('#update_leave_purpose').val(leave_purpose);
        $('#update_addressduring_leave').val(addressduring_leave);
       $('#update_leavetype').val(leave_type);
       $('#departname').val(deptnmae);

       $.ajax({
            url:"Admin-empdetpmet",
            type:"POST",
            data: {empdetpmet:deptnmae},
                success:function(success){
                    // console.log(success);
                    var all_emp = '';
                    all_emp += '<option value ="'+idd+'" >'+name+'</option>';
                    JSON.parse(success).forEach(function (allempname){
                        all_emp += '<option value ="'+allempname.empid +'" >'+ allempname.empname + '</option>'; 
                    });
                    $('.all-emp').html(all_emp);
                    // console.log(all_emp);
                }
        }); 

    }

    function leavestatus(status,empid,leaveid,leavetype){
        // console.log('status',status);
        // console.log('empid',empid);
        // console.log('leaveid',leaveid);
        if(status == 1){
            var title = 'Are You Sure Want approved This Leave';
            var confirmButtonText = 'Approved Leave';
            var buttoncolor = "#22AF46";
        }else if(status == 2){
            var title = 'Are You Sure Want Cancel This Leave';
            var confirmButtonText = 'Cancel Leave';
            var buttoncolor = "#DE4848";
        }else{
            var title = 'Are You Sure Want Pending This Leave';
            var confirmButtonText = 'Pending Leave';
            var buttoncolor = "#DE4848";
        }
         swal({
            title: title,
            text: "",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: buttoncolor,
            cancelButtonText: "Cancel",
            confirmButtonText: confirmButtonText,
             closeOnCancel: true,
            closeOnConfirm: true 
        }, function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url:"Admin-approvleave",
                    type:"POST",
                    data: {status:status,empid:empid,leaveid:leaveid,leavetype:leavetype},
                        success:function(success){
                            console.log(success);
                            if(success == 1){
                                toastr.success('Employee Leave Approved Successfully','Successfully');
                                // location.reload();
                            }else if(success == 2){
                                toastr.success('Employee Leave Cancel Successfully','Successfully');
                            }else if(success == 0) {
                                toastr.success('Employee Leave Pending Successfully','Successfully');
                            }else{
                                toastr.error('Something Wrong Please Check','Error');
                            }

                            setTimeout(function(){ location.reload(); }, 500);
                            
                        }
                }); 
            }
        });

    }

    function departmentemp(empdetpmet){
        $.ajax({
            url:"Admin-empdetpmet",
            type:"POST",
            data: {empdetpmet:empdetpmet},
                success:function(success){
                    // console.log(success);
                    var all_emp = '';
                    all_emp += '<option value ="" > Select Employee </option>';
                    JSON.parse(success).forEach(function (allempname){
                        all_emp += '<option value ="'+allempname.empid +'" >'+ allempname.empname + '</option>'; 
                    });
                    $('.all-emp').html(all_emp);
                    // console.log(all_emp);
                }
        }); 
    }

    // $(".status").click(function(){
       
    //     swal({
    //         title: "Are you sure want Time In !",
    //         text: "",
    //         type: "info",
    //         showCancelButton: true,
    //         confirmButtonColor: "#22AF46",
    //         cancelButtonText: "Cancel",
    //         confirmButtonText: "Time In",
    //          closeOnCancel: true,
    //         closeOnConfirm: true 
    //     }, function (isConfirm) {
    //         if (isConfirm) {
    //             // $.ajax({
    //             //     url:"employee-timeIn",
    //             //     type:"POST",
    //             //     data: {timedatetime:'2021-4-20 10:00:00'},
    //             //         success:function(success){
    //             //             console.log(success);
    //             //             if(success == 1){
    //             //                 toastr.success('Time In Successfully','Successfully');
    //             //                 // location.reload();
    //             //             }else if(success == 0){
    //             //                 toastr.info('already timed in','Already');
    //             //             }else if(success == 2) {
    //             //                 toastr.error('Something Wrong Please Try Again','Error');
    //             //             }

    //             //             setTimeout(function(){ location.reload(); }, 500);
                            
    //             //         }
    //             // }); 
    //         }
    //     });

    // });


</script>
