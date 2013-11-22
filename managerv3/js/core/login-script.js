jQuery(function() {

	jQuery('#btn-login').click(function(){
		if(jQuery('#email_input').val() != ''){
			$.ajax({
				url:"src/mail/sendMail.php?email="+$('#email_input').val(),
				success:function(data){
					if(data == "success"){
						jQuery('.msg-erro').html('A sua senha foi enviado para o email informado');
						jQuery('.msg-erro').css('visibility','visible');
					}else{
						if(data == "fail"){
							jQuery('.msg-erro').html('Falha no envio do email. Cheque os seus dados');
							jQuery('.msg-erro').css('visibility','visible');
						}
					}
				}
			});
		}else{
			if(jQuery('#login_input').val() == '' || jQuery('#password_input').val() == ''){
				jQuery('.msg-erro').css('visibility','visible');
			}else{
				$.ajax({
					url:"src/login/access.php?ac=login&login="+$('#login_input').val()+"&senha="+$('#password_input').val(),
					success:function(data){
						if(data == "success"){
							window.location.href = "dashboard.php";
						}else{
							jQuery('.msg-erro').css('visibility','visible');
						}
					}
				});
			}
		}
	});

	jQuery('#esqueceu_senha').click(function() {
		jQuery('#logar').fadeOut(function() {
			jQuery('#recupera_senha').fadeIn();
		})
	});

	jQuery('#voltar_login').click(function() {
		jQuery('#email_input').val('');
		jQuery('#recupera_senha').fadeOut(function() {
			jQuery('#logar').fadeIn();
		})
	});
});



