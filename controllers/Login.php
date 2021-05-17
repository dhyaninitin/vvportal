<?php 
ob_start();
session_start();
include_once("models/Login_model.php");
class Login
{
    public $model;
    public function __construct(){  
//        constructor....
        $this->model = new Login_model();
    }
    
    public function check_login(){
        //much like register.....    
        $user_name = $_POST['user_name'];
        $password = md5($_POST['password']);
        $remember = $_POST['remember'];
        //got all variables....
        
        $check_name = $this->preg_name($user_name);
        $check_pass = $this->preg_pass($password);
            //checking function for patterns.....
        
        if($check_name && $check_pass){
//            if the pattern goes good.....
//            send details to model....
            $send_details = $this->model->check_login($user_name,$password);
            
            if($send_details == FALSE){
//if the sent details don't return TRUE.....
                $_SESSION['error'] = "Authentication error. Please check one of the details and try again.";
                header('location:index');
            }
            
            else{
//                checking if the user pressed remember me button.....
                if($remember == "yes"){
//                    setting cookies if the user presses the rememeber me button.....
                    
                    $date_of_expiry = time() + 60 * 60 * 24; //setting cookie for one day            
                    
                    setcookie("useremail", $user_name, $date_of_expiry);
                    
                    setcookie("userpass", $password, $date_of_expiry);
                
                }
                // add data store in session 
                $_SESSION['emp_id'] = $send_details['emp_id'];
                $_SESSION['id'] = $send_details['id'];
                $_SESSION['name'] = $send_details['name'];
                $_SESSION['email'] = $send_details['email'];
                $_SESSION['dob'] = $send_details['dob'];
                $_SESSION['country'] = $send_details['country'];
                $_SESSION['mobile'] = $send_details['mobile'];
                $_SESSION['state'] = $send_details['state'];
                $_SESSION['city'] = $send_details['city'];
                $_SESSION['address'] = $send_details['address'];
                echo $_SESSION['user_type'] = $send_details['user_type'];
                $_SESSION['status'] = $send_details['status'];
                
                // echo 'yes login';
                // exit();
//                storing all the details into the session....
                if(isset($send_details['user_type'])){
                    if( strcasecmp($send_details['user_type'], "superAdmin") == 0)
                    {
                            if($_SESSION['status'] == 0){
                                 $_SESSION['error'] = "Authentication error. Try After Sometime. ";
                            header('location:index');
                            
                            }
                            elseif(($_SESSION['status'] == 1)){
                                $_SESSION['success'] = "Welcome <b>" . $_SESSION['name']."</b> in VirtueVise Employee Portal";
                            header('location:Admin/Admin-Dashboard');
                            }
                            else{
                            $_SESSION['error'] = "Authentication error. Please check one of the details and try again. ";
                            eader('location:index');
                            } 
                    
                    }
                    else{
                            if($_SESSION['status'] == 0){
                                 $_SESSION['error'] = "Authentication error. Try After Sometime. ";
                                header('location:index');
                            
                            }
                            elseif(($_SESSION['status'] == 1)){
                                $_SESSION['success'] = "Welcome <b>" . $_SESSION['name']."</b> in VirtueVise Employee Portal";
                                header('location:Employee-Dashboard');
                            }
                            else{
                                $_SESSION['error'] = "Authentication error. Please check one of the details and try again. ";
                                eader('location:index');
                            }
                    }
                }
//                redirecting the user to dashboard.....
                
            }//else ends here....
            
        }//if ends here.....

        else{
//            is the pattern is not good....
            $_SESSION['error'] = "Please use correct patterns for username or password";
            header('location:index');
        }
    }// function ends here.....


    
        public function preg_name($name){
//        function for checking pattern.....
        if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,50}$/", $name)) {
            return TRUE;
    }
        else{
            return FALSE;
        }
    }
    public function preg_pass($name){
            return TRUE;
//        if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{0,12}$/', $name)){
//        }
//        else{
//            return FALSE;
//        }
    } 

}
?>