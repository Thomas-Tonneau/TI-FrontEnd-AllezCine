// Contrôle de l'âge : majeur ?
function verifyage(){
      var age = null;
      // tant que rien n'est rentré, que l'on clique sur 'cancel'
      // ou que l'on ne rentre pas un nombre
      while(age === null || age =="" || isNaN(age)){
        age=prompt("Ce site est réservé aux plus de 18 ans.\nVeuillez entrer votre âge : ");
      }
      age = parseInt(age);
      if (age<18){ // si mineur, redirection vers le site de fans
        document.location.href="B - Site de fans/asterix.html";
      }
}

$(document).ready(function () {

	$('btn-less').hide();
	
	// variable for xmlhttprequest 
	var jqxhr;

  // arrow back to top with createElement
	var displayed = false;
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
    // if we are below navbar
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
    // else if we are above navbar
		} else if(scroll < 200 && displayed){
			displayed=false;
			document.getElementById('go-top').remove();
		}
	});

  $('#go-top-container').click(function(event){
  	 event.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 1000);
  });

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

	// Crée une requête ajax (post - login.php) au clic du bouton de connexion 
	$('#valider').click(function () {
		if($('#identifiant').val() != "" && $('#password').val() != ""){
			jqxhr = $.post(
				"A - Site avec layout/login.php", 
				{
					id : $('#identifiant').val(),
					pwd : $('#password').val()
				},
				function (response) {
					$('#notification').html(response);
					$('#valider').html("Log In");
					$('#cancel').addClass("disabled");
				}
			);
		}
	});

	// Affiche un gif de chargement quand la fonction ajax commence
	$(document).ajaxStart(function () {
		$('#valider').html("<img src='A - Site avec layout/img/wait.gif' width='20%'>");
		$('#cancel').removeClass("disabled");
	});

	$('#cancel').click(function () {
		jqxhr.abort();
		$('#valider').html("Log In");
		$('#cancel').addClass("disabled");
		//$('#valider').
	});
});
