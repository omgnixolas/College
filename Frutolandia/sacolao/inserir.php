<?php

	require_once "../model/sacolao.php";
	require_once "../DAO/SacolaoDAO.php";

	if(isset($_POST["salvar"])){
		
		$sacolao = new Sacolao();
        $sacolao->setCodigoCliente($_POST["cod_cli"]);
        $sacolao->setCodigoFruta($_POST["cod_fruta"]);
        $sacolao->setQtdTotal($_POST["qtd_total"]);
        $sacolao->setValorTotal($_POST["valor_total"]);
		

		$sacolaoDAO = new SacolaoDAO();
		if($sacolaoDAO->inserir($sacolao) == "Inseriu"){
			
			header("Location: ../frm_list_sacolao.php");
			
			//echo "Inserido com sucesso!";
		}else {
			echo "Erro ao inserir. Entre em contato com o administrador";
		}
	
	}
	
?>