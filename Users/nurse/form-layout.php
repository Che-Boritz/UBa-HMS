<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon.png">
    <title>Nurse - Consultation</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!--alerts CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS --> 
    
    <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>consultationStuff/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>assets/css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url(); ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url(); ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url(); ?>assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url(); ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box">
                            <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <!--form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form-->
                        </li>
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/user.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../assets/images/users/user.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Bih Mirabel</h4>
                                            </div>  
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    
                                   
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-cm"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================================================================ Left side bar-->
       <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(<?php echo base_url(); ?>assets/images/background/) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#">Station 1</a>
                        <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> <a class=" waves-effect waves-dark" href="nurse-index.html" aria-expanded="false"><i class="fas fa-home"></i><span class="hide-menu">   Home </span></a>
                            
                        </li>
                        <li> <a class=" waves-effect waves-dark" href="form-layout.html" aria-expanded="false"><i class="fas fa-ambulance"></i><span class="hide-menu">   Outpatient </span></a>
                        </li>
                        <li> <a class=" waves-effect waves-dark" href="app-chat.html" aria-expanded="false"><i class="ti-themify-favicon-alt"></i><span class="hide-menu">   app </span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
    <!-- =============================End side bar======-->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-4 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Hello Welcome Back!!</h3>
                        
                    </div>
                    <div class="align-self-center col-md-4 ">
                        <div class="col-md-5 two-btn">
                            <a href="nurse-index.html" button type="button" class="btn waves-effect waves-light btn-block btn-info">Home</a>
                        </div>
                        <div class="col-md-6  two-btn">
                            <a href="#" button id="sa-emergency-classified" type="button" class="btn waves-effect waves-light btn-block btn-info">Emergency</a>
                        </div> 
                    </div>
                    <div class="col-md-4 align-self-center bg-warring">
                        <div class="d-flex m-t-10 justify-content-end"> 
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small></small></h6>
                                    <h4 class="m-t-0 text-primary"></h4></div>
                                    <h4 class="m-t-0 text-primary">Time: <span id="fowls"></span></h4>
                                        <script>
                                            var dt = new Date();
                                            document.getElementById("fowls").innerHTML = dt.toLocaleTimeString();
                                            </script>
                                    <div class="chart-text m-r-10">
                                        <h6 class="m-b-0"><small></small></h6>
                                        <h4 class="m-t-0 text-primary"></h4></div>
                                        <h4 class="m-t-0 text-primary">Date: <span id="datetime"></span></h4>
                                        <script>
                                        var dt = new Date();
                                        document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear());
                                        </script>
                                        
                                        </div>
                            <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info box-shadow">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Student's Information</h4>
                            </div>
                            <div class="card-body">
                                <!--form class="form-horizontal" role="form"-->
                                    <div class="form-body">
                                        <h3 class="box-title">Person Info</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">First Name:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> 
                                                            <?php  echo $students['name'];?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Last Name:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> <?php  echo $students['surname'];?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Gender:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> <?php  echo $students['sex'];?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Date of Birth:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> <?php  echo $students['date_birth'];?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        
                                        <!--/row-->
                                        <h3 class="box-title">Other Information</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Matricule:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> <?php  echo $students['matricule'];?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">School/Faculty:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> <?php  echo $students['faculty'];?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Address:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> <?php  echo $students['address'];?>  </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Age:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> 23 </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Mobile Number:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> <?php  echo $students['contact'];?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                <!--/form-->
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Medicals -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info box-shadow">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">New Consultation</h4>
                            </div>
                            <div class="card-body">
                                <!--form id="contactForm" action="index.php/Indexcontroller/updating_student" class="form-horizontal" method="post"-->
                                    <div class="form-body">
                                        <h3 class="box-title">Enter Information</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">  
                                <!-- column -->
                                <!--Hey (Boritz Guy) to group the button add the class="btn-group" -->
                                            <div class="col-xlg-6 col-lg-12 text-center m-b-30">
                                                <div class="text-white" data-toggle="buttons" role="group">
                                            
                                            <label class="btn btn-outline btn-info active">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="medicalChoice" name="options" value="Medicals"
                                                     class="custom-control-input">
                                                    <label class="custom-control-label" for="medicalChoice" id="medicalChoiceButton"> <i class="ti-check text-active" aria-hidden="true"></i>Medicals
                                                </label>
                                                </div>
                                            </label>        
                                            <label class="btn btn-outline btn-info" id="consultationChoiceButton">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="consultationChoice" name="options" value="male" class="custom-control-input">
                                                    <label class="custom-control-label" for="consultationChoice"> <i class="ti-check text-active" aria-hidden="true"></i>Consultion</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="followUp" name="options" value="female" class="custom-control-input">
                                                    <label class="custom-control-label" for="followUp"> <i class="ti-check text-active" aria-hidden="true"></i>Follow Up</label>
                                                </div>
                                            </label>
                                        </div>      </div>
                                <!-- column -->  
                                    </div>
                                    <?php echo form_open('index.php/Indexcontroller/updating_student'); ?>
                                    <!--form id="contactForm" action="index.php/Indexcontroller/updating_student" class="form-horizontal" method="post"-->
                                        <div class="form-group">
                                            <label></label>
                                            <textarea class="form-control" name="reason" placeholder="Enter reason(s) for consultation" rows="5"></textarea> 
									<!--div class="help-block with-errors"></div-->
                                        </div>
                                    </div>
                                    
                                    <h3 class="box-title">Vital Signs</h3><br>
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="hidden" name="id" readonly="" value="<?php echo $students['id_student'] ?>">
                                                <div class="form-group">
                                                    <label>Pulse</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="pulse" class="form-control" value="<?php echo $students['pulse'] ?>" placeholder="" data-error="Please Enter The Pulse"  > 
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Respiration</label>
                                                    <div class="col-md-9">
                                                        <input type="number" name="respiration" value="<?php echo $students['respiration'] ?>" class="form-control" placeholder="" data-error="Please Enter The Respiration Rate"  > 
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Blood Pressure</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="blood_pressure" class="form-control form-control-danger" placeholder="" value="<?php echo $students['blood_pressure'] ?>"  data-error="Please Enter The Blood Pressure"  > 
                                                        <div class="help-block with-errors"></div>
                                                        </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="tem-form-group">
                                                    <label>Temperature (℃) </label>
                                                    <div class="col-md-9">
                                                        <input id="inputCelsius" name="temperature_c" class="tem-form-control-a"  type="number"   placeholder="" value="<?php echo $students['temperature_c'] ?>"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tem-form-group">
                                                    <label>Temperature (K)</label>
                                                    <div class="col-md-9">
                                                        <input id="inputKelvin" name="temperature_k" type="number" class="tem-form-control-a"  placeholder="" value="<?php echo $students['temperature_k'] ?>"> 
                                                        <!--small class="tem-form-control-feedback"></small--> </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="tem-form-group">
                                                    <label>Temperature (℉)</label>
                                                    <div class="col-md-9">
                                                        <input id="inputFahrenheit" name="temperature_f" type="number" class="tem-form-control-a" placeholder=""   value="<?php echo $students['temperature_f'] ?>"> 
                                                        </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Weight</label>
                                                    <div class="col-md-9">
                                                        <input id="inputWeight" name="weight" value="<?php echo $students['weight'] ?>" type="number" class="form-control"  placeholder="" onblur="calculateIBM();">       
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Height</label>
                                                    <div class="col-md-9">
                                                        <input id="inputHeight" name="height" value="<?php echo $students['height'] ?>" type="number" class="form-control"  placeholder="" onblur="calculateIBM();"> 
                                                        </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                           
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>BMI</label>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                               <div id="BMI-result"></div> 
                    			<div id="BMI-comment"></div> 
                    	    </div> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>   
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>SYSTOLIC mmHg</label>
                                                    <div class="col-md-9">
                                                        <input id="inputSYSTOLIC" name="systolic" type="number" value="<?php echo $students['systolic'] ?>" class="form-control" placeholder=""
                            onblur="commentBloodPressure();" data-error="Please Enter The Systolic Value"  > 
                                                        <div class="help-block with-errors"></div></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>DIASTOLIC mmHg</label>
                                                    <div class="col-md-9">
                                                        <input id="inputDIASTOLIC" name="diastolic" type="number" value="<?php echo $students['diastolic'] ?>" class="form-control" placeholder="" onblur="commentBloodPressure();" data-error="Please Enter The Diastlic Value"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Blood Pressure : </label>
                            <span id="blood-pressure-color"> 
                                <span id="SYSTOLIC-Output"></span>/
                                <span id="DIASTOLIC-Output" ></span>
                            </span>
                                     <div class="col-md-9">
                                         <span id = "BP-comment" ></span>
                                                             
                                                     </div>
                                                </div>
                                            </div>
                                            <!--/span-->

                                        </div>
                                         <br/><br/>
                                       <div class="row">
                                           <div class="col-md-12 text-center">
                                              <button type="button" class="btn btn-success" id="btn-female"><i class="fa fa-female"></i> Female</button>
                                        <button type="button" class="btn btn-success" id="btn-male"><i class="fa fa-male"></i> Male</button> 
                                           </div>
                                       </div>
                                      
                                       <div id="menstrualObservation">
                                       <h3 class="box-title">Menstrual Observation</h3><br>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Last Menstrual Period: </label>
                                                    <div class="col-md-9">
                                                        <input id="collect-LMP" name="last_menstral_period" class="form-control" value="<?php echo $students['last_menstral_period'] ?>" type="date" name="menstrual"  onblur="pregnancyCalc();"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Average Length of Cycles: (22 to 45)</label>
                                                    <div class="col-md-9">
                                                        <input id="collect-ALC" name="avg_length_cycle" value="<?php echo $students['avg_length_cycle'] ?>" class="form-control" type="text" onblur="pregnancyCalc()"  placeholder="(defaults to 28)"></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Avg Luteal Phase Length (9 to 16)</label>
                                                    <div class="col-md-9">
                                                        <input id="collect-ALPL"  class="form-control" type="text"  name="avg_lp_length" value="<?php echo $students['avg_lp_length'] ?>" placeholder="(defaults to 14)" onblur="pregnancyCalc();"></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div> 
                                       
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Estimated Conception:  </label>
                                                    <div class="col-md-9">
                                                        <!--span id="EC" name="e_conception"></span-->
                                                        <input id="EC"  class="form-control" type="date"  name="e_conception" value="<?php echo $students['e_conception'] ?>"></div>

                                                    </div>
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Estimated Due Date: </label>
                                                    <div class="col-md-9">
                                                        <input id="EDD"  class="form-control" type="date"  name="e_duedate" value="<?php echo $students['e_duedate'] ?>"></div>
                                                        <!--span id="EDD" name="e_duedate"></span-->
                                                    </div>
                                            </div> 
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Estimated Fetal Age: </label>
                                                    <div class="col-md-9">
                                                        <input id="EFA"  class="form-control" type="date"  name="e_fetalage" value="<?php echo $students['e_fetalage'] ?>"></div>
                                                        <!--span id="EFA" name="e_fetalage"></span-->
                                                    </div>
                                            </div> 
                                            </div>
                                            <!--/span-->
                                        </div> 
                                       </div>
                                       <br/><br/>
                                        <h3 class="box-title">Physical Examination</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Head</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="head" class="form-control" placeholder="" value="<?php echo $students['head'] ?>" data-error="Please Enter Head Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Neck</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="neck" value="<?php echo $students['neck'] ?>" class="form-control" placeholder="" data-error="Please Enter Neck Examination"  > 
                                                        <div class="help-block with-errors"></div></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Chest</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="chest" value="<?php echo $students['chest'] ?>" class="form-control form-control-danger" placeholder="" data-error="Please Enter Chest Examination"  > 
                                                        <div class="help-block with-errors"></div></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Thorax</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="thorax" class="form-control" value="<?php echo $students['thorax'] ?>" placeholder="" data-error="Please Enter Thorax Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Abdomen</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="abdomen" class="form-control" placeholder="" value="<?php echo $students['abdomen'] ?>"  data-error="Please Enter Abdomen Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Pelvic Exams</label>
                                                    <div class="col-md-9"> 
                                                        <input type="text" name="pelvic_exam" value="<?php echo $students['pelvic_exam'] ?>" class="form-control form-control-danger" placeholder="" data-error="Please Enter pelvic Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Lower Limbs</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="lower_limbs" value="<?php echo $students['lower_limbs'] ?>" class="form-control" placeholder="" data-error="Please Enter Lower Limbs Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Lymph</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="lymph" class="form-control" placeholder="" value="<?php echo $students['lymph'] ?>" data-error="Please Enter Lymph Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Skin</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="skin" value="<?php echo $students['skin'] ?>" class="form-control form-control-danger" placeholder="" data-error="Please Enter Skin Examination"  > 
                                                        <div class="help-block with-errors"></div></div>
                                                </div>
                                            </div>
                                            
                                            <button type="submit" name="submit" class="btn waves-effect waves-light btn-block btn-success">Submit</button>
                                            </form>
                                            <!--/span-->
                                        </div>
                                    <div>
                                </div>
                <div class="submit-button col-lg-2 col-md-4">
                
                    </div> 
                </div>
            </div>
			 <!--/form-->
            </div>
        </div> 
                <!-- End of Medicals-->
                
                 
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== --> 
            <footer class="footer">
                © 2021 UBaHMS
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    
    <!--======+++++++++ Validation js stuff (Added by Boritz) ++++++++==========-->
                  
<!--=========== Javascript For BMI =======================-->  
    <script>
        function calculateIBM() {
            var Weight = Number(document.getElementById("inputWeight").value);
            var Height = Number(document.getElementById("inputHeight").value);
            var BMI = document.getElementById("BMI-result");
            var Comment = document.getElementById("BMI-comment");
            if (BMI.textContent === Infinity || BMI.textContent === undefined) {
                BMI.textContent = " ";
                }
            else { // IE
                var BMIAns = (Weight /(Height*Height)).toFixed(2);
                BMI.innerText = String(BMIAns);
                if(BMIAns < 18.5){
                    Comment.innerText="Under Weight";
                    }
                else if(BMIAns < 26){ 
                    Comment.innerText="Optimal";
                    }
                else if(BMIAns < 31){ 
                    Comment.innerText="Over Weight";
                    }
                else{
                    Comment.innerText="Obessed";
                }
            }
        }
    </script>  
    <!--- Javascript for LMP GA & EDD -->            
     <script LANGUAGE="JavaScript">  
        function isValidDate(dateStr) { 
            // Checks for the following  

            var collectedLMP = document.getElementById("collect-LMP").value;
            var datePat = new Date(collectedLMP);
            if (datePat == null) {
            alert("Date is not in a valid format.")
            return false;
            }
            month = datePat.getMonth() + 1; // parse date into variables
            day = datePat.getDate();
            year = datePat.getFullYear(); 
            
            if (month < 1 || month > 12) { // check month range
            alert("Month must be between 1 and 12.");
            return false;
            }
            if (day < 1 || day > 31) {
            alert("Day must be between 1 and 31.");
            return false;
            }
            if ((month==4 || month==6 || month==9 || month==11) && day==31) {
            alert("Month "+month+" doesn't have 31 days!")
            return false;
            }
            if (month == 2) { // check for february 29th
            var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
                if (day>29 || (day==29 && !isleap)) {
                alert("February " + year + " doesn't have " + day + " days!");
                return false;
                }
            }
            return true;
        }

        function dispDate(dateObj) {
            month = dateObj.getMonth()+1;
            month = (month < 10) ? "0" + month : month;
            
            day   = dateObj.getDate();
            day = (day < 10) ? "0" + day : day;
            
            year  = dateObj.getYear();
            if (year < 2000) year += 1900;
            
            return (month + "/" + day + "/" + year);
            }

        function pregnancyCalc() {
            menstrual = new Date(); // creates new date objects
            ovulation = new Date();
            duedate = new Date();
            today = new Date();
            cycle = 0, luteal = 0; // sets variables to invalid state ==> 0
            LMP = document.getElementById("collect-LMP").value;
            ALC = document.getElementById("collect-ALC").value;
            ALPL = document.getElementById("collect-ALPL").value;
            
            if (isValidDate(LMP)) { // Validates menstual date 
            menstrualinput = new Date(LMP);
            menstrual.setTime(menstrualinput.getTime())
            }
            else return false; // otherwise exits
            
            cycle = (ALC == "" ? 28 : ALC); // defaults to 28
            // validates cycle range, from 22 to 45
            if (ALC != "" && (ALC < 22 || ALC > 45)) {
            alert("Your cycle length is either too short or too long for \n"
            + "calculations to be very accurate!  We will still try to \n"
            + "complete the calculation with the figure you entered. ");
            }
            
            luteal = (ALPL == "" ? 14 : ALPL); // defaults to 14
            // validates luteal range, from 9 to 16
            if (ALPL != "" && (ALPL < 9 || ALPL > 16)) {
            alert("Your luteal phase length is either too short or too long for \n"
            + "calculations to be very accurate!  We will still try to complete \n"
            + "the calculation with the figure you entered. ");
            }
            
            // sets ovulation date to menstrual date + cycle days - luteal days
            // the '*86400000' is necessary because date objects track time
            // in milliseconds;  86400000 milliseconds equals one day
            ovulation.setTime(menstrual.getTime() + (cycle*86400000) - (luteal*86400000));
            
            document.getElementById("EC").innerHTML = dispDate(ovulation); 
            
            // sets due date to ovulation date plus 266 days
            duedate.setTime(ovulation.getTime() + 266*86400000);
            document.getElementById("EDD").innerHTML = dispDate(duedate); 
            
            // sets fetal age to 14 + 266 (pregnancy time) - time left
            var fetalage = 14 + 266 - ((duedate - today) / 86400000);
            weeks = parseInt(fetalage / 7); // sets weeks to whole number of weeks
            days = Math.floor(fetalage % 7); // sets days to the whole number remainder
            
            // fetal age message, automatically includes 's' on week and day if necessary
            fetalage = weeks + " week" + (weeks > 1 ? "s" : "") + ", " + days + " days";
            document.getElementById("EFA").innerHTML = fetalage;
            //pregform.fetalage.value = fetalage;
            
            return false; // form should never submit, returns false
            }
    </script>
     
     
    <!-- End of LMP GA & EDD.....--> 
     
     
<!--+++++++++++++++++ End BMI ++++++++++++++++++-->
    <!--script>//temperature Converter btn Centigrate, Kelvin and Fahrenheit
        function temperatureConverter(source,valNum) {
  valNum = parseFloat(valNum);
  var inputFahrenheit = document.getElementById("inputFahrenheit");
  var inputCelsius = document.getElementById("inputCelsius");
  var inputKelvin = document.getElementById("inputKelvin");
  if (source=="inputFahrenheit") {
    inputCelsius.value=((valNum-32)/1.8).toFixed(2);
    inputKelvin.value=(((valNum-32)/1.8)+273.15).toFixed(2);
  }
  if (source=="inputCelsius") {
    inputFahrenheit.value=((valNum*1.8)+32).toFixed(2);
    inputKelvin.value=((valNum)+273.15).toFixed(2);
  }
  if (source=="inputKelvin") {
    inputFahrenheit.value=(((valNum-273.15)*1.8)+32).toFixed(2);
    inputCelsius.value=((valNum)-273.15).toFixed(2);
  }
}
    </script-->


 <!-- Blood Pressure Categorise -->      
 <script>
    function commentBloodPressure(){
        var SYSTOLIC = document.getElementById("inputSYSTOLIC").value;
        var DIASTOLIC = document.getElementById("inputDIASTOLIC").value;
                    
        document.getElementById("SYSTOLIC-Output").innerHTML = SYSTOLIC;
        
        document.getElementById("DIASTOLIC-Output").innerHTML = DIASTOLIC; 
       
       //Comment section for the Blood Pressure
       if((SYSTOLIC < 120) && (DIASTOLIC < 80)){
         document.getElementById("BP-comment").innerHTML ="NORMAL"; 
       }   
       if((SYSTOLIC >= 120 && SYSTOLIC <= 129 ) && (DIASTOLIC < 80)){
         document.getElementById("BP-comment").innerHTML ="ELEVATED"; 
       }
       if((SYSTOLIC >= 130 && SYSTOLIC <= 139 ) || (DIASTOLIC >= 80 && DIASTOLIC <= 89)){
         document.getElementById("BP-comment").innerHTML ="HIGH BLOOD PRESSURE (HYPERTENSION) STAGE 1"; 
       }
       if((SYSTOLIC >= 140 && SYSTOLIC <= 180 ) || (DIASTOLIC >= 90 && DIASTOLIC <= 120)){
         document.getElementById("BP-comment").innerHTML ="HIGH BLOOD PRESSURE (HYPERTENSION) STAGE 2"; 
       }
       if((SYSTOLIC > 180) || (DIASTOLIC > 120)){
         document.getElementById("BP-comment").innerHTML ="HYPERTENSION CRISIS (consult your doctor immediately)"; 
       }
        
    }              
     </script>  

    
            	
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/dff/dff.js" type="text/javascript"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit ->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script>
        $(function() {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function() {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function() {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function() {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function() {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function(data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function(markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                //templateResult: formatRepo, // omitted for brevity, see the source of this page
                //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
        </script>
        
        <script>
        $(document).ready(function(){
            $("#addLabTest").click(function(){
                $(this).hide();
                $(".wait").hide();
                $(".doctorLabReq").show();
            });
            $("#cancelReqTestLaptech").click(function(){
                $("#addLabTest").show();
                $(".wait").show();
                $(".doctorLabReq").hide();
            });
        });
    </script> 
    <script>//Menstrual Observation Male Vs Female
        $(document).ready(function(){
            $("#btn-female").click(function(){  
                $("#menstrualObservation").show();
            });
            $("#btn-male").click(function(){ 
                $("#menstrualObservation").hide();
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $(".for-consutation").hide();
            $("#medicalChoiceButton").click(function(){ 
                $(".for-consutation").hide(); 
            });
            $("#consultationChoiceButton").click(function(){ 
                $(".for-consutation").show(); 
            });
        });
    </script> 
        <!-- ============================================================== --> 
       <!--Custom JavaScript --> 
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    <!-- ============================================================== --> 
    <!-- Style switcher -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    
    
    <!-- ALL JS FILES ->
            	<script src="../ConsultationStuff/js/jquery-3.2.1.min.js"></script> 
                <!-- ALL PLUGINS -> 
            	<script src="../ConsultationStuff/js/form-validator.min.js"></script>
                <script src="../ConsultationStuff/js/contact-form-script.js"></script>
                <script src="../ConsultationStuff/js/consultation-logi.j"></script> 
        <!-- ++++++======================================++++++++++-->
    
</body> 
</html>