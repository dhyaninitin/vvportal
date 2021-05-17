<?php
ob_start ();

include_once("models/Admin_model.php");

class controllerAdmin{
    public $model;

    public function __construct(){  
			//constructor....
        $this->model = new Admin_Model();
    } 

   	function check(){
   		$this->model->check();
   	}

   	function add_newemployee(){
   		$this->model->add_newemployee();
   		header("location:New-Employee"); 
   	}

   	function update_newemployee(){
   		$this->model->update_newemployee();
   		header("location:New-Employee");
   	}

   	function deleteemployee(){
   		$this->model->deleteemployee();
   		header("location:New-Employee");
   	}

    function addupdateattendece(){
      $this->model->addupdateattendece();
      header("location:Attendance");
    }

    function empattenddelete(){
      $this->model->empattenddelete();
    }

    function Adminapprovleave(){
      $this->model->Adminapprovleave();
    //   header("location:Emp-LeaveRequests");
    }

	function Admin_empdetpmet(){
		$this->model->Admin_empdetpmet();
	}

	function Adminapplyleaveemployee(){
		$this->model->Adminapplyleaveemployee();
      header("location:Emp-LeaveRequests");
	}

	function adminupdateleaveemployee(){
		$this->model->adminupdateleaveemployee();
		header('location:Emp-LeaveRequests');
	}

	function Admindeleteleave(){
		$this->model->Admindeleteleave();
		header('location:Emp-LeaveRequests');
	}

	function fatchmonthattendence(){
		$this->model->fatchmonthattendence();
	}

	function Admin_addproject(){
		$this->model->Admin_addproject();
		header('location:All-Projects');
	}

	function AdminUpdateproject(){
		$this->model->AdminUpdateproject();
		header('location:All-Projects');
	}

	function Admindeleteproject(){
		$this->model->Admindeleteproject();
		header('location:All-Projects');
	}

	function fatchempsallery(){
		$this->model->fatchempsallery();
	}

	function fatchempteamleader(){
		$this->model->fatchempteamleader();
	}

}
?>