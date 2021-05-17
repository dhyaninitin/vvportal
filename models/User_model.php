
<?php

session_start();
date_default_timezone_set('Asia/Kolkata');
class User_Model {
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


    function addempinfo(){
        // echo mysqli_real_escape_string($this->conn,$_POST['educational2']);
        echo trim(mysqli_real_escape_string($this->conn,$_POST['educational2']),"");
        // exit();
        // $user_name = mysqli_real_escape_string($this->conn,$user_name);
        // $password = mysqli_real_escape_string($this->conn,$password);
        $login_query = mysqli_query($this->conn,"INSERT INTO `emp_information` (`added_by`, `emp_full_name`, `emp_home_phone`, `emp_cell_phone`, `emp_email_address`, `emp_goverment_id`, `emp_birth_date`, `emp_marital_status`, `emp_blood_group`, `emp_father_name`, `emp_father_occupation`, `emp_father_phone`, `emp_address`, `ed_highschool_name`, `ed_hightschool_persentage`, `ed_intermediateschool_name`, `ed_intermediateschool_percentage`, `ed_bachelor_collgename`, `ed_bachelor_collgpesntg`, `ed_mastercollge_name`, `ed_mastercollge_percentage`, `jobf_postion`, `jobf_company_name`, `jobf_location`, `jobf_emailaddress`, `jobf_workphone`, `jobf_homephone`, `jobf_startdate`, `jobf_enddate`, `jobl_postion`, `jobl_company_name`, `jobl_location`, `jobl_emailaddress`, `jobl_workphone`, `jobl_homephone`, `jobl_startdate`, `jobl_enddate`, `job_keyskill`, `emg_fullname`, `emg_primaryphone`, `emg_cellphone`, `emg_relationship`, `emg_address`, `bank_accountholder`, `bank_accountnumber`, `bank_pancard`, `bank_ifsc`, `bank_name`, `note`) VALUES ('".$_SESSION['id']."', '".mysqli_real_escape_string($this->conn,$_POST['personal1'])."','".mysqli_real_escape_string($this->conn,$_POST['personal2'])."', '".mysqli_real_escape_string($this->conn,$_POST['personal3'])."', '".mysqli_real_escape_string($this->conn,$_POST['personal4'])."', '".mysqli_real_escape_string($this->conn,$_POST['personal5'])."', '".mysqli_real_escape_string($this->conn,$_POST['personal6'])."', '".mysqli_real_escape_string($this->conn,$_POST['personal7'])."', '".mysqli_real_escape_string($this->conn,$_POST['personal8'])."', '".mysqli_real_escape_string($this->conn,$_POST['personal9'])."', '".mysqli_real_escape_string($this->conn,$_POST['personal10'])."', '".mysqli_real_escape_string($this->conn,$_POST['personal11'])."', '".mysqli_real_escape_string($this->conn,$_POST['personal12'])."', '".mysqli_real_escape_string($this->conn,$_POST['educational'])."', '".mysqli_real_escape_string($this->conn,$_POST['educational1'])."', '".trim(mysqli_real_escape_string($this->conn,$_POST['educational2']),"")."','".mysqli_real_escape_string($this->conn,$_POST['educational3'])."', '".mysqli_real_escape_string($this->conn,$_POST['educational4'])."', '".mysqli_real_escape_string($this->conn,$_POST['educational5'])."', '".mysqli_real_escape_string($this->conn,$_POST['educational6'])."', '".mysqli_real_escape_string($this->conn,$_POST['educational7'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation1'])."','".mysqli_real_escape_string($this->conn,$_POST['jobinformation2'])."','".mysqli_real_escape_string($this->conn,$_POST['jobinformation3'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation4'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation5'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation6'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation7'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation8'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation9'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation10'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation11'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation12'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation13'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation14'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation15'])."', '".mysqli_real_escape_string($this->conn,$_POST['jobinformation16'])."', '".mysqli_real_escape_string($this->conn,$_POST['emergency'])."', '".mysqli_real_escape_string($this->conn,$_POST['emergency1'])."', '".mysqli_real_escape_string($this->conn,$_POST['emergency2'])."', '".mysqli_real_escape_string($this->conn,$_POST['emergency3'])."', '".mysqli_real_escape_string($this->conn,$_POST['emergency4'])."', '".mysqli_real_escape_string($this->conn,$_POST['banking'])."', '".mysqli_real_escape_string($this->conn,$_POST['banking1'])."', '".mysqli_real_escape_string($this->conn,$_POST['banking2'])."', '".mysqli_real_escape_string($this->conn,$_POST['banking3'])."', '".mysqli_real_escape_string($this->conn,$_POST['banking4'])."', '".mysqli_real_escape_string($this->conn,$_POST['banking5'])."')");
        if($login_query){
            echo 'yes';
        }else{
            echo 'no';
        }
    }

    function checkemployeedetails(){
     
     $checkemployeedetails = mysqli_query($this->conn,"SELECT * FROM `emp_information` WHERE `added_by` = '".mysqli_real_escape_string($this->conn,$_POST['sessionid'])."'");
     echo mysqli_num_rows($checkemployeedetails);
        
    }

    function employee_timein(){
         $timein = mysqli_real_escape_string($this->conn,$_POST['timedatetime']);
          // echo date('D',strtotime($timein));
          // if(date('D',strtotime($timein)) == 'Fri'){
          //       $nextdate = date('Y',strtotime($timein)).'-'.date('m',strtotime($timein)).'-'.date('d',strtotime($timein.' +1 day'));
          //       $nextdate1 = date('Y',strtotime($timein)).'-'.date('m',strtotime($timein)).'-'.date('d',strtotime($timein.' +2 day'));
          //       mysqli_query($this->conn,"INSERT INTO emp_attendanceinfo (emp_priid,time_in,emp_id,currentt_date) VALUES('".$_SESSION['id']."','$nextdate','sd','$nextdate') ");
          //       mysqli_query($this->conn,"INSERT INTO emp_attendanceinfo (emp_priid,time_in,emp_id,currentt_date) VALUES('".$_SESSION['id']."','$nextdate1','sd','$nextdate1') ");
          //   echo 'yes';
          // }else{
          //   echo 'no';
          // }

         // echo date('m',strtotime($timein));
         // echo date('d',strtotime($timein));
         // echo date('Y',strtotime($timein));
// SELECT MAX(id) FROM clients
         // echo "SELECT MAX(time_in) FROM `emp_attendanceinfo` WHERE  `emp_priid` = '".$_SESSION['id']."'";
         // exit();

        $chcektimein = mysqli_fetch_row(mysqli_query($this->conn,"SELECT MAX(time_in) FROM `emp_attendanceinfo` WHERE  `emp_priid` = '".$_SESSION['id']."'"));
                if(date('Y-m-d',strtotime($chcektimein[0])) == date('Y-m-d',strtotime($timein)) ){
                    echo '0'; //duplicate
                }else{
                     $inserttimein = mysqli_query($this->conn,"INSERT INTO emp_attendanceinfo (emp_priid,time_in,emp_id,currentt_date,emp_status) VALUES('".$_SESSION['id']."','$timein','".$_SESSION['emp_id']."','$timein','1') ");
                        if($inserttimein){
                             echo '1'; //noduplicate
                        }else{
                            echo  '2'; //error
                        }
                }
            

    }

    function employee_out(){

        $timeout = mysqli_real_escape_string($this->conn,$_POST['timedatetime']);
        $current_year = date("Y");  $current_month = date("m"); $current_date = date("d");

        $chcektimeoutid = mysqli_fetch_row(mysqli_query($this->conn,"SELECT MAX(id) FROM `emp_attendanceinfo` WHERE MONTH(currentt_date) = '$current_month' AND YEAR(currentt_date) = '$current_year' AND DAY(currentt_date) = '$current_date' AND `emp_priid` = '".$_SESSION['id']."'  "));

        $chcektimeout = mysqli_fetch_row(mysqli_query($this->conn,"SELECT MAX(time_in),MAX(time_out) FROM emp_attendanceinfo WHERE  id = '".$chcektimeoutid[0]."'"));

            $start_date = new DateTime();$since_start = $start_date->diff(new DateTime($chcektimeout[0]));
            $toteltime = $since_start->h.' hours '.$since_start->i.' minutes ';

         if($chcektimeout[1] == ''){
            $updatetimeout = mysqli_query($this->conn,"UPDATE emp_attendanceinfo SET time_out = '".$timeout."',totel_time = '".$toteltime."' WHERE id = '".$chcektimeoutid[0]."' ");
                if($updatetimeout){
                     echo '1'; //noduplicate
                }else{
                    echo  '2'; //error
                }
         }else{
            echo '0';
         }


    }

    // function employeecurrentmonthattendance(){
    //     $currentmonthandyear = mysqli_real_escape_string($this->conn,$_POST['monthyear']);
    //     $current_year = date("Y");  $current_month = date("m");
    
    //      $fatchattendence = mysqli_query($this->conn,"SELECT * FROM emp_attendanceinfo WHERE MONTH(currentt_date) = '$current_month' AND YEAR(currentt_date) = '$current_year' AND `emp_priid` = '".$_SESSION['id']."' ");

    //       $attendance=[];
    //             $cr=0;l
    //                 while($attend=mysqli_fetch_assoc($fatchattendence)){
    //                     $attendance[$cr]['title'] = 'dsdsds';
    //                     $attendance[$cr]['start'] = date('Y-m-d',strtotime($attend['currentt_date']));
    //                     $attendance[$cr]['className'] = 'bg-info';

    //                     $cr++;
    //                 }
    //             echo json_encode($attendance); 
    // }


    function checksatsun(){
        $current_year = date("Y");  $current_month = date("m");
            $checkday = mysqli_query($this->conn,"SELECT current_datetime FROM emp_satsun_holiday WHERE MONTH(current_datetime) = '$current_month' AND YEAR(current_datetime) = '$current_year' ");
        // $checkday = 0;
            if(mysqli_num_rows($checkday) <= 0){
                        $now = new DateTime( 'now', new DateTimeZone( 'Asia/Kolkata' ) );
                        $start = new DateTime( $now->format('m/1/Y'), new DateTimeZone( 'Asia/Kolkata' ) );
                        $end = new DateTime( $now->format('m/t/Y'), new DateTimeZone( 'Asia/Kolkata' ) );
                        $interval = new DateInterval('P1D');
                        $period = new DatePeriod( $start, $interval, $end );

                        foreach( $period as $date ){

                            //Make sure the day displayed is ONLY sunday.
                            if( $date->format('w') == 0 || $date->format('w') == 6 ){
                                $daydate = $date->format( 'Y-m-d' ).PHP_EOL; 
                                $datyname = trim($date->format( 'l' ).PHP_EOL);
                                mysqli_query($this->conn,"INSERT INTO emp_satsun_holiday (holidaydate,holidayname,current_datetime) VALUES('$daydate','$datyname','$daydate') ");
                            }
                        }
            }else{
                $checkdayy = mysqli_fetch_row(mysqli_query($this->conn,"SELECT MAX(current_datetime) FROM emp_satsun_holiday "));

                    $newmonthdate = date("Y").'-'.date('m',strtotime($checkdayy[0].'+1 month')).'-'.'01';
                        //check the year and month than on insert query 


                        // $now = new DateTime($newmonthdate, new DateTimeZone( 'Asia/Kolkata' ) );
                        // $start = new DateTime( $now->format('m/1/Y'), new DateTimeZone( 'Asia/Kolkata' ) );
                        // $end = new DateTime( $now->format('m/t/Y'), new DateTimeZone( 'Asia/Kolkata' ) );
                        // $interval = new DateInterval('P1D');
                        // $period = new DatePeriod( $start, $interval, $end );

                        // foreach( $period as $date ){

                        //     //Make sure the day displayed is ONLY sunday.
                        //     if( $date->format('w') == 0 || $date->format('w') == 6 ){
                        //         $daydate = $date->format( 'Y-m-d' ).PHP_EOL; 
                        //         $datyname = trim($date->format( 'l' ).PHP_EOL);
                        //         mysqli_query($this->conn,"INSERT INTO emp_satsun_holiday (holidaydate,holidayname,current_datetime) VALUES('$daydate','$datyname','$daydate') ");
                        //     }
                        // }
            }
           


        
    }



    function applyleaveemployee(){
        $users_id = $_REQUEST['users_id'];
        $leave_type = $_REQUEST['leave_type'];
        $from_date = $_REQUEST['from_date'];  $to_date = $_REQUEST['to_date'];
        $Contact_No_during_leave = $_REQUEST['Contact_No_during_leave'];
        $leave_reason = $_REQUEST['leave_reason']; $leave_purpose = $_REQUEST['leave_purpose'];
        $address_during_leave = $_REQUEST['address_during_leave'];


            $datetime1 = new DateTime($from_date);$datetime2 = new DateTime($to_date);
            $interval = $datetime1->diff($datetime2);$elapsedhr= $interval->format('%h');
            $elapsedsec = $interval->format('%s');$elapsed = $interval->format('%a');
    
                if($elapsed>=1 ){$dayscount =  $elapsed+1 ;}else if($elapsedhr<=24){ $dayscount = '1';}

       mysqli_query($this->conn,"INSERT INTO `emp_apply_leave` (`emp_priid`, `leave_type`, `leave_from`, `leave_to`, `leave_days`, `contact_num`, `leave_reason`,
        `leave_purpose`, `addressduring_leave`, `add_updatedate`) VALUES ('$users_id', '$leave_type', '$from_date', '$to_date', '".$dayscount.' Days'."',
         '$Contact_No_during_leave', '$leave_reason', '$leave_purpose', '$address_during_leave',now()) ");
    }
    
    function update_leave_employee(){

        $update_id = $_REQUEST['update_id'];
        $leave_type = $_REQUEST['upleave_type'];
        $from_date = $_REQUEST['update_leavefrom'];  $to_date = $_REQUEST['update_leaveto'];
        $Contact_No_during_leave = $_REQUEST['update_contactnumber'];
        $leave_reason = $_REQUEST['update_leavereson']; $leave_purpose = $_REQUEST['update_leave_purpose'];
        $address_during_leave = $_REQUEST['update_addressduring_leave'];

            $datetime1 = new DateTime($from_date);$datetime2 = new DateTime($to_date);
            $interval = $datetime1->diff($datetime2);$elapsedhr= $interval->format('%h');
            $elapsedsec = $interval->format('%s');$elapsed = $interval->format('%a');
    
                if($elapsed>=1 ){$dayscount =  $elapsed+1 ;}else if($elapsedhr<=24){ $dayscount = '1';}

            $empupdateleave =  mysqli_query($this->conn," UPDATE emp_apply_leave SET `leave_type`='$leave_type', `leave_from`='$from_date',
             `leave_to`='$to_date', `leave_days`='".$dayscount.' Days'."', `contact_num`='$Contact_No_during_leave', `leave_reason`='$leave_reason',
            `leave_purpose`='$leave_purpose', `addressduring_leave`='$address_during_leave' WHERE id = '$update_id'  ");

            if($empupdateleave){
                return $_SESSION['success'] = "Employee Leave Updated Successfully";
            }else{
                return $_SESSION['error'] = "Something Wrong,Please Check";
            }

    }


    function deleteemployeeleave(){
        $delete_id = $_POST['delete_id'];
       
        $empdeleteleave = mysqli_query($this->conn,"DELETE FROM emp_apply_leave WHERE  `id` = '$delete_id'  " );
        if($empdeleteleave){
             return $_SESSION['success'] = "Employee Leave Deteled Successfully";
        }else{
             return $_SESSION['error'] = "Something Wrong,Please Check";
        }
    }













}
?>