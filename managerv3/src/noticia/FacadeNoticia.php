<?php
require_once 'ServiceNoticia.php';

$action = $_REQUEST ['ac'];

if (isset ( $_REQUEST ['titulo'] )) {
	$titulo = $_REQUEST ['titulo'];
} else {
	$titulo = '';
}

if (isset ( $_REQUEST ['editor_texto'] )) {
	$texto = $_REQUEST ['editor_texto'];
} else {
	$texto = '';
}

$data = (isset ( $_REQUEST ['noticia_date_input'] ) ? $_REQUEST ['noticia_date_input'] : '');
$imagem = (isset ( $_REQUEST ['imagem'] ) ? $_REQUEST ['imagem'] : '');

$service = new ServiceNoticia ();

switch ($action) {
	
	case 'form' :
		$retorno = $service->form ( $titulo, $texto, $data, $imagem );
		echo $retorno;
		break;
	case 'edit' :
		echo "Notícia editada com sucesso!";
		break;
	case 'delete' :
		echo "Notícia deletada com sucesso!";
		break;
	case 'getAll' :
		$retorno = $service->getAll ();
		echo $retorno;
		break;
	default :
		;
		break;
}

?>