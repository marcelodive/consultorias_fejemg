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
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
<!-- Normalize.css -->
<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<!-- Consultorias.css -->
<link href="{{ URL::asset('css/consultorias.css') }}" rel="stylesheet" type="text/css" >

<!-- Scripts -->
<!-- Jquery -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<!-- Bootstrap.JS -->
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
<!-- JqueryUI -->
<script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js') }}"></script>

</head>
<body>
	<div style="background-color:#ab0f3a;">
		<center><a href="consultorias">
		<img alt="Logo Consultorias" src="{{ url('/images/logo-consultoria-branca.png') }}">
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
					<img alt="Início" src="{{ url('/images/home.png') }}"
					style="width:20px;">
					Início</a></li>
					<li><a href="#" onclick="$('#popup').bPopup();">
					<img alt="Quem Somos" src="{{ url('/images/icone-consultoria.png') }}"
					style="width:20px;">
					Quem Somos</a></li>
					<li><a href="#">
					<img alt="Contato" src="{{ url('/images/contato.png') }}"
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
	<div id= "footer">
		<div class= "row" style="margin-right: 0px !important;">		
				<div style="background-color: #a3a3a3; padding:20px; height:90px;">
					<div class="col-xs-4">
						<img alt="Logo Consultorias" src="{{ url('/images/fejemg-left-bottom.png') }}">
					</div>
					<div class="col-xs-4" style="text-align: center">
						
					</div>
					<div class="col-xs-4" style="text-align: right">
						<img alt="Logo Consultorias" src="{{ url('/images/social-icons-right-bottom.png') }}">
					</div>
				</div>
		</div>
	</div>	
		<hr></hr>
		<div class="col-lg-12" style="text-align: center">
			<img alt="Logo Consultorias" src="{{ url('/images/logo-consultoria.png') }}"
			style="width:200px;">
		


		</div>

<div id="popup" class="container">
	<p>A <strong>Federação das Empresas Juniores do Estado de Minas Gerais (FEJEMG) </strong> possui como missão representar, desenvolver e integrar as empresas juniores de Minas Gerais. Há 20 anos atuando ativamente no ecossistema empreendedor de Minas Gerais, a FEJEMG acredita que as empresas juniores possuem plenas competências para oferecer suporte aos empreendedores de nosso estado.<br /><br />

As Empresas Juniores, compostas por alunos das melhores universidades do estado, realizam projetos e serviços, orientados por professores especializados, para micro e pequenos empreendedores em suas respectivas cidades. São nacionalmente reconhecidas pela sua excelência e, somente em 2014, movimentaram cerca de R$1,5 milhão em Minas Gerais.
	</p>
</div>
</body>
</html>
