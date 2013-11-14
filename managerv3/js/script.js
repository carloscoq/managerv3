/**
 * @author W8S
 */

/* Após carregar a pågina
 *
 */
jQuery(function() {
	
	if(browser.type == 'Firefox') {
		
	}
	
	/* Chamada accordion menu interno */
	jQuery('#nav-wrap-interna #nav-interna').accordion({
		axis : 'y',
		header : "> div > h3",
		collapsible : true
	}).sortable({
		handle : "h3",
		changes : function(event, ui) {
			// IE doesn't register the blur when sorting
			// so trigger focusout handlers to remove .ui-state-focus

		},
	});
	;
	/* END: Chamada accordion menu interno */
	/* Ajusta borda do penultimo item da tabela */
	jQuery('.tbl-list tbody tr').each(function() {
		jQuery(this).children('td:last').prev().addClass('no-border-right');
	});
	/* END: Ajusta borda do penultimo item da tabela */
	/* Ajusta larguras dos itens da tabela */
	jQuery('.tbl-list tbody tr td').each(function() {
		if(!jQuery(this).hasClass('tooltip-wrap')) {
			jQuery(this).css({
				width : jQuery(this).width()
			});
		}
	});
	/* END: Ajusta larguras dos itens da tabela */
	/* Chamada função botão de ações das listagens */
	var permissaoExcluir = new PutTrash();
	var hBtnAcao = new HoverBtnAcao({
		after:function() {
			permissaoExcluir.reset();
		}
	});
	/* END: Chamada função para ordenação das listagens */
	/* Chamada função para ordenação das listagens */
	var posi = new PosicaoDeItens({
		changeCallback : function() {
			fcTeste('teste');
		},
		startCallback : function() {
			/* Essa chamada é necessaria para esconder os botões de ação durante a ordenação */
			hBtnAcao.hideElements();
			hBtnAcao.stayClosed();
		},
		stopCallback: function() {
			/* Essa chamada é necessaria para ajustar a tabela apos a ordenação */
			hBtnAcao.showElements();
			hBtnAcao.hideElements();
			hBtnAcao.removeStayClosed();
			/* END: Essa chamada é necessaria para ajustar a tabela apos a ordenação */
		}
	});
	/* END: Chamada função para ordenação das listagens */
	/* Chamada Select */

  $('.select-box').chosen();

	/* END: Chamada Select */
	/* Checkbox seleciona todos da litagem */
	jQuery('.check-geral').live({
		click:function(e) {
			if(jQuery(this).attr('checked') == 'checked') { 
				jQuery('.tbl-list tbody tr').each(function() {
					console.log(jQuery(this).children('td:first').children('input[type="checkbox"]'));
					jQuery(this).children('td:first').children('input[type="checkbox"]').attr('checked','checked');
				});
			} else {
				jQuery('.tbl-list tbody tr').each(function() {
					console.log(jQuery(this).children('td:first').children('input[type="checkbox"]'));
					jQuery(this).children('td:first').children('input[type="checkbox"]').removeAttr('checked');
				});
			}
		}
	});
	/* END: Checkbox seleciona todos da litagem */
	/* Sele ciona todas as imagens para exclusão */
	jQuery('.delete-all').live({
		click:function(e) {
			if(jQuery(this).attr('checked') == 'checked') { 
				// jQuery('.delete-this').attr('checked','checked');
				jQuery('.delete-this').trigger('click');
			} else {
				jQuery('.delete-this').trigger('click');
			}
		}
	});
	jQuery('.delete-this').live({
		change:function() {
			var unchecked = 0;
			jQuery('.delete-this').each(function() {
				if(jQuery(this).attr('checked') != 'checked') {
					unchecked++;
				}
			});
			if(unchecked >= 1) {
				jQuery('.delete-all').removeAttr('checked');
			} else if (unchecked == 0){
				jQuery('.delete-all').attr('checked','checked');
			}
		}
	});
	/* END: Seleciona todas as imagens para exclusão */
	/* Tooltip */
	var toolltip = new Tooltip({
		bindElement:'.tooltip-this',
		marginRight: 5
	})
	/* END: Tooltip */
	/* Datepicker */
	var dayNames = ['DOM', 'SEG', 'TER', 'QUA', 'QUI', 'SEX', 'SAB'];
	var monthNames = ['JANEIRO', 'FEVEREIRO', 'MARÇO', 'ABRIL', 'MAIO', 'JUNHO', 'JULHO', 'AGOSTO', 'SETEMBRO', 'OUTUBRO', 'NOVEMBRO', 'DEZEMBRO'];
	jQuery('.datepicker').datepicker({
		dateFormat: 'dd/mm/yy',
		dayNamesMin: dayNames,
		monthNames: monthNames,
		beforeShow: function(input) {
			if(jQuery(input).hasClass('hasDateTime')) {
				criaHoraMinutos.criaCampos(input);
			}
		},
		onClose: function(dateText, inst) {
			if(jQuery(inst.input).hasClass('hasDateTime')) {
				criaHoraMinutos.destroy('class','data-hora',inst.input);
			}
		},
		onChangeMonthYear: function(year, month, inst) {
			if(jQuery(inst.input).hasClass('hasDateTime')) {
				criaHoraMinutos.criaCampos(inst.input);
			}
		}
	});
	/* END: Datepicker */
	/* Todo input file que tiver esse classe, vai setar no input anterior a ele o caminho */
	setaCaminhoArquivoParaInput();
	/* Todo input file que tiver esse classe, vai setar no input anterior a ele o caminho */
	if(browser.type == "MSIE" && browser.version < 9) {
		var placeholder = new Placeholder();
	}
	if(browser.type == "Firefox" && browser.version < 4) {
		var placeholder = new Placeholder();
	}
});

/* END: Após carregar a pagina */

$('.select-normal').chosen();

jQuery(function() {


  $('.select-cad').chosen();
  $('.select-box-age').chosen();

});