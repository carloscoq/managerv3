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
										<a href="exluir" class="w-icon-button tooltip-this" title="Excluir">
											<span class="ui-icon ui-icon-trash"></span>
										</a>
									</div>
									<div class="w-icon-shadow-wrapper">
										<a href="editar" class="w-icon-button tooltip-this" title="Editar">
											<span class="ui-icon ui-icon-pencil"></span>
										</a>
									</div>
									<div class="w-icon-shadow-wrapper">
										<a href="listar" class="w-icon-button tooltip-this ativo" title="Listar">
											<span class="ui-icon ui-icon-document"></span>
										</a>
									</div>
									<div class="w-icon-shadow-wrapper">
										<a href="pesquisar" id="pesquisa-avancada" class="w-icon-button w-button-text-helper">
											<span class="w-button-text">
												Busca<br />
												Avanc.
											</span>
											<span class="ui-icon ui-icon-search"></span>
										</a>
									</div>
									<input type="text" 
										class="search-input"
										placeholder="Faça sua busca aqui"
									/>
									<input type="submit" class="icon-search" value="" />
								</div>
							</div>
							<div class="advanced-search closed">
								<div class="grid4">
									<div class="grid-child">
										<p>
											<input type="checkbox" />
											<label>Filtro 001</label>
										</p>
										<p>
											<input type="checkbox" />
											<label>Filtro 002</label>
										</p>
										<p>
											<input type="checkbox" />
											<label>Filtro 003</label>
										</p>
									</div>
									<div class="grid-child">
										<div class="select-wrap half-space black-theme">
											<select class="select-box-age" data-placeholder="Idade">
												<option value=""></option>
												<option value="1">teste</option>
												<option value="2">teste2</option>
											</select>
										</div>
										<div class="select-wrap entire-space black-theme" data-placeholder="Selecione">
											<select class="select-box">
												<option value=""></option>
												<option value="1">teste</option>
												<option value="2">teste2</option>
											</select>
										</div>
										<div class="select-wrap entire-space black-theme" data-placeholder="Selecione">
											<select class="select-box">
												<option value=""></option>
												<option value="1">teste</option>
												<option value="2">teste2</option>
											</select>
										</div>
									</div>
									<div class="grid-child">
										<p>
											Uma opção a ser escolhida
										</p>
										<div class="radios-wrap">
											<input type="radio" name="opcao1[]" />
											<label>Sim</label>
											<input type="radio" name="opcao1[]" checked="checked" />
											<label>Não</label>
										</div>
										<div class="radios-wrap">
											<input type="radio" name="opcao2[]" />
											<label>Sim</label>
											<input type="radio" name="opcao2[]" checked="checked" />
											<label>Não</label>
										</div>

									</div>
									<!--<div>
										Se necessário colocar conteudo aqui
									</div>-->
									<input type="submit" class="btn-laranja btn-buscar" value="Buscar" />
								</div>
							</div>
							<table class="tbl-list sort actionHover">
								<thead>
									<tr>
										<th class="col-checkbox">
											<input type="checkbox" 
												class="check-geral" 
												name="chk-listagem[]" />
										</th>
										<th>
											Nome
										</th>
										<th>
											Data
										</th>
										<th colspan="3">
											Status
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Ativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td class="col-checkbox">
											<input type="checkbox" 
												class="check-body"
												 name="chk-listagem[]" />
										</td>
										<td>
											Fulano de tal tal
										</td>
										<td>
											19/04/2012
										</td>
										<td class="no-border-right">
											Inativo
										</td>
										<td class="tooltip-wrap">
											<div class="tooltip-listagem tooltip-bg-right">
												<div class="tooltip-bg-left">
													<div class="tooltip-bg">
														<a href="" class="w-icon-tooltip">
															<span class="ui-icon ui-icon-black ui-icon-gear"></span>
														</a>
														<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">
															<span class="ui-icon ui-icon-black ui-icon-trash"></span>
														</a>
														<div class="trash-question">
															<a href="javascript:;" class="yes">Sim</a>
															<span> | </span>
															<a href="javascript:;" class="no">Não</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="result-wrap">
								<div class="align-middle">
									<p class="msg">
										Encontrados 122 registros
									</p>
									<input type="button" class="btn-laranja btn-vermais" value="Ver Mais"  />
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
		</div>
	</body>
</html>
