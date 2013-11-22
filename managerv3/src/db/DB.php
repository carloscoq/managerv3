<?php

class DB {

	private $server;
	private $usuario;
	private $senha;
	private $banco;
	private $conn;
	private $msgErroQuery;
	private $query;

	// inicializa as variaveis para a conexão com o banco
	public function __construct() {
		self::escreveDados($this->server, "localhost");
		self::escreveDados($this->usuario, "postgres");
		self::escreveDados($this->senha, "prodepa");
		self::escreveDados($this->banco, "managerv3");
		self::conexao();
	}

	// cria uma conexão
	private function conexao() {
            $str  = "host=".$this->server;
		$str .= " port=5432";
		$str .= " dbname=".$this->banco;
		$str .= " user=".$this->usuario;
		$str .= " password=".$this->senha;
		$conect = pg_connect($str);
		$this->conn = $conect;
            }

	public function exitConexao() {
		return pg_close($this->conn);
	}

	// escreve dados para as variaveis
	private function escreveDados(&$var, $param) {
		return $var = $param;
	}

	// faz uma query
	public function query($sql) {
		$query = pg_query($sql);
		$msgerr = pg_last_error();
		if($query) {
			$this->query = $query;
			return true;
		} else {
			$this->msgErroQuery = $msgerr;
			return false;
		}
	}

        // retorna o fetchArray da ultima consulta
	public function fetchAll() {
		return pg_fetch_all($this->query);
	}

        
	// retorna o fetchObject da ultima consulta
	public function fetchObj() {
		return pg_fetch_object($this->query);
	}

	// retorna o id do insert referido
	public function ultimoId() {
		return pg_last_oid($this->query);
	}

	// retorna a quantidade de registro encontrados
	public function quantidadeRegistros() {
		return pg_num_rows($this->query);
	}

	// mostra mensagem de erro na query
	public function getErro() {
		return $this->msgErroQuery;
	}

	// retorna query
	public function getQuery() {
		return $this->query;
	}

}
?>