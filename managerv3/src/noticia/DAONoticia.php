<?php
require_once('../db/DB.php');

class DAONoticia{
	
	private $db;
	private $resp;
	
	
	public function __construct() {
		$this->db = new DB();
	}
	
	public function insereNoticia($noticia){
		try {
			$dados  = "'".pg_escape_string($noticia->getTitulo())."',";
			$dados .= "'".pg_escape_string($noticia->getTexto())."',";
			$dados .= "'".pg_escape_string($noticia->getData())."',";
			$dados .= "'".pg_escape_string($noticia->getImagem())."'";
			
			$sql="INSERT into noticia (titulo,texto,data,imagem) VALUES (".$dados.")";
			echo $sql;			
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
				
		} catch (Exception $e) {
			return false;
				
		}
	}
	
	public function editaNoticia($noticia){
		
	}
	
	public function removeNoticia($noticia){
		
	}
	
	public function getNoticia($id){
		
	}
	
	public function getNoticias(){
		
	try {
			$sql = "SELECT * FROM noticia ";
			$this->db->query($sql);
			if($this->db->quantidadeRegistros() > 0) {
				$obj = $this->db->fetchObj();
				while($obj = $this->db->fetchObj()) {
					$arr[] = new Noticia($obj->id_noticia, $obj->titulo, $obj->texto, $obj->data, $obj->imagem);
				}
				$this->resp = $arr;
				return true;
			} else {
				$arr[] = new Noticia($this->db->getErro(), $this->db->getErro(), $this->db->getErro(), $this->db->getErro(), $this->db->getErro());
				$this->resp = $arr;
				return false;
			}
		} catch (Exception $e) {
			$arr[] = new Usuario($e->getMessage(), $e->getMessage(), $e->getMessage(), $e->getMessage(), $e->getMessage(), $e->getMessage());
			$this->resp = $arr;
			return false;
		}
	}
	
	public function getResp(){
		return $this->resp;
	}
}

?>
