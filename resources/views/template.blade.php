<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; 
	any other head content must come *after* these tags -->

<title>Consultorias</title>

<!-- Stylesheets -->
<!-- Bootstrap -->
<link rel="stylesheet" href="/css/bootstrap.css">
<!-- Normalize.css -->
<link rel="stylesheet" href="/css/app.css">
<!-- Consultorias.css -->
<link rel="stylesheet" href="/css/consultorias.css">

<!-- Scripts -->
<!-- Jquery -->
<script src="/js/jquery.js"></script>
<!-- Bootstrap.JS -->
<script src="/js/bootstrap.js"></script>
<!-- JqueryUI -->
<script src="/js/jquery-ui.js"></script>

</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Consultorias</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
					<li><a href="#">Quem Somos</a></li>
					<li><a href="#">Parceiros</a></li>
					<li><a href="#">Contato</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-expanded="false">Usuário
							<span class="caret"></span>
					</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Perfil</a></li>
							<li><a href="#">Logout</a></li>
						</ul></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">@yield('content')</div>

	<div class="navbar-default">
		<div class="container">
			<div class="col-md-6 footer-left">
				<h3>Redes Sociais</h3>
				<p>Imagens das redes sociais...</p>
			</div>
			<div class="col-md-6 footer-right">
				<h3>Parceiros</h3>
				<p>Logo dos Parceiros...</p>
				<p>
					<a class="btn btn-default" href="#" role="button">Mais Informações
						»</a>
				</p>
			</div>
		</div>
		<hr></hr>
		<div class="col-lg-12" style="text-align: center">
			<p>
				© Copyright 2015 <a href="http://www.fejemg.org.br/site/">Fejemg</a>

				<br>Desenvolvido por:
			</p>

			<img
				src="http://static.bleacherreport.net/images/redesign/avatars/default-user-icon-comment.png"
				class="img-circle"> <img
				src="http://static.bleacherreport.net/images/redesign/avatars/default-user-icon-comment.png"
				class="img-circle"> <img
				src="http://static.bleacherreport.net/images/redesign/avatars/default-user-icon-comment.png"
				class="img-circle"> <img
				src="http://static.bleacherreport.net/images/redesign/avatars/default-user-icon-comment.png"
				class="img-circle">

		</div>
	</div>
</body>
</html>