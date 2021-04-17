<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>UBA HMS - Registration</title>
		
		<!-- Favicon -->
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
							<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form method="post" action="<?php echo base_url(); ?>index.php/Indexcontroller/new_reg_student">
									<!--div class="form-group">
										<input class="form-control" type="text" placeholder="Name">
									</div-->
									<div class="form-group">
										<input class="form-control" type="text" name="username" placeholder="Email">
									</div>
									<div class="row">
										<div class="col-md-10">
											<div class="form-group">
												<input class="form-control" type="password" name="password" id="password" placeholder="Password">
											</div>
										</div>
										<div class="col-md-2">
											<input type="checkbox" onclick="myFunction()">
											<!--button class="btn" onclick="myFunction()"><i class="fas fa-eye"></i></button-->
										</div>
									</div>
									<!--div class="form-group">
										<input class="form-control" type="text" placeholder="Confirm Password" name="password2">
									</div-->
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" name="submit" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								<!-- Social Login -->
								<div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
								</div>
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Already have an account? <a href="<?php echo base_url(); ?>index.php/Indexcontroller/login_student">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
        <script src="<?php echo base_url(); ?>assets/lib/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="<?php echo base_url(); ?>assets/lib/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/plugins/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>assets/lib/js/script.js"></script>
		
    </body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 07:07:56 GMT -->
</html>