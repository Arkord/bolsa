@extends('layouts.app')

@section('content')

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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="ape" class="col-md-4 control-label">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="ape" type="text" class="form-control" name="ape" value="{{ old('ape') }}" required autofocus>

                                @if ($errors->has('ape'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ape') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
