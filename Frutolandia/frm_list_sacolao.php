<?php
	require_once "DAO/SacolaoDAO.php";
	
	$sacolaoDAO = new SacolaoDAO();
	
	//var_dump($usuarioDAO->listar());
	/*foreach($usuarioDAO->listar() as $item){
		echo $item["cod_usu"] . " : ";
		echo $item["nome"] . " ";
		echo $item["idade"] . "<br/>";
	}*/
	
	
	//Deletando usuários
	if(isset($_GET["codigo"])){
		$sacolaoDAO->deletar($_GET["codigo"]);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Listagem de sacolão</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
				<h1 align="center"> Trabalho de programação (DAO) - 11/09/2020</h1>
				<h2 align="center"> Listagem de clientes </h2>
		<table align="center" width="600" height="200">
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Idade</th>
				<th>Quantidade total</th>
				<th>Valor total</th>
				<th colspan="2">Opções</th>
			</tr>
			<?php foreach($sacolaoDAO->listar() as $item) { ?>
			
			<tr>
				<td><?php echo $item["codigo"] ?></td>
				<td><?php echo $item["codigo_cliente"] ?></td>
                <td><?php echo $item["codigo_fruta"] ?></td>
                <td><?php echo $item["qtd_total"] ?></td>
                <td><?php echo $item["valor_total"] ?></td>
				
				<td><a href="?codigo=<?=$item["codigo"]?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a></td>
				
				<td><a href="frm_edit_sacolao.php?codigo=<?=$item["codigo"]?>">Editar</td>
			</tr>
			<?php } ?>

		</table>
	
	</body>
</html>