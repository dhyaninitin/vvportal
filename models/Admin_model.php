<?php
session_start();
class Admin_Model {
    private $conn;
     public function Model()
     {
       error_reporting(E_ALL & ~E_NOTICE);
     }
    public function connect(){
        $connect = mysqli_connect('localhost','root','','vvportal');
        return $connect;
    }
    function __construct(){
        $this->conn = $this->connect();
    }


    function add_newemployee(){
        $emp_id = mysqli_real_escape_string($this->conn,$_REQUEST['emp_id']);
        $emp_login_email = mysqli_real_escape_string($this->conn,$_REQUEST['emp_login_email']);
        $emp_name = mysqli_real_escape_string($this->conn,$_REQUEST['emp_name']);
        $pass = mysqli_real_escape_string($this->conn,$_REQUEST['emp_password']);
        $emp_password = md5(mysqli_real_escape_string($this->conn,$_REQUEST['emp_password']));
        $emp_phonenumer = mysqli_real_escape_string($this->conn,$_REQUEST['emp_phonenumer']);
        $emp_personalemail = mysqli_real_escape_string($this->conn,$_REQUEST['emp_personalemail']);
        $emp_start_date1 = mysqli_real_escape_string($this->conn,$_REQUEST['emp_start_date']);
        $emp_join_date1 = mysqli_real_escape_string($this->conn,$_REQUEST['emp_join_date']);
        $emp_join_date = date("Y-m-d", strtotime($emp_join_date1));
        $emp_start_date = date("Y-m-d", strtotime($emp_start_date1));
        $emp_salleryyy = mysqli_real_escape_string($this->conn,$_REQUEST['emp_sallery']);

        $emp_employee_role = mysqli_real_escape_string($this->conn,$_REQUEST['emp_employee_role']);

            $check_emp = mysqli_query($this->conn,"SELECT * FROM users WHERE email = '$emp_login_email' ");
                if(mysqli_num_rows($check_emp) > 0){
                    return $_SESSION['warning'] = "This Employee already exists in the database.";
                }else{
                     $add_emp = mysqli_query($this->conn,"INSERT INTO users (emp_id, name, email, password,mobile,professional_email,start_date,
                     joining_date,user_type,pass,emp_sallery) VALUES ('$emp_id', '$emp_name', '$emp_login_email', '$emp_password', '$emp_phonenumer','$emp_personalemail','$emp_start_date','$emp_join_date',
                     '$emp_employee_role','$pass','$emp_salleryyy' )");
                        if($add_emp){
                            return $_SESSION['success'] = "Employee Added  Successfully ";
                        }else{
                            return $_SESSION['error'] = "Employee Not Added Something Wrong, Please Check";
                        }
                }
    }




    function update_newemployee(){
        $update_id = mysqli_real_escape_string($this->conn,$_REQUEST['update_id']);
        $updateemp_id = mysqli_real_escape_string($this->conn,$_REQUEST['updateemp_id']);
        $update_empname = mysqli_real_escape_string($this->conn,$_REQUEST['update_empname']);
        $update_empaemail = mysqli_real_escape_string($this->conn,$_REQUEST['update_empaemail']);
        $uppass = mysqli_real_escape_string($this->conn,$_REQUEST['update_emppassword']);
        $update_emppassword = md5(mysqli_real_escape_string($this->conn,$_REQUEST['update_emppassword']));

        $update_empmobilenumber = mysqli_real_escape_string($this->conn,$_REQUEST['update_empmobilenumber']);
        $upemp_personalemail = mysqli_real_escape_string($this->conn,$_REQUEST['upemp_personalemail']);
        $upemp_start_date1 = mysqli_real_escape_string($this->conn,$_REQUEST['upemp_start_date']);
        $update_empjoingdate1 = mysqli_real_escape_string($this->conn,$_REQUEST['update_empjoingdate']);
        $update_empjoingdate = date("Y-m-d", strtotime($update_empjoingdate1));
        $upemp_start_date = date("Y-m-d", strtotime($upemp_start_date1));

        $update_emptype = mysqli_real_escape_string($this->conn,$_REQUEST['update_emptype']);
        $upemp_sallery = mysqli_real_escape_string($this->conn,$_REQUEST['upemp_sallery']);
        
         $upemployeecheck = mysqli_query($this->conn,"SELECT id FROM users WHERE email = '$update_empaemail' AND id != '$update_id' ");
            if(mysqli_num_rows($upemployeecheck) > 0){
                return $_SESSION['warning'] = "This Employee already exists in the database.";
            }else{
               $update_emp = mysqli_query($this->conn,"UPDATE users SET emp_id= '$updateemp_id', name= '$update_empname' , email= '$update_empaemail' ,
                password = '$update_emppassword' ,mobile = '$update_empmobilenumber' ,professional_email = '$upemp_personalemail' ,start_date = '$upemp_start_date',
                joining_date = '$update_empjoingdate' ,user_type = '$update_emptype' ,pass = '$uppass',emp_sallery = '$upemp_sallery'  WHERE id = '$update_id' ");
                    if($update_emp){
                       return $_SESSION['success'] = "Employee Updated  Successfully";
                    }else{
                      return $_SESSION['error'] = "Employee Not Updated Something Wrong, Please Check";
                    }
            }


    }

    function deleteemployee(){
        $delete_id =mysqli_real_escape_string($this->conn,$_REQUEST['delete_id']);
        $deleteemp = mysqli_query($this->conn,"DELETE FROM users WHERE id = '$delete_id' ");
            if($deleteemp){
                return $_SESSION['success'] = "Employee Deleted  Successfully";
            }else{
                return $_SESSION['error'] = "Employee Not Deleted Something Wrong, Please Check";
            }
    }


    function addupdateattendece(){
        $emp_primid = mysqli_real_escape_string($this->conn,$_REQUEST['emp_primid']);
        $emp_checkdate = mysqli_real_escape_string($this->conn,$_REQUEST['emp_checkdate']);
        $starthours = $_REQUEST['starthours']; $startmintes = $_REQUEST['startmintes'];
        $endhours = $_REQUEST['endhours']; $endminutes = $_REQUEST['endminutes'];
        $emp_satus =  $_REQUEST['emp_satus'];

        $empmonth = date('m',strtotime($emp_checkdate)); $empdate = date('d',strtotime($emp_checkdate)); $empyear =  date('Y',strtotime($emp_checkdate));
        if($emp_satus == '3'){
            $starttime = $emp_checkdate.' '.$starthours.':'.$startmintes.':00am'; $endtime = $emp_checkdate.' '.$endhours.':'.$endminutes.':00pm'; 
            $starttime1 = $emp_checkdate.' '.$starthours.':'.$startmintes.':00'; $endtime1 = $emp_checkdate.' '.$endhours.':'.$endminutes.':00'; 
            $diif = '00 hours '.'00 minutes';
        }else{

            
                $starttime = $emp_checkdate.' '.$starthours.':'.$startmintes.':00am'; $endtime = $emp_checkdate.' '.$endhours.':'.$endminutes.':00pm'; 
                $starttime1 = $emp_checkdate.' '.$starthours.':'.$startmintes.':00'; $endtime1 = $emp_checkdate.' '.$endhours.':'.$endminutes.':00'; 

            $start_date = new DateTime($starttime);$since_start = $start_date->diff(new DateTime($endtime));
            $diif = $since_start->h.' hours '.$since_start->i.' minutes '; $since_start->s.' seconds ';
        }

           

        $empdatee = mysqli_query($this->conn,"SELECT * FROM `emp_attendanceinfo` WHERE MONTH(currentt_date) = '$empmonth' AND YEAR(currentt_date) = '$empyear' AND DAY(currentt_date) = '$empdate' AND `emp_priid` = '$emp_primid' ");

            $empid = mysqli_query($this->conn,"SELECT * FROM `users` WHERE  `id` = '$emp_primid' " );

             echo $empdatecheck = mysqli_num_rows($empdatee); $getidtable =  mysqli_fetch_assoc($empdatee);
              $getid =  mysqli_fetch_assoc($empid);
            
    
            if($empdatecheck <= 0 ){
                $addtime = mysqli_query($this->conn,"INSERT INTO emp_attendanceinfo (emp_priid,time_in,time_out,totel_time,emp_id,currentt_date,emp_status) VALUES('$emp_primid','$starttime1','$endtime1','$diif','".$getid['emp_id']."','$starttime1','$emp_satus') ");
                        if($addtime){
                            return $_SESSION['success'] = "Employee Attendance Added Successfully";
                        }else{
                            return $_SESSION['error'] = "Something Wrong,Please Check";
                        }
            }else{
                
                $updatetime = mysqli_query($this->conn,"UPDATE emp_attendanceinfo SET emp_priid = '$emp_primid',time_in = '$starttime1',time_out = '$endtime1',totel_time = '$diif',emp_id = '".$getid['emp_id']."',currentt_date = '$starttime1',emp_status= '$emp_satus' WHERE id = '".$getidtable['id']."' ");

                    if($updatetime){
                         return $_SESSION['success'] = "Employee Attendance Updated Successfully";
                    }else{
                       return $_SESSION['error'] = "Something Wrong,Please Check";
                    }
            }
        

    }




    function empattenddelete(){
         $delmonth = date('m',strtotime($_POST['deletedate'])); 
         $deldate = date('d',strtotime($_POST['deletedate']));  $delyear =  date('Y',strtotime($_POST['deletedate']));
        
        $empattenddelete = mysqli_query($this->conn,"DELETE FROM emp_attendanceinfo WHERE  MONTH(currentt_date) = '$delmonth' AND YEAR(currentt_date) = '$delyear' AND DAY(currentt_date) = '$deldate' AND `emp_priid` = '".$_POST['deleteid']."'  " );
        if($empattenddelete){
            echo '1';
        }else{
            echo '0';
        }

    }


    function Adminapprovleave(){
        $status = $_REQUEST['status']; $reempid = $_REQUEST['empid'];  $leaveid = $_REQUEST['leaveid'];
        if($_REQUEST['leavetype'] == 'Half Day'){  $leavetype = '2';}else{  $leavetype = '3';}
        if($status == 1){$success = "Employee Leave Approved  Successfully"; }elseif($status == 2){ $success = "Employee Leave Cancel Successfully"; }
        else{ $success = "Employee Leave Pending Successfully"; }

        $upleave = mysqli_query($this->conn,"UPDATE emp_apply_leave SET leave_status = '$status'  WHERE id = '$leaveid'  ");
        if($upleave){
           echo $status;
        }else{
           echo '5';
        }

    }

    function Admin_empdetpmet(){
         $empdetpmet = $_REQUEST['empdetpmet']; 
         $fatchempdeptmetn = mysqli_query($this->conn,"SELECT * FROM `users` WHERE `user_type` = '$empdetpmet' " );
             $dpatrempname=[];
                $dp=0;
                    while($empname=mysqli_fetch_assoc($fatchempdeptmetn)){
                        $dpatrempname[$dp]['empname'] = $empname['name'];
                        $dpatrempname[$dp]['empid'] = $empname['id'];
                        $dp++;
                    }
                echo json_encode($dpatrempname); 
    }



    function Adminapplyleaveemployee(Type $var = null){
        $users_id = $_REQUEST['employeenmae'];
        $leave_type = $_REQUEST['leave_type'];
        $from_date = $_REQUEST['from_date'];  $to_date = $_REQUEST['to_date'];
        $Contact_No_during_leave = $_REQUEST['Contact_No_during_leave'];
        $leave_reason = $_REQUEST['leave_reason']; $leave_purpose = $_REQUEST['leave_purpose'];
        $address_during_leave = $_REQUEST['address_during_leave'];

            $datetime1 = new DateTime($from_date);$datetime2 = new DateTime($to_date);
            $interval = $datetime1->diff($datetime2);$elapsedhr= $interval->format('%h');
            $elapsedsec = $interval->format('%s');$elapsed = $interval->format('%a');
    
                if($elapsed>=1 ){$dayscount =  $elapsed+1 ;}else if($elapsedhr<=24){ $dayscount = '1';}

      $admimapplyleave =  mysqli_query($this->conn,"INSERT INTO `emp_apply_leave` (`emp_priid`, `leave_type`, `leave_from`, `leave_to`, `leave_days`, `contact_num`, `leave_reason`,
        `leave_purpose`, `addressduring_leave`, `add_updatedate`) VALUES ('$users_id', '$leave_type', '$from_date', '$to_date', '".$dayscount.' Days'."',
         '$Contact_No_during_leave', '$leave_reason', '$leave_purpose', '$address_during_leave',now()) ");

            if($admimapplyleave){
                return $_SESSION['success'] = "Employee Leave Added Successfully";
            }else{
            return $_SESSION['error'] = "Something Wrong,Please Check";
            }
    }

    function adminupdateleaveemployee(){
        $update_id = $_REQUEST['updateid'];

        $users_id = $_REQUEST['updateemployeenmae'];
        $leave_type = $_REQUEST['upleave_type'];
        $from_date = $_REQUEST['update_leavefrom'];  $to_date = $_REQUEST['update_leaveto'];
        $Contact_No_during_leave = $_REQUEST['update_contactnumber'];
        $leave_reason = $_REQUEST['update_leavereson']; $leave_purpose = $_REQUEST['update_leave_purpose'];
        $address_during_leave = $_REQUEST['update_addressduring_leave'];

            $datetime1 = new DateTime($from_date);$datetime2 = new DateTime($to_date);
            $interval = $datetime1->diff($datetime2);$elapsedhr= $interval->format('%h');
            $elapsedsec = $interval->format('%s');$elapsed = $interval->format('%a');
    
                if($elapsed>=1 ){$dayscount =  $elapsed+1 ;}else if($elapsedhr<=24){ $dayscount = '1';}

            $admimupdateleave =  mysqli_query($this->conn," UPDATE emp_apply_leave SET `emp_priid` = '$users_id', `leave_type`='$leave_type', `leave_from`='$from_date',
             `leave_to`='$to_date', `leave_days`='".$dayscount.' Days'."', `contact_num`='$Contact_No_during_leave', `leave_reason`='$leave_reason',
            `leave_purpose`='$leave_purpose', `addressduring_leave`='$address_during_leave' WHERE id = '$update_id'  ");

            if($admimupdateleave){
                return $_SESSION['success'] = "Employee Leave Updated Successfully";
            }else{
                return $_SESSION['error'] = "Something Wrong,Please Check";
            }

    }


    function Admindeleteleave(){
        $delete_id = $_POST['delete_id'];
       
       $Admindeleteleave = mysqli_query($this->conn,"DELETE FROM emp_apply_leave WHERE  `id` = '$delete_id'  " );
       if($Admindeleteleave){
            return $_SESSION['success'] = "Employee Leave Deteled Successfully";
       }else{
            return $_SESSION['error'] = "Something Wrong,Please Check";
       }
    }


    function fatchmonthattendence(){
        $current_year = date("Y");  $current_month = date("m"); $current_date = date("d");
        if(strlen($_POST['monthnumber']) == '1'){ $monthnum =  '0'.$_POST['monthnumber'];}else{ $monthnum = $_POST['monthnumber'];} 
    ?>
        <table class="table table-hover attendance_list">
            <thead>
                <tr class="attendtr">
                    <th class="attend">Emp-ID</th>
                    <th class="attend">Employee</th>
                    <?php 
                        for ($thh = 1; $thh <= 31; $thh++) {
                            $thday = date("l",strtotime($current_year.'-'.$monthnum.'-'.$thh)); 
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
                <?php  $emp_que=mysqli_query($this->conn,"SELECT * FROM users WHERE id != '1'  ");
                    $cnt = 1; while($emp=mysqli_fetch_assoc($emp_que)) { ?>
                    <tr>
                        <td class="attend"><span><?php echo $emp['emp_id'];?></span></td>
                        <td class="attend"><?php echo $emp['name'];?></td>
                            <?php for ($x = 1; $x <= 31; $x++) { if(strlen($x) == '1'){ $cnttt =  '0'.$x;}else{ $cnttt = $x;}
                                    if(strlen($x) == '1'){ $acb =  '0'.$x;}else{ $acb = $x;} ?>
                                    <td class="tdclass<?php echo $x;?>"><?php   
                                        $day = date("l",strtotime($current_year.'-'.$monthnum.'-'.$cnttt));

                                            $leavequery =  mysqli_query($this->conn,"SELECT * FROM emp_apply_leave WHERE 
                                            emp_priid = '".$emp['id']."' AND MONTH(add_updatedate) = '$monthnum' AND 
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
                                                    if(!in_array($cnttt, $array)){ 
                                                        $one.$cnttt = mysqli_fetch_assoc(mysqli_query($this->conn,"SELECT emp_status,totel_time FROM 
                                                        emp_attendanceinfo WHERE  MONTH(currentt_date) = '$monthnum' AND 
                                                        YEAR(currentt_date) = '$current_year' AND DAY(currentt_date) = '$cnttt' AND 
                                                        emp_priid = '".$emp['id']."' ")); 

                                                        if($one.$cnttt['emp_status'] == '1'){
                                                            
                                                            echo '<i class="icon-check" onclick="deleteerow(`'.$current_year.'-'.$monthnum.'-'.$acb.'`,`'.$emp['id'].'`)" 
                                                                data-toggle="tooltip" data-placement="top" title="'.$one.$cnttt['totel_time'].'"></i>';
                                                        }else if($one.$cnttt['emp_status'] == '2'){ 
                                                            echo '<span class="red"  data-toggle="tooltip" onclick="deleteerow(`'.$current_year.'-'.$monthnum.'-'.$acb.'`,`'.$emp['id'].'`)" 
                                                                    data-placement="top" title="'.$one.$cnttt['totel_time'].'" >H</span>'; 
                                                        }else if($one.$cnttt['emp_status'] == '3'){
                                                            echo '<span class="red" data-toggle="tooltip" onclick="deleteerow(`'.$current_year.'-'.$monthnum.'-'.$acb.'`,`'.$emp['id'].'`)" 
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
            </tbody>       
                <?php $cnt = $cnt+1; } ?>
        </table>
    <?php }

    function Admin_addproject(){
         $projectname  = mysqli_real_escape_string($this->conn,$_POST['projectname']);
         $clientname  = mysqli_real_escape_string($this->conn,$_POST['clientname']);
         $startdate  = mysqli_real_escape_string($this->conn,$_POST['startdate']);
         $end_date  = mysqli_real_escape_string($this->conn,$_POST['end_date']);
         $dollerprice  = mysqli_real_escape_string($this->conn,$_POST['dollerprice']);
         $projectprice  = mysqli_real_escape_string($this->conn,$_POST['projectprice']);
         $teamleader  = mysqli_real_escape_string($this->conn,strstr($_POST['teamleader'], ',', true));
         $employe  = mysqli_real_escape_string($this->conn,implode(',',$_POST['employeteam']));
         $proejct_desc  = mysqli_real_escape_string($this->conn,$_POST['proejct_desc']);
         $proinrprice = $_POST['dollerprice'] * $_POST['projectprice'];
        //  $projectstartdate = date("Y-m-d", strtotime($startdate);

        //  date("Y-m-d", strtotime();
         $checkpro = mysqli_query($this->conn,"SELECT * FROM vvallproject WHERE project_name = '$projectname'  ");
            if(mysqli_num_rows($checkpro) > 0){
                return $_SESSION['warning'] = "This Project Name already exists in the database.";
            }else{
               $apppro = mysqli_query($this->conn,"INSERT INTO vvallproject (add_by,project_name,client_name,project_startdate,project_enddate,
               pro_dollerprice,projectprice_doller,projectprice_inr,team_leader,project_team,project_description ) VALUES('".$_SESSION['id']."', '$projectname','$clientname',
               '".date("Y-m-d", strtotime($startdate))."','".date("Y-m-d", strtotime($end_date))."','$dollerprice','$projectprice','$proinrprice','$teamleader',
               '$employe','$proejct_desc'  ) ");
                    if($apppro){
                       return $_SESSION['success'] = "Project Added Successfully";
                    }else{
                      return $_SESSION['error'] = "Something Wrong, Please Check";
                    }
            }
    }

    function AdminUpdateproject(){
        
        $updateid  = $_POST['updateid'];
        $projectnamee  = mysqli_real_escape_string($this->conn,$_POST['projectname']);
        $clientname  = mysqli_real_escape_string($this->conn,$_POST['clientname']);
        $startdate  = mysqli_real_escape_string($this->conn,$_POST['startdate']);
        $end_date  = mysqli_real_escape_string($this->conn,$_POST['end_date']);
        $dollerprice  = mysqli_real_escape_string($this->conn,$_POST['dollerprice']);
        $projectprice  = mysqli_real_escape_string($this->conn,$_POST['projectprice']);
        $teamleader  = mysqli_real_escape_string($this->conn,strstr($_POST['teamleader'], ',', true));
        $employe  = mysqli_real_escape_string($this->conn,implode(',',$_POST['employeteam']));
        $proejct_desc  = mysqli_real_escape_string($this->conn,$_POST['proejct_desc']);
        $proinrprice = $_POST['dollerprice'] * $_POST['projectprice'];
        //  $projectstartdate = date("Y-m-d", strtotime($startdate);

            $updatepro = mysqli_query($this->conn,"UPDATE vvallproject SET add_by = '".$_SESSION['id']."',project_name = '$projectnamee',client_name= '$clientname',
            project_startdate= '".date("Y-m-d", strtotime($startdate))."',project_enddate= '".date("Y-m-d", strtotime($end_date))."',pro_dollerprice= '$dollerprice',
            projectprice_doller= '$projectprice',projectprice_inr= '$proinrprice',team_leader= '$teamleader',project_team= '$employe',project_description= '$proejct_desc'
            WHERE id = '$updateid' ");
                if($updatepro){
                    return $_SESSION['success'] = "Project Updated Successfully";
                }else{
                    return $_SESSION['error'] = "Something Wrong, Please Check";
                }
    }

    function Admindeleteproject(){
        $delete_id = $_POST['delete_id'];
        $Admindeleteproject = mysqli_query($this->conn,"DELETE FROM vvallproject WHERE  `id` = '$delete_id'  " );
        if($Admindeleteproject){
             return $_SESSION['success'] = "Project Deteled Successfully";
        }else{
             return $_SESSION['error'] = "Something Wrong,Please Check";
        }
    }



    function fatchempsallery(){
        $getempsallery =  $_POST['empvalue'];
        $empvaluearray=[];
      
        for($d=0;$d<sizeof($getempsallery);$d++){
            $fatcteam = mysqli_fetch_assoc(mysqli_query($this->conn,"SELECT * FROM users WHERE id ='".$getempsallery[$d]."' "));
            // echo "SELECT * FROM users WHERE id ='".$getempsallery[$d]."'";
            $empvaluearray[$d]['id'] = $fatcteam['id'];
            $empvaluearray[$d]['name'] = $fatcteam['name'];
            $empvaluearray[$d]['sallery'] = $fatcteam['emp_sallery'];
            $empvaluearray[$d]['role'] = $fatcteam['user_type'];  
            $empvaluearray[$d]['img'] = $fatcteam['image'];  

        }
         echo json_encode($empvaluearray); 
    }

    function fatchempteamleader(){
        $teamleader  = mysqli_real_escape_string($this->conn,strstr($_POST['teamdata'], ',', true));
        $fatcteamleader = mysqli_fetch_assoc(mysqli_query($this->conn,"SELECT name,email,user_type,image FROM users WHERE id ='".$teamleader."' "));
        echo json_encode($fatcteamleader); 
    }








}
?>