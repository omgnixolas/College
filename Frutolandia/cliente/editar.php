<?php
	
	require_once "../DAO/ClienteDAO.php";
	require_once "../model/Cliente.php";
	
	/*echo $_POST["nome"];
	echo "<br/>";
	echo $_POST["idade"];
	echo "<br/>";
	echo $_POST["codigo"];*/
	
	if(isset($_POST["editar"])){
		
		$cliente = new Cliente();
		$cliente->setCodigo($_POST["codigo"]);
		$cliente->setNome($_POST["nome"]);
		$cliente->setEndereco($_POST["endereco"]);
		
		$clienteDAO = new ClienteDAO();
		if($clienteDAO->alterar($cliente) == "Alterou"){
			
			header("Location: ../frm_list_cliente.php");
			
			//echo "Alterado com sucesso!";
		}else {
			echo "Erro ao alterar usuário";
		}
	}
	
?>