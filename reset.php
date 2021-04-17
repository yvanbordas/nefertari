<!DOCTYPE html>
<html lang="en">
<?php
$title = "Reset your password";
require ("inc/head.php");
?>
<body>
	<?php include 'inc/header.php' ?>
	<section id="login">
		<div class="login-wrapper">
			<div class="title center">
				<h2>Don't worry!</h2>
				<p>Type your email to receive the link.</p>
			</div>
			<div class="login-container">
				<div class="register-group">
					<form id="register-form" method="POST" action="">
						<div class="form-group">
							<input name="email" type="email" placeholder="Your email" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn-mid">Reset</button>
						</div>
						<div class="login-legal">
							<p>Already have an account? <a href="login.php">Login here.</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php include 'inc/modals.php' ?>
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/scripts.php' ?>
</body>
</html>