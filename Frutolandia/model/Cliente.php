<?php
class Cliente {
    private $codigo;
    private $endereco;
    private $nome;

    function __construct(){
	}
     //GET E SET DO CAMPO CÓDIGO
    public function setCodigo($param){
		$this->codigo = $param;
	}
	
	public function getCodigo(){
		return $this->codigo;
    }
     //GET E SET DO CAMPO ENDERECO
    public function setEndereco($param){
		$this->endereco= $param;
	}
	
	public function getEndereco(){
		return $this->endereco;
    }
     //GET E SET DO CAMPO NOME
    public function setNome($param){
		$this->nome= $param;
	}
	public function getNome(){
		return $this->nome;
	}
}
?>