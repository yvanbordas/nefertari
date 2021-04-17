<!DOCTYPE html>
<html lang="en">
<?php
$title = "Upgrade your ad";
require ("inc/head.php");
?>
<body>
	<?php include 'inc/header.php' ?>
	<section id="login">
		<div class="container">
			<div class="title center">
				<h2>Upgrade now</h2>
				<p>Choose your plan or continue your free account.</p>
			</div>
			<div class="plan-grid">
				<div class="plan-box plan-gold">
					<div class="plan-title">Gold Ad</div>
					<div class="plan-list">
						<p>Gold Badge</p>
						<p>Best view on website = more calls</p>
						<p>Appear on the top of all other ads</p>
						<p>Boost as many times as you like</p>
						<p>Highlighted background</p>
					</div>
				</div>
				<div class="plan-box">
					<div class="plan-subtitle">Gold plan</div>
					<div class="plan-price"><p>7 days - 19.99£</p><div class="services-check"><i class="icon-ok-2"></i></div></div>
					<div class="plan-price"><p>14 days - 34.99£</p><div class="services-check"><i class="icon-ok-2"></i></div></div>
					<div class="plan-price"><p>30 days - 59.99£</p><div class="services-check"><i class="icon-ok-2"></i></div></div>
				</div>
				<div class="plan-box plan-regular">
					<div class="plan-title">Free Ad</div>
					<div class="plan-list">
						<p>No payment</p>
						<p>Auto rotation of ads</p>
						<p>Boost your ad for 1£</p>
					</div>	
				</div>
				<div class="plan-box">
					<div class="plan-subtitle">Free plan</div>
					<div class="plan-price"><p>1 week</p><div class="services-check"><i class="icon-ok-2"></i></div></div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'inc/modals.php' ?>
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/scripts.php' ?>
</body>
</html>