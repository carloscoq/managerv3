<?php

class Noticia{
	
	private $id;
	private $titulo;
	private $texto;
	private $data;
	private $imagem;
	
	public function __construct($id="",$titulo="",$texto="",$data="",$imagem="") {
		$this->id = $id;
		$this->titulo = $titulo;
		$this->texto = $texto;
		$this->data = $data;
		$this->imagem = $imagem;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getTitulo(){
		return $this->titulo;
	}
	
	public function getTexto(){
		return $this->texto;
	}
	
	public function getData(){
		return $this->data;
	}
	
	public function getImagem(){
		return $this->imagem;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	
	public function setTexto($texto){
		$this->texto = $texto;
	}
	
	public function setData($data){
		$this->data = $data;
	}
	
	public function setImagem($imagem){
		$this->imagem = $imagem;
	}
}

?>