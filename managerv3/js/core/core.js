/* Chamada da funcão que adiciona o campo de hora e minuto nos datepicker */
var criaHoraMinutos = new InsereCampoHoraMin();
/* END: Chamada da funcão que adiciona o campo de hora e minuto nos datepicker */

/* Chamada da função para ordenção da tabela
 * @param callback
 * 
 */

//var menuTopoSelect = new W8Select({theme:'black', element:'.select-navegacao'});

jQuery(function() {
	
	var carregaCss = new CarregarCss();
	carregaCss.carregarPaginas();
	if(browser.type == "Mozilla") {
		carregaCss.crossBrowser('firefox');
	}
	/* Efeito de Hover do menu do topo */
	if(!jQuery('#main-wrap').hasClass('login')) {
		var menuTopo = new MenuTopoHover({animation:'fade',menuId:'#nav-wrap #nav'});
	}
	
	/* END: Efeito de Hover do menu do topo */
	
	/* Chamada Menu Select do menu do topo */
	var menuSelect = new MenuStyleSelect();
	/* END: Chamada Menu Select do menu do topo */
	
	/* Chamada controle de pesquisa avançada */
	if(jQuery('.advanced-search').html() != null) {
		var pesAvanc = new ControlaBuscaAvancada({animation:'slide'});
	}
	/* END: Chamada controle de pesquisa avançada */
	var controlaPosicaoMenu = new ControlMenuPosition();
});

function fcTeste(string) {
	console.log(string)
}