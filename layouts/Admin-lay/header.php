<!doctype html>
<html lang="en">
<head><?php 
$base_url = 'http://localhost/vvportal/';
include_once('toster.php');


if(!isset($_SESSION['email'])){
    $_SESSION['error']= "PLease Login FIrst";
    header("location:../index");    
}
?>
<title>:: VirtueVise :: <?php echo $_GET['param'];?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="VirtueVise Technologies :: Employee Portal">
<meta name="author" content="design by: virtuevise.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="<?php echo $base_url;?>assets/logo/icon.png" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor/bootstrap/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css"> -->

<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor/toastr/toastr.min.css">
<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor/sweetalert/sweetalert.css"/>
<script src="<?php echo $base_url;?>assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 

<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo $base_url;?>assets/css/main.css">
<link rel="stylesheet" href="<?php echo $base_url;?>assets/css/color_skins.css">
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
    
</style>
</head>
<body class="">
<?php include_once('connection.php');?>
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="<?php echo $base_url;?>assets/images/logo.svg" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-brand">
                <a href="index.html"><img src="<?php echo $base_url;?>assets/logo/company_logo.jpg" alt="Lucid Logo" class="img-responsive logo"></a>                
            </div>
            
            <div class="navbar-right">              

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">                        
                        
                        <li><a href="javascript:void(0);" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a></li>
                        <li><a href="javascript:void(0);" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a></li>
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
                                    <img class="media-object " src="<?php echo $base_url;?>assets/images/xs/avatar4.jpg" alt="">
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
                                    <img class="media-object " src="<?php echo $base_url;?>assets/images/xs/avatar5.jpg" alt="">
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
                                    <img class="media-object " src="<?php echo $base_url;?>assets/images/xs/avatar2.jpg" alt="">
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
                                    <img class="media-object " src="<?php echo $base_url;?>assets/images/xs/avatar1.jpg" alt="">
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
                                    <img class="media-object " src="<?php echo $base_url;?>assets/images/xs/avatar3.jpg" alt="">
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
                                    <img class="media-object " src="<?php echo $base_url;?>assets/images/xs/avatar4.jpg" alt="">
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
                                    <img class="media-object " src="<?php echo $base_url;?>assets/images/xs/avatar5.jpg" alt="">
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
                                    <img class="media-object " src="<?php echo $base_url;?>assets/images/xs/avatar2.jpg" alt="">
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
                                    <img class="media-object " src="<?php echo $base_url;?>/images/xs/avatar1.jpg" alt="">
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
                                    <img class="media-object " src="<?php echo $base_url;?>assets/images/xs/avatar3.jpg" alt="">
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
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-speedometer"></i> <span> Dashboard</span></a>
                            <div class="dropdown-menu mega-main padding-0 animated fadeIn">
                                <div class="row">
                                    <div class="col-lg-2 col-lg-auto col-md-4 col-sm-4">
                                        <div class="mega-list">
                                            <ul class="list-unstyled">
                                                <li class="active"><a href="index.html">Dashboard</a></li>
                                                <li><a href="app-holidays.html">Holidays</a>
                                                <li><a href="app-events.html">Events</a></li>
                                                <li><a href="app-activities.html">Activities</a></li>
                                                <li><a href="app-users.html">Users</a></li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li><label>Report</label></li>
                                                <li><a href="report-expense.html">Expense Report</a></li>
                                                <li><a href="report-invoice.html">Invoice Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-lg-auto col-md-4 col-sm-4">
                                        <div class="mega-list">
                                            <ul class="list-unstyled">
                                                <li><label>Employees</label></li>
                                                <li><a href="emp-all.html">All Employees</a></li>
                                                <li><a href="emp-leave.html">Leave Requests</a></li>
                                                <li><a href="emp-attendance.html">Attendance</a></li>
                                                <li><a href="emp-departments.html">Departments</a></li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li><label>Payroll</label></li>
                                                <li><a href="payroll-payslip.html">Payslip</a></li>
                                                <li><a href="payroll-salary.html">Employee Salary</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-lg-auto col-md-4 col-sm-4">
                                        <div class="mega-list">
                                            <ul class="list-unstyled">
                                                <li><label>Accounts</label></li>
                                                <li><a href="acc-payments.html">Payments</a></li>
                                                <li><a href="acc-expenses.html">Expenses</a></li>
                                                <li><a href="acc-invoices.html">Invoices</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 hidden-sm">
                                        <div class="img-box" style="background-image: url(<?php echo $base_url;?>assets/images/menu-img/1.jpg)"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                          <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i> <span>Project</span></a>
                            <div class="dropdown-menu animated bounceIn right-side colmun2-menu">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list-unstyled">
                                            <li><a href="New-Project">Add Project</a></li>
                                            <li><a href="Runing-Project">Running Project</a></li>
                                            <li><a href="Under-Construction">Complete Project</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list-unstyled">
                                            <li><a href="All-Projects">All Project</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-menu">
                            <a href="Clients" class="nav-link"><i class="icon-user-follow"></i> <span>Clients</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o"></i> <span>Employee Details</span></a>
                            <div class="dropdown-menu animated bounceIn right-side colmun2-menu">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list-unstyled">
                                            <li><a href="New-Employee">New Employees</a></li>
                                            <li><a href="Under-Construction">All Employees</a></li>
                                            <li><a href="Departments">Departments</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <ul class="list-unstyled">
                                            <li><a href="Attendance">Attendance</a></li>
                                            <li><a href="Emp-LeaveRequests">Leave Requests</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>

            </div>
        </nav>
    </div>
