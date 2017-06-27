$(document).ready(function () {
	$('#left-radius').click(function () {
		$('body').css('background-image', 'url(images/village.jpeg)');
	});
	$('ul.nav-tabs>li').slice(1).click(function () {
		$('body').css('background-image', 'url(img/village2.jpg)');
	});

	$('.shop-item').change(function () {
		var item = $(this);
		var nameItem = item.attr('name');
		$('#total-panier').append(function (n) {
			return "<p>" + item.val() + " " + nameItem + "</p>";
		});
	});
});