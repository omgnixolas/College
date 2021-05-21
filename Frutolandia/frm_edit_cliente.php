<?php
	require_once "model/Cliente.php";
	require_once "DAO/ClienteDAO.php";
	
	$cliente = new cliente();
	$clienteDAO = new clienteDAO();
	
	if(isset($_GET["codigo"])){
		$linha = $clienteDAO->buscar($_GET["codigo"]);
		$cliente->setCodigo($linha["codigo"]);
		$cliente->setEndereco($linha["endereco"]);
		$cliente->setNome($linha["nome"]);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Editar postagem</title>
	</head>
	<body>
			<h1 align="center"> Trabalho de programação (DAO) - 11/09/2020</h1>
			<h2 align="center"> Edição do cliente </h2>
			<form action="cliente/editar.php" method="POST" align="center">
				<input type="hidden" name="codigo" value="<?= $cliente->getCodigo() ?>">
				<div>Endereço:</div>
				<input type="text"  autocomplete="off" name="endereco" value="<?= $cliente->getEndereco() ?>"><br><br>
				<div>Nome</div>
				<input type="text" autocomplete="off" name="nome" value="<?= $cliente->getNome() ?>"><br><br>
				<input type="submit" name="editar" value="Atualizar">
			</form>
			
	<body>
</html>