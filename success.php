<!DOCTYPE html>
<html lang="en">
<?php
$title = "Success, your ad was created";
require ("inc/head.php");
?>
<body>
	<?php include 'inc/header.php' ?>
	<section id="login">
		<div class="login-wrapper">
      <div class="success-btn">
        <i class="icon-ok-2"></i>
      </div>
			<div class="title center">
				<h2>Success!</h2>
				<p>Your ad is good to go.</p>
			</div>
			<div class="login-container">
        <div class="success-text"><p>Remember that our team will verify the details of the ad. In case of any irregularity we will notify you and freeze the ad until the problem is resolved. Thank you for chosing us!</p></div>
				<a href="home.php" class="btn-mid">Take me home</a>
			</div>
		</div>
	</section>
	<?php include 'inc/modals.php' ?>
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/scripts.php' ?>
</body>
</html>