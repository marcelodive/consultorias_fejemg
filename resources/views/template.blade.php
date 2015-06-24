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
	<div style="background-color:#ab0f3a;" >
		<center><a href="consultorias">
		<img alt="Logo Consultorias" src="/images/logo-consultoria-branca.png">
		</a></center>
	</div>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="consultorias">
					<img alt="Início" src="/images/home.png"
					style="width:20px;">
					Início</a></li>
					<li><a href="#">
					<img alt="Quem Somos" src="/images/icone-consultoria.png"
					style="width:20px;">
					Quem Somos</a></li>
					<li><a href="#">
					<img alt="Quem Somos" src="/images/contato.png"
					style="width:20px;">
					Contato</a></li>
				</ul>

			</div>
		</div>
	</nav>

	<div class="container">@yield('content')</div>	
	
		
			<div style="background-color: #4d4d4d; padding:20px;">
				<center><h3 style="color:#989898">Parceiros</h3>
				<p>Em breve...</p></center>
			</div>
			
			<div style="background-color: #a3a3a3; padding:20px; height:90px;">
				<div class="col-lg-4">
					<img alt="Logo Consultorias" src="/images/fejemg-left-bottom.png">
				</div>
				<div class="col-lg-4" style="text-align: center">
					
				</div>
				<div class="col-lg-4" style="text-align: right">
					<img alt="Logo Consultorias" src="/images/social-icons-right-bottom.png">
				</div>
			</div>
		
		<hr></hr>
		<div class="col-lg-12" style="text-align: center">
			<img alt="Logo Consultorias" src="/images/logo-consultoria.png"
			style="width:200px;">
		
<!-- 			<p> -->
<!-- 				© Copyright 2015 <a href="http://www.fejemg.org.br/site/">Fejemg</a> -->

<!-- 				<br>Desenvolvido por: -->
<!-- 			</p> -->

<!-- 			<img -->
<!-- 				src="http://static.bleacherreport.net/images/redesign/avatars/default-user-icon-comment.png" -->
<!-- 				class="img-circle"> <img -->
<!-- 				src="http://static.bleacherreport.net/images/redesign/avatars/default-user-icon-comment.png" -->
<!-- 				class="img-circle"> <img -->
<!-- 				src="http://static.bleacherreport.net/images/redesign/avatars/default-user-icon-comment.png" -->
<!-- 				class="img-circle"> <img -->
<!-- 				src="http://static.bleacherreport.net/images/redesign/avatars/default-user-icon-comment.png" -->
<!-- 				class="img-circle"> -->

		</div>
</body>
</html>