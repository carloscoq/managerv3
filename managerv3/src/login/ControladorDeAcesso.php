<?php
class ControladorDeAcesso{
	
	public function login($login,$senha){
		session_start();
		$usuarioDAO = new UsuarioDAO();
		
		$extra = "WHERE login LIKE '".$login."' AND senha LIKE '".$senha."'";
		
		if($usuarioDAO->retornaUsuario($extra)){
			echo "success";
		}else {
			echo "fail";
		}
		//$resposta = $usuarioDAO->retornaUsuario("WHERE ");
	}
}