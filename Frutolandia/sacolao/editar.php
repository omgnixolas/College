<?php
	
	require_once "../DAO/SacolaoDAO.php";
	require_once "../model/Sacolao.php";
	
	/*echo $_POST["nome"];
	echo "<br/>";
	echo $_POST["idade"];
	echo "<br/>";
	echo $_POST["codigo"];*/
	
	if(isset($_POST["editar"])){
		
		$sacolao = new Sacolao();
		$sacolao->setCodigo($_POST["codigo"]);
        $sacolao->setCodigoCliente($_POST["cod_cli"]);
        $sacolao->setCodigoFruta($_POST["cod_fruta"]);
        $sacolao->setQtdTotal($_POST["qtd_total"]);
        $sacolao->setValorTotal($_POST["valor_total"]);
        
		
		$sacolaoDAO = new SacolaoDAO();
		if($sacolaoDAO->alterar($sacolao) == "Alterou"){
			
			header("Location: ../frm_list_sacolao.php");
			
			//echo "Alterado com sucesso!";
		}else {
			echo "Erro ao alterar usuário";
		}
	}
	
?>