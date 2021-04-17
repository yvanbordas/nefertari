<!DOCTYPE html>
<html lang="en">
<?php
$title = "Create add";
require ("inc/head.php");
?>
<body>
	<?php include 'inc/header.php' ?>
	<section id="register">
		<div class="container">
			<div class="title center">
				<h2>Create new ad</h2>
				<p>More than one ad can help you to reach more people everyday.</p>
			</div>
			<div class="register-container">
				<div class="register-group">
					<div class="register-title"><h3>Your profile</h3></div>
					<form id="register-form" class="form-3" method="POST" action="">
						<div class="form-group">
							<label>Full name</label>
							<input name="name-1" type="text" placeholder="First name" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input name="email" type="email" placeholder="Your email" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Confirm email</label>
							<input name="email" type="email" placeholder="Retype email" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" placeholder="Password" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Retype password</label>
							<input name="password" type="password" placeholder="Retype password" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input name="doc" type="number" placeholder="Phone number" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Whatsapp</label>
							<input name="" type="number" placeholder="Whatsapp phone number" data-required="true" class="form-control">
						</div>
					</form>
				</div>
				<div class="divider"></div>
				<div class="register-group">
					<div class="register-title"><h3>Ad detail</h3></div>
					<form id="register-form" class="form-3" method="POST" action="">
						<div class="form-group">
							<label>Working name</label>
							<input name="name-3" type="text" placeholder="Stage name" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input name="doc" type="number" placeholder="Phone number" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Whatsapp</label>
							<input name="" type="number" placeholder="Whatsapp phone number" data-required="true" class="form-control">
						</div>
						<div class="form-group form-full">
							<label>Headling</label>
							<input name="name-3" type="text" placeholder="Ad headline" data-required="true" class="form-control">
							<div class="form-obs">*40 characters max.</div>
						</div>
						<div class="form-group form-full">
							<label>Description</label>
							<textarea name="description" placeholder="Write about you" data-required="true" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Locations</label>
							<select name="nationality" class="form-control">
								<option selected="selected" value="" disabled>Select locations</option>
								<option value="pRwAiDocLs5dq4sL" data-cityName="aberdeen">Aberdeen</option>
								<option value="jOS01tpIB6fTAlkr" data-cityName="ashford">Ashford</option>
								<option value="DMwZwpTxGEVrpaKF" data-cityName="bath">Bath</option>
								<option value="djj39buQ8aRYaXiD" data-cityName="birmingham">Birmingham</option>
								<option value="B4i47N0y6kY7E0sc" data-cityName="brighton">Brighton</option>
								<option value="jkRXFCWXNOfdi3zp" data-cityName="bristol">Bristol</option>
								<option value="VRu0GEyDfCua3p4M" data-cityName="cambridge">Cambridge</option>
								<option value="JdM4EJ3PyLdBN9td" data-cityName="canterbury">Canterbury</option>
								<option value="fczdwecT3xpdZYiv" data-cityName="cardiff">Cardiff</option>
								<option value="kJlIHNwRFs2QXcxG" data-cityName="chatham">Chatham</option>
								<option value="bwEoodCwZzYvPpzy" data-cityName="crawley">Crawley</option>
								<option value="1Xi1UYBgJtagFY66" data-cityName="croydon">Croydon</option>
								<option value="d3J2tGHVxvVMPORG" data-cityName="devon">Devon</option>
								<option value="pS2Y8v7l20HyvLXo" data-cityName="east-anglia">East Anglia</option>
								<option value="eDHUYn1FJAcP83Bm" data-cityName="east-midlands">East Midlands</option>
								<option value="KO7FTxjPO9XdinQv" data-cityName="edinburgh">Edinburgh</option>
								<option value="OPP7Jybsobs4uszR" data-cityName="epsom">Epsom</option>
								<option value="7cghe7ezSlHqNpUg" data-cityName="essex">Essex</option>
								<option value="gQBD395TBufKfsWw" data-cityName="glasgow">Glasgow</option>
								<option value="B6e8UqI032OX0uhc" data-cityName="gravesend">Gravesend</option>
								<option value="z3LguoYIEkJXmAr1" data-cityName="guildford">Guildford</option>
								<option value="2GR1boV8WvjLsSW7" data-cityName="hampshire">Hampshire</option>
								<option value="cXyPZMrufnUKnyCO" data-cityName="hastings">Hastings</option>
								<option value="ZnmpL5SulZxywKuT" data-cityName="horsham">Horsham</option>
								<option value="Mpr7QOJlakgJWGtI" data-cityName="hounslow">Hounslow</option>
								<option value="v5NfAT5m1LmAqhwS" data-cityName="kent">Kent</option>
								<option value="RWOG8MbPHNb3IlMq" data-cityName="kingston-upon-thames">Kingston Upon Thames</option>
								<option value="ssQn7JsxvIZBH9O3" data-cityName="leatherhead">Leatherhead</option>
								<option value="AWndEaYJDkNBeUYg" data-cityName="leeds">Leeds</option>
								<option value="anI9yvqD6hDMaigi" data-cityName="liverpool">Liverpool</option>
								<option value="9B0xhdzHezevDABD" data-cityName="london">London</option>
								<option value="f7cNBYMQgyxIYDCI" data-cityName="luton">Luton</option>
								<option value="2izVRsOxKcSwjRGP" data-cityName="maidstone">Maidstone</option>
								<option value="u9ox3ULCjSMXmcTU" data-cityName="manchester">Manchester</option>
								<option value="f2CQihw9bPQRQSgv" data-cityName="milton-keynes">Milton Keynes</option>
								<option value="u0qG0dbM5CnwerjU" data-cityName="newcastle">Newcastle</option>
								<option value="feeJRmXdyEmy1dhu" data-cityName="northampton">Northampton</option>
								<option value="6n6JprAxKEYhDFHs" data-cityName="norwich">Norwich</option>
								<option value="Fc78DQjwejjO7Rzj" data-cityName="nottingham">Nottingham</option>
								<option value="tP658WWg4YYy6kyg" data-cityName="oxford">Oxford</option>
								<option value="Uu1daiMEpe4iNkXJ" data-cityName="portsmouth">Portsmouth</option>
								<option value="MfvExTNyDxK8n77k" data-cityName="reading">Reading</option>
								<option value="oJkaDepMzQXL01hD" data-cityName="redhill">Redhill</option>
								<option value="CYjNRzhQRHOfEE7r" data-cityName="richmond">Richmond</option>
								<option value="VPWoasK8ua34UAHb" data-cityName="romford">Romford</option>
								<option value="d14WIqxBdluUal2y" data-cityName="sheffield">Sheffield</option>
								<option value="4OFdklgFVnqzI8YM" data-cityName="slough">Slough</option>
								<option value="rYKo3YZQB3sWw854" data-cityName="southampton">Southampton</option>
								<option value="DLWK5tMOmjcyIFkv" data-cityName="tonbridge">Tonbridge</option>
								<option value="nimvedsnoUSWjcid" data-cityName="twickenham">Twickenham</option>
								<option value="l1yG9pDVt1c7mWBc" data-cityName="wales">Wales</option>
								<option value="7Pb9uEtwlKoUUMH7" data-cityName="yorkshire">Yorkshire</option>
							</select>
						</div>
						<div class="form-group">
							<label>Nationality</label>
							<input name="" type="text" placeholder="Breast Type" data-required="true" class="form-control input-nationality">
						</div>
						<div class="form-group">
							<label>Languages</label>
							<input name="" type="text" placeholder="Languages" data-required="true" class="form-control input-languages">
						</div>
						<div class="form-group">
							<label>Age</label>
							<input name="" type="number" placeholder="Age" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Cup Size</label>
							<input name="" type="text" placeholder="Cup Size" data-required="true" class="form-control input-cup">
						</div>
						<div class="form-group">
							<label>Breast Type</label>
							<input name="" type="text" placeholder="Breast Type" data-required="true" class="form-control input-breast">
						</div>
						<div class="form-group">
							<label>Hair color</label>
							<input name="" type="text" placeholder="Hair color" data-required="true" class="form-control input-hair">
						</div>						
						<div class="form-group">
							<label>Height</label>
							<input name="" type="text" placeholder="Height" data-required="true" class="form-control input-height">
						</div>
					</form>
				</div>
				<div class="divider"></div>
				<div class="register-group">
					<div class="register-title">
						<h3>Rates</h3>
					</div>
					<form id="register-form" class="form-3" method="POST" action="">
						<div class="form-group">
							<label>1 hour (Incall)</label>
							<input name="amount-1" type="number" placeholder="Amount (in £)" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>1 hour 30 min (Incall)</label>
							<input name="amount-1" type="number" placeholder="Amount (in £)" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Extra hour (Incall)</label>
							<input name="amount-1" type="number" placeholder="Amount (in £)" data-required="true" class="form-control">
						</div>
					</form>
					<form id="register-form" class="form-3 mt-25" method="POST" action="">
						<div class="form-group">
							<label>1 hour (Outcall)</label>
							<input name="amount-1" type="number" placeholder="Amount (in £)" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>1 hour 30 min (Outcall)</label>
							<input name="amount-1" type="number" placeholder="Amount (in £)" data-required="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Extra hour (Outcall)</label>
							<input name="amount-1" type="number" placeholder="Amount (in £)" data-required="true" class="form-control">
						</div>
					</form>
				</div>
				<div class="divider"></div>
				<div class="register-group">
					<div class="register-title">
						<h3>Services</h3>
					</div>
					<div class="services-register">
						<div class="services-box">Quickie<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Striptease<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Lingerie<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Fingering<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Toys<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Latex<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Incall<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Face Sitting<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Intercourse - Vaginal<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Naturism/Nudism<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Overnights<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">DUO<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Blowjob<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Lapdance<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Receiving Oral<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Kissing<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Watersports<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">XXX<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Photos<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Massage<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Role-playing<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Fetish<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Bisexual<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">OWO<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Strap On<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Modelling<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Submission<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">69<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Uniforms<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Dogging<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Rimming<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Couples<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Outcall<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Party Girl<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Domination<div class="services-check"><i class="icon-ok-2"></i></div></div>
						<div class="services-box">Erotic massage<div class="services-check"><i class="icon-ok-2"></i></div></div>
					</div>
				</div>
				<div class="divider"></div>
				<div class="register-group">
					<div class="register-title">
						<h3>Photos</h3>
						<p>You must upload at least 4 photos. Recommended minimun size of 700 x 1000 pixels.</p>
						<p class="register-obs"><strong>Ads with small size photos, watermarks and others might be removed or put on hold.</strong></p>
						<p class="register-obs"><strong>For more information please read our <a href="terms-conditions.php">Terms and conditions</a>.</strong></p>
					</div>
					<div class="photo-grid">
						<div class="photo-box">
							<div class="photo-preview"></div>
							<div class="photo-options">
								<label>
									<input type="file" class="photo-upload" accept="image/*" />
								</label>
							</div>
						</div>
						<div class="photo-box">
							<div class="photo-preview"></div>
							<div class="photo-options">
								<label>
									<input type="file" class="photo-upload" accept="image/*" />
								</label>
							</div>
						</div>
						<div class="photo-box">
							<div class="photo-preview"></div>
							<div class="photo-options">
								<label>
									<input type="file" class="photo-upload" accept="image/*" />
								</label>
							</div>
						</div>
						<div class="photo-box">
							<div class="photo-preview"></div>
							<div class="photo-options">
								<label>
									<input type="file" class="photo-upload" accept="image/*" />
								</label>
							</div>
						</div>
						<div class="photo-box">
							<div class="photo-preview"></div>
							<div class="photo-options">
								<label>
									<input type="file" class="photo-upload" accept="image/*" />
								</label>
							</div>
						</div>
						<div class="photo-box">
							<div class="photo-preview"></div>
							<div class="photo-options">
								<label>
									<input type="file" class="photo-upload" accept="image/*" />
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="divider"></div>
				<div class="btn-block">
					<a href="#" class="btn-mid">Proceed to checkout</a>
				</div>
			</div>
		</div>
	</section>
	<?php include 'inc/modals.php' ?>
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/scripts.php' ?>
</body>
</html>