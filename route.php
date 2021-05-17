<?php
error_reporting(0);
include_once("controllers/Login.php");
include_once("controllers/controllerwebsite.php");
include_once("controllers/controllerAdmin.php");
include_once("controllers/controllerUser.php");

include_once("controllers/controller.php");

session_start();
$login = new Login();
$controllerpage = new controllerwebsite();
$controlleradmin = new controllerAdmin();$controlleruser = new controllerUser();

$controller = new Controller();

if(isset($_GET['param'])){

    // website routes
	if($_GET['param']== 'index'){
		$controllerpage->index();
	}elseif($_GET['param'] =='Admin-Dashboard'){
        $controllerpage->admindashboard();
    }elseif($_GET['param'] =='Employee-Dashboard'){
        $controllerpage->employeedashboard();
    }elseif($_GET['param'] == 'Under-Construction'){
        $controllerpage->underconstruction();
    }elseif($_GET['param'] == 'check_login'){
        $login->check_login();
    }elseif($_GET['param'] =='Logout'){
        $controller->logout();
    }elseif($_GET['param'] == 'check'){
        $controlleruser->check();
    }elseif($_GET['param'] == 'Employee-Attendance'){
        $controllerpage->employeeattendance();
    }elseif($_GET['param'] == 'Employee-Leave'){
        $controllerpage->EmployeeLeave();
    }

    // Admin page Routes
    elseif($_GET['param'] == 'New-Employee'){
        $controllerpage->new_employess();
    }elseif($_GET['param'] == 'Departments'){
        $controllerpage->Departments();
    }elseif($_GET['param'] == 'Attendance'){
        $controllerpage->attendance();
    }elseif($_GET['param'] == 'New-Project'){
        $controllerpage->NewProject();
    }elseif($_GET['param'] == 'uploadfiless'){
        // $controllerpage->uploadfiless();
        echo 'yes';
    }elseif($_GET['param'] == 'Runing-Project'){
        $controllerpage->runingproject();
    }elseif($_GET['param'] == 'Project-detail'){
        $controllerpage->projectdetail();
    }elseif($_GET['param'] == 'Clients'){
        $controllerpage->clients();
    }elseif ($_GET['param'] == 'Emp-LeaveRequests') {
        $controllerpage->EmpLeaveRequests();
    }elseif($_GET['param'] == 'All-Projects'){
        $controllerpage->AllProjects();
    }elseif($_GET['param']== 'Update-Project'){
        $controllerpage->ppdateprojectpage();
    }elseif($_GET['param'] == 'Employee-Running-Project'){
        $controllerpage->EmployeeRunningProject();
    }elseif($_GET['param'] == 'Emp-Projects'){
        $controllerpage->Emp_Projects();
    }elseif($_GET['param'] == 'View-Project'){
        $controllerpage->adminViewProject();
    }

    // Admin dev router
    elseif ($_GET['param'] == 'add-new-employee') {
        $controlleradmin->add_newemployee();
    }elseif($_GET['param'] == 'update-new-employee'){
        $controlleradmin->update_newemployee();
    }elseif($_GET['param'] == 'delete-employee'){
        $controlleradmin->deleteemployee();
    }elseif($_GET['param'] == 'add-update-attendece'){
        $controlleradmin->addupdateattendece();
    }elseif($_GET['param'] == 'emp-attend-delete'){
        $controlleradmin->empattenddelete();
    }elseif($_GET['param'] == 'Admin-approvleave'){
        $controlleradmin->Adminapprovleave();
    }elseif($_GET['param'] == 'Admin-empdetpmet'){
        $controlleradmin->Admin_empdetpmet();
    }elseif($_GET['param'] == 'Adminapply-leave-employee'){
        $controlleradmin->Adminapplyleaveemployee();
    }elseif($_GET['param']== 'adminupdate-leave-employee'){
        $controlleradmin->adminupdateleaveemployee();
    }elseif($_GET['param'] == 'Admindelete-leave'){
        $controlleradmin->Admindeleteleave();
    }elseif($_GET['param'] == 'fatch-month-attendence'){
        $controlleradmin->fatchmonthattendence();
    }elseif($_GET['param']== 'Admin-add-project'){
        $controlleradmin->Admin_addproject();
    }elseif($_GET['param'] == 'Admindelete-project'){
        $controlleradmin->Admindeleteproject();
    }elseif($_GET['param'] == 'Admin-Update-project'){
        $controlleradmin->AdminUpdateproject();
    }
    elseif($_GET['param'] == 'fatch-emp-sallery'){
        $controlleradmin->fatchempsallery();
    }elseif($_GET['param'] == 'fatch-emp-teamleader'){
        $controlleradmin->fatchempteamleader();
    }





    // Employee dev router
    elseif($_GET['param'] == 'addemp_info'){
        $controlleruser->addempinfo();
    }elseif($_GET['param'] == 'checkemployeedetails'){
        $controlleruser->checkemployeedetails();
    }elseif($_GET['param'] == 'employee-timeIn'){
        $controlleruser->employee_timein();
    }elseif($_GET['param'] == 'employee-timeout'){
        $controlleruser->employee_out();   
    }elseif($_GET['param'] == 'employee-currentmonthattendance'){
        $controlleruser->employeecurrentmonthattendance();
    }elseif($_GET['param'] =='apply-leave-employee'){
        $controlleruser->applyleaveemployee();
    }elseif($_GET['param'] == 'update-leave-employee'){
        $controlleruser->update_leave_employee();
    }elseif($_GET['param'] == 'delete-employee-leave'){
        $controlleruser->deleteemployeeleave();
    }



    elseif ($_GET['param'] == 'check-sat-sun') {
        $controlleruser->checksatsun();
    }

    else{
        $controllerpage->notfound();
    }


}else{
    $controllerpage->notfound();
}


?>