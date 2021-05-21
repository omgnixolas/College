<?php
    require_once (dirname(__FILE__).'/../DBConexao.php');

class FrutaDAO{
    private static $conexao;

    public function __construct(){
		self::$conexao = DBConexao::getInstance();
    }

    public function inserir(Fruta $fruta){
        $query = self::$conexao->prepare("INSERT INTO fruta (nome, unidade) VALUES (?, ?)");
		$query->bindValue(1, $fruta->getNome());
		$query->bindValue(2, $fruta->getUnidade());
		if($query->execute()){
			return "Inseriu";
		}else {
			return "Erro";
		}
    }
    public function alterar(Fruta $fruta){
        $query = self::$conexao->prepare("UPDATE fruta SET nome = ?, unidade = ? WHERE codigo= ?");
		$query->bindValue(1, $fruta->getNome());
		$query->bindValue(2, $fruta->getUnidade());
		$query->bindValue(3, $fruta->getCodigo());
		if($query->execute()){
			return "Alterou";
		}else {
			return "Erro";
		}
    }
    public function deletar($codigo){
        $query = self::$conexao->prepare("DELETE FROM fruta WHERE codigo = ?");
		$query->bindValue(1, $codigo);
		$query->execute();
    }
    public function listar(){
        $query = self::$conexao->prepare("SELECT codigo, nome, unidade FROM fruta ORDER BY codigo");
		$query->execute();
		return $query->fetchAll();
    }
    public function buscar($codigo){
        $query = self::$conexao->prepare("SELECT codigo, nome, unidade FROM fruta WHERE codigo = ?");
		$query->bindValue(1, $codigo);
		$query->execute();
		return $query->fetch();
    }
}
?>
	
