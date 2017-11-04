<?php 

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
	&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])==='xmlhttprequest'){
	    
	    include('Conecta.php');

		$pdo = new DB();

		$q = "select a.id, a.nome, a.x, a.y, a.tipo  ".
				"from tb_ponto a ".
				"inner join tb_estilo b on a.estilo = b.id ".
				"inner join tb_tipo_ponto c on a.tipo = c.id";

		//echo $q;//Teste
		$r = $pdo->query($q);

		$pdo->CloseConnection();

		echo json_encode($r);

	} else header("Location:../");
?>