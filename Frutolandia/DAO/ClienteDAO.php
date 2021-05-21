<?php
    require_once (dirname(__FILE__).'/../DBConexao.php');

class ClienteDAO{
    private static $conexao;

    public function __construct(){
		self::$conexao = DBConexao::getInstance();
	}

    public function inserir(Cliente $cliente){
        $query = self::$conexao->prepare("INSERT INTO cliente (endereco, nome) VALUES (?, ?)");
		$query->bindValue(1, $cliente->getEndereco());
		$query->bindValue(2, $cliente->getNome());
		if($query->execute()){
			return "Inseriu";
		}else {
			return "Erro";
		}
    }
    public function alterar(Cliente $cliente){
        $query = self::$conexao->prepare("UPDATE cliente SET endereco= ?, nome= ? WHERE codigo = ?");
		$query->bindValue(1, $cliente->getEndereco());
		$query->bindValue(2, $cliente->getNome());
		$query->bindValue(3, $cliente->getCodigo());
		if($query->execute()){
			return "Alterou";
		}else {
			return "Erro";
		}
    }
    public function deletar($codigo){
        $query = self::$conexao->prepare("DELETE FROM cliente WHERE codigo = ?");
		$query->bindValue(1, $codigo);
		$query->execute();
    }
    public function listar(){
        $query = self::$conexao->prepare("SELECT codigo, endereco, nome FROM cliente ORDER BY codigo");
		$query->execute();
		return $query->fetchAll();
    }
    public function buscar($codigo){
        $query = self::$conexao->prepare("SELECT codigo, endereco, nome FROM cliente WHERE codigo = ?");
		$query->bindValue(1, $codigo);
		$query->execute();
		return $query->fetch();
    }
}
?>