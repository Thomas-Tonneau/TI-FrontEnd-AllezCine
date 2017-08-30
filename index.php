<?php 
	session_start(); 
	$_SESSION['connecte'] = false;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CINE passion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="A - Site avec layout/css/bootstrap.min.css">
		<link rel="stylesheet" href="A - Site avec layout/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="A - Site avec layout/css/style.css">
		<!-- favicon -->
		<link rel="icon" href="A - Site avec layout/img/logo-favicon.png">
		<!-- scripts js -->
		<script src="A - Site avec layout/js/jquery-2.2.4.js"></script>
		<script src="A - Site avec layout/js/jquery-ui.min.js"></script>
		<script src="A - Site avec layout/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="A - Site avec layout/js/script.js"></script>
	</head>
	<body data-spy="scroll" data-target=".navbar">
		<header>
			<!-- ask the user's age : redirection if minor -->
			<script>
				//verifyage();
			</script>
			<!-- cookies -->
			<div id="cookie"><span class="cookie-span">Nous utilisons des <a class="cookie-link" href="">cookies</a> pour optimiser votre expérience sur notre site. En utilisant notre site vous acceptez que nous appliquions des cookies</span><a id="cookie-dismiss" href="#">Ok</a></div>
			<div class="container">
				<!-- section with logo, seekbar and connection button -->
				<div  id="recherche" class="row">
					<!-- logo -->
					<div class="col-md-2 col-md-offset-1">
						<img src="A - Site avec layout/img/cinepassion-logo.png" alt="" width="65%">
					</div>
					<!-- seekbar -->
					<div class="col-md-4 barre-go">
						<div class="input-group ">
							<input type="text" class="form-control"  placeholder="Search" >
							<span class="btn input-group-addon"  type="button">
								Go
							</span>
						</div>
					</div>
					<!-- phone number with glyphicon -->
					<div class="col-md-2 text-right">
						<span class="glyphicon glyphicon-earphone"></span><p>+(000) 123 435 653</p>
					</div>
					<!-- login button -->
					<div class="col-md-2 text-right">
						<!-- button to open modal -->
						<button type="button" class="btn login" data-toggle="modal" data-target="#myModal">LOGIN</button>
						<!-- modal to log in -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<!-- modal header -->
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">CONNECTEZ-VOUS</h4>
									</div>
									<!-- modal body -->
									<div class="modal-body" id="modal-login">
										<!-- form with identifiers -->
										<form>
											<div id=formulaire>
											<div id="notification"></div>
											<div class="form-group">
												<label for="identifiant">Identifiant : </label><input type="text" class="form-control" name="identifiant" id="identifiant"/>
											</div>
											<div class="form-group">
												<label for="password">Password :  </label>
												<input type="text" class="form-control" name="password" id="password"/>
											</div>
											<div class="checkbox">
												<label for="remember_box"><input checked="checked" value="" id="remember_box" type="checkbox"> Rester connecté</label>
											</div>
												<!--<div><a class="pwd" href="">Si vous avez oublié votre mot de passe</a></div>
												<button type="button" class="btn btn-default">Créer un compte</button>-->
											</div>
										</form>
									</div>
									<!-- modal footer -->
									<div class="modal-footer">
										<button name="valider" class="btn btn-default" type="button" id="valider">Log In</button>
										<button class="btn btn-default disabled" type="button" id="cancel">Cancel</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- navigation bar -->
			<nav id="home" class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<!-- navbar header with button for mobiles -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
							</div>
							<!-- navbar collapsed on mobiles with links to the sections  -->
							<div class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav navbar-nav">
									<li class="active link"><a href="#home">Home</a></li>
									<li class="dropdown link">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Box office <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#une">FEATURES MOVIES</a></li>
											<li><a href="#">SERIES TV</a></li>
											<li><a href="#">SHOP MOVIES</a></li>
											<li><a href="#">CONTACT></a></li>
										</ul>
									</li>
									<li class="dropdown link">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Films <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">FEATURES MOVIES</a></li>
											<li><a href="#">SERIES TV</a></li>
											<li><a href="#">SHOP MOVIES</a></li>
											<li><a href="#">CONTACT</a></li>
										</ul>
									</li>
									<li class="dropdown link">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Series <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">Enfants</a></li>
											<li><a href="#">Tout publique</a></li>
											<li><a href="#">policiers</a></li>
											<li><a href="#">Autres</a></li>
										</ul>
									</li>
									<li class="dropdown link">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Shop movies<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">Enfants</a></li>
											<li><a href="#">Tout publique</a></li>
											<li><a href="#">policiers</a></li>
											<li><a href="#">Autres</a></li>
										</ul>
									</li>
									<li class="link"><a href="index.html">Contact us</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<!-- jumbotron with carousel -->
			<div id="jumbotron" class="jumbotron text-center no-padding">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-9 no-padding">
							<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
								<div class="carousel-inner">
									<div class="item active">
										<div class="swissarmyman img-jumbo"></div>
										<div class="carousel-caption">
											<h3>Swiss Army Man</h3>
											<p>Hank un homme désespéré, suicidaire, convainc un cadavre que la vie vaut la peine d'être vécue</p>
										</div>
									</div>
									<div class="item">
										<div class="batman img-jumbo"></div>
										<div class="carousel-caption">
											<h3>BATMAN : The LEGO Movie</h3>
											<p></p>
										</div>
									</div>
									<div class="item">
										<div class="intouchables img-jumbo"></div>
										<div class="carousel-caption">
											<h3>Intouchables</h3>
											<p>Un riche aristocrate et un jeune de banlieu, deux univers vont se téléscoper, s'apprivoiser vers une amitié forte, dingue, inattendue, intouchable... </p>
										</div>
									</div>
									<div class="item">
										<div class="patientanglais img-jumbo"></div>
										<div class="carousel-caption">
											<h3>Le Patient Anglais</h3>
											<p>La présence d'un homme mystérieux et méconnaissable, le patient anglais, va bouleverser le destin de ceux qui croisent son chemin</p>
										</div>
									</div>
									<div class="item">
										<div class="inception img-jumbo"></div>
										<div class="carousel-caption">
											<h3>Inception</h3>
											<p>l'inception,au lieu de subtiliser un rêve,Cobb fait implanter une idée dans l'esprit d'un individu mais l'enemi a un coup d'avance... </p>
										</div>
									</div>
									<a class="left carousel-control" href="#myCarousel" data-slide="prev">
										<span class="glyphicon glyphicon-control glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#myCarousel" data-slide="next">
										<span class="glyphicon glyphicon-control glyphicon-chevron-right"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 no-padding resume">
							<ul class="nav">
								<li data-target="#myCarousel" data-slide-to="0" class="carousel-nav active">
									<a href="#">
										<div class="row">
											<div class="col-md-3 swissarmyman hauteur"></div>
											<div class="col-md-9 no-padding"><h5>Swiss Army Man</h5>
												<p> Hank un homme désespéré,suicidaire, convainc un cadavre que la vie vaut la peine d'être vécue...
												</p>
											</div>
										</div>
									</a>
								</li>
								<li data-target="#myCarousel" data-slide-to="1" class="carousel-nav">
									<a href="#">
										<div class="row">
											<div class="col-md-3 batman hauteur">  </div>
											<div class="col-md-9 no-padding"><h5>Batman</h5>    </div>
										</div>
									</a>
								</li>
								<li data-target="#myCarousel" data-slide-to="2" class="carousel-nav"><a href="#">
									<div class="row">
										<div class="col-md-3 intouchables hauteur"></div>
										<div class="col-md-9 no-padding"><h5>Intouchables</h5><p> Un riche aristocrate et un jeune de banlieu,deux univers vont se téléscoper,s'apprivoiser vers une amitié forte ,dingue,inattendue;intouchable... </p> </div>
									</div>
								</a></li>
								<li data-target="#myCarousel" data-slide-to="3" class="carousel-nav"><a href="#">
									<div class="row">
										<div class="col-md-3 patientanglais hauteur"></div>
										<div class="col-md-9 no-padding">
											<h5>Le Patient Anglais</h5>
											<p>La présence d'un homme mystérieux et méconnaissable, le patient anglais, va bouleverser le destin de ceux qui croisent son chemin...</p>
										</div>
									</div>
								</a></li>
								<li data-target="#myCarousel" data-slide-to="4" class="carousel-nav"><a href="#">
									<div class="row">
										<div class="col-md-3 inception hauteur"></div>
										<div class="col-md-9 no-padding"><h5> Inception</h5><p>l'inception,au lieu de subtiliser un rêve,Cobb fait implanter une idée dans l'esprit d'un individu mais l'enemi a un coup d'avance...
										</p></div>
									</div>
								</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<div class="container">
				<section id="une">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 une">
							<div class="thumbnail" data-toggle="modal" data-target="#modal-shutter">
								<img src="A - Site avec layout/img/shutterisland-2010-thriller.jpg" alt="" class="img-responsive">
								<div class="caption">
									<div class="row">
										<div class="col-md-12 text-center">Shutter Island</div>
									</div>
									<div class="row">
										<div class="col-md-5">2010</div>
										<div class="col-md-7 text-right genre">Thriller</div>
									</div>
								</div>
							</div>
							<div id="modal-shutter" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Shutter Island</h4>
										</div>
										<div class="modal-body">
											<div class="row">Résumé</div>
											<div class="row"></div>
											<div class="row">Réalisateur</div>
											<div class="row"></div>
											<div class="row">Année</div>
											<div class="row"></div>
											<div class="row">Genre</div>
											<div class="row"></div>
											<div class="row">Acteurs</div>
											<div class="row"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="thumbnail" data-toggle="modal" data-target="#modal-swiss">
								<img src="A - Site avec layout/img/swissarmyman-2016-comedie.jpg" alt="" class="img-responsive">
								<div class="caption">
									<div class="row">
										<div class="col-md-12 text-center">Swiss Army Man</div>
									</div>
									<div class="row">
										<div class="col-md-5">2016</div>
										<div class="col-md-7 text-right genre">Comedy</div>
									</div>
								</div>
							</div>
							<div id="modal-swiss" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Swiss Army Man</h4>
										</div>
										<div class="modal-body">
											<div class="row">Résumé</div>
											<div class="row"></div>
											<div class="row">Réalisateur</div>
											<div class="row"></div>
											<div class="row">Année</div>
											<div class="row"></div>
											<div class="row">Genre</div>
											<div class="row"></div>
											<div class="row">Acteurs</div>
											<div class="row"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="thumbnail" data-toggle="modal" data-target="#modal-star">
								<img src="A - Site avec layout/img/starwarsempire-1980-scifi.jpg" alt="" class="img-responsive">
								<div class="caption">
									<div class="row">
										<div class="col-md-12 text-center">Star Wars</div>
									</div>
									<div class="row">
										<div class="col-md-5">1980</div>
										<div class="col-md-7 text-right genre">SciFi</div>
									</div>
								</div>
							</div>
							<div id="modal-star" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Star Wars</h4>
										</div>
										<div class="modal-body">
											<div class="row">Résumé</div>
											<div class="row"></div>
											<div class="row">Réalisateur</div>
											<div class="row"></div>
											<div class="row">Année</div>
											<div class="row"></div>
											<div class="row">Genre</div>
											<div class="row"></div>
											<div class="row">Acteurs</div>
											<div class="row"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="thumbnail" data-toggle="modal" data-target="#modal-fall">
								<img src="A - Site avec layout/img/thefall-2006-dramatique.jpg" alt="" class="img-responsive">
								<div class="caption">
									<div class="row">
										<div class="col-md-12 text-center">The Fall</div>
									</div>
									<div class="row">
										<div class="col-md-5">2006</div>
										<div class="col-md-7 text-right genre">Drama</div>
									</div>
								</div>
							</div>
							<div id="modal-fall" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">The Fall</h4>
										</div>
										<div class="modal-body">
											<div class="row">Résumé</div>
											<div class="row"></div>
											<div class="row">Réalisateur</div>
											<div class="row"></div>
											<div class="row">Année</div>
											<div class="row"></div>
											<div class="row">Genre</div>
											<div class="row"></div>
											<div class="row">Acteurs</div>
											<div class="row"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="thumbnail" data-toggle="modal" data-target="#modal-intouch">
								<img src="A - Site avec layout/img/intouchables-2011-comedie.jpg" alt="" class="img-responsive">
								<div class="caption">
									<div class="row">
										<div class="col-md-12 text-center">Intouchables</div>
									</div>
									<div class="row">
										<div class="col-md-5">2011</div>
										<div class="col-md-7 text-right genre">Comedy</div>
									</div>
								</div>
							</div>
							<div id="modal-intouch" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Intouchables</h4>
										</div>
										<div class="modal-body">
											<div class="row">Résumé</div>
											<div class="row"></div>
											<div class="row">Réalisateur</div>
											<div class="row"></div>
											<div class="row">Année</div>
											<div class="row"></div>
											<div class="row">Genre</div>
											<div class="row"></div>
											<div class="row">Acteurs</div>
											<div class="row"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="featured-movies">
					<h3>FEATURED MOVIES</h3>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="btn-group btn-movies">
								<button class="active" type="button">All</button>
								<button type="button">Comedy</button>
								<button type="button">Drama</button>
								<button type="button">Scifi</button>
								<button type="button">Thriller</button>
								<button type="button">Aventure</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="row featured-movies">
								<div class="col-md-2 comedy">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/intouchables-2011-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Intouchables</h5>
											<p>2011</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/Survivestyle5-2004-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Survive Style 5</h5>
											<p>2004</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 thriller">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/hostel-2005-thriller.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Hostel</h5>
											<p>2005</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 drama">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/lepatientanglais-1996-dramatique.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Le Patient Anglais</h5>
											<p>1996</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 aventure">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/lesdeuxtours-2002-aventure.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Les 2 Tours</h5>
											<p>2002</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 thriller">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/shutterisland-2010-thriller.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Shutter Island</h5>
											<p>2010</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 drama">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/thefall-2006-dramatique.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>The Fall</h5>
											<p>2006</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/zoolander-2001-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Zoolander</h5>
											<p>2001</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/swissarmyman-2016-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Swiss Army Man</h5>
											<p>2016</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 thriller">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/seven-1995-thriller.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Seven</h5>
											<p>1995</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/batmanmovie-2017-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Batman LEGO</h5>
											<p>2017</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>What We Do In The Shadows</h5>
											<p>2014</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy initial-display">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/intouchables-2011-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5>Intouchables</h5>
											<p>2011</p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy initial-display">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/intouchables-2011-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5></h5>
											<p></p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy initial-display">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/intouchables-2011-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5></h5>
											<p></p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy initial-display">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/intouchables-2011-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5></h5>
											<p></p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy initial-display">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/intouchables-2011-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5></h5>
											<p></p>
										</div>
									</div>
								</div>
								<div class="col-md-2 comedy initial-display">
									<div class="thumbnail">
										<img src="A - Site avec layout/img/intouchables-2011-comedie.jpg" alt="" class="img-responsive">
										<div class="caption">
											<h5></h5>
											<p></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<button class="btn-more">Plus de films</button>
						<button class="btn-less initial-display">Moins de films</button>
					</div>
				</section>
				<section id="shop-movies">
					<h3>SHOP MOVIES</h3>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div id="my-Carousel" class="carousel slide" data-ride="carousel" data-interval="false">
								<div class="carousel-inner">
									<div class="item active">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/yrK1f4TsQfM" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>Swiss Army Man</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">2017</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Comedy</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">14.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/cXu2MhWYUuE" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>Intouchables</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">2011</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Comedy</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">9.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/YoHD9XEInc0" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>Inception</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">2010</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Scifi</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">12.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/MaEeSJZYkpY" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>Zoolander</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">2001</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Comedy</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">5.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/C6V1ecxkF5I" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>What We Do In The Shadows</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">2014</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Comedy</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">9.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/h6DOpfJzmo0" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>The LEGO Batman movie</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right text-right">:</div>
													<div class="col-md-8">2017</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Comedy</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">12.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/yrK1f4TsQfM" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>Swiss Army Man</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">2017</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Comedy</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">14.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/cXu2MhWYUuE" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>Intouchables</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">2011</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Comedy</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">9.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/YoHD9XEInc0" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>Inception</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">2010</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Scifi</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">12.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/MaEeSJZYkpY" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>Zoolander</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">2001</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Comedy</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">5.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/C6V1ecxkF5I" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>What We Do In The Shadows</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">2014</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Comedy</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">9.99$</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row trailer">
											<div class="col-md-6">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://www.youtube.com/embed/h6DOpfJzmo0" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
												</div>
											</div>
											<div class="col-md-6">
												<h4>The LEGO Batman movie</h4>
												<div class="row">
													<div class="col-md-3">Résumé</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime.</div>
												</div>
												<div class="row">
													<div class="col-md-3">Date de sortie</div>
													<div class="col-md-1 text-right text-right">:</div>
													<div class="col-md-8">2017</div>
												</div>
												<div class="row">
													<div class="col-md-3">Genre</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">Comedy</div>
												</div>
												<div class="row">
													<div class="col-md-3">Prix</div>
													<div class="col-md-1 text-right">:</div>
													<div class="col-md-8">12.99$</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<ul class="nav row">
									<li class="col-md-2" data-target="#my-Carousel" data-slide-to="0" class="active">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/swissarmyman-2016-comedie.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">Swiss Army Man</div>
												</div>
												<div class="row">
													<div class="col-md-6">2017</div>
													<div class="col-md-6 text-right price">14.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li class="col-md-2" data-target="#my-Carousel" data-slide-to="1">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/intouchables-2011-comedie.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">Intouchables</div>
												</div>
												<div class="row">
													<div class="col-md-6">2011</div>
													<div class="col-md-6 text-right price">9.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li class="col-md-2" data-target="#my-Carousel" data-slide-to="2">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/inception-2010-scifi.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">Inception</div>
												</div>
												<div class="row">
													<div class="col-md-6">2010</div>
													<div class="col-md-6 text-right price">12.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li class="col-md-2" data-target="#my-Carousel" data-slide-to="3">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/zoolander-2001-comedie.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">Zoolander</div>
												</div>
												<div class="row">
													<div class="col-md-6">2001</div>
													<div class="col-md-6 text-right price">5.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li class="col-md-2" data-target="#my-Carousel" data-slide-to="4">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">What We Do In The Shadows</div>
												</div>
												<div class="row">
													<div class="col-md-6">2014</div>
													<div class="col-md-6 text-right price">9.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li class="col-md-2" data-target="#my-Carousel" data-slide-to="5">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/batmanmovie-2017-comedie.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">The LEGO Batman Movie</div>
												</div>
												<div class="row">
													<div class="col-md-6">2017</div>
													<div class="col-md-6 text-right price">12.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li class="col-md-2 initial-display" data-target="#my-Carousel" data-slide-to="6" class="active">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/swissarmyman-2016-comedie.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">Swiss Army Man</div>
												</div>
												<div class="row">
													<div class="col-md-6">2017</div>
													<div class="col-md-6 text-right price">14.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li class="col-md-2 initial-display" data-target="#my-Carousel" data-slide-to="7">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/intouchables-2011-comedie.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">Intouchables</div>
												</div>
												<div class="row">
													<div class="col-md-6">2011</div>
													<div class="col-md-6 text-right price">9.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li class="col-md-2 initial-display" data-target="#my-Carousel" data-slide-to="8">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/inception-2010-scifi.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">Inception</div>
												</div>
												<div class="row">
													<div class="col-md-6">2010</div>
													<div class="col-md-6 text-right price">12.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li class="col-md-2 initial-display" data-target="#my-Carousel" data-slide-to="9">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/zoolander-2001-comedie.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">Zoolander</div>
												</div>
												<div class="row">
													<div class="col-md-6">2001</div>
													<div class="col-md-6 text-right price">5.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li class="col-md-2 initial-display" data-target="#my-Carousel" data-slide-to="10">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">What We Do In The Shadows</div>
												</div>
												<div class="row">
													<div class="col-md-6">2014</div>
													<div class="col-md-6 text-right price">9.99$</div>
												</div>
											</div>
										</div>

									</li>
									<li class="col-md-2 initial-display" data-target="#my-Carousel" data-slide-to="11">
										<div class="thumbnail">
											<img src="A - Site avec layout/img/batmanmovie-2017-comedie.jpg" alt="" class="img-responsive">
											<div class="caption">
												<div class="row">
													<div class="col-md-12 text-center">The LEGO Batman Movie</div>
												</div>
												<div class="row">
													<div class="col-md-6">2017</div>
													<div class="col-md-6 text-right price">12.99$</div>
												</div>
											</div>
										</div>
									</li>
									<li><a class="left slide-control" href="#shop-movies">
										<span class="glyphicon glyphicon-control glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span></a></li>
									<li><a class="right slide-control" href="#shop-movies">
										<span class="glyphicon glyphicon-control glyphicon-chevron-right"></span>
										<span class="sr-only">Next</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section id="contact">
					<h3>CONTACT US</h3>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<div class="col-md-3">
									<div class="col-contact">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="content-contact">
											<h4>Address</h4>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="col-contact">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div class="content-contact">
											<h4>Call</h4>
											<ul>
												<li>+1390183891</li>
												<li>+1938891990</li>
												<li>+1394771086</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="col-contact">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div class="content-contact">
											<h4>Email</h4>
											<ul>
												<li><a href="">exemple1@gmail.com</a></li>
												<li><a href="">exemple2@gmail.com</a></li>
												<li><a href="">exemple3@gmail.com</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="col-contact">
										<i class="fa fa-user" aria-hidden="true"></i>
										<div class="content-contact social-media">
											<h4>Social media</h4>
											<ul>
												<li><a class="fb" href=""><i class="fa fa-facebook" aria-hidden="true"></i><h5>Facebook</h5></a></li>
												<li><a class="tweet" href=""><i class="fa fa-twitter" aria-hidden="true"></i><h5>Twitter</h5></a></li>
												<li><a class="ggl" href=""><i class="fa fa-google-plus" aria-hidden="true"></i><h5>Google+</h5></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<form class="form-contact" action="">
								<div class="row">
									<div class="col-md-6">
										<input class="form-control" placeholder="FIRST NAME" type="text">
									</div>
									<div class="col-md-6">
										<input class="form-control" placeholder="LAST NAME" type="text">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input class="form-control" placeholder="EMAIL" type="text">
									</div>
									<div class="col-md-6">
										<input class="form-control" placeholder="SUBJECT" type="text">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" rows="10" placeholder="YOUR MESSAGE"></textarea>
									</div>
								</div>
								<button class="btn" type="submit">SEND MESSAGE</button>
							</form>
						</div>
					</div>
				</section>
			</div>
			<div id="go-top-container"></div>
			<aside>
				<a href="https://www.twitter.com" class="tweet"><h5>Twitter</h5><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="https://www.facebook.com" class="fb"><h5>Facebook</h5><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="https://www.dribbble.com" class="basket"><h5>Dribbble</h5><i class="fa fa-dribbble" aria-hidden="true"></i></a>
				<a href="https://www.plus.google.com" class="ggl"><h5>Google+</h5><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			</aside>
			<footer>
				<div class="footercontainer container-fluid">
					<div class="col-md-1"></div>
					<div class="col-md-10 ">
						<div class="row first-row">
							<div class="col-md-4  ">
								<h4>SUBSCRIBE TO US</h4>
								<div class="input-group stylish-input-group input-append">
									<input type="text" class="form-control"  placeholder="mail" >
									<span class="input-group-btn">
										<button class="btn" type="button">
										SEND
										</button>
									</span>
								</div>
							</div>
							<div class="col-md-8 text-right">
								<img class="logo" src="A - Site avec layout/img/cinepassion-logo-negative.png" alt="" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-6"><p> &copy;2017 One Movies. All rights reserved | Designed by &lt;Becode&gt;</p></div>
							<div class="col-md-6 text-right">
								<a href="#">MOVIES</a>
								<a href="#">FAQ</a>
								<a href="#">ACTION</a>
								<a href="#">ADVENTURE</a>
								<a href="#">COMEDY</a>
								<a href="#">ICONS</a>
								<a href="#">CONTACT US</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</body>
	</html>