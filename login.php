<!DOCTYPE html>
<html lang="en">
<?php
$title = "Register";
require ("inc/head.php");
?>
<body>
	<?php include 'inc/header.php' ?>
	<section id="login">
		<div class="login-wrapper">
			<div class="title center">
				<h2>Welcome again!</h2>
				<p>Nice to see you.</p>
			</div>
			<div class="login-container">
				<div class="register-group">
					<form id="register-form" method="POST" action="">
						<div class="form-group">
							<input name="email" type="email" placeholder="Your email" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<input name="password" type="password" placeholder="Password" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn-mid">Login</button>
						</div>
						<div class="login-legal">
							<p>By entering this website you are agreeing to the <a href="terms-conditions.php">Terms and conditions</a> and <a href="privacy-policy.php">Privacy policy</a>.</p>
						</div>
						<div class="divider"></div>
						<div class="form-legal">
							<p>Don't have an account? <br><a href="register.php">Register here.</a></p>
							<p><a href="reset.php">Forgot your password?</a></p>
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