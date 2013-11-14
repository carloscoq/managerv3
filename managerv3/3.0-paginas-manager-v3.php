<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php require 'inc/head.php'; ?>
	</head>
	<body>
		<div id="main-wrap">
			<!-- Include Cabeçalho -->
			<?php require 'inc/header.php' ?>
			<!-- END: Include Cabeçalho -->
			<!-- Include Menu Topo -->
			<?php $menu="paginas"; ?>
			<?php require 'inc/menu_topo.php' ?>
			<!-- END: Include Menu Topo -->
			<div id="main-content">
				<div id="content-wrap">
					<!-- Include Dicas -->
					<?php require 'inc/dicas_bread_crumb.php' ?>
					<!-- END: Include Dicas -->
					<!-- Include Menu Interno -->
					<?php require 'inc/menu_interno.php' ?>
					<!-- END: Include Menu Interno -->
					
					<div id="content">
						<div class="box">
							<div class="box-titulo">
								<div class="align-middle">
									<div class="w-icon-shadow-wrapper">
										<a href="editar" class="w-icon-button ativo tooltip-this" title="Editar">
											<span class="ui-icon ui-icon-pencil"></span>
										</a>
									</div>
									<div class="w-icon-shadow-wrapper">
										<a href="listar" class="w-icon-button tooltip-this" title="Listar">
											<span class="ui-icon ui-icon-document"></span>
										</a>
									</div>
									<div class="select-cad-wrap black-theme">
										<select class="select-cad">
											<option value=""></option>
											<option value="1">Home</option>
											<option value="2">Inscrições</option>
											<option value="3">Unidades</option>
										</select>
									</div>
									<label class="select-cad-label">Cadastrando em:</label>
								</div>
							</div>
							<div class="cadastro-wrap">
								<div class="publicacao-wrap">
									<label>Publicação em:</label>
									<div class="publicacao-input-wrap">
										<div class="datepicker-icon"><!-- --></div>
										<input type="text" class="datepicker hasDateTime" />
										<input type="hidden" class="data-hora" />
									</div>
								</div>
								<div class="campos">
									<div class="grid1">
										<label>Título</label>
										<input type="text" class="input-fields" />
									</div>
									<div class="grid2">
										<div class="grid-child">
											<label>Título</label>
											<input type="text" class="input-fields" />
										</div>
										<div class="grid-child white-theme">
											<label>Título</label>
											<select class="select-normal">
												<option value=""></option>
												<option value="1">Sim</option>
												<option value="2">Não</option>
											</select>
										</div>
									</div>
									<div class="grid3">
										<div class="grid-child white-theme">
											<label>Escolha</label>
											<select id="escolha" class="select-normal" placeholder="Selecione">
												<option value=""></option>
												<option value="1">Sim</option>
												<option value="2" selected="selected">Não</option>
											</select>
										</div>
										<div class="grid-child">
											<label>Título</label>
											<input type="text" class="input-fields" />
										</div>
										<div class="grid-child">
											<label>Título</label>
											<input type="text" class="input-fields" />
										</div>
									</div>
									<div class="grid4">
										<div class="grid-child">
											<label>Título</label>
											<input type="text" class="input-fields" />
										</div>
										<div class="grid-child">
											<label>Título</label>
											<div class="datepicker-icon"><!-- --></div>
											<input type="text" class="datepicker" />
										</div>
										<div class="grid-child white-theme">
											<label>Título</label>
											<select class="select-normal" placeholder="Selecione">
												<option value=""></option>
												<option value="1">Sim</option>
												<option value="2">Não</option>
											</select>
										</div>
										<div class="grid-child">
											<label>Título</label>
											<input type="text" class="input-fields" />
										</div>
									</div>
									<div class="grid1">
										<label>Título</label>
										<textarea class="editor_texto" name="editor_texto"></textarea>
									</div>
									<div class="grid1 white-theme">
										<label>Título</label>
										<select class="select-normal">
											<option value=""></option>
											<option value="1">Sim</option>
											<option value="2">Não</option>
										</select>
									</div>
									<div id="images-upload-wrap">
										<a href="javascript:;" class="bg-btn-uploads">
											<span class="ui-icon ui-icon-image"></span>
											<span class="w-button-text">Inserir Imagens</span>
											<input type="file" />
										</a>
										<a href="javascript:;" class="bg-btn-uploads">
											<span class="ui-icon ui-icon-start-upload"></span>
											<span class="w-button-text">Iniciar Upload</span>
										</a>
										<a href="javascript:;" class="bg-btn-uploads">
											<span class="ui-icon ui-icon-cancel"></span>
											<span class="w-button-text">Cancelar Upload</span>
										</a>
										<a href="javascript:;" class="bg-btn-uploads">
											<span class="ui-icon ui-icon-delete"></span>
											<span class="w-button-text">Deletar Upload</span>
										</a>
										<input type="checkbox" class="delete-all" />
										<ul class="upload-images">
											<!-- <li class="sem-imagens">
												Solte os arquivos aqui ou clique em Inserir Imagens
											</li> -->
											<li class="container-images">
												<div class="grid5">
													<div class="grid-child">
														<div class="container-image-uploaded">
															<img src="img/temp/temp-upload.png" class="img-uploaded" />
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle image-name">
															logo-w8s.gif
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle image-size">
															1.59kb
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle image-loader-wrap">
															<div class="img-loader-wrap">
																<div class="image-loager-bg" style="width: 45%;"></div>
																<div class="image-loager-fg" style="width: 45%;"></div>
															</div>
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle btn-wrap">
															<a href="javascript:;" class="btn-upload blue tooltip-this" title="Iniciar Upload">
																<span class="ui-icon ui-icon-start-upload"></span>
															</a>
															<a href="javascript:;" class="btn-upload red tooltip-this" title="Cancelar Upload">
																<span class="ui-icon ui-icon-cancel"></span>
															</a>
															<input type="checkbox" class="delete-this" />
														</div>
													</div>
												</div>
											</li>
											<li class="container-images">
												<div class="grid5">
													<div class="grid-child">
														<div class="container-image-uploaded">
															<img src="img/temp/temp-upload.png" class="img-uploaded" />
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle image-name">
															logo-w8s.gif
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle image-size">
															1.59kb
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle image-loader-wrap">
															<div class="img-loader-wrap">
																<div class="image-loager-bg" style="width: 25%;"></div>
																<div class="image-loager-fg" style="width: 25%;"></div>
															</div>
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle btn-wrap">
															<a href="javascript:;" class="btn-upload blue tooltip-this" title="Iniciar Upload">
																<span class="ui-icon ui-icon-start-upload"></span>
															</a>
															<a href="javascript:;" class="btn-upload red tooltip-this" title="Cancelar Upload">
																<span class="ui-icon ui-icon-cancel"></span>
															</a>
															<input type="checkbox" class="delete-this" />
														</div>
													</div>
												</div>
											</li>
											<li class="container-images">
												<div class="grid5">
													<div class="grid-child">
														<div class="container-image-uploaded">
															<img src="img/temp/temp-upload.png" class="img-uploaded" />
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle image-name">
															logo-w8s.gif
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle image-size">
															1.59kb
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle image-loader-wrap">
															<div class="img-loader-wrap">
																<div class="image-loager-bg" style="width: 95%;"></div>
																<div class="image-loager-fg" style="width: 95%;"></div>
															</div>
														</div>
													</div>
													<div class="grid-child">
														<div class="align-middle btn-wrap">
															<a href="javascript:;" class="btn-upload blue tooltip-this" title="Iniciar Upload">
																<span class="ui-icon ui-icon-start-upload"></span>
															</a>
															<a href="javascript:;" class="btn-upload red tooltip-this" title="Cancelar Upload">
																<span class="ui-icon ui-icon-cancel"></span>
															</a>
															<input type="checkbox" class="delete-this" />
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="result-wrap">
								<div class="align-middle">
									<input type="button" class="btn-laranja btn-salvar" value="Salvar"  />
									<input type="button" class="btn-laranja btn-cancelar" value="Cancelar"  />
									<input type="button" class="btn-laranja btn-salvar" onclick="cropDialog()" value="Crop" />
									<input type="button" class="btn-laranja btn-salvar" onclick="notificacaoDialog('Mensagem, Teste')" value="Notificação" />
								</div>
							</div>
						</div>
						
					</div>
					<div class="cAll"><!-- --></div>
				</div>	
			</div>
			<!-- Include Footer -->
			<?php require 'inc/footer.php' ?>
			<!-- END: Include Footer -->
			<div id="dialog-crop" title="Realizar Crop da Imagem">
				<div id="imagem-crop">
					<img src="img/temp/temp-crop.jpg" title="temp-crop" class="imagem-crop" />
				</div>
				<div id="carrousel-wrap">
					<button type="button" class="up btn-laranja disabled">
						<span class="w-icon w-icon-arrow-up"></span>
					</button> 
					<button type="button" class="down btn-laranja">
						<span class="w-icon w-icon-arrow-down"></span>
					</button>
					<div class="carousel-vertical">
						<ul>
							<li>
								<a href="img/temp/temp-crop.jpg" title="Editar" class="img-crop">
									<img src="img/temp/temp-crop.jpg" title="temp-crop" />
								</a>
								<div class="editando">
									<span>Editar</span>
								</div>
							</li>
							<li>
								<a href="img/temp/temp-crop2.jpg" title="Editar" class="img-crop">
									<img src="img/temp/temp-crop2.jpg" title="temp-crop" />
								</a>
							</li>
							<li>
								<a href="img/temp/temp-crop.jpg" title="Editar" class="img-crop">
									<img src="img/temp/temp-crop.jpg" title="temp-crop" />
								</a>
							</li>
							<li>
								<a href="img/temp/temp-crop.jpg" title="Editar" class="img-crop">
									<img src="img/temp/temp-crop.jpg" title="temp-crop" />
								</a>
							</li>
							<li>
								<a href="img/temp/temp-crop.jpg" title="Editar" class="img-crop">
									<img src="img/temp/temp-crop.jpg" title="temp-crop" />
								</a>
							</li>
							<li>
								<a href="img/temp/temp-crop.jpg" title="Editar" class="img-crop">
									<img src="img/temp/temp-crop.jpg" title="temp-crop" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="buttons-pane">
					<input type="button" class="btn-laranja btn-crop" value="Crop"  />
					<input type="button" class="btn-laranja btn-cancelar" id="cancela-crop" value="Cancelar"  />
				</div>
			</div>
		</div>
	</body>
</html>
