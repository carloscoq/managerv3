<?php
class UsuarioDao {

	private $resp;
	private $db;
	private $grupos;

	public function __construct() {
		$this->db = new DB();
	}

	public function getResp() {
		return $this->resp;
	}
	
	public function getGrupos(){
		return $this->grupos;
	}
	


	public function retornaUsuario($extra="") {
		try {
			$sql = "SELECT * FROM usuario " . $extra;
			$this->db->query($sql);			
			if($this->db->quantidadeRegistros() > 0) {
				while($obj = $this->db->fetchObj()) {
					$_SESSION['usuario'] = $obj->nome;
				}
				return true;
			} else {

				return false;
			}
		} catch (Exception $e) {

			return false;
		}
	}


	

    }
?>