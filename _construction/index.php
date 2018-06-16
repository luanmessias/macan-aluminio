<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('inc/behaviors.php'); ?>
	<title>Macan - Industria de Aluminio</title>
</head>
<body>
	<div class="container construct">
		<div class="jumbotron">
			<div class="page-header">
			  <img src="img/logo.png" height="73" width="258" class="img-responsive" alt="Image">
			</div>
			<div class="container clearfix">
				<h1 c>Site em construção</h1>
				<p>Estamos desenvolvendo um novo projeto para atender os nossos parceiros da melhor forma possível.</p>
				
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					Em caso de interesse em nossos produtos ou duvidas sobre nossos serviços estamos disponiveis para atende-lo:
					<br><br>
					<p><i class="glip glyphicon glyphicon-earphone"></i> (11)94241-2031</p>
					<p><i class="glip glyphicon glyphicon-envelope"></i> comercial@macanaluminio.com.br</p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<form action="sendmail.php" method="POST" role="form">
						<div class="form-group">
							<label for="">Nome:</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" required />
						</div>
						<div class="form-group">
							<label for="">Empresa:</label>
							<input type="text" class="form-control" name="empresa" id="empresa" placeholder="Nome da empresa" required />
						</div>
						<div class="form-group">
							<label for="">E-Mail:</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="E-Mail" required />
						</div>
						<div class="form-group">
							<label for="">Telefone:</label>
							<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required />
						</div>
						<input type="hidden" name="nomeremetente" id="nomeremetente" value="Contato do site" />
						<input type="hidden" name="emailremetente" id="emailremetente" value="contato@macanaluminio.com.br" />
						<input type="hidden" name="emaildestinatario" id="emaildestinatario" value="comercial@macanaluminio.com.br" />
						<input type="hidden" name="assunto" id="assunto" value="Contato Site" />
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>