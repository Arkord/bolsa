<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Inicio de sesión | Portal de vinculación y empleo</title>		
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/vendor/bootstrap/bootstrap.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/vendor/fontawesome/css/font-awesome.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/vendor/owlcarousel/owl.carousel.min.css')}}" media="screen">
		<link rel="stylesheet" href="{{URL::asset('css/vendor/owlcarousel/owl.theme.default.min.css')}}" media="screen">
		<link rel="stylesheet" href="{{URL::asset('css/vendor/magnific-popup/magnific-popup.css')}}" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/css/theme.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/css/theme-shop.css')}}">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{URL::asset('js/vendor/modernizr/modernizr.js')}}"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond/respond.js"></script>
			<script src="vendor/excanvas/excanvas.js"></script>
		<![endif]-->

	</head>
	<body>
<div class="body">
			<header id="header">
				<div class="container">
					<div class="logo">
						<a href="index.html">
							<img alt="Portal vinculación y empleo" width="200" height="80" data-sticky-width="150" data-sticky-height="59" src="{{URL::asset('img/img/logoVE.png')}}">
						</a>
					</div>
					<div class="search">
						<form id="searchForm" action="page-search-results.html" method="get">
							<div class="input-group">
								<input type="text" class="form-control search" name="q" id="q" placeholder="Buscar..." required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li>
								<a href="http://dad.com.mx"><i class="fa fa-angle-right"></i>DAD software</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-angle-right"></i>Contacto</a>
							</li>
							<li class="phone">
								<span><i class="fa fa-phone"></i>(618) 456-7890</span>
							</li>
						</ul>
					</nav>
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<ul class="social-icons">
							<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
							<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
						</ul>
						<nav class="nav-main mega-menu">
							<ul class="nav nav-pills nav-main" id="mainMenu">
								<li class="portal-menu">
									<a data-hash href="#inicio">Inicio</a>
								</li>
								<li class="portal-menu" data-menu="">
									<a data-hash href="#proceso">Proceso</a>
								</li>
								<li class="portal-menu">
                                    <a data-hash href="#servicios">Servicios</a>
								</li>
								<li class="portal-menu">
									<a data-hash href="#registro">Empresas</a>
								</li>
								<li class="portal-menu">
									<a data-hash href="#registro">Aspirantes</a>
								</li>
								<li class="portal-menu">
									<a data-hash href="#footer">Contacto</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Inicio</a></li>
									<li class="active">Páginas</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Inicio de sesión</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12">

							<div class="row featured-boxes login">
								<div class="col-sm-6">
									<div class="featured-box featured-box-secundary default info-content">
										<div class="box-content">
											<h4>¿Ya estás registrado? ¡Inicia sesión!</h4>
											<form action="" id="" method="post">
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label>Correo electrónico</label>
															<input type="text" value="" class="form-control input-lg">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<a class="pull-right" href="#">(¿Olvidaste tu contraseña?)</a>
															<label>Contraseña</label>
															<input type="password" value="" class="form-control input-lg">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<span class="remember-box checkbox">
															<label for="rememberme">
																<input type="checkbox" id="rememberme" name="rememberme">Recordarme
															</label>
														</span>
													</div>
													<div class="col-md-6">
														<input type="submit" value="Iniciar sesión" class="btn btn-primary pull-right push-bottom" data-loading-text="Cargando...">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="featured-box featured-box-secundary default info-content">
										<div class="box-content">
											<h4>Registrar una Cuenta</h4>
											<form action="" id="" method="post">
												<div class="row">
													<div class="form-group">						
												<div class="col-md-12">
															<label>Nombre</label>
															<input type="text" value="" class="form-control input-lg">
														</div>
														<div class="col-md-12">
															<label>Apellido</label>
															<input type="text" value="" class="form-control input-lg">
														</div>
														<div class="col-md-12">
															<label>Correo Electrónico</label>
															<input type="text" value="" class="form-control input-lg">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-6">
															<label>Contraseña</label>
															<input type="password" value="" class="form-control input-lg">
														</div>
														<div class="col-md-6">
															<label>Confirma contraseña</label>
															<input type="password" value="" class="form-control input-lg">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<input type="submit" value="Registrar" class="btn btn-primary pull-right push-bottom" data-loading-text="Cargando...">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>
<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Mantente en contacto</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Suscríbete</h4>
								<p>Mantente al tanto de las nuevas características y herramientas que ofrece el portal</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>!Bien!</strong> Has sido agregado a nuestra lista de correos.
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Correo" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Enviar</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Últimos Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 2}">
								<p>Por favor espere...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contáctanos</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Dirección:</strong> Prol. Cuhautemoc, Durango, Méxcio</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Teléfono:</strong> (618) 456-7890</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:rh@dad.com.mx">rh@dad.com.mx</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Síguenos</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-placement="bottom" data-tooltip title="Facebook">Facebook</a></li>
									<li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" data-tooltip title="Twitter">Twitter</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									DAD Software
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2016. Todos los derechos reservados</p>
							</div>
<!--
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html">FAQ's</a></li>
										<li><a href="sitemap.html">Sitemap</a></li>
										<li><a href="contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
-->
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{URL::asset('js/vendor/jquery/jquery.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jquery.appear/jquery.appear.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jquery.easing/jquery.easing.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jquery-cookie/jquery-cookie.js')}}"></script>
		<script src="{{URL::asset('js/vendor/bootstrap/bootstrap.js')}}"></script>
		<script src="{{URL::asset('js/vendor/common/common.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jquery.validation/jquery.validation.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jquery.stellar/jquery.stellar.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jquery.gmap/jquery.gmap.js')}}"></script>
		<script src="{{URL::asset('js/vendor/isotope/jquery.isotope.js')}}"></script>
		<script src="{{URL::asset('js/vendor/owlcarousel/owl.carousel.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jflickrfeed/jflickrfeed.js')}}"></script>
		<script src="{{URL::asset('js/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{URL::asset('js/vendor/vide/vide.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{URL::asset('js/js/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{URL::asset('js/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{URL::asset('js/js/theme.init.js')}}"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
		 -->

	</body>
</html>
