<?php
ob_start ();

include_once("models/User_model.php");

class controllerUser{
    public $model;

    public function __construct(){  
			//constructor....
        $this->model = new User_model();
    } 

    function addempinfo(){
    	$this->model->addempinfo();
    	// header('location:Employee-Dashboard');
    }

    function checkemployeedetails(){
    	$this->model->checkemployeedetails();
    }

    function employee_timein(){
    	$this->model->employee_timein();
    }
    function employee_out(){
    	$this->model->employee_out();
    }

    function employeecurrentmonthattendance(){
	 	$this->model->employeecurrentmonthattendance();
	 }

	function checksatsun(){
		$this->model->checksatsun();
	} 

	function applyleaveemployee(){
		$this->model->applyleaveemployee();
    	header('location:Employee-Leave');
	}

	function update_leave_employee(){
		$this->model->update_leave_employee();
		header('location:Employee-Leave');
	}

	function deleteemployeeleave(){
		$this->model->deleteemployeeleave();
		header('location:Employee-Leave');
	}


}
?>