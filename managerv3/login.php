<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php require 'inc/head.php'; ?>
		<script src="js/core/login-script.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="main-wrap" class="login">
			<div id="main-content">
				<div id="content-wrap" class="login">
					<div id="content">
						<img src="img/temp/logo_temp.png" id="logo-cliente" />
						<p id="texto-manager">
							data<strong>manager</strong> <small>3.0</small>
						</p>
						<p class="mensagem">
							Preencha os campos para acessar o sistema
						</p>
						<form action="javascript:;" method="post" class="form-class">
							<div id="logar">
								<input type="text" class="input-class mg-btt9"
								placeholder="Email" id="login_input"/>
								<input type="password" class="input-class mg-btt9"
								placeholder="Password" id="password_input"/>
								<p class="perdeu_senha">
									<a href="javascript:;" id="esqueceu_senha">
										Esqueceu sua senha?
									</a>
								</p>
							</div>
							<div id="recupera_senha">
								<input type="text" class="input-class mg-btt9"
								placeholder="Email" id="email_input"/>
								<p class="perdeu_senha">
									<a href="javascript:;" id="voltar_login">
										voltar
									</a>
								</p>
							</div>
							<p class="msg-erro">
								Por favor preencha corretamente os seus dados
							</p>
							<input type="submit" id="btn-login"/>
						</form>
					</div>
					<div class="cAll"><!-- --></div>
				</div>				
			</div>
			<!-- Include footer -->
			<?php require 'inc/footer.php' ?>
			<!-- END: Include footer -->
		</div>
		<div class="preload-images">
			<img src="img/buttons/btn-acessar-inativo.png" />
			<img src="img/buttons/btn-acessar.png" />
		</div>
	</body>
</html>