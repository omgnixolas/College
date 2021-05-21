<?php
class Sacolao{
    private $codigo;
    private $codigo_cliente;
    private $codigo_fruta;
    private $qtd_total;
    private $valor_total;

    function __construct(){
    }
    
    //GET E SET DO CAMPO CÓDIGO
    public function setCodigo($param){
		$this->codigo= $param;
	}
	
	public function getCodigo(){
		return $this->codigo;
    }
     //GET E SET DO CAMPO CÓDIGO CLIENTE
    public function setCodigoCliente($param){
		$this->codigo_cliente= $param;
	}
	
	public function getCodigoCliente(){
		return $this->codigo_cliente;
    }
     //GET E SET DO CAMPO CÓDIGO FRUTA
    public function setCodigoFruta($param){
		$this->codigo_fruta= $param;
	}
	
	public function getCodigoFruta(){
		return $this->codigo_fruta;
    }
     //GET E SET DO CAMPO QUANTIDADE TOTAL
    public function setQtdTotal($param){
		$this->qtd_total= $param;
	}
	
	public function getQtdTotal(){
		return $this->qtd_total;
    }
     //GET E SET DO CAMPO VALOR TOTAL
    public function setValorTotal($param){
		$this->valor_total= $param;
	}
	
	public function getValorTotal(){
		return $this->valor_total;
	}
}

?>