<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Produtos</title>
	<link rel="stylesheet"  href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		<main role="main">
			@hasSection('body')
			    @yield('body')
			@endif    
		</main>
		
	</div>

	<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>