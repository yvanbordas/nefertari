<!DOCTYPE html>
<html lang="en">
<?php
$title = "Checkout";
require ("inc/head.php");
?>
<body>
	<?php include 'inc/header.php' ?>
	<section id="checkout">
		<div class="container">
			<div class="title center">
				<h2>Checkout</h2>
			</div>
			<div class="payment-grid">
				<div class="payment-detail">
					<div class="payment-column">
						<div class="payment-row">
							<div class="register-title"><h3>Your information</h3></div>
							<div>
								<label>First name</label>
								<p>Amelie</p>
							</div>
							<div>
								<label>Last name</label>
								<p>Ebner</p>
							</div>
							<div>
								<label>Email</label>
								<p>account@escorts.com</p>
							</div>
							<div>
								<label>Location</label>
								<p>London</p>
							</div>
						</div>
						<div>
							<div class="register-title"><h3>Gold Ad</h3></div>
							<div class="plan-list">
								<p>Gold Badge</p>
								<p>Top positions on the site</p>
								<p>Unlimited bumps</p>
								<p>More calls per day</p>
								<p>Highlighted background</p>
							</div>
						</div>
					</div>
					<div class="divider"></div>
					<div class="payment-column">
						<div>
							<div class="register-title"><h3>Payment method</h3></div>
							<div class="payment-center">
								<img src="images/paysafecard.png" alt="Paysafecard">		
							</div>
						</div>
					</div>
				</div>
				<div class="payment-invoice">
					<div>
						<div class="register-title"><h3>Order</h3></div>
						<div class="invoice-row">
							<div>
								<div class="invoice-title">Gold Ad</div>
								<p>Chosen plan: 30 days</p>
							</div>
							<div class="invoice-price">
								<strong>59.99£</strong>
							</div>
						</div>
						<div class="divider"></div>
					</div>
					<div class="invoice-confirm">
						<a href="#" class="btn-mid btn-green">Place order</a>
						<div class="divider"></div>
						<p>By placing the order, you agree to our <a href="terms-conditions.php">Terms and Conditions</a>.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'inc/modals.php' ?>
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/scripts.php' ?>
</body>
</html>