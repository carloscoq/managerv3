<?php

require_once('ControladorDeAcesso.php');
require_once('../dao/UsuarioDao.php');
require_once('../db/DB.php');

$senha = $_REQUEST['senha'];
$login = $_REQUEST['login'];
$action = $_REQUEST['ac'];

$controlador = new ControladorDeAcesso();

switch ($action) {
	case 'login':
		$retorno = $controlador->login($login,$senha);
		echo $retorno;
	break;
	
	default:
		echo "sem ação";
	break;
}

?>