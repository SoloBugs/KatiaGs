<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col" style="">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  <a class="navbar-brand" href="#">Navbar</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				    <div class="navbar-nav">
				      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
				      <a class="nav-item nav-link" href="#">Features</a>
				      <a class="nav-item nav-link" href="#">Pricing</a>
				      <a class="nav-item nav-link disabled" href="#">Disabled</a>
				    </div>
				  </div>
				</nav>
			</div>
		</div>		
	</div>
	<div class="container" style="margin-top:50px;">
		<div class="row align-items-center">
		    <div class="col">
		      One of three columns
		    </div>
		    <div class="col" style="">
		      @yield("contenido")
		    </div>
		    <div class="col">
		      three of three columns
		    </div>
		</div>
	</div>	
</body>
</html>