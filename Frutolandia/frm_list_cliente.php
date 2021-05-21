<?php
	require_once "DAO/ClienteDAO.php";
	$clienteDAO = new ClienteDAO();
	
	
	if(isset($_GET["codigo"])){
		$clienteDAO->deletar($_GET["codigo"]);
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Listagem de Clientes</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
				<h1 align="center"> Trabalho de programação (DAO) - 11/09/2020</h1>
				<h2 align="center"> Listagem de clientes </h2>
		<table align="center" width="600" height="200">
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Endereço</th>
				<th colspan="2">Opções</th>
			</tr>
			<?php foreach($clienteDAO->listar() as $item) { ?>
				
			<tr>
				<td><?php echo $item["codigo"] ?></td>
				<td><?php echo $item["nome"] ?></td>
				<td><?php echo $item["endereco"] ?></td>
				
				<td><a href="?codigo=<?=$item["codigo"]?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a></td>
				
				<td><a href="frm_edit_cliente.php?codigo=<?=$item["codigo"]?>">Editar</td>
			</tr>
			<?php } ?>
		</table>
		
	</body>
</html>