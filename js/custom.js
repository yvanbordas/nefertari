$('.btn-login').click(function() {
	$('.modal-login').addClass('active');
});
$('.btn-login-1').click(function() {
	$('.modal-login').addClass('active');
	$('.modal-reset').removeClass('active');
});
$('.recover-btn').click(function() {
	$('.modal-reset').addClass('active');
	$('.modal-login').removeClass('active');
});
$('.input-unit').click(function() {
	$('.modal-unit').addClass('active');
});
$('.input-age').click(function() {
	$('.modal-2').addClass('active');
});
$('.input-cup').click(function() {
	$('.modal-3').addClass('active');
});
$('.input-breast').click(function() {
	$('.modal-4').addClass('active');
});
$('.input-hair').click(function() {
	$('.modal-5').addClass('active');
});
$('.input-languages').click(function() {
	$('.modal-6').addClass('active');
});
$('.input-height').click(function() {
	$('.modal-7').addClass('active');
});
$('.input-nationality').click(function() {
	$('.modal-nationality').addClass('active');
});
$('.escorts-box').click(function() {
	$('.modal-profile').addClass('active');
	$('body').addClass('fixed');
});
$('.bump-ads').click(function() {
	$('.modal-ads').addClass('active');
	$('body').addClass('fixed');
});
$('.filter-city').click(function() {
	$('.modal-city').addClass('active');
});
$('.filter-town').click(function() {
	$('.modal-town').addClass('active');
});
$('.filter-1').click(function() {
	$('.modal-1').addClass('active');
});
$('.filter-2').click(function() {
	$('.modal-2').addClass('active');
});
$('.filter-3').click(function() {
	$('.modal-3').addClass('active');
});
$('.filter-4').click(function() {
	$('.modal-4').addClass('active');
});
$('.filter-5').click(function() {
	$('.modal-5').addClass('active');
});
$('.filter-6').click(function() {
	$('.modal-6').addClass('active');
});
$('.filter-7').click(function() {
	$('.modal-7').addClass('active');
});
$('.filter-8').click(function() {
	$('.modal-8').addClass('active');
});
$('.modal-box').click(function() {
	$(this).toggleClass('active');
});
$('.services-register .services-box').click(function() {
	$(this).toggleClass('active');
});
$('.plan-price').click(function() {
  $(this).addClass('active').siblings().removeClass('active')
});
$('.modal-close').click(function() {
	$('.modal-overlay').removeClass('active');
	$('body').removeClass('fixed');
});
$('.modal-box').click(function() {
	$('.modal-apply').addClass('active');
});
$('.filters-box').click(function() {
	$('body').addClass('fixed');
});
$('.select-box').click(function() {
	$(this).toggleClass('active');
});
$('.input-nationality').click(function() {
	$('.modal-nationality').addClass('active');
});
$('.input-city').click(function() {
	$('.modal-city').addClass('active');
});
$('.input-town').click(function() {
	$('.modal-town').addClass('active');
});
$('.input-nationality').click(function() {
	$('body').addClass('fixed');
});
$('.input-region').click(function() {
	$('body').addClass('fixed');
});
$('.input-town').click(function() {
	$('body').addClass('fixed');
});
$('.payment-box').click(function() {
	$(this).addClass('active').siblings().removeClass('active');
	$('.payment-proceed').addClass('active');
});
$('.modal-close, .notification-cancel').click(function() {
	$('.notification-modal').removeClass('active');
});
$('.btn-disable').click(function() {
	$('.disable').addClass('active');
});
$('.btn-delete').click(function() {
	$('.delete').addClass('active');
});