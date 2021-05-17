<!doctype html>
<html lang="en">
<head>
<title>:: VirtueVise :: <?php echo $_GET['param'];?></title>
<meta charset="utf-8">
<?php 
$base_url = 'http://localhost/vvportal/';
include_once('toster.php');
include_once('connection.php');
if(!isset($_SESSION['email'])){
    $_SESSION['error']= "PLease Login FIrst";
    header("location:index");    
}
?>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
<link rel="stylesheet" href="assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor/sweetalert/sweetalert.css"/>
<script src="<?php echo $base_url;?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
<style type="text/css">
    body {
    background-color: #F4F7F6 !important;
    color: #5A5A5A;
    }
    .required{
        color: #b30505;
    }
    .alertclass{
        border: 2px solid;
        border-color: #d81919!important;
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

    .card {
    box-shadow: -3px 6px 2px 0px rgb(0 0 0 / 10%)!important;
}
</style>
</head>
<body class="page-calendar">
<?php date_default_timezone_set('Asia/Kolkata');
$users = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM `users` WHERE  `id` = '".$_SESSION['id']."'"))?>
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-brand">
                <a href="index.html"><img src="assets/logo/company_logo.jpg" alt="Lucid Logo" class="img-responsive logo"></a>                
            </div>
            
            <div class="navbar-right">              

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">                        
                        
                        <li><a href="app-chat.html" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a></li>
                        
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu notifications animated shake">
                                <li class="header"><strong>You have 4 new Notifications</strong></li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                <span class="timestamp">10:00 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>                               
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-like text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                <span class="timestamp">11:30 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                 <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-pie-chart text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                <span class="timestamp">04:00 PM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Error on website analytics configurations</p>
                                                <span class="timestamp">Yesterday</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="icon-menu d-none d-sm-block rightbar_btn"><i class="icon-equalizer"></i></a></li>

                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><img src="<?php echo $base_url;?>assets/images/user.png" alt="Lucid Logo" class="header-user-logo"><span class="user-name"><?php echo $_SESSION['name'];?></span></a>
                            <ul class="dropdown-menu user-menu menu-icon animated bounceIn">
                                <li class="menu-heading">ACCOUNT SETTINGS</li>
                                <li><a href="javascript:void(0);"><i class="fa fa-user-circle-o"></i> <span>Profile</span></a></li>
                                <li><a href="javascript:void(0);"onclick="logout()"><i class="icon-login"></i> <span>Logout</span></a></li>
                                <!--<li class="menu-heading">BILLING</li>
                                <li><a href="javascript:void(0);"><i class="icon-credit-card"></i> <span>Payments</span></a></li>
                                <li><a href="javascript:void(0);"><i class="icon-printer"></i> <span>Invoices</span></a></li>                                
                                <li><a href="javascript:void(0);"><i class="icon-refresh"></i> <span>Renewals</span></a></li> -->
                            </ul>
                        </li>
    
                    </ul>
                </div>
            </div>

            <div class="navbar-btn">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <i class="lnr lnr-menu fa fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <div id="rightbar" class="rightbar">
        <div class="sidebar-scroll">            
          
            <div class="tab-content">
                <div class="tab-pane animated fadeIn active" id="Chat">
                    <form>
                        <div class="input-group m-b-20">
                            <div class="input-group-prepend">
                                <span class="input-group-text" ><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="right_chat list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Chris Fox</span>
                                        <span class="message">Designer, Blogger</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Joge Lucky</span>
                                        <span class="message">Java Developer</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella</span>
                                        <span class="message">CEO, Thememakker</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Folisise Chosielie</span>
                                        <span class="message">Art director, Movie Cut</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander sdsad</span>
                                        <span class="message">Writter, Mag Editor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>   
                    </ul>
                </div>               
            </div>          
        </div>
    </div>

    <div id="rightbar" class="rightbar">
        <div class="sidebar-scroll">            
            <!-- Nav tabs -->
            <ul class="nav nav-tabs-new">                
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>                
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane animated fadeIn active" id="Chat">
                    <form>
                        <div class="input-group m-b-20">
                            <div class="input-group-prepend">
                                <span class="input-group-text" ><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="right_chat list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Chris Fox</span>
                                        <span class="message">Designer, Blogger</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Joge Lucky</span>
                                        <span class="message">Java Developer</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella</span>
                                        <span class="message">CEO, Thememakker</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Folisise Chosielie</span>
                                        <span class="message">Art director, Movie Cut</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander</span>
                                        <span class="message">Writter, Mag Editor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>                        
                    </ul>
                </div>
                <div class="tab-pane animated fadeIn" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>                   
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="orange" class="active">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                            <span>Blush</span>
                        </li>
                    </ul>
                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Report Panel Usag</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Email Redirect</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Notifications</span>
                            </label>                      
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Auto Updates</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Location Permission</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane animated fadeIn" id="question">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" ><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="list-unstyled question">
                        <li class="menu-heading">HOW-TO</li>
                        <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                        <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                        <li><a href="javascript:void(0);">Website Analytics</a></li>
                        <li class="menu-heading">ACCOUNT</li>
                        <li><a href="javascript:void(0);">Cearet New Account</a></li>
                        <li><a href="javascript:void(0);">Change Password?</a></li>
                        <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                        <li class="menu-heading">BILLING</li>
                        <li><a href="javascript:void(0);">Payment info</a></li>
                        <li><a href="javascript:void(0);">Auto-Renewal</a></li>                        
                        <li class="menu-button m-t-30">
                            <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need Help?</a>
                        </li>
                    </ul>
                </div>                
            </div>          
        </div>
    </div>

    <!-- droupdown menu -->
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <div class="navbar-collapse align-items-center collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown mega-menu active">
                            <a href="Employee-Dashboard" class="nav-link"><i class="icon-speedometer"></i> <span> Dashboard</span></a>
                        </li>

                        <li class="nav-item dropdown mega-menu ">
                            <a href="Employee-Attendance" class="nav-link"><i class="icon-list"></i> <span> Attendance</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-grid"></i> 
                            <span>Projects</span></a>
                            <ul class="dropdown-menu animated bounceIn">
                                <li><a href="Employee-Running-Project"> Running Project</a></li>
                                <li><a href="Under-Construction">Complete Project</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-tag"></i> <span>Apply Leave / Official Trip</span></a>
                            <ul class="dropdown-menu animated bounceIn">
                                
                                <li><a href="Employee-Leave"> Apply Leave / Status</a></li>
                                <!-- <li><a href="portal_user.php?param=Check_Leave_Status">Check Your Leave Status</a></li>
                                <li><a href="portal_user.php?param=Check_Your_Leave_Report">Check Your Leave Report</a></li> -->
                                <li><a href="portal_user.php?param=Apply_Official_Trip">Apply /Check Official Trip</a></li>
                                <!--<li><a href="portal_user.php?param=Check_Your_Leave_Report">Check Your Leave Report</a></li>-->
                                <!-- <li><a href="portal_user.php?param=Check_Official_Trip">Check Your Official Trip</a></li> -->
                            </ul>
                        </li>
                           
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-layers"></i> <span>Circular</span></a>
                            <ul class="dropdown-menu animated bounceIn">
                                <li><a href="portal_user.php?param=Upcoming_Birthday"> Upcoming Birthday</a></li>
                                <li><a href="portal_user.php?param=Employee_On_Leave">Employee On Leave</a></li>
                                <li><a href="portal_user.php?param=Upcoming_Holidays">Upcoming Holidays</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-layers"></i> <span>Office Rules / Notice</span></a>
                            <ul class="dropdown-menu animated bounceIn">
                                <li><a href="portal_user.php?param=Office_Rules">Office Rules</a></li>
                                <li><a href="portal_user.php?param=Notice">Notice</a></li>
                            </ul>
                        </li>

                       <!--  <li class="nav-item dropdown mega-menu ">
                            <a href="Employee-Leave" class="nav-link"><i class="icon-tag"></i> <span> Check / Apply Leave</span></a>
                        </li> -->
                        
                        

                    </ul>
                </div>

            </div>
        </nav>
    </div>
