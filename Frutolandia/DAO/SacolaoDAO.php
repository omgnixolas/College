<?php

require_once (dirname(__FILE__).'/../DBConexao.php');

class SacolaoDAO{
    private static $conexao;

    public function __construct(){
		self::$conexao = DBConexao::getInstance();
    }
    
    public function inserir(Sacolao $sacolao){
        $query = self::$conexao->prepare("INSERT INTO sacolao (codigo_cliente, codigo_fruta, qtd_total, valor_total) VALUES (?, ?, ?, ?)");
		$query->bindValue(1, $sacolao->getCodigoCliente());
        $query->bindValue(2, $sacolao->getCodigoFruta());
        $query->bindValue(3, $sacolao->getQtdTotal());
		$query->bindValue(4, $sacolao->getValorTotal());
		if($query->execute()){
			return "Inseriu";
		}else {
			return "Erro";
		}
    }
    public function alterar(Sacolao $sacolao){
        $query = self::$conexao->prepare("UPDATE sacolao SET codigo_cliente = ?, codigo_fruta= ?, qtd_total = ?, valor_total = ? WHERE codigo = ?");
		$query->bindValue(1, $sacolao->getCodigoCliente());
        $query->bindValue(2, $sacolao->getCodigoFruta());
        $query->bindValue(3, $sacolao->getQtdTotal());
        $query->bindValue(4, $sacolao->getValorTotal());
        $query->bindValue(5, $sacolao->getCodigo());
		if($query->execute()){
			return "Alterou";
		}else {
			return "Erro";
		}
    }
    public function deletar($codigo){
        $query = self::$conexao->prepare("DELETE FROM sacolao WHERE codigo= ?");
		$query->bindValue(1, $codigo);
		$query->execute();
    }
    public function listar(){
        $query = self::$conexao->prepare("SELECT codigo, codigo_cliente, codigo_fruta, qtd_total, valor_total FROM sacolao ORDER BY codigo");
		$query->execute();
		return $query->fetchAll();
    }
    public function buscar($codigo){
        $query = self::$conexao->prepare("SELECT codigo, codigo_cliente, codigo_fruta, qtd_total, valor_total FROM sacolao WHERE codigo = ?");
		$query->bindValue(1, $codigo);
		$query->execute();
		return $query->fetch();
    }
}