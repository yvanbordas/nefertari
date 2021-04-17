<!DOCTYPE html>
<html lang="en">
<?php
$title = "Upgrade your account";
require ("inc/head.php");
?>
<body>
	<?php include 'inc/header.php' ?>
	<section id="login">
		<div class="login-wrapper">
      <div class="upgrade-btn">
        <p>!</p>
      </div>
			<div class="title center">
				<h2>Upgrade to gold!</h2>
				<p>Get more calls today.</p>
			</div>
			<div class="login-container">
				<div class="success-text">
					<p>You have a free account, to bump your ad upgrade to gold or pay <strong>1£</strong> each time you want to refresh your ad.</p>
				</div>
				<a href="checkout.php" class="btn-mid">Upgrade now</a>
				<div class="verification-legal">
					<p>Just pay <strong><a href="checkout.php">1£</a></strong> now.</>
				</div>
			</div>
		</div>
	</section>
	<?php include 'inc/modals.php' ?>
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/scripts.php' ?>
</body>
</html>