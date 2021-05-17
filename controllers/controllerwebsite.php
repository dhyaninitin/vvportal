<?php
ob_start ();

include_once("models/User_model.php");

class controllerwebsite
{
    public $model;

    public function __construct(){  
//        constructor....
        $this->model = new User_Model();
    } 


	 function index(){
	 	include_once('views/home.php');
	 }

	 // function admindashboard(){
	 // 	include_once('layouts/Admin-lay/header.php');
	 // 	include_once('views/adminview/dashboard.php');
	 // 	include_once('layouts/Admin-lay/footer.php');
	 // }
	 	// Admin Page Start
	 function admindashboard(){
	 	include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/dashboard.php');
	 	include_once('layouts/Admin-lay/footer.php');
	 }

	 function new_employess(){
	 	include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/new_employess.php');
	 	include_once('layouts/Admin-lay/footer.php');
	 }

	  function Departments(){
	 	include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/Departments.php');
	 	include_once('layouts/Admin-lay/footer.php');
	 }

	function attendance(){
	 	include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/attendance.php');
	 	include_once('layouts/Admin-lay/footer.php');
	 }

	function NewProject(){
	 	include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/NewProject.php');
	 	include_once('layouts/Admin-lay/footer.php');
	 }

	function runingproject(){
		include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/runingproject.php');
	 	include_once('layouts/Admin-lay/footer.php');
	}

	function projectdetail(){
		include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/projectdetail.php');
	 	include_once('layouts/Admin-lay/footer.php');
	}

	function clients(){
		include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/clients.php');
	 	include_once('layouts/Admin-lay/footer.php');
	}

	function EmpLeaveRequests(){
		include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/EmpLeaveRequests.php');
	 	include_once('layouts/Admin-lay/footer.php');
	}

	function AllProjects(){
		include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/AllProjects.php');
	 	include_once('layouts/Admin-lay/footer.php');
	}

	function ppdateprojectpage(){
		include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/ppdateprojectpage.php');
	 	include_once('layouts/Admin-lay/footer.php');
	}

	function adminViewProject(){
		include_once('layouts/Admin-lay/header.php');
	 	include_once('views/adminview/adminViewProject.php');
	 	include_once('layouts/Admin-lay/footer.php');
	}

	

	

	


	 	// admin page End
	 function employeedashboard(){
	 	include_once('layouts/header.php');
	 	include_once('views/dashboard.php');
	 	include_once('layouts/footer.php');
	 }

	 function employeeattendance(){
	 	include_once('layouts/header.php');
	 	include_once('views/Attendance.php');
	 	include_once('layouts/footer.php');
	 }

	 function EmployeeLeave(){
	 	include_once('layouts/header.php');
	 	include_once('views/EmployeeLeave.php');
	 	include_once('layouts/footer.php');
	 }

	 function EmployeeRunningProject(){
		include_once('layouts/header.php');
		include_once('views/EmployeeRunningProject.php');
		include_once('layouts/footer.php');
	}

	function Emp_Projects(){
		include_once('layouts/header.php');
		include_once('views/Emp_Projects.php');
		include_once('layouts/footer.php');
	}

	 

	 
	 function underconstruction(){
	 	include_once('views/under-construction.php');
	 }
	  function notfound(){
	 	include_once('views/notfound.php');
	 }

	 


}
?>