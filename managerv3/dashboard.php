<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php require 'inc/head.php'; ?>
	</head>
	<body>
		<div id="main-wrap" class="dashboard">
			<!-- Include Cabeçalho -->
			<?php require 'inc/header.php' ?>
			<!-- END: Include Cabeçalho -->
			<!-- Include Menu Topo -->
			<?php $menu="dashboard"; ?>
			<?php require 'inc/menu_topo.php' ?>
			<!-- END: Include Menu Topo -->
			<div id="main-content">
				<div id="content-wrap">
					<!-- Include Dicas -->
					<?php require 'inc/dicas_bread_crumb.php' ?>
					<!-- END: Include Dicas -->
					
					<div id="content">
						<div class="box dashboard">
							<div class="box-titulo">
								<!-- -->
							</div>
							<ul id="dashboard-list">
								<li>
									<a href="javascript:;" class="dashboard-itens">
										<img src="img/misc/add-conteudo.png" 
											class="dashboard-img" alt="Adicionar Conteúdo" />
										<span class="dashboard-titulo">
											<?php echo $languages['manager_dashboard_add_content']; ?> 
										</span>
										<br />
										<span class="dashboard-texto">
											Começe agora mesmo abastecer o seu <br />
											website.<br />
											Tenha sempre atenção para as medidas 
											de imagens e ao conteúdo que você está <br />
											inserindo.
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="dashboard-itens">
										<img src="img/misc/dash-users.png" 
											class="dashboard-img users" alt="Adicionar Conteúdo" />
										<span class="dashboard-titulo users">
											Usuários
										</span>
										<br />
										<span class="dashboard-texto users">
											Gerencie aqui as pessoas que estão<br />
											autorizadas a inserirem conteúdo no website.<br />
											<br />
											<ul class="list-disc">
												<li>
													Altere senhas;
												</li>
												<li>
													Altere permissões;
												</li>
												<li>
													Etc...
												</li>
											</ul>
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="dashboard-itens down-itens">
										<img src="img/misc/dash-email.png" 
											class="dashboard-img email" alt="Adicionar Conteúdo" />
										<span class="dashboard-titulo email">
											E-mail
										</span>
										<br />
										<span class="dashboard-texto email">
											Acesse seus e-mails rapidamente 
											através<br />
											deste link.<br />
											Para segurança você será 
											redirecionado para<br />
											o seu cliente de e-mail cadastrado neste<br />
											manager.
										</span>
									</a>
								</li>
								<li>
									<a href="javascript:;" class="dashboard-itens down-itens">
										<img src="img/misc/dash-analytics.png" 
											class="dashboard-img analytics" alt="Adicionar Conteúdo" />
										<span class="dashboard-titulo analytics">
											Analytics
										</span>
										<br />
										<span class="dashboard-texto analytics">
											Saiba como andam os acessos do seu 
											site.<br/>
											Para segurança você será 
											redirecionado<br />
											para um link externo.
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="cAll"><!-- --></div>
				</div>	
			</div>
			
			<!-- Include Footer -->
			<?php require 'inc/footer.php' ?>
			<!-- END: Include Footer -->
		</div>
	</body>
</html>
