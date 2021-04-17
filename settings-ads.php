<!DOCTYPE html>
<html lang="en">
<?php
$title = "Ads management";
require ("inc/head.php");
?>

<body>
	<?php include 'inc/header.php' ?>
	<section id="settings">
		<div class="container">
			<div class="title center">
				<h2>Ads management</h2>
			</div>
			<div class="ads-grid">
				<div class="escorts-box escorts-gold" target="_blank">
					<div class="escorts-img">
						<div class="escorts-price">60 £</div>
						<img src="images/escorts/5.jpg" alt="">
					</div>
					<div class="escorts-info">
						<div class="escorts-cta">
							<a href="#" class="btn-mid btn-small btn-black btn-disable">Disable ad</a>
							<a href="#" class="btn-mid btn-small btn-alert btn-delete">Delete ad</a>
						</div>
						<div>
							<div class="escorts-summary">
								<div class="summary-row"><strong>Ad type:</strong> Gold</div>
								<div class="summary-row"><strong>Created:</strong> 23/01/2019</div>
								<div class="summary-row"><strong>Expires:</strong> in 7 days</div>
							</div>
							<div class="escorts-summary">
								<div class="summary-row"><strong>Bumps left:</strong> 0/10</div>
								<div class="summary-row"><strong>Bump available in:</strong> 29 min</div>
							</div>
							<div class="escorts-btn">
								<a href="" class="btn-mid btn-small">Edit</a>
								<a href="#" class="btn-mid btn-small btn-bump">Bump!</a>
							</div>
							<div class="escorts-renew">
								<a href="#" class="btn-mid btn-small">Change photo</a>
								<a href="renew.php" class="btn-mid btn-small btn-green">Renew ad</a>
							</div>
						</div>
					</div>
				</div>
				<div class="escorts-box" target="_blank">
					<div class="escorts-img">
						<div class="escorts-price">60 £</div>
						<img src="images/escorts/7.jpg" alt="">
					</div>
					<div class="escorts-info">
						<div class="escorts-summary">
							<div class="summary-row"><strong>Ad type:</strong> Regular</div>
							<div class="summary-row"><strong>Created:</strong> 23/01/2019</div>
							<div class="summary-row"><strong>Expires:</strong> in 7 days</div>
						</div>
						<div class="escorts-summary">
							<div class="summary-row"><strong>Bumps left:</strong> 0/10</div>
							<div class="summary-row"><strong>Last bump:</strong> 1 hour ago</div>
							<div class="summary-row"><strong>Resets:</strong> in 2 hours</div>
						</div>
						<div class="escorts-btn">
							<a href="" class="btn-mid btn-small">Edit</a>
							<a href="#" class="btn-mid btn-small btn-bump">Bump!</a>
						</div>
						<div class="escorts-renew">
							<a href="#" class="btn-mid btn-small">Change photo</a>
							<a href="renew.php" class="btn-mid btn-small btn-black">Renew ad</a>
						</div>
					</div>
				</div>
				<div class="escorts-box" target="_blank">
					<div class="escorts-img">
						<div class="escorts-price">60 £</div>
						<img src="images/escorts/8.jpg" alt="">
					</div>
					<div class="escorts-info">
						<div class="escorts-summary">
							<div class="summary-row"><strong>Ad type:</strong> Regular</div>
							<div class="summary-row"><strong>Created:</strong> 23/01/2019</div>
							<div class="summary-row"><strong>Expires:</strong> in 7 days</div>
						</div>
						<div class="escorts-summary">
							<div class="summary-row"><strong>Bumps left:</strong> 0/10</div>
							<div class="summary-row"><strong>Last bump:</strong> 1 hour ago</div>
							<div class="summary-row"><strong>Resets:</strong> in 2 hours</div>
						</div>
						<div class="escorts-btn">
							<a href="" class="btn-mid btn-small">Edit</a>
							<a href="#" class="btn-mid btn-small btn-bump">Bump!</a>
						</div>
						<div class="escorts-renew">
							<a href="#" class="btn-mid btn-small">Change photo</a>
							<a href="renew.php" class="btn-mid btn-small btn-black">Renew ad</a>
						</div>
					</div>
				</div>
				<div class="escorts-box" target="_blank">
					<div class="escorts-img">
						<div class="escorts-price">60 £</div>
						<img src="images/escorts/9.jpg" alt="">
					</div>
					<div class="escorts-info">
						<div class="escorts-summary">
							<div class="summary-row"><strong>Ad type:</strong> Regular</div>
							<div class="summary-row"><strong>Created:</strong> 23/01/2019</div>
							<div class="summary-row"><strong>Expires:</strong> in 7 days</div>
						</div>
						<div class="escorts-summary">
							<div class="summary-row"><strong>Bumps left:</strong> 0/10</div>
							<div class="summary-row"><strong>Last bump:</strong> 1 hour ago</div>
							<div class="summary-row"><strong>Resets:</strong> in 2 hours</div>
						</div>
						<div class="escorts-btn">
							<a href="" class="btn-mid btn-small">Edit</a>
							<a href="#" class="btn-mid btn-small btn-bump">Bump!</a>
						</div>
						<div class="escorts-renew">
							<a href="#" class="btn-mid btn-small">Change photo</a>
							<a href="renew.php" class="btn-mid btn-small btn-black">Renew ad</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="notification-modal delete">
		<div class="modal-close">
			<i class="icon-cancel-3"></i>
		</div>
		<div class="notification-wrapper">
			<div class="notification-icon notification-red">
				<i class="icon-cancel-3"></i>
			</div>
			<div class="title center">
				<h2>Delete ad</h2>
				<p>Are you sure?</p>
			</div>
			<div class="notification-container">
				<div class="success-text"><p>Once you delete your ad there is no turning back. In order to delete, please confirm.</p></div>
				<div class="notification-btn">
					<a href="#" class="btn-mid btn-alert">Confirm</a>
					<a href="#" class="btn-mid btn-black notification-cancel">Cancel</a>
				</div>
			</div>
		</div>
	</div>
	<div class="notification-modal disable">
		<div class="modal-close">
			<i class="icon-cancel-3"></i>
		</div>
		<div class="notification-wrapper">
			<div class="notification-icon">
				<i class="icon-cancel-3"></i>
			</div>
			<div class="title center">
				<h2>Disable ad</h2>
				<p>Are you sure?</p>
			</div>
			<div class="notification-container">
				<div class="success-text"><p>Once the ad is paused it will disappear from the site and the paid days will continue. In order to pause, please confirm</p></div>
				<div class="notification-btn">
					<a href="#" class="btn-mid">Confirm</a>
					<a href="#" class="btn-mid btn-black notification-cancel">Cancel</a>
				</div>
			</div>
		</div>
	</div>
	<?php include 'inc/modals.php' ?>
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/scripts.php' ?>
</body>

</html>