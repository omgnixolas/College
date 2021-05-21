<?php
	require_once "model/Fruta.php";
	require_once "DAO/FrutaDAO.php";
	
	$fruta = new Fruta();
	$frutaDAO = new FrutaDAO();
	
	if(isset($_GET["codigo"])){
		$linha = $frutaDAO->buscar($_GET["codigo"]);
		$fruta->setCodigo($linha["codigo"]);
		$fruta->setNome($linha["nome"]);
		$fruta->setUnidade($linha["unidade"]);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Editar postagem</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
			<h1 align="center"> Trabalho de programação (DAO) - 11/09/2020</h1>
			<h2 align="center"> Edição da fruta</h2>
			<form action="fruta/editar.php" method="POST" align="center">
				<input type="hidden" name="codigo" value="<?= $fruta->getCodigo() ?>">
				<div>Código nome</div>
				<input type="text" autocomplete="off" name="nome" value="<?= $fruta->getNome() ?>"><br><br>
				<div>Unidade</div>
				<input type="text" autocomplete="off" name="unidade" value="<?= $fruta->getUnidade() ?>"><br><br>
				<input type="submit" name="editar" value="Atualizar">
			</form>
		
	<body>
</html>