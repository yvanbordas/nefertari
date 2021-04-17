<!DOCTYPE html>
<html lang="en">
  <?php
    $title = "Contact";
    require ("inc/head.php");
  ?>
  <body>
  	<?php include 'inc/header.php' ?>
  	<section id="contact">
      <div class="half-contact">
        <div class="contact-img">
          <div class="overlay"></div>
          <div class="cover-bg" style="background-image: url(images/home.jpg);"></div>
          <div class="logo"><img src="images/logo-2.svg" alt=""></div>
        </div>
        <div class="contact-info">
          <div class="contact-inner">
            <div class="title">
              <h2>Contact us</h2>
              <p>If you need more information or some support, let us know. Will be happy to help you.</p>
            </div>
            <form id="contact-form" method="POST" action="mail.php">
              <div class="contact-grid">
                <div class="form-group">
                  <input name="name-1" type="text" placeholder="First name" data-required="true" class="form-control">
                </div>
                <div class="form-group">
                  <input name="name-2" type="text" placeholder="Last name" data-required="true" class="form-control">
                </div>
                <div class="form-group">
                  <input name="email" type="email" placeholder="Email" data-required="true" class="form-control">
                </div>
                <div class="form-group">
                  <input name="subject" type="text" placeholder="Subject" data-required="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <textarea name="message" placeholder="Message" data-required="true" class="form-control"></textarea>
              </div>
              <div class="form-btn">
                <button type="submit" class="btn-mid"><span>Send message</span></button>
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