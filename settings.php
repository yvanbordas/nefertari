<!DOCTYPE html>
<html lang="en">
<?php
$title = "Settings";
require ("inc/head.php");
?>

<body>
	<?php include 'inc/header.php' ?>
	<section id="settings">
		<div class="container">
			<div class="title center">
				<h2>Settings</h2>
			</div>
			<div class="settings-grid">
				<a href="settings-user.php" class="settings-box">
					<div class="settings-icon"><img src="images/icons/user.svg" alt="User"></div>
					<h3>Personal info</h3>
					<p>Change your personal accounts and configuration.</p>
				</a>
				<a href="settings-ads.php" class="settings-box">
					<div class="settings-icon"><img src="images/icons/ads.svg" alt="Ads"></div>
					<h3>Ads management</h3>
					<p>Manage your ads settings, plans, bumps and more.</p>
				</a>
			</div>
		</div>
	</section>
	<?php include 'inc/modals.php' ?>
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/scripts.php' ?>
	<script>
	$('.tab-1').click(function() {
		$("#tab-1").addClass("active");
		$("#tab-2, #tab-3, #tab-4, #tab-5").removeClass('active');
		$(this).addClass('active').siblings().removeClass('active');
	});
	$('.tab-2').click(function() {
		$("#tab-2").addClass("active");
		$("#tab-1, #tab-3, #tab-4, #tab-5").removeClass('active');
		$(this).addClass('active').siblings().removeClass('active');
	});
	$('.tab-3').click(function() {
		$("#tab-3").addClass("active");
		$("#tab-1, #tab-2, #tab-4, #tab-5").removeClass('active');
		$(this).addClass('active').siblings().removeClass('active');
	});
	$('.tab-4').click(function() {
		$("#tab-4").addClass("active");
		$("#tab-1, #tab-3, #tab-2, #tab-5").removeClass('active');
		$(this).addClass('active').siblings().removeClass('active');
	});
	$('.tab-5').click(function() {
		$("#tab-5").addClass("active");
		$("#tab-1, #tab-3, #tab-2, #tab-4").removeClass('active');
		$(this).addClass('active').siblings().removeClass('active');
	});
	</script>
</body>

</html>