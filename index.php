<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Pontos Turisticos de Vitória</title>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9FBQ1N87aV9_Rghxk4u-qurbhZZ9Z3yA"></script>

	<!-- Colocando estilo bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	

	<!-- Colocando o jQuery e jQuery do bootstrap-->
	<script type="text/javascript" src="javascript/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

	<!-- Colocando javascript -->
	<script type="text/javascript" src="javascript/functions.js"></script>


	<!-- Colocando os estilos personalizados -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">




</head>
<body>

			
	<div class="barra-float">
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
			<div id="area-pesquisa" class="col-md-3">
				<div class="input-group" style="margin-top:10px;box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); border-radius:5px;width: 100%;">
					<input type="text" class="form-control" id="txtPesquisa" name="" />
					<span class="input-group-btn">
						<button id="teste" class="btn btn-primary" type="button" style="width:49px;">
							<span class="glyphicon glyphicon-map-marker"></span>
						</button>
					</span>
				</div>
			</div>
			
		</div>

	<div id="mapa">
		
		
	
		<!--<img src="teste.png" style="width:100%;height: 100%;" />-->

			

			
	
		
	</div>

	<!-- Modal de abertura -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<p>Some text in the modal.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>	
			</div>
		</div>
	</div>

	
</body>
</html> 