<?php

	require_once "DAO/SacolaoDAO.php";
	require_once "model/Sacolao.php";

	
	$sacolaoDAO = new SacolaoDAO();
	$sacolao = new Sacolao();
	
	if(isset($_GET["codigo"])){
		
		$linha = $sacolaoDAO->buscar($_GET["codigo"]);
		
		$sacolao->setCodigo($linha["codigo"]);
		$sacolao->setCodigoCliente($linha["codigo_cliente"]);
        $sacolao->setCodigoFruta($linha["codigo_fruta"]);
        $sacolao->setQtdTotal($linha["qtd_total"]);
        $sacolao->setValorTotal($linha["valor_total"]);
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Editar usuário</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
			<h1 align="center"> Trabalho de programação (DAO) - 11/09/2020</h1>
			<h2 align="center"> Edição da sacolão</h2>
			<form action="sacolao/editar.php" method="POST" align="center">
				<input type="hidden" name="codigo" value="<?= $sacolao->getCodigo() ?>">
				<div>Código cliente</div>
				<input type="text"  autocomplete="off" name="cod_cli" value="<?= $sacolao->getCodigoCliente() ?>"><br><br>
				<div>Código fruta</div>
                <input type="number" autocomplete="off" name="cod_fruta" value="<?= $sacolao->getCodigoFruta() ?>"><br><br>
                <div>Quantidade total: </div>
                <input type="number" autocomplete="off" name="qtd_total" value="<?= $sacolao->getQtdTotal() ?>"><br><br>
                <div>Valor total</div>
				<input type="number" autocomplete="off" name="valor_total" value="<?= $sacolao->getValorTotal() ?>"><br><br>
				<input type="submit" name="editar" value="Atualizar">
			</form>
			
	<body>
</html>