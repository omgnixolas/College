<?php
	
	require_once "../DAO/FrutaDAO.php";
	require_once "../model/Fruta.php";
	
	/*echo $_POST["nome"];
	echo "<br/>";
	echo $_POST["idade"];
	echo "<br/>";
	echo $_POST["codigo"];*/
	
	if(isset($_POST["editar"])){
		
		$fruta = new Fruta();
		$fruta->setCodigo($_POST["codigo"]);
		$fruta->setNome($_POST["nome"]);
		$fruta->setUnidade($_POST["unidade"]);
		
		$frutaDAO = new FrutaDAO();
		if($frutaDAO->alterar($fruta) == "Alterou"){
			
			header("Location: ../frm_list_fruta.php");
			
			//echo "Alterado com sucesso!";
		}else {
			echo "Erro ao alterar usuário";
		}
	}
	
?>