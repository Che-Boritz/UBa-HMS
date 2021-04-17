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
    <title>Doctor Dashboard</title> 
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"-->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/jquery.dataTables.min.css">
    <!--alerts CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS --> 
    
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Calendar CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- Custom CSS -->
    
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="doctor consultation.html">
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
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
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
                        <li> <a class=" waves-effect waves-dark" href="<?php echo base_url(); ?>index.php/Indexcontroller/index" aria-expanded="false"><i class="fas fa-home"></i><span class="hide-menu">Home </span></a>    
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
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
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
                        
                        
                        <div class="col-md-6 two-btn nav-item hidden-sm-down search-box">
                            <a class="nav-link hidden-sm-down  waves-effect waves-light btn btn-block btn-info text-white" href="#overVeiwSection">
                                New Session</a> 
                    </div>
                          
                        <div class="col-md-5  two-btn">
                            <a href="#" button id="sa-emergency" type="button" class="btn waves-effect waves-light btn-block btn-info">Emergency</a>
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
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card  box-shadow">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">6</h1>
                                        <h4 class="text-muted">Doctors<i class="fa fa-check" aria-hidden="true"></i></h4></div>
                                    <!-- Column -->
                                    <div class="col text-right align-self-center">
                                        <div class="round round-lg align-self-center round-primary"><i class="fa fa-stethoscope"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card box-shadow">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">17,698</h1>
                                        <h4 class="text-muted">Appionments<i class="fa fa-check" aria-hidden="true"></i></h4></div>
                                    <!-- Column -->
                                    <div class="col text-right align-self-center">
                                        <div class="round round-lg align-self-center round-info"><i class="fa fa-user"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card  box-shadow">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">5,040</h1>
                                        <h4 class="text-muted">Attend<i class="fa fa-check" aria-hidden="true"></i></h4>
                                    </div>
                                        
                                    <!-- Column -->
                                    <div class="col text-right align-self-center">
                                        <div class="round round-lg align-self-center round-danger"><i class="fa fa-user-md"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card box-shadow">
                            <div class="card-body">
                                <div class="row p-t-10 p-b-10">
                                    <!-- Column -->
                                    <div class="col p-r-0">
                                        <h1 class="font-light">15,159</h1>
                                        <h4 class="text-muted">Pending<i class="fa fa-check" aria-hidden="true"></i></h4></div>
                                    <!-- Column -->
                                    <div class="col text-right align-self-center">
                                        <div class="round round-lg align-self-center round-warning"><i class="fa fa-heartbeat"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="row" id="overVeiwSection"> 
                   <div class="col-md-6 col-lg-8">
                       <div class="col-lg-12">
                        <div class="card box-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Emergency</h4>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Matricule</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php 
                                                $i = 1;
                                                foreach ($students as $student_registration): ;
                                              ?>
                                            <tr>
                                                <td><?php $id = $student_registration['id_student']; echo $i ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['name'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['surname'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['matricule'] ?></td>
                                                <td class="text-center">
                                                  <!--a href="<?php //echo base_url('index.php/Indexcontroller/updatestudent/'.$id) ?>" class="btn btn-inverse-primary btn-rounded">
                                                    <i class=" ti-pencil-alt"></i>
                                                  </a-->
                                                  <a href="<?php echo base_url('index.php/Indexcontroller/doc_consultstudent/'.$id); ?>" class="none text-primary bold seize-1-0">
                                                    <b>consult</b>
                                                  </a>
                                                </td>
                                            </tr>
                                            <!--   <?php    $i++; ?> -->
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-lg-12">
                        <div class="card box-shadow">
                            <div class="card-body">
                                <h4 class="card-title taVsInput">Nurses Request</h4>  
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Matricule</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php 
                                                $i = 1;
                                                foreach ($students as $student_registration): ;
                                              ?>
                                            <tr>
                                                <td><?php $id = $student_registration['id_student']; echo $i ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['name'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['surname'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['matricule'] ?></td>
                                                <td class="text-center">
                                                  <!--a href="<?php //echo base_url('index.php/Indexcontroller/updatestudent/'.$id) ?>" class="btn btn-inverse-primary btn-rounded">
                                                    <i class=" ti-pencil-alt"></i>
                                                  </a-->
                                                  <a href="<?php echo base_url('index.php/Indexcontroller/doc_consultstudent/'.$id); ?>" class="none text-primary bold seize-1-0">
                                                    <b>consult</b>
                                                  </a>
                                                </td>
                                            </tr>
                                            <!--   <?php    $i++; ?> -->
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  
                    </div> 
                    <div class="col-lg-12">
                        <div class="card box-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Appionment</h4>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Matricule</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                             <?php 
                                                $i = 1;
                                                foreach ($students as $student_registration): ;
                                              ?>
                                            <tr>
                                                <td><?php $id = $student_registration['id_student']; echo $i ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['name'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['surname'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['matricule'] ?></td>
                                                <td class="text-center">
                                                  <!--a href="<?php //echo base_url('index.php/Indexcontroller/updatestudent/'.$id) ?>" class="btn btn-inverse-primary btn-rounded">
                                                    <i class=" ti-pencil-alt"></i>
                                                  </a-->
                                                  <a href="<?php echo base_url('index.php/Indexcontroller/doc_consultstudent/'.$id); ?>" class="none text-primary bold seize-1-0">
                                                    <b>consult</b>
                                                  </a>
                                                </td>
                                            </tr>
                                            <!--   <?php    $i++; ?> -->
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                    <!-- Column -->
                    </div>
                    <div class="col-lg-12">
                        <div class="card box-shadow">
                            <div class="card-body">
                                <h4 class="card-title">LabTech Request</h4>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Matricule</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                             <?php 
                                                $i = 1;
                                                foreach ($students as $student_registration): ;
                                              ?>
                                            <tr>
                                                <td><?php $id = $student_registration['id_student']; echo $i ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['name'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['surname'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['matricule'] ?></td>
                                                <td class="text-center">
                                                  <!--a href="<?php //echo base_url('index.php/Indexcontroller/updatestudent/'.$id) ?>" class="btn btn-inverse-primary btn-rounded">
                                                    <i class=" ti-pencil-alt"></i>
                                                  </a-->
                                                  <a href="<?php echo base_url('index.php/Indexcontroller/doc_consultstudent/'.$id); ?>" class="none text-primary bold seize-1-0">
                                                    <b>consult</b>
                                                  </a>
                                                </td>
                                            </tr>
                                            <!--   <?php    $i++; ?> -->
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-lg-12">
                        <div class="card box-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Last Registered Patients</h4>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Matricule</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                             <?php 
                                                $i = 1;
                                                foreach ($students as $student_registration): ;
                                              ?>
                                            <tr>
                                                <td><?php $id = $student_registration['id_student']; echo $i ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['name'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['surname'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['matricule'] ?></td>
                                                <td class="text-center">
                                                  <!--a href="<?php //echo base_url('index.php/Indexcontroller/updatestudent/'.$id) ?>" class="btn btn-inverse-primary btn-rounded">
                                                    <i class=" ti-pencil-alt"></i>
                                                  </a-->
                                                  <a href="<?php echo base_url('index.php/Indexcontroller/doc_consultstudent/'.$id); ?>" class="none text-primary bold seize-1-0">
                                                    <b>consult</b>
                                                  </a>
                                                </td>
                                            </tr>
                                            <!--   <?php    $i++; ?> -->
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-12">
                        <div class="card box-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Follow Up</h4>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Matricule</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                             <?php 
                                                $i = 1;
                                                foreach ($students as $student_registration): ;
                                              ?>
                                            <tr>
                                                <td><?php $id = $student_registration['id_student']; echo $i ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['name'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['surname'] ?></td>
                                                <td class="text-center bold"><?php echo $student_registration['matricule'] ?></td>
                                                <td class="text-center">
                                                  <!--a href="<?php //echo base_url('index.php/Indexcontroller/updatestudent/'.$id) ?>" class="btn btn-inverse-primary btn-rounded">
                                                    <i class=" ti-pencil-alt"></i>
                                                  </a-->
                                                  <a href="<?php echo base_url('index.php/Indexcontroller/doc_consultstudent/'.$id); ?>" class="none text-primary bold seize-1-0">
                                                    <b>consult</b>
                                                  </a>
                                                </td>
                                            </tr>
                                            <!--   <?php    $i++; ?> -->
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div> 
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel box-shadow">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0">Doctors</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="<?php echo base_url(); ?>minisidebar/app-chat.html" title="John Doe"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                <span class="contact-date">MBBS, MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#" title="Richard Miles"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                <span class="contact-date">MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#" title="Richard Miles"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                <span class="contact-date">MS, MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#" title="John Doe"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                <span class="contact-date">MBBS</span>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="card member-panel box-shadow">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0">Nurses</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="" title="John Doe"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                <span class="contact-date">MBBS, MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#" title="Richard Miles"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                <span class="contact-date">MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#" title="Richard Miles"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                <span class="contact-date">MS, MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#" title="John Doe"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                <span class="contact-date">MBBS</span>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="card member-panel box-shadow">
							<div class="card-header bg-white">
								<h4 class="card-title mb-0">Laboratory Technicians</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="" title="John Doe"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                <span class="contact-date">MBBS, MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#" title="Richard Miles"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                <span class="contact-date">MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#" title="Richard Miles"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                <span class="contact-date">MS, MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#" title="John Doe"><img src="<?php echo base_url(); ?>assets/images/users/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="card-header bg-white">
                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                <span class="contact-date">MBBS</span>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!--script data-cfasync="false" src="<?php //echo base_url(); ?><?php //echo base_url(); ?><?php //echo base_url(); ?><?php //echo base_url(); ?>cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php //echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script-->
    <!-- Bootstrap tether Core JavaScript -->

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

      <script src="<?php echo base_url(); ?>assets/jquery_ui/js/jquery-3.5.1.min.js"></script>
  <!--script src="<?php //echo base_url(); ?>vendor/js/bootstrap.min.js"></script-->
  <!--script src="<?php //echo base_url(); ?>assets/jquery_ui/js/jquery-ui.js"></script-->
  <script src="<?php echo base_url(); ?>assets/datatables/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatables/js/dataTables.bootstrap4.min.js"></script>
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
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo base_url(); ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/echarts/echarts-all.js"></script>
    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Calendar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.js"></script>
    <script src='<?php echo base_url(); ?>assets/plugins/calendar/dist/fullcalendar.min.js'></script>
    <script src="<?php echo base_url(); ?>assets/plugins/calendar/dist/jquery.fullcalendar.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/calendar/dist/cal-init.js"></script>
    <!-- sparkline chart -->
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard4.js"></script>
    <!-- ============================================================== --> 
    <!--Custom JavaScript --> 
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    <!-- ============================================================== --> 
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

         <script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
  </script>
</body>     
</html>