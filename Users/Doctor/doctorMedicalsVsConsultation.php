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
    <title>Doctor Medicals Vs Consultation</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>ConsultationStuff/css/style.css" rel="stylesheet">
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
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
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
                                                <div class="user-img"> <img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php echo base_url(); ?>assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php echo base_url(); ?>assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="user"></div>
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
        <!-----================================================================ Left side bar-->
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
                        <li> <a class=" waves-effect waves-dark" href="doctor-index.html" aria-expanded="false"><i class="fas fa-home"></i><span class="hide-menu">Home </span></a>    
                        </li>
                        <li> <a class=" waves-effect waves-dark" href="doctor consultation.html" aria-expanded="false"><i class="fas fa-ambulance"></i><span class="hide-menu">Outpatient </span></a>           
                        </li>
                        <li> <a class=" waves-effect waves-dark" href="app-chat.html" aria-expanded="false"><i class="ti-themify-favicon-alt"></i><span class="hide-menu">Chat app </span></a> 
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
                    <div class="col-md-2 align-self-center">
                        <a href="<?php echo base_url(); ?>minisidebar/index4.html" button type="button" class="btn waves-effect waves-light btn-block btn-info">Home</a>   
                    </div>
                    <div class="col-md-8 text-center">
                        <div class="col-md-3 two-btn">
                            <button id="btn-forMedical" type="button" class="btn  btn-block btn-info">Medicals</button>   
                        </div>
                        <div class="col-md-4 two-btn">
                            <button id="btn-forConsultation" type="button" class="btn btn-block btn-info text-center">Consultation</button>   
                        </div>
                    </div>
                    <div class="col-md-2 align-self-center">
                        <a href="<?php echo base_url(); ?>minisidebar/index4.html" button type="button" class="btn waves-effect waves-light btn-block btn-info">STUDENT HISTORY</a>   
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card  card-outline-info box-shadow">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">(Consultation) Nurses Observation</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <h3 class="box-title">Vital Signs</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                <label>Temperature <span><?php  echo $students['temperature_c'];?></span> (℃)</label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Temperature <span><?php  echo $students['temperature_k'];?></span> (K)</label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Temperature <span><?php  echo $students['temperature_k'];?></span> (℉)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--row-->
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Pulse <span><?php  echo $students['pulse'];?></span><span> ()</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Respiration <span><?php  echo $students['respiration'];?></span><span> ()</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Blood Pressure <span><?php  echo $students['blood_pressure'];?></span> mmHg</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Weight <span><?php  echo $students['weight'];?></span> Kg</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Height<span><?php  echo $students['height'];?></span> M</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>BMI <span><?php  echo $students['bmi'];?></span><span> Under Weight</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>SYSTOLIC <span> <?php  echo $students['systolic'];?></span> mmHg</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>DIASTOLIC<span> <?php  echo $students['diastolic'];?></span> mmHg</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>BLOOD PRESSURE <span> <?php  echo $students['blood_pressure'];?></span>/<span> 79</span> mmHg<span> NORMAL</span></label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Menstrual Observation-->
                                        <h3 class="box-title">Menstrual Observation</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>LMP <span><?php  echo $students['last_menstral_period'];?></span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>AV Cycles <span><?php  echo $students['avg_length_cycle'];?></span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>AV Luteal Phase <span> <?php  echo $students['avg_lp_length'];?></span></label>
                                                </div>
                                            </div>

                                            <!----------------Dates for results-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>EC  <span><?php  echo $students['e_conception'];?></span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>EDD <span><?php  echo $students['e_duedate'];?></span></label>   
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>GA <span><?php  echo $students['e_fetalage'];?></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!------Physical Examination-->
                                       
                                        <br>
                                        <h3 class="box-title">Physical Observation</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Head <span><?php  echo $students['head'];?>.</span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Neck <span><?php  echo $students['neck'];?>.</span></label>                                                
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Chest <span><?php  echo $students['chest'];?>.</span></label>
                                                </div>
                                            </div>

                                            <!----------------Dates for results-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Thorax <span><?php  echo $students['thorax'];?>.</span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Abdomen <span><?php  echo $students['abdomen'];?>.</span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Pelvic Exams <span><?php  echo $students['pelvic_exam'];?>.</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!------------------row-->
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Lower Limbs <span><?php  echo $students['lower_limbs'];?>.</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Lymph <span><?php  echo $students['lymph'];?>.</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Skin <span><?php  echo $students['skin'];?>.</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>
                            <hr/>
                            <form id="nurseAdding" action="#" class="form-horizontal px-4">
                                    <div class="form-body">
                                        <h3 class="box-title">Enter Information</h3>
                                        <hr class="m-t-0 m-b-40"> 
                                        <div class="form-group">
                                            <label></label>
                                            <textarea class="form-control" placeholder="Enter reason(s) for consultation" rows="5" data-error="Please Enter Reason(s) for consultation (Motif de consultation)"  ></textarea> 
									<div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <h3 class="box-title">Vital Signs</h3><br> 
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Pulse</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="" data-error="Please Enter The Pulse"  > 
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Respiration</label>
                                                    <div class="col-md-9">
                                                        <input type="number" class="form-control" placeholder="" data-error="Please Enter The Respiration Rate"  > 
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Blood Pressure</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger" placeholder="" data-error="Please Enter The Blood Pressure"  > 
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
                                                        <input id="inputCelsius" class="tem-form-control-a"  type="number"   placeholder="" oninput="temperatureConverter(this.id,this.value)" onchange="temperatureConverter(this.id,this.value)"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="tem-form-group">
                                                    <label>Temperature (K)</label>
                                                    <div class="col-md-9">
                                                        <input id="inputKelvin" type="number" class="tem-form-control-a"  placeholder="" oninput="temperatureConverter(this.id,this.value)" onchange="temperatureConverter(this.id,this.value)"> 
                                                        <!--small class="tem-form-control-feedback"></small--> </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="tem-form-group">
                                                    <label>Temperature (℉)</label>
                                                    <div class="col-md-9">
                                                        <input id="inputFahrenheit" type="number" class="tem-form-control-a" placeholder=""   oninput="temperatureConverter(this.id,this.value)" onchange="temperatureConverter(this.id,this.value)"> 
                                                        </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Weight</label>
                                                    <div class="col-md-9">
                                                        <input id="inputWeight" type="number" class="form-control"  placeholder="" onblur="calculateIBM();">       
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Height</label>
                                                    <div class="col-md-9">
                                                        <input id="inputHeight" type="number" class="form-control"  placeholder="" onblur="calculateIBM();"> 
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
                                                        <input id="inputSYSTOLIC" type="number" class="form-control" placeholder=""
                            onblur="commentBloodPressure();" data-error="Please Enter The Systolic Value"  > 
                                                        <div class="help-block with-errors"></div></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>DIASTOLIC mmHg</label>
                                                    <div class="col-md-9">
                                                        <input id="inputDIASTOLIC" type="number" class="form-control" placeholder="" onblur="commentBloodPressure();" data-error="Please Enter The Diastlic Value"  > 
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
                                       <div class="row px-4">
                                           <div class="col-md-12 text-center">
                                              <button type="button" class="btn btn-success" id="btn-female"><i class="fa fa-female"></i> Female</button>
                                        <button type="button" class="btn btn-success" id="btn-male"><i class="fa fa-male"></i> Male</button> 
                                           </div>  
                                    <div id="menstrualObservation">
                                       <h3 class="box-title">Menstrual Observation</h3><br>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Last Menstrual Period: </label>
                                                    <div class="col-md-9">
                                                        <input id="collect-LMP" class="form-control" type=date name="menstrual"  onblur="pregnancyCalc();"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Average Length of Cycles: (22 to 45)</label>
                                                    <div class="col-md-9">
                                                        <input id="collect-ALC" class="form-control" type="text" onblur="pregnancyCalc()"  placeholder="(defaults to 28)"></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Avg Luteal Phase Length (9 to 16)</label>
                                                    <div class="col-md-9">
                                                        <input id="collect-ALPL"  class="form-control" type=text  name=luteal placeholder="(defaults to 14)" onblur="pregnancyCalc();"></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div> 
                                       
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Estimated Conception:  </label>
                                                    <div class="col-md-9">
                                                        <span id="EC"></span>
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Estimated Due Date: </label>
                                                    <div class="col-md-9">
                                                        <span id="EDD"></span>
                                                    </div>
                                            </div> 
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Estimated Fetal Age: </label>
                                                    <div class="col-md-9">
                                                        <span id="EFA"></span>
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
                                                        <input type="text" class="form-control" placeholder="" data-error="Please Enter Head Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Neck</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="" data-error="Please Enter Neck Examination"  > 
                                                        <div class="help-block with-errors"></div></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Chest</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger" placeholder="" data-error="Please Enter Chest Examination"  > 
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
                                                        <input type="text" class="form-control" placeholder="" data-error="Please Enter Thorax Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Abdomen</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder=""  data-error="Please Enter Abdomen Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Pelvic Exams</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger" placeholder="" data-error="Please Enter pelvic Examination"  > 
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
                                                        <input type="text" class="form-control" placeholder="" data-error="Please Enter Lower Limbs Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Lymph</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="" data-error="Please Enter Lymph Examination"  > 
                                                        <div class="help-block with-errors"></div> </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Skin</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control form-control-danger" placeholder="" data-error="Please Enter Skin Examination"  > 
                                                        <div class="help-block with-errors"></div></div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>  
                                       </div>  
                                       <div class="col-lg-3 col-md-4 py-3">
                                <buton class="btn btn-success two-btn float-left" id="Submit">Send</buton>
                                <buton class="btn btn-success two-btn float-right" id="cancel-btn">Cancel</buton> 
                                        </div> 
                                </form> 
                            <div class="col-lg-3 col-md-4 py-3" id="workAsNurse" >
                           <button class="btn btn-success float-left" id="addConsultation">Add Consultation</button>  
                        </div> 
                        </div> 
                    </div> 
                </div>
                
                <!--==================Labtechs observation==========--> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info box-shadow">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">(Consultation) Lab Technician(s) Observation</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        <h3 class="box-title">Vital Signs</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                <label>Temperature <span><?php  echo $students['temperature_c'];?></span> (℃)</label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Temperature <span><?php  echo $students['temperature_k'];?></span> (K)</label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Temperature <span><?php  echo $students['temperature_k'];?></span> (℉)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--row-->
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Pulse <span><?php  echo $students['pulse'];?></span><span> ()</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Respiration <span><?php  echo $students['respiration'];?></span><span> ()</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Blood Pressure <span><?php  echo $students['blood_pressure'];?></span> mmHg</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Weight <span><?php  echo $students['weight'];?></span> Kg</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Height<span><?php  echo $students['height'];?></span> M</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>BMI <span><?php  echo $students['bmi'];?></span><span> Under Weight</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>SYSTOLIC <span> <?php  echo $students['systolic'];?></span> mmHg</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>DIASTOLIC<span> <?php  echo $students['diastolic'];?></span> mmHg</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>BLOOD PRESSURE <span> <?php  echo $students['blood_pressure'];?></span>/<span> 79</span> mmHg<span> NORMAL</span></label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Menstrual Observation-->
                                        <h3 class="box-title">Menstrual Observation</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>LMP <span><?php  echo $students['last_menstral_period'];?></span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>AV Cycles <span><?php  echo $students['avg_length_cycle'];?></span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>AV Luteal Phase <span> <?php  echo $students['avg_lp_length'];?></span></label>
                                                </div>
                                            </div>

                                            <!----------------Dates for results-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>EC  <span><?php  echo $students['e_conception'];?></span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>EDD <span><?php  echo $students['e_duedate'];?></span></label>   
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>GA <span><?php  echo $students['e_fetalage'];?></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!------Physical Examination-->
                                       
                                        <br>
                                        <h3 class="box-title">Physical Observation</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Head <span><?php  echo $students['head'];?>.</span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Neck <span><?php  echo $students['neck'];?>.</span></label>                                                
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Chest <span><?php  echo $students['chest'];?>.</span></label>
                                                </div>
                                            </div>

                                            <!----------------Dates for results-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Thorax <span><?php  echo $students['thorax'];?>.</span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Abdomen <span><?php  echo $students['abdomen'];?>.</span></label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Pelvic Exams <span><?php  echo $students['pelvic_exam'];?>.</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!------------------row-->
                                        <div class="row py-1">
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Lower Limbs <span><?php  echo $students['lower_limbs'];?>.</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Lymph <span><?php  echo $students['lymph'];?>.</span></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="vital-display">
                                                    <label>Skin <span><?php  echo $students['skin'];?>.</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                    <hr class="m-t-0 m-b-20">
                                    <div class="col-lg-2 col-md-4">
                                        <buton class="btn btn-success" id="addLabTest"> Add Lab Tests</buton>
                                    </div>
                                    <div class="col-xs-12 col-md-12 doctorLabReq" style="display: none"> 
                                    
                                        <div class="row"> 
                                            <div class="card-body">   
                                                <style>
                                * {
                                  box-sizing: border-box;
                                }
                                
                                #myInput {
                                  background-image: url('<?php echo base_url(); ?>css/searchicon.png');
                                  background-position: 10px 12px;
                                  background-repeat: no-repeat;
                                  width: 100%;
                                  font-size: 16px;
                                  padding: 12px 20px 12px 40px;
                                  border: 1px solid #ddd;
                                  margin-bottom: 12px;
                                }
                        
                                #myUL {
                                  list-style-type: none;
                                  padding: 0;
                                  margin: 0;
                                }
                                
                                #myUL .test .testContent {
                                  border: 1px solid #ddd;
                                  margin-top: -1px; /* Prevent double borders */
                                  background-color: #f6f6f6;
                                  padding: 12px;
                                  text-decoration: none;
                                  font-size: 18px;
                                  color: black;
                                  display: block
                                }
                                
                                #myUL .test .testContent .header {
                                  background-color: #e2e2e2;
                                  cursor: default;
                                }
                                
                                #myUL .test .testContent:hover:not(.header) {
                                  background-color: #eee;
                                }
                        </style>  
                                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for tests.." title="Type in a name of test">
                        
                                                <div id="myUL">
                                                    <div class="row">
                                                    <div class="col-md-4">
                                                    
                                                    <div class="test checkbox"><label class="header">Biochemistry</label>
                                                    </div>    
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pus" id="PUS" class="filled-in chk-col-forest">
                                                            <label class="" for="PUS">PUS/RHS</label>
                                                        </label> 
                                                    </div>    
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="screat" id="S.CREAT" class="filled-in chk-col-forest">
                                                            <label class="" for="S.CREAT">S.CREAT</label>
                                                        </label> 
                                                    </div>     
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="urea" id="UREA" class="filled-in chk-col-forest">
                                                            <label class="" for="UREA">UREA</label>
                                                        </label> 
                                                    </div> 
                                                   <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="uricacid" id="URIC_ACID" class="filled-in chk-col-forest">
                                                            <label class="" for="URIC_ACID">URIC ACID</label>
                                                        </label> 
                                                    </div>  
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hdl" id="HDL" class="filled-in chk-col-forest">
                                                            <label class="" for="HDL">HDL</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="ldl" id="LDL" class="filled-in chk-col-forest">
                                                            <label class="" for="LDL">LDL</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="triglyceride" id="TRIGLYCERIDE" class="filled-in chk-col-forest">
                                                            <label class="" for="TRIGLYCERIDE">TRIGLYCERIDE</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="cholesterol" id="TOTAL_CHOLESTEROL" class="filled-in chk-col-forest">
                                                            <label class="" for="TOTAL_CHOLESTEROL">TOTAL CHOLESTEROL</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="sodium" id="SODIUM" class="filled-in chk-col-forest">
                                                            <label class="" for="SODIUM">SODIUM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="potassium" id="POTASSIUM" class="filled-in chk-col-forest">
                                                            <label class="" for="POTASSIUM">POTASSIUM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="chloride" id="CHLORIDE" class="filled-in chk-col-forest">
                                                            <label class="" for="CHLORIDE">CHLORIDE</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="calcium" id="CALCIUM" class="filled-in chk-col-forest">
                                                            <label class="" for="CALCIUM">CALCIUM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="magnesium" id="MAGNESIUM" class="filled-in chk-col-forest">
                                                            <label class="" for="MAGNESIUM">MAGNESIUM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="gpt" id="GPT" class="filled-in chk-col-forest">
                                                            <label class="" for="GPT">GPT/ALAT</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="got" id="GOT" class="filled-in chk-col-forest">
                                                            <label class="" for="GOT">GOT</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="gamma_gt" id="GAMMA_GT" class="filled-in chk-col-forest">
                                                            <label class="" for="GAMMA_GT">GAMMA GT</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="amylase" id="AMYLASE" class="filled-in chk-col-forest">
                                                            <label class="" for="AMYLASE">AMYLASE</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="alkaline_phosphate" id="ALKALINE_PHOSPHATASE" class="filled-in chk-col-forest">
                                                            <label class="" for="ALKALINE_PHOSPHATASE">ALKALINE PHOSPHATASE</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="rubella" id="RUBELLA_1gM" class="filled-in chk-col-forest">
                                                            <label class="" for="RUBELLA_1gM">RUBELLA 1gM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="chlamydia_1gm" id="CHLAMYDIA_1gM" class="filled-in chk-col-forest">
                                                            <label class="" for="CHLAMYDIA_1gM">CHLAMYDIA 1gM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="chlamydia_1gg" id="CHLAMYDIA_1gG" class="filled-in chk-col-forest">
                                                            <label class="" for="CHLAMYDIA_1gG">CHLAMYDIA 1gG</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hsv_1gm" id="HSV_1_AND_2_1gM" class="filled-in chk-col-forest">
                                                            <label class="" for="HSV_1_AND_2_1gM">HSV 1 AND 2 1gM</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hsv_1gg" id="HSV_1_AND_2_1gG" class="filled-in chk-col-forest">
                                                            <label class="" for="HSV_1_AND_2_1gG">HSV 1 AND 2 1gG</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="toxo_1gm" id="TOXO_1gM" class="filled-in chk-col-forest">
                                                            <label class="" for="TOXO_1gM">TOXO 1gM</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="toxo_1gg" id="TOXO_1gG" class="filled-in chk-col-forest">
                                                            <label class="" for="TOXO_1gG">TOXO 1gG</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="cmv_1gm" id="CMV_1gM" class="filled-in chk-col-forest">
                                                            <label class="" for="CMV_1gM">CMV 1gM</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="cmv_1gg" id="CMV_1gG" class="filled-in chk-col-forest">
                                                            <label class="" for="CMV_1gG">CMV 1gG</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="t3" id="T3" class="filled-in chk-col-forest">
                                                            <label class="" for="T3">T3</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="t4" id="T4" class="filled-in chk-col-forest">
                                                            <label class="" for="T4">T4</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="t5" id="T5" class="filled-in chk-col-forest">
                                                            <label class="" for="T5">T5</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="progesterone" id="PROGESTERONE" class="filled-in chk-col-forest">
                                                            <label class="" for="PROGESTERONE">PROGESTERONE</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="testosterone" id="TESTOSTERONE" class="filled-in chk-col-forest">
                                                            <label class="" for="TESTOSTERONE">TESTOSTERONE</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="lh" id="LH" class="filled-in chk-col-forest">
                                                            <label class="" for="LH">LH</label>
                                                        </label> 
                                                    </div>
                                                   <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="fsh" id="FSH" class="filled-in chk-col-forest">
                                                            <label class="" for="FSH">FSH</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="prolactin" id="PROLACTIN" class="filled-in chk-col-forest">
                                                            <label class="" for="PROLACTIN">PROLACTIN</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="cortisol" id="CORTISOL" class="filled-in chk-col-forest">
                                                            <label class="" for="CORTISOL">CORTISOL</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="estrogen" id="OESTROGEN" class="filled-in chk-col-forest">
                                                            <label class="" for="OESTROGEN">OESTROGEN/ESTROGEN</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="psa" id="PSA" class="filled-in chk-col-forest">
                                                            <label class="" for="PSA">PSA</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="ca_125" id="CA-125" class="filled-in chk-col-forest">
                                                            <label class="" for="CA-125">CA-125</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="cea" id="CEA" class="filled-in chk-col-forest">
                                                            <label class="" for="CEA">CEA</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="alpha_feto_proteins" id="ALPHA_FETO_PRONTEINS" class="filled-in chk-col-forest">
                                                            <label class="" for="ALPHA_FETO_PRONTEINS">ALPHA FETO PRONTEINS</label>
                                                        </label> 
                                                    </div>
                                                    </div>
                                                    
                                                      
                                                    <div class="col-md-4"> 
                                                    <!--===========CULTURE ========-->  
                                                    <div class="test checkbox"><label class="header">CULTURE</label>
                                                    </div>   
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="urine" id="URINE" class="filled-in chk-col-forest">
                                                            <label class="" for="URINE">URINE</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pus_or_wound_swab" id="PUS_OR_WOUND_SWAB" class="filled-in chk-col-forest">
                                                            <label class="" for="PUS_OR_WOUND_SWAB">PUS OR WOUND SWAB</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="stool" id="EAR_SWAB" class="filled-in chk-col-forest">
                                                            <label class="" for="EAR_SWAB">STOOL</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="throat_swab" id="THROAT_SWAB" class="filled-in chk-col-forest">
                                                            <label class="" for="THROAT_SWAB">THROAT SWAB</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="semen_culture" id="SEMEN_CULTURE" class="filled-in chk-col-forest">
                                                            <label class="" for="SEMEN_CULTURE">SEMEN CULTURE</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="csf" id="CSF" class="filled-in chk-col-forest">
                                                            <label class="" for="CSF">CSF</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pleural_fluid" id="PLEURAL_FLUID" class="filled-in chk-col-forest">
                                                            <label class="" for="PLEURAL_FLUID">PLEURAL FLUID</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="synovial_fluid" id="SYNOVIAL_FLUID" class="filled-in chk-col-forest">
                                                            <label class="" for="SYNOVIAL_FLUID"> SYNOVIAL FLUID</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pericardial_fluid" id="PERICARDIAL_FLUID" class="filled-in chk-col-forest">
                                                            <label class="" for="PERICARDIAL_FLUID">PERICARDIAL FLUID</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="ascites" id="ASCITES" class="filled-in chk-col-forest">
                                                            <label class="" for="ASCITES">ASCITES</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hydroceal_fluid" id="HYDROCEAL_FLUID" class="filled-in chk-col-forest">
                                                            <label class="" for="HYDROCEAL_FLUID">HYDROCEAL FLUID</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pus_ulcer_skin_swabs" id="PUS_ULCER_SKIN_SWABS" class="filled-in chk-col-forest">
                                                            <label class="" for="PUS_ULCER_SKIN_SWABS">PUS ULCER SKIN SWABS</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="throat_mouth_swab" id="THROAT_MOUTH_SWAB" class="filled-in chk-col-forest">
                                                            <label class="" for="THROAT_MOUTH_SWAB">THROAT MOUTH SWAB</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="skin_hair_nail_scrab" id="SKIN_HAIR_NAIL_SCRAB" class="filled-in chk-col-forest">
                                                            <label class="" for="SKIN_HAIR_NAIL_SCRAB">SKIN HAIR NAIL SCRAB</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="tips_of_catheter" id="TIPS_OF_CATHETER" class="filled-in chk-col-forest">
                                                            <label class="" for="TIPS_OF_CATHETER">TIPS OF CATHETER</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="mycoplasma" id="MYCOPLASMA" class="filled-in chk-col-forest">
                                                            <label class="" for="MYCOPLASMA">MYCOPLASMA</label>
                                                        </label> 
                                                    </div> 
                                                    
                                                    <!--=========== END CULTURE ========-->  
                                                    
                                                    <!--===========HAEMATOLOGY ========-->  
                                                    <div class="test checkbox"><label class="header">HAEMATOLOGY</label>
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hb_hct" id="HB" class="filled-in chk-col-forest">
                                                            <label class="" for="HB">HB/HCT</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="wbc_d" id="WBC_D" class="filled-in chk-col-forest">
                                                            <label class="" for="WBC_D">WBC+D/C</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="rbc" id="RBC" class="filled-in chk-col-forest">
                                                            <label class="" for="RBC">RBC</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="fbc" id="FBC" class="filled-in chk-col-forest">
                                                            <label class="" for="FBC">FBC</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="esr" id="ESR" class="filled-in chk-col-forest">
                                                            <label class="" for="ESR">ESR</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="mp" id="MP" class="filled-in chk-col-forest">
                                                            <label class="" for="MP">MP</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hb_electrophoresis" id="Hb_ELECTROHORESIS" class="filled-in chk-col-forest">
                                                            <label class="" for="Hb_ELECTROHORESIS">Hb ELECTROHORESIS</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="pt" id="PT" class="filled-in chk-col-forest">
                                                            <label class="" for="PT">PT</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="ptt" id="PTT" class="filled-in chk-col-forest">
                                                            <label class="" for="PTT">PTT</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="clotting_time" id="CLOTTING_TIME" class="filled-in chk-col-forest">
                                                            <label class="" for="CLOTTING_TIME">CLOTTING TIME</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="bleeding_time" id="BLEEDING_TIME" class="filled-in chk-col-forest">
                                                            <label class="" for="BLEEDING_TIME">BLEEDING TIME</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hb_a" id="HB-A" class="filled-in chk-col-forest">
                                                            <label class="" for="HB-A">HB-A</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="wbc" id="WBC" class="filled-in chk-col-forest">
                                                            <label class="" for="WBC">WBC</label>
                                                        </label> 
                                                    </div>
                                                    <!--=========== END HAEMATOLOGY ========-->  
                                                    
                                                    <!--===========MICROBIOLOGY ========-->  
                                                    <div class="test checkbox"><label class="header">MICROBIOLOGY</label>
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hys" id="HYS" class="filled-in chk-col-forest">
                                                            <label class="" for="HYS">HYS</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="v_s" id="V" class="filled-in chk-col-forest">
                                                            <label class="" for="V">V/S</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="u_s" id="U" class="filled-in chk-col-forest">
                                                            <label class="" for="U">U/S</label>
                                                        </label> 
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="spermogramme" id="SPERMOGRAMME" class="filled-in chk-col-forest">
                                                            <label class="" for="SPERMOGRAMME">SPERMOGRAMME</label>
                                                        </label> 
                                                    </div>  
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="afbx3" id="AFBX3" class="filled-in chk-col-forest">
                                                            <label class="" for="AFBX3">AFBX3</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="sputum" id="SPUTUM" class="filled-in chk-col-forest">
                                                            <label class="" for="SPUTUM">SPUTUM</label>
                                                        </label> 
                                                    </div>   
                                                    
                                                    <!--===========END OF MICROBIOLOGY ========-->  
                                                   </div> 
                                                     
                                                    <div class="col-md-4">
                                                     <div class="test checkbox"><label class="header">Parasitology</label>
                                                    </div>
                                                    <!--===========PARASITOLOGY ========--> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="stool_exam" id="STOOL_EXAM" class="filled-in chk-col-forest">
                                                            <label class="" for="STOOL_EXAM">STOOL EXAM</label>
                                                        </label> 
                                                    </div>
                                                    
                                                    <div class="test">
                                                        <label class="testContent"> 
                                                          <input type="checkbox" name="test[]" value="urinalysis" id="URINALYSIS" class="filled-in chk-col-forest">
                                                          <label class="" for="URINALYSIS">URINALYSIS</label> 
                                                        </label>
                                                    </div> 
                                                     <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="blood_microfilia" id="BLOOD_MICROFILIA" class="filled-in chk-col-forest">
                                                             <label class="" for="BLOOD_MICROFILIA">BLOOD MICROFILIA</label>
                                                        </label>  
                                                    </div>
                                                    
                                                    <div class="test">
                                                        <label class="testContent">
                                                          <input type="checkbox" name="test[]" value="skin_scrappings" id="SKIN_SCRAPPINGS" class="filled-in chk-col-forest">
                                                          <label class="" for="SKIN_SCRAPPINGS">SKIN SCRAPPINGS</label>
                                                        </label>
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent"> 
                                                          <input type="checkbox" name="test[]" value="scotch_tape_test" id="SCOTCH_TAPE_TEST" class="filled-in chk-col-forest">
                                                          <label class="" for="SCOTCH_TAPE_TEST">SCOTCH TAPE TEST</label> 
                                                        </label>
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent"> 
                                                          <input type="checkbox" name="test[]" value="h_pylori" id="H.Pylori" class="filled-in chk-col-forest">
                                                          <label class="" for="H.Pylori">H.Pylori</label> 
                                                        </label>
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent"> 
                                                          <input type="checkbox" name="test[]" value="blood_films" id="BLOOD_FIlMS" class="filled-in chk-col-forest">
                                                          <label class="" for="BLOOD_FIlMS">BLOOD FIlMS</label> 
                                                        </label>
                                                    </div> 
                                                     
                                                    <!--==========END OF PARASITOLOGY =========--> 
                                                     
                                                    <!--=========SEROLOGY =======-->
                                                    <div class="test checkbox"><label class="header">SEROLOGY</label>
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="tpha" id="TPHA" class="filled-in chk-col-forest">
                                                            <label class="" for="TPHA">TPHA</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="rfr" id="RFR" class="filled-in chk-col-forest">
                                                            <label class="" for="RFR">RFR</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="fob" id="FOB" class="filled-in chk-col-forest">
                                                            <label class="" for="FOB">FOB</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="h_pytori" id="H.Pytori" class="filled-in chk-col-forest">
                                                            <label class="" for="H.Pytori">H.Pytori</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="widal" id="WIDAL" class="filled-in chk-col-forest">
                                                            <label class="" for="WIDAL">WIDAL</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="rf" id="RF" class="filled-in chk-col-forest">
                                                            <label class="" for="RF">RF</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="crf" id="CRF" class="filled-in chk-col-forest">
                                                            <label class="" for="CRF">CRF</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="vdrl" id="VDRL" class="filled-in chk-col-forest">
                                                            <label class="" for="VDRL">VDRL</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hbeag" id="HBeAg" class="filled-in chk-col-forest">
                                                            <label class="" for="HBeAg">HBeAg</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hcv" id="HCV" class="filled-in chk-col-forest">
                                                            <label class="" for="HCV">HCV</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hepatis_b_panel" id="HEPATITIS_B_PANEL" class="filled-in chk-col-forest">
                                                            <label class="" for="HEPATITIS_B_PANEL">HEPATITIS B PANEL</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="agrv" id="AgRv" class="filled-in chk-col-forest">
                                                            <label class="" for="AgRv">AgRv</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="blood_grouping" id="BLOOD_GROUPING" class="filled-in chk-col-forest">
                                                            <label class="" for="BLOOD_GROUPING">BLOOD GROUPING</label>
                                                        </label> 
                                                    </div>
                                                    
                                                    
                                                    <!--+++++++ TESTS ++========-->
                                                    <div class="test checkbox"><label class="header">TEST</label>
                                                    </div> 
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="hiv" id="TEST_1" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_1">TEST 1 (HIV)</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="<?php  echo $students['test'];?>" id="TEST_2" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_2">TEST 2 (COVID-19)</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_3" id="TEST_3" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_2">TEST 3</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_4" id="TEST_3" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_3">TEST 4</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_5" id="TEST_5" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_4">TEST 5</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_6" id="TEST_6" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_5">TEST 6</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_7" id="TEST_7" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_6">TEST 7</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_8" id="TEST_8" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_7">TEST 8</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_9" id="TEST_9" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_9">TEST 9</label>
                                                        </label> 
                                                    </div>
                                                    <div class="test">
                                                        <label class="testContent">
                                                            <input type="checkbox" name="test[]" value="test_10" id="TEST_10" class="filled-in chk-col-forest">
                                                            <label class="" for="TEST_10">TEST 10</label>
                                                        </label> 
                                                    </div>
                                                    </div>   
                                                </div>
                                                
                                            <script>
                                            function myFunction() {
                                                var input, filter, ul, li, a, i;
                                                input = document.getElementById("myInput");
                                                filter = input.value.toUpperCase();
                                                ul = document.getElementById("myUL");
                                                li = document.getElementsByClassName("test");
                                                for (i = 0; i < li.length; i++) {
                                                    a = li[i].getElementsByTagName("label")[0];
                                                    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                                        li[i].style.display = "";
                                                    } else {
                                                        li[i].style.display = "none";
                                            
                                                    }
                                                }
                                            }
                                            </script>   
                                         </div>
                                            </div>                                       
                                 <div class="col-lg-3 col-md-4 py-3">
                                <buton class="btn btn-success two-btn float-left" id="sendReqTestLaptech">Send</buton>
                                <buton class="btn btn-success two-btn float-right" id="cancelReqTestLaptech">Cancel</buton> 
                                        </div> 
                                    </div> 
                                    </div>
                                           
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row2 -->

                <!--Doctor's Diagnosis-->
                <!-- Doctor's Diagnosis-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info box-shadow">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">(Medicals) Doctor's Daignosis</h4>
                            </div>
                            <div class="card-body">
                                    <div class="form-body">
                                        <h3 class="box-title">Differential Diagnosis</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <?php echo form_open('index.php/Indexcontroller/doc_updating_student'); ?>
                                        <!--form class="form-horizontal m-t-40"-->
                                            <div class="form-group">
                                                <label>Text area</label>
                                                <textarea class="form-control" name="diagnosis" rows="5" value="<?php  echo $students['diagnosis'];?>"></textarea>
                                            </div>
                                        <!--Physical Examination-->
                                        <br>
                                        <h3 class="box-title">Physical Observation</h3>
                                        <hr class="m-t-0 m-b-40">
                                         <input type="hidden" name="id" readonly="" value="<?php echo $students['id_student'] ?>">
                                            <div class="form-group">
                                                <label>Text area</label>
                                                <textarea class="form-control" name="observation" rows="5" value="<?php  echo $students['observation'];?>"></textarea>
                                            </div>
                                    </div>
                            </div>
                            
                                        <!--button class="btn waves-effect waves-light btn-block btn-success" name="submit" id="validate-btn" type="submit">VALIDATE</button-->
                                        <div  class="h3 text-center hidden"></div> 
                
                                    <!--/div> 

                               
                        </div>
                    </div>
                </div>

                <div class="row" id="forMedical">
                    <div class="col-lg-12">
                        <div class="card card-outline-info box-shadow">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">(Medicals) Doctor's Validation</h4>
                            </div>
                            <div class="card-body">
                                 <div class="validationPrescription">
                                        <h3 class="box-title"> Validation And Prescription</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="col-md-12">
                                            <p>I the undersigned <span>Dr Qwerty Azerty</span></p>
                                            <p>Head of Health Division, UBa</p>
                                            <p>Certify having examined this Student <span><?php  //echo strtoupper($students['name']); echo strtoupper( $students['surname']);?></span></p>
                                            <p>Born on the <span><?php  //echo $students['date_birth'];?></span> at <span><?php  //echo $students['place_birth'];?> </span></p>
                                            <p>Registration Number <span><?php  //echo $students['matricule'];?></span> </p>
                                            <p>Declare that the above student has undergone the systematic Medical vist for 
                                            this academic year.
                                        </div-->
                                            <h3 class="box-title"> Prescription</h3>
                                                <hr class="m-t-0 m-b-20">
                                                <div class="tags-default">
                                                    <input type="text" name="prescription" value="<?php  echo $students['prescription'];?>" data-role="tagsinput" placeholder="Prescription" >
                                                    <!--input type="text" name="prescription" value="" data-role="tagsinput" placeholder="Prescription" /--> 
                                                    </div><br/><br/> 
                                    <div class="submit-button col-lg-2 col-md-4">
                                        <!--button class="btn waves-effect waves-light btn-block btn-success" id="submit" type="submit">SIGN</button-->
                                <button type="submit" name="submit" class="btn waves-effect waves-light btn-block btn-success">Submit</button>
                             </form>        
                            </div>
                        </div>
                    </div>
                </div>
                                                </div>  
                                        </div>
                                     
                                     
                <div class="row" id="forConsultation">
                    <div class="col-lg-12">
                        <div class="card card-outline-info box-shadow">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Prescription</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" role="form">
                                    <div class="validationPrescription">
                                        <h3 class="box-title"> Prescription</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="tags-default">
                                                    <input type="text" value="" name="prescription" data-role="tagsinput" placeholder="Prescription" /> 
                                                </div> 
                                    </div><br/>
                                    <div class="submit-button col-lg-2 col-md-4">
                                        <button class="btn waves-effect waves-light btn-block btn-success" id="submit" type="submit">SIGN</button>
                                        <button class="btn waves-effect waves-light btn-block btn-success" id="validate-btn" type="submit">VALIDATE</button>
                                        <div  class="h3 text-center hidden"></div> 
                
                                    </div> 

                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
                  <!--row end-->
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
         <script>//temperature Converter btn Centigrate, Kelvin and Fahrenheit
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
    </script>
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
    <script data-cfasync="false" src="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
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
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== --> 
        <!-- ============================================================== -->  
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
    
    <script>
        $(document).ready(function(){
            $("#nurseAdding").hide();
            $("#addConsultation").click(function(){
                $(this).hide(); 
                $("#nurseAdding").show();
            });
            $("#cancel-btn").click(function(){
                $("#addConsultation").show();
                $("#nurseAdding").hide(); 
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
    <script>//Menstrual Observation Male Vs Female
        $(document).ready(function(){
            $("#forConsultation").hide();
            $("#btn-forConsultation").click(function(){  
                $("#forConsultation").show();
                $("#forMedical").hide();
            });
            $("#btn-forMedical").click(function(){  
                $("#forConsultation").hide();
                $("#forMedical").show();
            });
        });
    </script>

        <!-- Style switcher -->
        <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body> 
</html>