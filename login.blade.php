@extends('layouts.app')

@section('content')
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
		
<header id="header">
				<div class="container">
					<div class="logo">
						<a href="index.html">
							<img alt="Portal vinculación y empleo" width="200" height="80" data-sticky-width="150" data-sticky-height="59" src="img/logoVE.png">
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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio de Sesion</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electronico:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
