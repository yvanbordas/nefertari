<!DOCTYPE html>
<html lang="en">
<?php
$title = "Personal info";
require ("inc/head.php");
?>

<body>
	<?php include 'inc/header.php' ?>
	<section id="settings">
		<div class="container">
			<div class="title center">
				<h2>Personal info</h2>
			</div>
			<div class="settings-wrapper">
				<form id="register-form" class="form-3" method="POST" action="">
					<div class="form-group">
						<label>Full name</label>
						<input name="name-1" type="text" value="Rafaela Trump" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input name="email" type="email" value="rafthomp@gmail.com" class="form-control">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input name="doc" type="number" value="442071231234" class="form-control">
					</div>
					<div class="form-group">
						<label>Change password</label>
						<input name="password-1" type="password" class="form-control">
					</div>
					<div class="form-group">
						<label>Retype password</label>
						<input name="password-2" type="password" class="form-control">
					</div>
					<div class="form-save">
						<button type="submit" class="btn-mid">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<?php include 'inc/modals.php' ?>
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/scripts.php' ?>
</body>

</html>