<?php

abstract class DBConexao{
	
	private static $instance;
	
	const USER = "root";
	const SENHA = "";
	
	public static function getInstance(){
		
		try{
			if(self::$instance == null){
				$stringConexao = "mysql:host=localhost;port=3306;dbname=frutolandia";
				self::$instance = new PDO($stringConexao, self::USER, self::SENHA);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
		}catch (PDOException $error){
			//echo "Erro : " . $error->getMessage();
			echo "Erro: servidor não encontrado, contate o povo de TI";
		}
		
		return self::$instance;
	}
}

?>