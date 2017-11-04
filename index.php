<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Pontos Turisticos de Vitória</title>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9FBQ1N87aV9_Rghxk4u-qurbhZZ9Z3yA"></script>

	 <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Colocando estilo bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	

	<!-- Colocando o jQuery e jQuery do bootstrap-->
	<script type="text/javascript" src="javascript/jquery.js"></script>
	<script type="text/javascript" src="javascript/jquery.cookie.js"></script>
	
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

	<!-- Colocando javascript -->
	<script type="text/javascript" src="javascript/functions.js"></script>


	<!-- Colocando os estilos personalizados -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>	
	<div class="barra-float">
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="input-group" id="grupo-botao">
				<input type="text" class="form-control input-lg" id="txtPesquisa" name="" style="border-radius: 20px 0 0 20px;" />
				<span class="input-group-btn">
					<button id="btnPesquisa" class="btn btn-primary btn-lg" type="button">
						<i class="material-icons">place</i>
					</button>
					<button type="button" class="btn btn-primary dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 0 20px 20px 0;">
						<i class="material-icons">arrow_drop_down</i>
					</button>
					<ul class="dropdown-menu pull-right" role="menu">
						<li><a href="#">Sobre o projeto</a></li>
						<li><a href="#">Contato</a></li>
						<li><a href="#">Opção...</a></li>
						<li role="separator" class="divider"></li>
						<li><a class="opt-mapa" data-tipo="roadmap" href="">Mapa</a></li>
						<li><a class="opt-mapa" data-tipo="satellite" href="">Satélite</a></li>
						<li><a class="opt-mapa" data-tipo="hybrid" href="">Híbrido</a></li>
					</ul>
				</span>
			</div>
		</div>
	</div>

	<div id="mapa">
	</div>

	<!-- Modal de abertura -->
	<div class="row">
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog col-md-4 col-md-offset-1 modal-sm">
				<div class="modal-content">
					<div class="modal-header type-info">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 id="txtNomeLocal" class="modal-title"></h4>
					</div>
					<div class="modal-body">
						<div style="text-align:center;">
							<img id="imgCapaLocal" src="imgLocalDefault.png" class="img-responsive" style="display:inline;" />
							<hr>
							<p id="txtRua">Rua Moacir Ávila</p>
							<p id="txtEstiloArquitetonico"><font>Estilo: </font>Neocolonial</p>
							<p id="txtConstrutor"><font>Construtor: </font>Moacir Ávila</p>
							<p id="txtAutor"><font>Autor do projeto: </font>Moacir Ávila</p>
							<p id="txtProprietario"><font>Proprietário: </font>Luiz Cláudio</p>
						</div>
					</div>
					<div class="modal-footer">
						<a class="btn btn-link" target="blank" id="linkGoogleMaps" href="">Ver no Google Maps</a>
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>	
				</div>
			</div>	
		</div>
	</div>
	
	<div id="modalInit" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<p>Bem vindo(a)!</p>
					<p style="margin-bottom:0;">Você acaba de entrar no guia de roteiro turístico e histórico da Praia do Canto. Cada local de interesse está associada a um ícone que marca sua posição geográfica no mapa, apartir do qual voce pode acessar as informações arquitetônicas, históricas assim como fotografias de cada um dos lugares.</p>
					<div class="modal-footer" style="border:0; padding:5px;">
						<button type="button" class="btn btn-info" data-dismiss="modal">Navegar <span class="glyphicon glyphicon-map-marker"></span></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	
</body>
</html> 