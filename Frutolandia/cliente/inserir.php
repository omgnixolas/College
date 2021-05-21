<?php

	require_once "../model/Cliente.php";
	require_once "../DAO/ClienteDAO.php";

	if(isset($_POST["salvar"])){
		
		$cliente = new Cliente();
		$cliente->setNome($_POST["nome"]);
		$cliente->setEndereco($_POST["endereco"]);

		$clienteDAO = new ClienteDAO();
		if($clienteDAO->inserir($cliente) == "Inseriu"){
			
			header("Location: ../frm_list_cliente.php");
			
			//echo "Inserido com sucesso!";
		}else {
			echo "Erro ao inserir. Entre em contato com o administrador";
		}
	
	}
	
?>