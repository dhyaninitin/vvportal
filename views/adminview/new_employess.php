<style type="text/css">
    .deletetext{
        font-size: 20px;
        text-align: center;
        padding: 43px;
    }
</style>
<div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" onclick="window.history.go(-1); return false;" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add New Employee </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="Admin-Dashboard" ><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Employee</li>
                            <li class="breadcrumb-item active">Add New Employee </li>
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
                                <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addDepartments"><i class="icon-plus icon-style" ></i> Add New Employee   </a></li>
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
                                            <th>Employee ID</th>
                                            <th>Employee Name</th>
                                            <th>Login Details</th>
                                            <th>Phone / Personal Email </th>
                                            <th>Join Date</th>
                                            <th>Role</th>
                                            <th>Sallery</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $emp_que=mysqli_query($con,"SELECT * FROM users WHERE id != '1'  ");
                                            $cnt = 1; while($emp=mysqli_fetch_assoc($emp_que)) { ?>
                                                <tr>
                                                    <td class="width45">
                                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                        <span></span><span></span>
                                                        <?php if($emp['image'] != ''){?>
                                                        <?php }else{?>
                                                            <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                                        <?php }?>
                                                    </td>
                                                     <td><span><?php echo $emp['emp_id'];?></span></td>
                                                     <td><span><?php echo $emp['name'];?></span></td>
                                                    <td>
                                                        <h6 class="mb-0"><?php echo $emp['email'];?></h6>
                                                        <span class="showpass<?php echo $cnt;?>" >*************<span class="pull-right"><button class="btn btn-info" type="button" onclick="showpasswordtable(`<?php echo $emp['pass'];?>`, 'showpass<?php echo $cnt;?>')"><span><i class="icon-eye"></i></span></button></span></span>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-0">+91 <?php echo $emp['mobile'];?></h6>
                                                        <span><?php echo $emp['professional_email'];?></span>
                                                    </td>
                                                    <td><?php echo date("d F Y", strtotime($emp['joining_date']));?></td>
                                                    <td><?php echo str_replace('_', ' ', $emp['user_type']); ;?></td>
                                                    <td><?php echo '<i class="fa fa-inr"></i> '.$emp['emp_sallery']; ?></td>
                                                    <td><?php if($emp['status'] == '1'){?>
                                                            <span class="badge badge-success" style="cursor: pointer;">Active</span>
                                                        <?php }else{?>
                                                            <span class="badge badge-danger" style="cursor: pointer;">Deactivate</span>
                                                        <?php }?>
                                                    </td>
                                                   <td>
                                                        <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#updateDepartments" title="Edit" 
                                                        onclick="update_employee(`<?php echo $emp['id'];?>`,`<?php echo $emp['emp_id']?>`,`<?php echo $emp['name'];?>`,
                                                        `<?php echo $emp['email'];?>`,`<?php echo $emp['pass'];?>`,`<?php echo $emp['mobile'];?>`,
                                                        `<?php echo date("d/m/Y", strtotime($emp['joining_date'])); ?>`,`<?php echo $emp['user_type'];?>`,
                                                        `<?php echo $emp['professional_email'];?>`,`<?php echo date("d/m/Y",
                                                         strtotime($emp['start_date']));?>`,`<?=$emp['emp_sallery'];?>`)"><i class="icon-pencil"></i></button>
                                                        <button type="button" class="btn btn-sm js-sweetalert" data-toggle="modal" data-target="#defaultModal" title="Delete" data-type="confirm" onclick="deleteemp('<?php echo $emp['id'];?>')"><i class="icon-trash"></i></button>
                                                        
                                                            <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class=" icon-envelope"></i></button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                            <a class="dropdown-item" href="javascript:void(0);">Join Doc</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Offer Letter</a>
                                                            </div>
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
        <form  action="delete-employee" method="POST" >
            <div class="modal-content">
                <input type="hidden" name="delete_id" id="deleteid">
                <div class="modal-body deletetext">Are you sure want to Delete This Employee ! </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="icon-trash"></i> Delete Employee</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="icon-close"></i> CLOSE</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Add employee modal -->
<div class="modal animated bounceIn" id="addDepartments" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel"><i class="icon-plus" ></i> Add New Employee</h6>
            </div>
            <form  action="add-new-employee" method="POST" name="addemployeeform"  onsubmit="return addempvalidationn()">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Employee ID</label>                                    
                                <input type="text" class="form-control" name="emp_id" value="<?php echo $vvempid;?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employee Name <span class="required">*</span></label>                                    
                                <input type="text" class="form-control" id="emp_name" name="emp_name" placeholder="Employee Name" >
                                <span style="color:#b30505;" id="emp_nameerror"></span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Login Email Address <span class="required">*</span></label>                                    
                                <input type="email" class="form-control" id="emp_login_email" name="emp_login_email" placeholder="Portal Email Address" >
                                <span style="color:#b30505;" id="loginemailerror"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label>Password  <span class="required">*</span></label>        
                                <div class="input-group">
                                    <input type="password" class="form-control" id="emp_password" name="emp_password" placeholder="Enter Portal Password">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="showpassword()"><span><i class="icon-eye"></i></span></button>
                                    </div>
                                </div>    
                                <span style="color:#b30505;" id="passworderror"></span>                                                           
                                <!-- <input type="password" class="form-control" id="emp_password" name="emp_password" placeholder="Enter Portal Password"> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Phone Number  <span class="required">*</span></label>                                    
                                <input type="number" class="form-control" id="emp_phonenumer" name="emp_phonenumer" placeholder="Enter Phone number">
                                 <span style="color:#b30505;" id="phonenumbererror"></span> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Personal Email  <span class="required">*</span></label>                                    
                                <input type="email" class="form-control" id="emp_personalemail" name="emp_personalemail" placeholder="Enter email Address">
                                <span style="color:#b30505;" id="personalemailerror"></span> 
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Start Date  <span class="required">*</span></label>                                    
                                <input data-provide="datepicker" id="emp_start_date" name="emp_start_date" autocomplete ="off" data-date-autoclose="true" placeholder="Start date" class="form-control" >
                                <span style="color:#b30505;" id="startdateerror"></span> 
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Join Date  <span class="required">*</span></label>                                    
                                <input data-provide="datepicker" id="emp_join_date" name="emp_join_date" autocomplete ="off" data-date-autoclose="true" placeholder="join date" class="form-control" >
                                <span style="color:#b30505;" id="joindateerror"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employee Role  <span class="required">*</span></label>                                    
                                <select class="form-control" id="emp_employee_role" name="emp_employee_role">
                                    <option value="">Select Employee Role</option>
                                    <option value="HR">HR</option>
                                    <option value="WEB_DESIGNER">Web Designer</option>
                                    <option value="WEB_DEVELOPER">Web Developer</option>
                                    <option value="TEAM_LEADER">Team Leader</option>
                                    <option value="ANDROID_DEVELOPER">Android Developer</option>
                                    <option value="IOS_DEVELOPER">IOS Developer</option>
                                </select>
                                <span style="color:#b30505;" id="emproleerror"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Employee Sallery <span class="required">*</span></label>                                    
                                <input type="number"  name="emp_sallery" autocomplete ="off"  placeholder="Enter Employee Sallery" class="form-control" >
                                <!-- <span style="color:#b30505;" id="joindateerror"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="icon-plus icon-style" ></i> Add Employee</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon-close"></i>  CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- update employee modal -->
<div class="modal animated bounceIn" id="updateDepartments" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel"><i class="icon-pencil" ></i> Update Employee</h6>
            </div>
            <form  action="update-new-employee" method="POST" name="updateemployeeform"  onsubmit="return updateempvalidationn()">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Employee ID</label>  
                            <input type="hidden" name="update_id" id="update_id">                                  
                                <input type="text" class="form-control" name="updateemp_id" id="update_empid"  readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employee Name <span class="required">*</span></label>                                    
                                <input type="text" class="form-control" id="update_empname" name="update_empname" placeholder="Employee Name" >
                                <span style="color:#b30505;" id="emp_nameerror1"></span>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Login Email Address <span class="required">*</span></label>                                    
                                <input type="email" class="form-control" id="update_empaemail" name="update_empaemail" placeholder="Portal Email Address" >
                                <span style="color:#b30505;" id="loginemailerror1"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> 
                                <label>Password  <span class="required">*</span></label>        
                                <div class="input-group">
                                    <input type="password" class="form-control" id="update_emppassword" name="update_emppassword" placeholder="Enter Portal Password">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="showpassword1()"><span><i class="icon-eye"></i></span></button>
                                    </div>
                                </div>    
                                <span style="color:#b30505;" id="passworderror1"></span>                                                           
                                <!-- <input type="password" class="form-control" id="emp_password" name="emp_password" placeholder="Enter Portal Password"> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Phone Number  <span class="required">*</span></label>                                    
                                <input type="number" class="form-control" id="update_empmobilenumber" name="update_empmobilenumber" placeholder="Enter Phone number">
                                 <span style="color:#b30505;" id="phonenumbererror1"></span> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Personal Email  <span class="required">*</span></label>                                    
                                <input type="email" class="form-control" id="upemp_personalemail" name="upemp_personalemail" placeholder="Enter email Address">
                                <span style="color:#b30505;" id="personalemailerror1"></span> 
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Start Date  <span class="required">*</span></label>                                    
                                <input data-provide="datepicker" id="upemp_start_date" name="upemp_start_date" autocomplete ="off" data-date-autoclose="true" placeholder="Start date" class="form-control" >
                                <span style="color:#b30505;" id="startdateerror1"></span> 
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Join Date  <span class="required">*</span></label>                                    
                                <input data-provide="datepicker" id="update_empjoingdate" name="update_empjoingdate" autocomplete ="off" data-date-autoclose="true" placeholder="join date" class="form-control" >
                                <span style="color:#b30505;" id="joindateerror1"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employee Role  <span class="required">*</span></label>                                    
                                <select class="form-control" id="update_emptype" name="update_emptype">
                                    <option value="">Select Employee Role</option>
                                    <option value="HR">HR</option>
                                    <option value="WEB_DESIGNER">Web Designer</option>
                                    <option value="WEB_DEVELOPER">Web Developer</option>
                                    <option value="TEAM_LEADER">Team Leader</option>
                                    <option value="ANDROID_DEVELOPER">Android Developer</option>
                                    <option value="IOS_DEVELOPER">IOS Developer</option>
                                </select>
                                <span style="color:#b30505;" id="emproleerror1"></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Employee Sallery <span class="required">*</span></label>                                    
                                <input type="number" name="upemp_sallery" autocomplete ="off" id="upsallery" placeholder="Enter Employee Sallery" class="form-control" >
                                <!-- <span style="color:#b30505;" id="joindateerror"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="icon-pencil icon-style" ></i> Update Employee</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon-close"></i>  CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script type="text/javascript">
    function showpasswordtable(pass,spanclass){
        $("."+spanclass).html(pass);
    }

    function deleteemp(id){
        $('#deleteid').val(id);
    }
</script>

<script type="text/javascript">
        // Change the type of input to password or text
        function showpassword() {
            var temp = document.getElementById("emp_password");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }

         function showpassword1() {
            var temp = document.getElementById("update_emppassword");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }

        
        function addempvalidation() { 
            // alert('dsdasdada');
            var error = "This field is required *";
            var emp_name = document.forms["addemployeeform"]["emp_name"]; 
            var emp_login_email = document.forms["addemployeeform"]["emp_login_email"]; 
            var emp_password = document.forms["addemployeeform"]["emp_password"]; 
            var emp_phonenumer = document.forms["addemployeeform"]["emp_phonenumer"]; 
            var emp_personalemail = document.forms["addemployeeform"]["emp_personalemail"]; 
            var emp_start_date = document.forms["addemployeeform"]["emp_start_date"]; 
            var emp_join_date = document.forms["addemployeeform"]["emp_join_date"]; 
            var emp_employee_role = document.forms["addemployeeform"]["emp_employee_role"]; 


             if (emp_name.value == "") { 
                 document.getElementById('emp_nameerror').innerHTML = error;
                emp_name.focus();
                $('#emp_name').addClass('alertclass');
                return false; 
            }
            else{
                $('#emp_name').removeClass('alertclass');
                document.getElementById('emp_nameerror').style.display = "none";
            }

            if (emp_login_email.value == "") { 
                document.getElementById('loginemailerror').innerHTML = error;
                emp_login_email.focus(); 
                $('#emp_login_email').addClass('alertclass');
                return false; 
            } else{
                $('#emp_login_email').removeClass('alertclass');
                document.getElementById('loginemailerror').style.display = "none";
            } 

            if (emp_password.value == "") { 
                document.getElementById('passworderror').innerHTML = error;
                emp_password.focus(); 
                $('#emp_password').addClass('alertclass');
                return false; 
            } else{
                $('#emp_password').removeClass('alertclass');
                document.getElementById('passworderror').style.display = "none";
            } 

            if (emp_phonenumer.value == "") { 
                document.getElementById('phonenumbererror').innerHTML = error;
                emp_phonenumer.focus(); 
                $('#emp_phonenumer').addClass('alertclass');
                return false; 
            } else{
                $('#emp_phonenumer').removeClass('alertclass');
                document.getElementById('phonenumbererror').style.display = "none";
            } 

            if (emp_personalemail.value == "") { 
                document.getElementById('personalemailerror').innerHTML = error;
                emp_personalemail.focus(); 
                $('#emp_personalemail').addClass('alertclass');
                return false; 
            } else{
                $('#emp_personalemail').removeClass('alertclass');
                document.getElementById('personalemailerror').style.display = "none";
            } 

            if (emp_start_date.value == "") { 
                document.getElementById('startdateerror').innerHTML = error;
                emp_start_date.focus(); 
                $('#emp_start_date').addClass('alertclass');
                return false; 
            } else{
                $('#emp_start_date').removeClass('alertclass');
                document.getElementById('startdateerror').style.display = "none";
            }

             if (emp_join_date.value == "") { 
                document.getElementById('joindateerror').innerHTML = error;
                emp_join_date.focus(); 
                $('#emp_join_date').addClass('alertclass');
                return false; 
            } else{
                $('#emp_join_date').removeClass('alertclass');
                document.getElementById('joindateerror').style.display = "none";
            } 

             if (emp_employee_role.value == "") { 
                document.getElementById('emproleerror').innerHTML = error;
                emp_employee_role.focus(); 
                $('#emp_employee_role').addClass('alertclass');
                return false; 
            } else{
                $('#emp_employee_role').removeClass('alertclass');
                document.getElementById('emproleerror').style.display = "none";
            }    
    }
        

    function update_employee(id,emp_id,empname,empaemail,emppassword,empmobilenumber,empjoingdate,emptype,prof_email,startdate,sallery){
        $('#update_id').val(id);
        $('#update_empid').val(emp_id);
        $('#update_empname').val(empname);
        $('#update_empaemail').val(empaemail);
        $('#update_emppassword').val(emppassword);
        $('#update_empmobilenumber').val(empmobilenumber);
        $('#update_empjoingdate').val(empjoingdate);
        $('#update_emptype').val(emptype);
        $('#upemp_personalemail').val(prof_email)
        $('#upemp_start_date').val(startdate);
        $('#upsallery').val(sallery);
        // console.log(empjoingdate);
    }


</script>

<script type="text/javascript">
          
        function updateempvalidationn() { 
            // alert('dsdasdada');
            var error = "This field is required *";
            var update_empname = document.forms["updateemployeeform"]["update_empname"]; 
            var update_empaemail = document.forms["updateemployeeform"]["update_empaemail"]; 
            var update_emppassword = document.forms["updateemployeeform"]["update_emppassword"]; 
            var update_empmobilenumber = document.forms["updateemployeeform"]["update_empmobilenumber"]; 
            var upemp_personalemail = document.forms["updateemployeeform"]["upemp_personalemail"]; 
            var upemp_start_date = document.forms["updateemployeeform"]["upemp_start_date"]; 
            var emp_join_date = document.forms["updateemployeeform"]["update_empjoingdate"]; 
            var update_emptype = document.forms["updateemployeeform"]["update_emptype"]; 


             if (update_empname.value == "") { 
                 document.getElementById('emp_nameerror1').innerHTML = error;
                update_empname.focus();
                $('#update_empname').addClass('alertclass');
                return false; 
            }
            else{
                $('#update_empname').removeClass('alertclass');
                document.getElementById('emp_nameerror1').style.display = "none";
            }

            if (update_empaemail.value == "") { 
                document.getElementById('loginemailerror1').innerHTML = error;
                update_empaemail.focus(); 
                $('#update_empaemail').addClass('alertclass');
                return false; 
            } else{
                $('#update_empaemail').removeClass('alertclass');
                document.getElementById('loginemailerror1').style.display = "none";
            } 

            if (update_emppassword.value == "") { 
                document.getElementById('passworderror1').innerHTML = error;
                update_emppassword.focus(); 
                $('#update_emppassword').addClass('alertclass');
                return false; 
            } else{
                $('#update_emppassword').removeClass('alertclass');
                document.getElementById('passworderror1').style.display = "none";
            } 

            if (update_empmobilenumber.value == "") { 
                document.getElementById('phonenumbererror1').innerHTML = error;
                update_empmobilenumber.focus(); 
                $('#update_empmobilenumber').addClass('alertclass');
                return false; 
            } else{
                $('#update_empmobilenumber').removeClass('alertclass');
                document.getElementById('phonenumbererror1').style.display = "none";
            } 

            if (upemp_personalemail.value == "") { 
                document.getElementById('personalemailerror1').innerHTML = error;
                upemp_personalemail.focus(); 
                $('#upemp_personalemail').addClass('alertclass');
                return false; 
            } else{
                $('#upemp_personalemail').removeClass('alertclass');
                document.getElementById('personalemailerror1').style.display = "none";
            } 

            if (upemp_start_date.value == "") { 
                document.getElementById('startdateerror1').innerHTML = error;
                upemp_start_date.focus(); 
                $('#upemp_start_date').addClass('alertclass');
                return false; 
            } else{
                $('#upemp_start_date').removeClass('alertclass');
                document.getElementById('startdateerror1').style.display = "none";
            }

             if (emp_join_date.value == "") { 
                document.getElementById('joindateerror1').innerHTML = error;
                emp_join_date.focus(); 
                $('#emp_join_date').addClass('alertclass');
                return false; 
            } else{
                $('#emp_join_date').removeClass('alertclass');
                document.getElementById('joindateerror1').style.display = "none";
            } 

             if (update_emptype.value == "") { 
                document.getElementById('emproleerror1').innerHTML = error;
                update_emptype.focus(); 
                $('#update_emptype').addClass('alertclass');
                return false; 
            } else{
                $('#update_emptype').removeClass('alertclass');
                document.getElementById('emproleerror1').style.display = "none";
            }    
    }

</script>
<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
