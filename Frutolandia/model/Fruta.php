<?php
class Fruta{
    private $codigo;
    private $nome;
    private $unidade;

    function __construct(){
    }
     //GET E SET DO CAMPO CÓDIGO
    public function setCodigo($param){
		$this->codigo = $param;
	}
	
	public function getCodigo(){
		return $this->codigo;
    }
     //GET E SET DO CAMPO NOME
    public function setNome($param){
		$this->nome= $param;
	}
	
	public function getNome(){
		return $this->nome;
    }
     //GET E SET DO CAMPO UNIDADE
    public function setUnidade($param){
		$this->unidade= $param;
	}
	
	public function getUnidade(){
		return $this->unidade;
	}
}
?>