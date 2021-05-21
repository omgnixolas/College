<?php
	require_once "DAO/FrutaDAO.php";
	$frutaDAO = new FrutaDAO();
	
	
	if(isset($_GET["codigo"])){
		$frutaDAO->deletar($_GET["codigo"]);
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Listagem de frutas</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
				<h1 align="center"> Trabalho de programação (DAO) - 11/09/2020</h1>
				<h2 align="center"> Listagem de clientes </h2>
		<table align="center" width="600" height="200">
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Unidade</th>
				<th colspan="2">Opções</th>
			</tr>

			<?php foreach($frutaDAO->listar() as $item) { ?>
				
			<tr>
				<td><?php echo $item["codigo"] ?></td>
				<td><?php echo $item["nome"] ?></td>
				<td><?php echo $item["unidade"] ?></td>
				
				<td><a href="?codigo=<?=$item["codigo"]?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a></td>
				
				<td><a href="frm_edit_fruta.php?codigo=<?=$item["codigo"]?>">Editar</td>
			</tr>
			<?php } ?>
		</table>
	
	</body>
</html>