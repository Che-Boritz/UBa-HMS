<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>UBa HMS - Student Dashboard</title>
		
		<!-- Favicon -->
<link rel="shortcut icon" href="assets/lib/img/favicon.png">
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/plugins/fontawesome/css/all.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/plugins/select2/css/select2.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/css/style.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="<?php echo base_url(); ?>assets/lib/img/logo.png" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="<?php echo base_url(); ?>assets/lib/img/logo-icon.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fas fa-align-left"></i>
				</a>
				
				<!-- Search Bar -->
				
				<!-- /Search Bar -->
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/lib/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/lib/img/profiles/avatar-11.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/lib/img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/lib/img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="<?php echo base_url(); ?>assets/lib/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/lib/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Ryan Taylor</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="<?php echo base_url('Indexcontroller/student_profile'); ?>">My Profile</a>
							<a class="dropdown-item" href="<?php echo base_url('Indexcontroller/student_inbox'); ?>">Inbox</a>
							<a class="dropdown-item" href="<?php echo base_url('Indexcontroller/student_login'); ?>">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li>
								<a href="student-dashboard.html"><i class="fas fa-columns"></i> <span> Student Registration </span></a>
							</li>
					
							<li> 
								<a href="history.html"><i class="fas fa-th-large"></i> <span>Medical History</span></a>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">MEDICAL REGISTRATION</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="">Enter The Required Information</a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Medical Form</h5>
								</div>
								<div class="card-body">
									<h5 class="card-title">Personal Information</h5>
									<form method="post" action="<?php echo base_url(); ?>index.php/Indexcontroller/insert_student" class="forms-sample">
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">First Name</label>
													<div class="col-lg-9">
														<input type="text" name="name" class="form-control" placeholder="Enter Name">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Reg. No</label>
													<div class="col-lg-9">
														<input type="text" name="matricule" class="form-control" placeholder="Enter Matricule">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">place of Birth</label>
													<div class="col-lg-9">
														<input type="text" name="place_birth" class="form-control" placeholder="Enter place of Birth">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Sex</label>
													<div class="col-lg-9">
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="sex" id="gender_male" value="male">
															<label class="form-check-label" for="gender_male">
															Male
															</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="sex" id="gender_female" value="female">
															<label class="form-check-label" for="gender_female">
															Female
															</label>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Nationality</label>
													<div class="col-lg-9">
														<input type="text" name="nationality" class="form-control" placeholder="Enter Nationality">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Faculty / School</label>
													<div class="col-lg-9">
														<input type="text" name="faculty" class="form-control" placeholder="Enter Faculty/School">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Surname</label>
													<div class="col-lg-9">
														<input type="text" name="surname" class="form-control" placeholder="Enter Surname">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Date of Birth</label>
													<div class="col-lg-9">
														<input type="date" name="date_birth" class="form-control" placeholder="Enter Date of Birth">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Region of Origin</label>
													<div class="col-lg-9">
														<input type="text" name="region_origin" class="form-control" placeholder="Enter Region">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Level of Study</label>
													<div class="col-lg-9">
														<input type="text" name="year_ofstudy" class="form-control" placeholder="Enter Level of Study">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Residence</label>
													<div class="col-lg-9">
														<div class="col-lg-9">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="residence" id="campus" value="campus">
																<label class="form-check-label" for="campus">
																Campus
																</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="residence" id="elsewhere" value="elsewhere">
																<label class="form-check-label" for="Elsewhere">
																Elsewhere
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">	Mobile Phone No.</label>
													<div class="col-lg-9">
														<input type="text" name="contact" class="form-control" placeholder="Enter Phone No.">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Marital Status</label>
													<div class="col-lg-9">
														<select name="marital_status" class="select">
															<option>Select</option>
															<option name="single" value="single">Single</option>
															<option name="married" value="married">Married</option>
															<option name="divorced" value="divorced">Divorced</option>
															<option name="widow" value="widow">Widow</option>
															
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Number of Children</label>
													<div class="col-lg-9">
														<input type="text" name="number_ofchildren" class="form-control" placeholder="Enter No. Children">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Previous Sport Participation</label>
													<div class="col-lg-9">
														<select name="pp_sports" class="select">
															<option>Select</option>
															<option name="competitive" value="competitive">Competitive Sports</option>
															<option name="ordinary" value="ordinary">Ordinary Sports</option>
															<option name="not_eligible" value="not_eligible">Not Eligible</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Department</label>
													<div class="col-lg-9">
														<input type="text" name="department" class="form-control" placeholder="Enter Department">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" name="address" class="form-control" placeholder="Enter Address">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Gurdian Tel No.</label>
													<div class="col-lg-9">
														<input type="text" name="guardian_contact" class="form-control" placeholder="Enter Guardian No.">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Recurrent illness</label>
													<div class="col-lg-9">
														<input type="text" name="recurrent_illness" class="form-control" placeholder="Enter Recurrent illness">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">illnesses Within the family</label>
													<div class="col-lg-9">
														<select name="family_illness" class="select">
															<option>Select</option>
															<option name="none" value="none">none</option>
															<option name="tuberculosis" value="tuberculosis">Tubercolosis</option>
															<option name="diabetic" value="diabetic">Diabetic</option>
															<option name="asthma" value="asthma">Asthma</option>
															<option name="arterial_hypertension" value="arterial_hypertension">Arterial Hypertension</option>
															
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="text-left">
											<button type="submit" name="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				
				
				</div>
			
				<!-- Footer -->
				<footer>
					<p>Copyright © 2021 UBaHMS.</p>					
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/lib/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>assets/lib/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/plugins/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="<?php echo base_url(); ?>assets/lib/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="<?php echo base_url(); ?>assets/lib/plugins/select2/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="<?php echo base_url(); ?>assets/lib/js/script.js"></script>
		
    </body>


</html>