jQuery(function(){

	jQuery('#noticia_salvar_btn').click(function(){

		$.post("src/noticia/FacadeNoticia.php?ac=form", $("#noticia_form").serialize(),
				function(data) {
			alert(data);
		});
	});
	
	jQuery('#editar_noticia_btn').click(function()){
		alert("ok");
	});


});

$( document ).ready(function() {

	$.ajax({
		url:"src/noticia/FacadeNoticia.php?ac=getAll",
		success:function(data){
			noticias = $.parseJSON(data)
			var lista = "";
			var tamanho = noticias.length;
			if(noticias != null){
				for (i=0; i<noticias.length; i++ ){
					lista += '<tr>';
					lista += '<td class="col-checkbox"><input type="checkbox" class="check-body" name="chk-listagem[]" /></td>';
					lista += '<td>'+noticias[i].titulo+'</td>';
					lista += '<td>'+noticias[i].data+'</td>';
					lista += '<td class="no-border-right"></td>';
					lista += '<td class="no-border-right"></td>';
					lista += '<td class="tooltip-wrap">';
					lista += '<div class="tooltip-listagem tooltip-bg-right">';
					lista += '<div class="tooltip-bg-left">';
					lista += '<div class="tooltip-bg">';
					lista += '<a id="editar_noticia_btn" href="" class="w-icon-tooltip">';
					lista += '<span class="ui-icon ui-icon-black ui-icon-gear"></span>';
					lista += '</a>';
					lista += '<a href="javascript:;" class="w-icon-tooltip putTrash tooltip-this" title="Excluir">';
					lista += '<span class="ui-icon ui-icon-black ui-icon-trash"></span>';
					lista += '</a>';
					lista += '<div class="trash-question">';
					lista += '<a href="javascript:;" class="yes">Sim</a>';
					lista += '<span> | </span>';
					lista += '<a href="javascript:;" class="no">Não</a>';
					lista += '</div>';
					lista += '</div> </div> </div> </td> </tr>';
				}
			}
			$("#table_result_noticias").html(lista);
			$("#msg_lista_qtd").html("Encontradas "+tamanho+" notícias");
		}
	});
});