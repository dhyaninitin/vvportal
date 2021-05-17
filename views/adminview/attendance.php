<style type="text/css">
    .attend{
        background-color: #4F4F51;
    color: #fff!important;
    }

    .attendtr{
        background-color: #FDCB00;
    }
    .icon-check{
        color: green!important;
        font-weight: bold;
        font-size: 20px!important;
    }
    .icon-close{
        color: #545B62!important;
        font-weight: bold;
        font-size: 20px!important;
    }
    .red{
       /* border: 2px solid red;
        border-radius: 50%*/
        color: red!important;
        font-weight: bold;
        font-size: 15px!important;
    }

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
    .tdaddclass{
        background-color: #FC0000!important;
        color: #fff !important;
    }
</style>
    <div id="main-content">
        <div class="container">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" onclick="window.history.go(-1); return false;" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Attendance List</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Employee</li>
                            <li class="breadcrumb-item active">Attendance List</li>
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
                <?php $months = array();
                for ($i = 0; $i < 8; $i++) {
                    $timestamp = mktime(0, 0, 0, date('n') - $i, 1);
                    $months[date('n', $timestamp)] = date('F', $timestamp);
                }?>
            <div class="row clearfix">
                <div class="col-lg-12">
                    
                    <div class="card">
                        <div class="header text-center">
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addupdateatten"><i class="icon-settings icon-style" ></i> ADD / Update Attendance </a></li>
                                <li class="form-group"> 
                                        <select class="form-control" onchange="selectmonth(this.value)">
                                        <?php
                                            foreach ($months as $num => $name) {
                                                printf('<option value="%u">%s</option>', $num, $name);
                                            }
                                        ?>
                                        </select>
                                </li>
                            </ul>
                            <h2><span id="currentmonth"></span> Attendance </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive" id="showmonthdata">
                                <table class="table table-hover attendance_list" >
                                    <thead>
                                        <tr class="attendtr">
                                            <th class="attend">Emp-ID</th>
                                            <th class="attend">Employee</th>
                                            <?php $current_year = date("Y");  $current_month = date("m"); $current_date = date("d");
                                                for ($thh = 1; $thh <= 31; $thh++) {
                                                    $thday = date("l",strtotime($current_year.'-'.$current_month.'-'.$thh)); 
                                                    $short =  substr($thday,0,3);
                                                    if($thday == 'Saturday' || $thday == 'Sunday'  ){
                                                        echo '<th style="background-color: #FC0000;color:#fff;">'.$thh. '<br/>'. $short .'</th>';
                                                    }else{
                                                        echo '<th>'.$thh.'<br/>'.$short. '</th>';
                                                    }
                                                }
                                             ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        $emp_que=mysqli_query($con,"SELECT * FROM users WHERE id != '1'  ");
                                            $cnt = 1; while($emp=mysqli_fetch_assoc($emp_que)) { 
                                                // $empattend = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM emp_attendanceinfo WHERE emp_priid = '".$emp['id']."' AND 
                                                // MONTH(currentt_date) = '$current_month' AND YEAR(currentt_date) = '$current_year' "));

                                                // $empleave = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM emp_apply_leave WHERE 
                                                // emp_priid = '".$emp['id']."' AND MONTH(currentt_date) = '$current_month' AND 
                                                // YEAR(currentt_date) = '$current_year' "));
                                             ?>
                                             <!-- 1= persent, 2= half day ,3= leave  -->
                                        <tr>
                                            <td class="attend"><span><?php echo $emp['emp_id'];?></span></td>
                                            <td class="attend"><?php echo $emp['name'];?></td>
                                            <?php for ($x = 1; $x <= 31; $x++) { if(strlen($x) == '1'){ $cnttt =  '0'.$x;}else{ $cnttt = $x;}
                                            if(strlen($x) == '1'){ $acb =  '0'.$x;}else{ $acb = $x;} ?>
                                            <td class="tdclass<?php echo $x;?>"><?php   
                                             $day = date("l",strtotime($current_year.'-'.$current_month.'-'.$cnttt));

                                                   $leavequery =  mysqli_query($con,"SELECT * FROM emp_apply_leave WHERE 
                                                    emp_priid = '".$emp['id']."' AND MONTH(add_updatedate) = '$current_month' AND 
                                                    YEAR(add_updatedate) = '$current_year' ");
                                                        $array = array();
                                                        while($empleave = mysqli_fetch_assoc($leavequery)){
                                                            $num = 0; 
                                                                for ($xx = 1; $xx <= chop($empleave['leave_days'],"Days"); $xx++) {
                                                                    
                                                                    date("m",strtotime($empleave['leave_from']));
                                                                    $datesss = date("d",strtotime($empleave['leave_from']))+$num;
                                                                    if(strlen($datesss) == '1'){ $nummm =  '0'.$datesss;}else{ $nummm = $datesss;}
                                                                
                                                                    if($cnttt == $nummm){
                                                                        array_push($array, $nummm);
                                                                        if($empleave['leave_type'] == 'Full Day'){ 
                                                                            echo '<span class="red"  data-toggle="tooltip" data-placement="top" title="'.$empleave['leave_type'].'" >L</span>'; 
                                                                        }else if($empleave['leave_type'] == 'Half Day'){
                                                                            echo '<span class="red" data-toggle="tooltip" data-placement="top" title="'.$empleave['leave_type'].'">H</span>'; 
                                                                        }
                                                                    }
                                                                    $num++;
                                                                }
                                                        }
                                                        // echo $current_year.'-'.$current_month.'-'.$cnttt;
                                                                
                                                                // if($day == 'Saturday' || $day == 'Sunday'){
                                                                // //   echo $day;
                                                                //   echo substr($day,0,3);
                                                                // }
                                                               

                                                            if(!in_array($cnttt, $array)){ 
                                                                $one.$cnttt = mysqli_fetch_assoc(mysqli_query($con,"SELECT emp_status,totel_time FROM 
                                                                emp_attendanceinfo WHERE  MONTH(currentt_date) = '$current_month' AND 
                                                                YEAR(currentt_date) = '$current_year' AND DAY(currentt_date) = '$cnttt' AND 
                                                                emp_priid = '".$emp['id']."' ")); 

                                                                if($one.$cnttt['emp_status'] == '1'){
                                                                    
                                                                    echo '<i class="icon-check" onclick="deleteerow(`'.$current_year.'-'.$current_month.'-'.$acb.'`,`'.$emp['id'].'`)" 
                                                                        data-toggle="tooltip" data-placement="top" title="'.$one.$cnttt['totel_time'].'"></i>';
                                                                }else if($one.$cnttt['emp_status'] == '2'){ 
                                                                    echo '<span class="red"  data-toggle="tooltip" onclick="deleteerow(`'.$current_year.'-'.$current_month.'-'.$acb.'`,`'.$emp['id'].'`)" 
                                                                            data-placement="top" title="'.$one.$cnttt['totel_time'].'" >H</span>'; 
                                                                }else if($one.$cnttt['emp_status'] == '3'){
                                                                    echo '<span class="red" data-toggle="tooltip" onclick="deleteerow(`'.$current_year.'-'.$current_month.'-'.$acb.'`,`'.$emp['id'].'`)" 
                                                                        data-placement="top" title="Leave">L</span>'; 
                                                                }else{
                                                                    // echo $current_year.'-'.$current_month.'-'.$cnttt;
                                                                    if($day == 'Saturday' || $day == 'Sunday'){
                                                                    //   echo $day;
                                                                        echo '<span style="background-color: #FC0000;color: #fff;padding: 2px 4px 2px 4px;
                                                                        border-radius: 24%;">'.substr($day,0,3) .'</span>'; 
                                                                        // echo "<script> var number = '$x'; $('.tdclass'+number).addClass('tdaddclass');</script>";
                                                                    }else{
                                                                        echo '<i class="icon-close"></i>'; 
                                                                    }
     
                                                                } 
                                                            }
                                                 ?>
                                                
                                            </td>
                                            <?php }?>
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


<!-- Add employee modal -->
<div class="modal animated bounceIn" id="addupdateatten" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="max-width: 760px;">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel"><i class="icon-settings" ></i> ADD / Update Attendance</h6>
            </div>
            <form  action="add-update-attendece" method="POST" name="addemployeeform"  onsubmit="return addempvalidationn()">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group"> 
                            <label>Employee ID</label>                                    
                               <select class="form-control" id="emp_primid" name="emp_primid">
                                    <option value="">Select Employee Role</option>
                                    <?php $emp_que=mysqli_query($con,"SELECT * FROM users WHERE id != '1'  ");while($emp=mysqli_fetch_assoc($emp_que)) { ?>
                                        <option value="<?php echo $emp['id'];?>"><?php echo $emp['name'];?></option>
                                    <?php }?>
                                </select>  
                                <span style="color:#b30505;" id="emp_primiderror"></span>   
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Add / Update Date <span class="required">*</span></label>                                    
                                <input type="date" id="emp_checkdate" name="emp_checkdate" autocomplete ="off" data-date-autoclose="true" placeholder="Start date" class="form-control" >
                                <span style="color:#b30505;" id="emp_checkdateerror"></span> 
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Hours</label>      
                                    <select class="form-control" id="starthours" name="starthours">
                                        <option value="">Hours</option>
                                        <?php for ($x = 0; $x <= 12; $x++) { ?>
                                        <option value="<?php if(strlen($x) == '1'){ echo '0'.$x;}else{ echo $x;}?>"><?php if(strlen($x) == '1'){ echo '0'.$x;}else{ echo $x;}?></option>
                                        <?php }?>
                                    </select>
                                    <span style="color:#b30505;" id="starthourserror"></span> 
                                </div>
                                <div class="col-md-6">
                                    <label>Minutes</label>      
                                    <select class="form-control" id="startmintes" name="startmintes">
                                        <option value="">Minutes</option>
                                       <?php for ($x = 0; $x <= 60; $x++) { ?>
                                        <option value="<?php if(strlen($x) == '1'){ echo '0'.$x;}else{ echo $x;}?>"><?php if(strlen($x) == '1'){ echo '0'.$x;}else{ echo $x;}?></option>
                                        <?php }?>
                                    </select>
                                    <span style="color:#b30505;" id="startminteserror"></span> 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Hours</label>      
                                    <select class="form-control" id="endhours" name="endhours">
                                        <option value="">Hours</option>
                                        <?php for ($x = 0; $x <= 12; $x++) { ?>
                                        <option value="<?php if(strlen($x) == '1'){ echo '0'.$x;}else{ echo $x;}?>"><?php if(strlen($x) == '1'){ echo '0'.$x;}else{ echo $x;}?></option>
                                        <?php }?>
                                    </select>
                                    <span style="color:#b30505;" id="endhourserror"></span> 
                                </div>
                                <div class="col-md-6">
                                    <label>Minutes</label>      
                                    <select class="form-control" name="endminutes">
                                        <option value="">Minutes</option>
                                       <?php for ($x = 0; $x <= 60; $x++) { ?>
                                        <option value="<?php if(strlen($x) == '1'){ echo '0'.$x;}else{ echo $x;}?>"><?php if(strlen($x) == '1'){ echo '0'.$x;}else{ echo $x;}?></option>
                                        <?php }?>
                                    </select>
                                    <span style="color:#b30505;" id="endminuteserror"></span> 
                                </div>
                            </div><br/>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Attendancve Status <span class="required">*</span></label>                                    
                                <select class="form-control" id="emp_satus" name="emp_satus">
                                    <option value="">Select Status</option>
                                    <option value="1">Full Day</option>
                                    <option value="2">Half Day</option>
                                    <option value="3">Leave</option>
                                </select>
                                <span style="color:#b30505;" id="emp_satuserror"></span>
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

    <script type="text/javascript">
        const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
        const d = new Date(); $('#currentmonth').html(monthNames[d.getMonth()]);

        $( document ).ready(function() {
           function daysInThisMonth() {
              var now = new Date();
              return new Date(now.getFullYear(), now.getMonth()+1, 0).getDate();
            }
            // console.log(daysInThisMonth());
        });

        function selectmonth(value){
            // alert(value);
            $.ajax({
                url:"fatch-month-attendence",
                type:"POST",
                data: {monthnumber:value},
                    success:function(success){
                        // console.log(success);
                        $("#showmonthdata").html(success);
                    }
            }); 
        }



        function deleteerow(deletedate,id){
                swal({
                title: "Are you sure want to remove this attendance !",
                text: "",
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#dc3545",
                cancelButtonText: "Cancel",
                confirmButtonText: "Remove",
                 closeOnCancel: true,
                closeOnConfirm: true
               
            }, function (isConfirm) {
                if (isConfirm) {
                    // console.log(deletedate);
                    // console.log(id);
                    $.ajax({
                        url:"emp-attend-delete",
                        type:"POST",
                        data: {deletedate:deletedate,deleteid:id},
                            success:function(success){
                                // console.log(success);
                            if(success == 1){
                                toastr.success('Attendance Delete Successfully','Success');
                                // location.reload();
                            }else{
                                toastr.error('Something Wrong Please Try Again','Error');
                            }
                            setTimeout(function(){ location.reload(); }, 500);
                            }
                    }); 
                }
            });
        }


        function addempvalidationn() { 
            // alert('dsdasdada');
            var error = "This field is required *";
            var emp_primid = document.forms["addemployeeform"]["emp_primid"]; 
            var emp_checkdate = document.forms["addemployeeform"]["emp_checkdate"]; 
            var starthours = document.forms["addemployeeform"]["starthours"]; 
            var startmintes = document.forms["addemployeeform"]["startmintes"]; 
            var endhours = document.forms["addemployeeform"]["endhours"]; 
            var endminutes = document.forms["addemployeeform"]["endminutes"]; 
            var emp_satus = document.forms["addemployeeform"]["emp_satus"]; 

             if (emp_primid.value == "") { 
                document.getElementById('emp_primiderror').innerHTML = error;
                emp_primid.focus();
                $('#emp_primid').addClass('alertclass');
                return false; 
            }
            else{
                $('#emp_primid').removeClass('alertclass');
                document.getElementById('emp_primiderror').style.display = "none";
            }


            if (emp_checkdate.value == "") { 
                document.getElementById('emp_checkdateerror').innerHTML = error;
                emp_checkdate.focus(); 
                $('#emp_checkdate').addClass('alertclass');
                return false; 
            } else{
                $('#emp_checkdate').removeClass('alertclass');
                document.getElementById('emp_checkdateerror').style.display = "none";
            } 

            if (starthours.value == "") { 
                document.getElementById('starthourserror').innerHTML = error;
                starthours.focus(); 
                $('#starthours').addClass('alertclass');
                return false; 
            } else{
                $('#starthours').removeClass('alertclass');
                document.getElementById('starthourserror').style.display = "none";
            } 

            if (startmintes.value == "") { 
                document.getElementById('startminteserror').innerHTML = error;
                startmintes.focus(); 
                $('#startmintes').addClass('alertclass');
                return false; 
            } else{
                $('#startmintes').removeClass('alertclass');
                document.getElementById('startminteserror').style.display = "none";
            } 

            if (endhours.value == "") { 
                document.getElementById('endhourserror').innerHTML = error;
                endhours.focus(); 
                $('#endhours').addClass('alertclass');
                return false; 
            } else{
                $('#endhours').removeClass('alertclass');
                document.getElementById('endhourserror').style.display = "none";
            } 

            if (endminutes.value == "") { 
                document.getElementById('endminuteserror').innerHTML = error;
                endminutes.focus(); 
                $('#endminutes').addClass('alertclass');
                return false; 
            } else{
                $('#endminutes').removeClass('alertclass');
                document.getElementById('endminuteserror').style.display = "none";
            }

             if (emp_satus.value == "") { 
                document.getElementById('emp_satuserror').innerHTML = error;
                emp_satus.focus(); 
                $('#emp_satus').addClass('alertclass');
                return false; 
            } else{
                $('#emp_satus').removeClass('alertclass');
                document.getElementById('emp_satuserror').style.display = "none";
            } 
   
    }
    </script>
