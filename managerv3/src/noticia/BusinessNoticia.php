<?php

class BusinessNoticia{
	
	public function checaTitulo($titulo){
		if ($titulo == '') {
			return true;
		}else{
			return false;
		}
	}
	
	public function checaTexto($texto){
		if ($texto == '') {
			return true;
		}else{
			return false;
		}
	}
	
	
}

?>