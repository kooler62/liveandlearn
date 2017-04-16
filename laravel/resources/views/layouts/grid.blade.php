<!DOCTYPE html>
<html>
	<head>
		<meta name="_token" content="{!! csrf_token() !!}"/>
		<!-- for the ajax in excerption-->
		{!! csrf_field() !!}
		<meta charset="utf-8">
		<title>{{ $title or 'Live & Learn | Джерело вашого саморизвитку' }}</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/foundation.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-glyf.css') }}">
		<script type="text/javascript" src="{{ asset('js/foundation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/vendor/jquery.min.js') }}"></script>
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="@yield('meta_description','Live & Learn | Джерело вашого саморизвитку')"/>
	</head>
	<body>
	
		@include('components.metrika')
	

		<div class="row">
			<div class="large-12 columns text-center">
				@include('components.header')
			</div>
		</div>


@section('cont_with_nav')
		<div class="row">
			<div class="large-8 columns" role="content">

@section('handler')
@endsection
@yield('handler')



			@section('content')
				@include('components.content')
			@endsection
			@yield('content')

			</div>
			<aside class="large-4 columns">
			@section('navbar')
				@include('components.nav')
			@endsection
			@yield('navbar')
			</aside>
		</div>
@endsection
@yield('cont_with_nav')
		<!-- PAGINATION -->
		<!--
		<div class="row">
			<div class="large-12 columns text-center" role="content">
			page _navigation

			</div>
		</div>
		-->
		<!-- END PAGINATION -->



@section('footer')
		<div class="row">
			<div class="large-12 columns" role="content">
				@include('components.footer')
			</div>
		</div>
@endsection
@yield('footer')
	</body>
</html>