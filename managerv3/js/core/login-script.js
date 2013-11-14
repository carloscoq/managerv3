jQuery(function() {
	jQuery('#esqueceu_senha').click(function() {
		jQuery('#logar').fadeOut(function() {
			jQuery('#recupera_senha').fadeIn();
		})
	});
	
	jQuery('#voltar_login').click(function() {
		jQuery('#recupera_senha').fadeOut(function() {
			jQuery('#logar').fadeIn();
		})
	});
});
