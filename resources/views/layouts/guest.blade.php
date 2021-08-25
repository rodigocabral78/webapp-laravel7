<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ str_replace('_', ' ',config('app.name', 'Laravel')) }}</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style>
		body {
			background-color: #343a40;
			background-color: #6c757d;
			background-color: #1a202c;
		}
	</style>
</head>

<body class="antialiased">
	<div id="app">
		@include('layouts.navigation')


		<main class="py-4">
			<div class="container-fluid">
				<div class="row justify-content-center">
					@yield('content')
				</div>
			</div>
		</main>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
