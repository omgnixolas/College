<?php

	require_once "../model/Fruta.php";
	require_once "../DAO/FrutaDAO.php";

	if(isset($_POST["salvar"])){
		
		$fruta = new Fruta();
		$fruta->setNome($_POST["nome"]);
		$fruta->setUnidade($_POST["unidade"]);

		$frutaDAO= new FrutaDAO();
		if($frutaDAO->inserir($fruta) == "Inseriu"){
			
			header("Location: ../frm_list_fruta.php");
			
			//echo "Inserido com sucesso!";
		}else {
			echo "Erro ao inserir. Entre em contato com o administrador";
		}
	
	}
	
?>