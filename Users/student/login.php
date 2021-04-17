<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>UBa HMS - Login</title>
		
		<!-- Favicon -->
		<a class="navbar-brand brand-logo mr-5" href="#"><img width="100" style="height: 80%;" src="<?php echo base_url(); ?>assets/vendor/image/about.png" alt="logo"/></a>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/lib/img/favicon.png">
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lib/css/style.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="<?php echo base_url(); ?>assets/lib/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form action="<?php echo base_url(); ?>index.php/Indexcontroller/login_student" method="post" name="form" >
									<div class="form-group">
										<input class="form-control" name="username" type="text" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="form-control" name="password" type="text" placeholder="Password">
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" name="submit" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								  
								<!-- Social Login -->
								<div class="social-login">
									<span>Login with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
								</div>
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Don’t have an account? <a href="<?php echo base_url(); ?>index.php/Indexcontroller/student_reg">Register</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/lib/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>assets/lib/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/plugins/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>assets/lib/js/script.js"></script>
		
    </body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 07:07:46 GMT -->
</html>