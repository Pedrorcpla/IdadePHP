<!DOCTYPE html>
<html>
<head>
	<title>Apresetando idade</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="bg-light">

	<div class="row bg-primary">
		<div class="col-lg-12 text-white">
			<center>
			<h1>Desvendador de Idade</h1>
			</center>
		</div>
	</div>
	<div class="col-lg-10 offset-lg-1 bg-white">
		<form>
			<br>

		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<center><h3>Informações pessoais:</h3>
				<br>
				<h4 class="dados"></h4></center>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<ul>
					<li>Nome: <input type="text" name="nome" class="form-control"></li>
					<li>E-mail: <input type="email" name="email" class="form-control"></li>
					<li>Nascimento: <input type="date" name="data" class="form-control"></li>
					<li>Data atual: <input type="date" name="hoje" class="form-control"></li>
				</ul>
				<center>
					<button submit class="btn btn-success col-lg-2">Enviar</button>
				</center>
			</div>
		</div>
		<br>
		<?php
			date_default_timezone_set ('America/Sao_Paulo');

			$nome = $_GET['nome'];
			$email = $_GET['email'];
			$nasc = $_GET['data'];
			$hoje = $_GET['hoje'];

			$tempo1 = strtotime($nasc);
			$tempo2 = strtotime($hoje);
			$idade = $tempo2 - $tempo1;
			
			echo "<div class='row'>
					<div class='col-lg-10 offset-lg-1'><center><h3>$idade</h3></center></div>
				  </div>"
		 
		?>
		</form>
	</div>
</body>
</html>