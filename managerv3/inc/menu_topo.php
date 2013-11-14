			<?php
				switch ($menu) {
					case 'paginas':
						$menu_paginas = " class=\"menu-ativo\"";
						$menu_dashboard = "";
						break;
					case 'dashboard':
						$menu_dashboard = " class=\"menu-ativo\"";
						$menu_paginas = "";
						break;
					default:
						$menu_dashboard = " class=\"menu-ativo\"";
						$menu_paginas = "";
						break;
				}
			?>
			<nav id="nav-wrap">
				<ul id="nav">
					<li<?=$menu_dashboard?>>
						<a href="dashboard.php" title="Dashboard">
							Dashboard
						</a>
					</li>
					<li<?=$menu_paginas?>>
						<a href="2.0-paginas-manager.php" title="Páginas">
							Páginas
						</a>
					</li>
					<li>
						<a href="dashboard.php" title="Dashboard">
							Mídias
						</a>
					</li>
					<li class="select-nav">
						<div class="align-middle">
							<div class="menu-style-select">
								<div class="align-middle menu-text">
									<span class='ui-icon ui-icon-gear'></span>
									<span class='button-text'>Configurações</span>
								</div>
								<div class="icon-menu"><!-- --></div>
								<div class="menu-wrapper">
									<ul class='menu-configuracao'>
										<li>
											Avançados
										</li>
										<li>
											Usuários
										</li>
										<li>
											Menus/Submenus
										</li>
										<li>
											Permissões
										</li>
										<li>
											FAQ
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</nav>