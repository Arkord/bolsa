<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Portal de vinculación y empleo</title>		
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/vendor/bootstrap/bootstrap.css')}}"/>
		<link rel="stylesheet" href="{{URL::asset('css/vendor/fontawesome/css/font-awesome.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/vendor/owlcarousel/owl.carousel.min.css')}}" media="screen">
		<link rel="stylesheet" href="{{URL::asset('css/vendor/owlcarousel/owl.theme.default.min.css')}}" media="screen">
		<link rel="stylesheet" href="{{URL::asset('css/vendor/magnific-popup/magnific-popup.css')}}" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/css/theme.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/css/theme-shop.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/css/theme-animate.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/vendor/rs-plugin/css/settings.css')}}" media="screen">
		<link rel="stylesheet" href="{{URL::asset('css/vendor/circle-flip-slideshow/css/component.css')}}" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{URL::asset('css/css/custom.css')}}">

		<!-- Head Libs -->
		<script type="text/javascript" src="{{URL::asset('css/vendor/modernizr/modernizr.js')}}"></script>
        
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

			<div role="main" class="main" >
				<div class="slider-container" id="inicio">
					<div class="slider" id="revolutionSlider" data-plugin-revolution-slider data-plugin-options="{'startheight': 500}">
						<ul>
							<li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
				
								<img src="img/slides/slide-bg.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
				
								<div class="tp-caption sft stb visible-lg"
									 data-x="60"
									 data-y="180"
									 data-speed="300"
									 data-start="1000"
									 data-easing="easeOutExpo"><img src="{{URL::asset('img/img/slides/slide-title-border.png')}}" alt=""></div>
				
								<div class="tp-caption top-label lfl stl"
									 data-x="120"
									 data-y="180"
									 data-speed="300"
									 data-start="500"
									 data-easing="easeOutExpo">Vinculación</div>
				
								<div class="tp-caption sft stb visible-lg"
									 data-x="270"
									 data-y="180"
									 data-speed="300"
									 data-start="1000"
									 data-easing="easeOutExpo"><img src="{{URL::asset('img/img/slides/slide-title-border.png')}}" alt=""></div>
				
								<div class="tp-caption main-label sft stb"
									 data-x="60"
									 data-y="210"
									 data-speed="300"
									 data-start="1500"
									 data-easing="easeOutExpo">PORTAL EMPLEO</div>
				
								<div class="tp-caption bottom-label sft stb"
									 data-x="60"
									 data-y="280"
									 data-speed="500"
									 data-start="2000"
									 data-easing="easeOutExpo">Para empresas y trabajadores</div>
				
								<div class="tp-caption randomrotate"
									 data-x="950"
									 data-y="248"
									 data-speed="500"
									 data-start="2500"
									 data-easing="easeOutBack"><img src="{{URL::asset('img/img/icons/agreement.png')}}" alt=""></div>
				
								<div class="tp-caption sfb"
									 data-x="955"
									 data-y="200"
									 data-speed="400"
									 data-start="3000"
									 data-easing="easeOutBack"><img src="{{URL::asset('img/img/slides/slide-concept-2-2.png')}}" alt=""></div>
				
								<div class="tp-caption sfb"
									 data-x="925"
									 data-y="170"
									 data-speed="700"
									 data-start="3150"
									 data-easing="easeOutBack"><img src="{{URL::asset('img/img/slides/slide-concept-2-3.png')}}" alt=""></div>
				
								<div class="tp-caption sfb"
									 data-x="875"
									 data-y="130"
									 data-speed="1000"
									 data-start="3250"
									 data-easing="easeOutBack"><img src="{{URL::asset('img/img/slides/slide-concept-2-4.png')}}" alt=""></div>
				
								<div class="tp-caption sfb"
									 data-x="605"
									 data-y="80"
									 data-speed="600"
									 data-start="3450"
									 data-easing="easeOutExpo"><img src="{{URL::asset('img/img/slides/slide-concept-2-5.png')}}" alt=""></div>
				
								<div class="tp-caption blackboard-text lfb "
									 data-x="620"
									 data-y="300"
									 data-speed="500"
									 data-start="3450"
									 data-easing="easeOutExpo" style="font-size: 37px;">Encuentra</div>
				
								<div class="tp-caption blackboard-text lfb "
									 data-x="645"
									 data-y="350"
									 data-speed="500"
									 data-start="3650"
									 data-easing="easeOutExpo" style="font-size: 47px;">la conexión</div>
				
								<div class="tp-caption blackboard-text lfb "
									 data-x="670"
									 data-y="400"
									 data-speed="500"
									 data-start="3850"
									 data-easing="easeOutExpo" style="font-size: 32px;">laboral adecuada</div>
							</li>
							<li data-transition="fade" data-slotamount="5" data-masterspeed="1000" >
								<img src="img/slides/slide-bg.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
				
									<div class="tp-caption sft stb"
										 data-x="155"
										 data-y="170"
										 data-speed="600"
										 data-start="100"
										 data-easing="easeOutExpo"><img src="{{URL::asset('img/img/icons/company.png')}}" alt=""></div>
				
									<div class="tp-caption blackboard-text sft stb"
										 data-x="160"
										 data-y="180"
										 data-speed="900"
										 data-start="1000"
										 data-easing="easeOutExpo" style="font-size: 30px;">Fácil y en la ciudad</div>
				
                                    <div class="tp-caption sft stb visible-lg"
                                         data-x="685"
                                         data-y="190"
                                         data-speed="300"
                                         data-start="1000"
                                         data-easing="easeOutExpo"><img src="{{URL::asset('img/img/slides/slide-title-border.png')}}" alt=""></div>
                                
									<div class="tp-caption main-label sft stb"
										 data-x="750"
										 data-y="170"
										 data-speed="300"
										 data-start="900"
										 data-easing="easeOutExpo">Empresas</div>
				
                                    <div class="tp-caption sft stb visible-lg"
                                         data-x="1070"
                                         data-y="190"
                                         data-speed="300"
                                         data-start="1000"
                                         data-easing="easeOutExpo"><img src="{{URL::asset('img/img/slides/slide-title-border.png')}}" alt=""></div>
                                
									<div class="tp-caption bottom-label sft stb"
										 data-x="685"
										 data-y="250"
										 data-speed="500"
										 data-start="2000"
										 data-easing="easeOutExpo">Publica tus vancantes</div>
								   <div class="tp-caption bottom-label sft stb"
										 data-x="685"
										 data-y="280"
										 data-speed="500"
										 data-start="2000"
										 data-easing="easeOutExpo">o busca candidatos directamente</div>
				
							</li>
							<li data-transition="fade" data-slotamount="5" data-masterspeed="1000" >
								<img src="img/slides/slide-bg.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
				
									<div class="tp-caption sft stb"
										 data-x="155"
										 data-y="210"
										 data-speed="600"
										 data-start="100"
										 data-easing="easeOutExpo"><img src="{{URL::asset('img/img/icons/empleados.png')}}" alt=""></div>
				
									<div class="tp-caption blackboard-text sft stb"
										 data-x="180"
										 data-y="140"
										 data-speed="900"
										 data-start="1000"
										 data-easing="easeOutExpo" style="font-size: 30px;">Contacta empresas</div>
								    <div class="tp-caption blackboard-text sft stb"
										 data-x="180"
										 data-y="180"
										 data-speed="900"
										 data-start="1500"
										 data-easing="easeOutExpo" style="font-size: 30px;">que buscan tus habilidades</div>
				
                                    <div class="tp-caption sft stb visible-lg"
                                         data-x="685"
                                         data-y="190"
                                         data-speed="300"
                                         data-start="1000"
                                         data-easing="easeOutExpo"><img src="{{URL::asset('img/img/slides/slide-title-border.png')}}" alt=""></div>
                                
									<div class="tp-caption main-label sft stb"
										 data-x="750"
										 data-y="170"
										 data-speed="300"
										 data-start="900"
										 data-easing="easeOutExpo">Aspirantes</div>
				
                                    <div class="tp-caption sft stb visible-lg"
                                         data-x="1110"
                                         data-y="190"
                                         data-speed="300"
                                         data-start="1000"
                                         data-easing="easeOutExpo"><img src="{{URL::asset('img/img/slides/slide-title-border.png')}}" alt=""></div>
                                
									<div class="tp-caption bottom-label sft stb"
										 data-x="685"
										 data-y="250"
										 data-speed="500"
										 data-start="2000"
										 data-easing="easeOutExpo">Publica tus habilidades</div>
								   <div class="tp-caption bottom-label sft stb"
										 data-x="685"
										 data-y="280"
										 data-speed="500"
										 data-start="2000"
										 data-easing="easeOutExpo">o aplica para los puestos disponibles</div>
				
							</li>
						</ul>
					</div>
				</div>
				<div class="home-intro" id="home-intro">
					<div class="container">
				
						<div class="row">
							<div class="col-md-8">
								<p>
									Queremos aprovechar el<em>Talento </em> conectando a las empresas y aspirantes...
									<span>De nuestra ciudad</span>
								</p>
							</div>
							<div class="col-md-4">
								<div class="get-started">
									<a data-hash href="#registro" class="portal-menu btn btn-lg btn-primary">!Empieza ahora!</a>
<!--									<div class="learn-more">o <a href="index.html">infórmate más</a></div>-->
								</div>
							</div>
						</div>
				
					</div>
				</div>
				
				<div class="container" id="proceso">
				
					<div class="row center">
						<div class="col-md-12">
							<h1 class="short word-rotator-title">
								El portal de empleo y vinculación busca
								<strong class="inverted">
									<span class="word-rotate" data-plugin-options="{'delay': 2000, 'animDelay': 300}">
										<span class="word-rotate-items">
											<span>conectar</span>
											<span>informar</span>
											<span>colaborar</span>
										</span>
									</span>
								</strong>
							</h1>
							<p class="featured lead">
								para la selección de aspirantes y la búsqueda de empleo en la cuidad
							</p>
						</div>
					</div>
				
				</div>
				
				<div class="home-concept">
					<div class="container">
				
						<div class="row center">
							<span class="sun"></span>
							<span class="cloud"></span>
							<div class="col-md-2 col-md-offset-1">
								<div class="process-image" data-appear-animation="bounceIn">
									<img src="img/icons/talento.png" alt="" />
									<strong>Talento</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
									<img src="img/icons/search.png" alt="" />
									<strong>Búsqueda</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
									<img src="img/icons/link.png" alt="" />
									<strong>Vinculación</strong>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="project-image">
									<div id="fcSlideshow" class="fc-slideshow">
										<ul class="fc-slides">
											<li><a href="#"><img class="img-responsive" src="{{URL::asset('img/img/icons/empleo1.png')}}" /></a></li>
											<li><a href="#"><img class="img-responsive" src="{{URL::asset('img/img/icons/empleo2.png')}}" /></a></li>
											<li><a href="#"><img class="img-responsive" src="{{URL::asset('img/img/icons/empleo3.png')}}" /></a></li>
										</ul>
									</div>
									<strong class="our-work">Empleo</strong>
								</div>
							</div>
						</div>
				
					</div>
				</div>
				
				<div class="container">
				
					<div class="row">
						<hr class="tall" />
					</div>
				
				</div>
				
				<div class="container" id="servicios">
				
					<div class="row">
						<div class="col-md-12">
							<h2>Servicios del <strong>Portal</strong></h2>
							<div class="row">
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-edit"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Registro de aspirantes</h4>
											<p class="tall">Publica tus habilidades y tareas que sabes hacer.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-briefcase"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Búsqueda de vacantes</h4>
											<p class="tall">Busca vacantes de acuerdo a tus habilidades y talentos.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-star"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Recomienda</h4>
											<p class="tall">Recomienda empresas y aspirantes.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-bullhorn"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Publicación de vacantes</h4>
											<p class="tall">Publica las vacantes disponibles de tu empresa.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-group"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Contacta aspirantes</h4>
											<p class="tall">Busca y contacta a los mejores aspirantes.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-file-text-o"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Historial</h4>
											<p class="tall">Revisa el historial de aspirantes y empresas contactadas.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-cogs"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">DAD RH</h4>
											<p class="tall">Con el mejor software de recursos humanos aplica exámenes psicométricos.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<hr class="tall" />
				
				<div class="container" id="registro">
						<div class="col-md-12">
							<h2>Empresas y <strong>Aspirantes</strong></h2>
						</div>

						<ul class="portfolio-list">
							<li class="col-md-6 col-xs-6">
								<div class="portfolio-item thumbnail">
									<a href="portfolio-single-project.html" class="thumb-info">
										<img alt="" class="img-responsive" src="img/icons/aspirantes.png">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Regístrate como aspirante</span>
											<span class="thumb-info-type">Aspirante</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</a>
								</div>
							</li>
							<li class="col-md-6 col-xs-6">
								<div class="portfolio-item thumbnail">
									<a href="portfolio-single-project.html" class="thumb-info">
										<img alt="" class="img-responsive" src="img/icons/empresas.png">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Registra tu empresa</span>
											<span class="thumb-info-type">Empresas</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				
				<hr class="tall" />

                <div class="container">
					<div class="row center">
						<div class="col-md-12">
							<h2 class="short word-rotator-title">
								Las organizaciones ya están buscando candidatos.
								<strong>
									<span class="word-rotate" data-plugin-options="{'delay': 3500, 'animDelay': 400}">
										<span class="word-rotate-items">
											<span>Regístrate</span>
											<span>Publica</span>
											<span>Vincula</span>
										</span>
									</span>
								</strong>
							</h2>
							<h4 class="lead tall">No dejemos que nuestro talento se vaya a otro lugar, o que las organizaciones de la ciudad. tengan que buscars en otra región</h4>
						</div>
					</div>
                </div>
                
				<div class="map-section">
					<section class="featured footer map">
						<div class="container" style="text-align:center">
						    <img class="img-responsive" src="img/icons/dad.png" alt="" style="display:inline; margin: 70px; 0">
						</div>
					</section>
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
		<script src="{{URL::asset('js/vendor/jquery.validation/jquery.validation.js')}}></script>
		<script src="{{URL::asset('js/vendor/jquery.stellar/jquery.stellar.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jquery.gmap/jquery.gmap.js')}}"></script>
		<script src="{{URL::asset('js/vendor/isotope/jquery.isotope.js')}}"></script>
		<script src="{{URL::asset('js/vendor/owlcarousel/owl.carousel.js')}}"></script>
		<script src="{{URL::asset('js/vendor/jflickrfeed/jflickrfeed.js')}}"></script>
		<script src="{{URL::asset('js/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{URL::asset('js/vendor/vide/vide.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Specific Page Vendor and Views -->
		<script src="{{URL::asset('js/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{URL::asset('js/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="{{URL::asset('js/vendor/circle-flip-slideshow/js/jquery.flipshow.js')}}"></script>
		<script src="{{URL::asset('js/js/views/view.home.js')}}"></script>
		
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
