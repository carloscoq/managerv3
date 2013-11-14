			<footer id="footer-wrap">
				<div id="footer">
					<p id="textos-rodape">
						<span id="copyright">
							Copyright <strong>2012</strong>&copy;
						</span>
						<a href="mailto:contato@w8s.com.br" id="email">
							<strong>suporte@w8s.com.br</strong>
						</a>
						<a href="www.w8s.com.br" rel="external" id="logo-w8s">
							<img src="img/logos/desenvolvido_por_w8s.png" alt="Desenvolvido por W8S" />
						</a>
					</p>
				</div>
				<div class="cAll"><!-- --></div>
			</footer>
			<div id="loader">
				<div id="loader-wrap">
					<img src="img/loader.gif" />
				</div>
			</div>
			<div id="dialog-message" title="Notificação">
				<p class="text-message">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.
				</p>
			</div>
			<script type="text/javascript" src="js/script.js.php"></script>
			<!--[if lt IE 9]>
				<script type="text/javascript" src="js/html5shiv.js"></script>
				<script type="text/javascript" src="js/script_ie8_ie7.js"></script>
			<![endif]-->
			<?php
			$editor = 2;
			if($editor == 1) {
			?>
			<script src="js/3rd_party/tiny_mce/tiny_mce.js" type="text/javascript" charset="utf-8"></script>
			<script src="js/3rd_party/startTinyMCE.js" type="text/javascript" charset="utf-8"></script>
			<?php
			} elseif($editor = 2) {
			?>
			<script src="js/3rd_party/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
			<script src="js/3rd_party/startCKEditor.js" type="text/javascript" charset="utf-8"></script>
			<?php
			} 
			?>