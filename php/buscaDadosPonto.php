<?php 

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && 
	strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {

		include('Conecta.php');

		$pdo = new DB();

		$q = "select a.nome, c.id, a.cep, a.rua, b.descricao, a.x, a.y, ".
				"COALESCE(a.autor, '') as autor, ".
				"COALESCE(a.construtor, '') as construtor, ".
				"COALESCE(a.proprietario, '') as proprietario ".
				"from tb_ponto a ".
			"inner join tb_estilo b on a.estilo = b.id ".
			"inner join tb_tipo_ponto c on a.tipo = c.id ".
			"where a.id = ".$_POST['codigo'];

		$r = $pdo->query($q);

		$pdo->CloseConnection();
		
		echo json_encode($r);

	} else header("Location:../");
?>