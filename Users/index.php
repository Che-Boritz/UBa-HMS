<!DOCTYPE html>
<html>
	<?php include 'vendor/include/index.php'; ?>
<body>

	<br>
	<br>
	
	<br>
	<br>
	<br>
	<div class="card col-md-3 left shadow">
		<span id="login">
			<center> Login.</center>
		</span>
		<div class="form-group">
			<form method="POST" action="<?php echo base_url(); ?>index.php/Indexcontroller/login" name="form" id="form" class="pt-4">
				<center>
					<input type="text" name="pseudo"  placeholder="Identifiant" required/>
					<span class="text-danger bold text-center">
                      <?php echo form_error('pseudo'); ?>
                    </span>
					<input type="password" name="password"  placeholder="Password" required/>
					<span class="text-danger bold text-center">
                      <?php echo form_error('password'); ?>
                    </span>
				</center>
					<br>
				<center>
					<button type="submit" name="submit" class="btn link col-md-6" >Sign In &nbsp;<i class="fa fa-chevron-right"></i></button>
				</center>
			</form>
		</div>
		<div id="login"></div>
	</div>
<br>
	
</body>
</html>