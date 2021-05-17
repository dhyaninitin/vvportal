<!doctype html>
<html lang="en">
<?php $base_url = 'http://localhost/vvportal/';
include_once('layouts/toster.php');?>
<head>
<title>::VirtueVise Portal :: Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor/toastr/toastr.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo $base_url;?>assets/css/main.css">
<link rel="stylesheet" href="<?php echo $base_url;?>assets/css/color_skins.css">
<style type="text/css">
    .loginbutton{
        background-color: #ECA500!important;
        border-color: #ECA500!important;
    }
    .alertclass{
        border-bottom-color: #b30505!important;
        border-width: 2px!important;
        border-right-color: #b30505!important;
        border-left-color: #b30505!important;
    }


    }
</style>
</head>

<body class="">
	<!-- WRAPPER -->
	<div id="wrapper" >
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="top">
                        <img src="<?php echo $base_url;?>assets/logo/company_logo.jpg" alt="Lucid">
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead"><strong>Enter your login credentials</strong></p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="check_login" method="POST" name="loginform"  onsubmit="return loginvalidation()">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" name="user_name"  placeholder="Enter Your Email Address"/><br/>
                                    <span style="color:#b30505;" id="emailerror"></span>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" name="password" id="signin-password" placeholder="Enter your Password"/><br/>
                                     <span style="color:#b30505;" id="passworderror"></span>
                                </div>
                                <div class="form-group clearfix">
                                    <!-- <label class="fancy-checkbox element-left"> -->
                                        <input type="checkbox" name="remember" value="yes">
                                        <span>Remember me</span>
                                    <!-- </label>-->
                                </div>
                                <button type="submit" class="btn btn-primary  loginbutton btn-lg btn-block">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="">Forgot password?</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
<script type="text/javascript">
      function loginvalidation() { 
        // alert('dsdasdada');
        var email = document.forms["loginform"]["user_name"]; 
        var password = document.forms["loginform"]["password"]; 

       
         if (email.value == "") { 
             document.getElementById('emailerror').innerHTML = "Please Enter The Email";
            email.focus();
            $('#signin-email').addClass('alertclass');
            return false; 
        }
        else{
            $('#signin-email').removeClass('alertclass');
            document.getElementById('emailerror').style.display = "none";
        }

        if (password.value == "") { 
            document.getElementById('passworderror').innerHTML = "Please Enter The Password";
            password.focus(); 
            $('#signin-password').addClass('alertclass');
            return false; 
        } else{
            $('#signin-password').removeClass('alertclass');
            document.getElementById('passworderror').style.display = "none";
        }      
    }
</script>
<script src="<?php echo $base_url;?>assets/vendor/toastr/toastr.js"></script>

</html>
