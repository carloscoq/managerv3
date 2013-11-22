<?php

require_once 'BusinessNoticia.php';
require_once 'DAONoticia.php';
require_once 'Noticia.php';

class ServiceNoticia{
	
	public function form($titulo, $texto, $data, $imagem){
		
		$bNoticia = new BusinessNoticia();
		$dao = new DAONoticia();
		$noticia = new Noticia();
		
		if($bNoticia->checaTitulo($titulo)){
			return "Preencha o Título!";
			exit();
		}else{
			if(false){//$bNoticia->checaTexto($texto)){
				return "Preencha o Texto!";
			exit();
			}
			else{
				if($data == ''){
					
				}
				
				$noticia->setTitulo($titulo);
				$noticia->setTexto($texto);
				$noticia->setData($data);
				$noticia->setImagem($imagem);
				
				if($dao->insereNoticia($noticia)){
					return "Notícia inserida com sucesso!";
				}else{
					return "Falha na inserção da notícia";
				}
			}
		}
	}
	
	public function getAll(){
		
		$dao = new DAONoticia();
		
		if($dao->getNoticias()){
			$noticias = $dao->getResp();
			$retorno = $this->makeJsonResponse($noticias); 
			return $retorno;
		}
		
	}
	
	public function makeJsonResponse($noticias){
		
		if($noticias != null){
			$noticiasResponse = "[";
			foreach($noticias as $n) {
				$noticiasResponse .= str_replace('\u0000Noticia\u0000', '', json_encode((array)$n).',');
			}
			$noticiasResponse .= "]";
			$noticiasResponse = str_replace('},]', '}]', $noticiasResponse);
			return $noticiasResponse;
		}else{
			return null;
		}
	}
	
	
	
}


?>