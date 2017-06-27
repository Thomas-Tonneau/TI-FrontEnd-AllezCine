function verifyAge(){
	var age = prompt("L'accès à ce site est limité aux moins de 18 ans, entrez votre âge : ");
}

$(document).ready(function () {

	$('btn-less').hide();

	var displayed = false;
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if(scroll >= 200 && !displayed){
			var backToTop = document.createElement('a');
			backToTop.id = 'go-top';
			backToTop.href = "#recherche";
			document.getElementById('go-top-container').appendChild(backToTop);
			var backToTopIcon = document.createElement('i');
			backToTopIcon.setAttribute('aria-hidden', "true");
			backToTopIcon.className = "fa fa-arrow-up";
			document.getElementById('go-top').appendChild(backToTopIcon);
			displayed=true;
		} else if(scroll < 200 && displayed){
			displayed=false;
			document.getElementById('go-top').remove();
		}
	})

	// progress bar in jumbotron
	var width = 0;
	var id = setInterval(progressCrsl, 30);
	function progressCrsl () {
		$('.progress-bar').css("width", width + '%');
		width+=0.5; 
		if(width>100){
			width=0;
			$('#myCarousel').carousel("next");
			// change l'indicateur actif
			var nextActive = $('.carousel-nav.active').next();
			if(nextActive.length==0){
				activeIndicator($('.carousel-nav:first-child'));
			} else {
				activeIndicator(nextActive);
			}
		}
	}
	// stop la barre de progression quand la souris passe sur 
	// le carousel
	$('#myCarousel').hover(
		function () {
			clearInterval(id);
		},
		function () {
			id = setInterval(progressCrsl, 30);
		}
	);
	
	// change la vue du carousel
	$('.carousel-nav').click(function () {
		width = 0;
		activeIndicator($(this));
	});

	// change l'active avec les controles du carousel
	$('.carousel-control.right').click(function () {
		width = 0;
		var nextActive = $('.carousel-nav.active').next();
		if(nextActive.length==0){
			activeIndicator($('.carousel-nav:first-child'));
		} else {
			activeIndicator(nextActive);
		}
	});
	$('.carousel-control.left').click(function () {
		width = 0;
		var prevActive = $('.carousel-nav.active').prev();
		if(prevActive.length==0){
			activeIndicator($('.carousel-nav:last-child'));
		} else {
			activeIndicator(prevActive);
		}
	})

	// Change l'indicateur actif du jumbotron
	function activeIndicator(newActive){
		$('.carousel-nav.active').removeClass("active");
		newActive.addClass("active");
	}

	// Filtre sur les boutons featured-movies
	$('.btn-movies>button').click(function () {
		$('.btn-movies>.active').removeClass("active");
		$(this).addClass("active");
		var filtre = '.' + $(this).text().toLowerCase();
		if(filtre == ".all"){
			$('.btn-less').hide();
			$('.btn-more').show();
			$('.featured-movies>.col-md-2').hide();
			$('.featured-movies>.col-md-2').slice(0, 12).show();
		}else{
			$('.featured-movies>.col-md-2').hide();
			if(filtre.length>12){
				$(filtre).slice(0, 12).show();	
			}else{
				$(filtre).show();
			}
		}
	})

	// Plus de films
	$('.btn-more').click(function () {
		if($('.featured-movies>.col-md-2:visible').length==12){
			$('.featured-movies>.col-md-2').slice(12).slideDown("slow");
			$(this).hide();
			$('.btn-less').show();
		}
	});

	// Moins de films
	$('.btn-less').click(function () {
		if($('.featured-movies>.col-md-2').length>12){
			$('.featured-movies>.col-md-2:visible').slice(12).slideUp("slow");
			$(this).hide();
			$('.btn-more').show();
		}
	});

	// Slider pour nav carousel
	$('.slide-control.left').click(function () {
		event.preventDefault();
		$('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1000);
		if($('.nav>.col-md-2:visible:first').prev().length!=0){
			$('.nav>.col-md-2:visible:last').hide();
			$('.nav>.col-md-2:visible:first').prev().show();
		}
	});
	$('.slide-control.right').click(function () {
		event.preventDefault();
		$('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1000);
		if($('.nav>.col-md-2:visible:last').next('.col-md-2').length!=0){
			$('.nav>.col-md-2:visible:first').hide();
			$('.nav>.col-md-2:visible:last').next().show();
		}
	});
});