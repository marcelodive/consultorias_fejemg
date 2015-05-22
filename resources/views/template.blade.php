<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; 
	any other head content must come *after* these tags -->
	
	<title>Template</title>
	
	<!-- Consultorias.css -->
	<link rel="stylesheet" href="css/consultorias.css">
	<!-- Normalize.css -->
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@yield('content')
	
	@yield('footer')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>