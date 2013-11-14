var InsereCampoHoraMin = function() {
	this.ids = ['hora_escolhida' ,'slider_range_hora', 'slider_range_min'];
};
InsereCampoHoraMin.prototype.criaCampos = function(element) {
	var self = this;
	var data = new Date();
	if(jQuery(element).val() != "") {
		var dataHora = jQuery(element).val();
		dataHora = dataHora.split(' - ');
		horaMinuto = dataHora[1].split(':');
		var hora = horaMinuto[0];
		var minutos = horaMinuto[1];
	} else {
		var hora = data.getHours().toString();
		if(hora.length == 1) {
			hora = "0"+hora;
		}
		
		var minutos = data.getMinutes().toString();
		if(minutos.length == 1) {
			minutos = "0"+minutos;
		}
	}
	setTimeout(function() {
		var htmlspan = '<p id="'+self.ids[0]+'" class="datepicker-hora">HORA: <span id="hora"></span>:<span id="minutos"></span></p><br clear="all"/>';
		var htmlHora = '<span class="date-time-text">HORA</span><div id="'+self.ids[1]+'" class="slider-hora"></div>';
		var htmlMin = '<span class="date-time-text">MINUTO</span><div id="'+self.ids[2]+'" class="slider-hora"></div>';
		jQuery('#ui-datepicker-div').append(htmlspan);
		jQuery('#ui-datepicker-div').append(htmlHora);
		jQuery('#ui-datepicker-div').append(htmlMin);
		jQuery('#hora').html(hora);
		jQuery('#minutos').html(minutos);
		jQuery( '#'+self.ids[1] ).slider({
			range: "min",
			value: hora,
			min: 00,
			max: 23,
			slide: function( event, ui ) {
				var hor = ui.value.toString();
				if(hor.length == 1) {
					hor = "0"+hor;
				} else {
					hor = ui.value;
				}
				jQuery( "#hora" ).html( hor );
			}
		});
		jQuery( '#'+self.ids[2]).slider({
			range: "min",
			value: minutos,
			min: 00,
			max: 59,
			slide: function( event, ui ) {
				var minu = ui.value.toString();
				if(minu.length == 1) {
					minu = "0"+minu;
				} else {
					minu = ui.value;
				}
				jQuery( "#minutos" ).html( minu );
			}
		});
	}, 10);
};
InsereCampoHoraMin.prototype.destroy = function(type, value, element) {
	var self = this;
	var hora = jQuery('#hora').html();
	var minuto = jQuery('#minutos').html();
	jQuery('#'+self.ids[1]+', #'+self.ids[2]).slider('destroy');
	jQuery('#'+self.ids[1]+', #'+self.ids[2]+', #'+self.ids[0]).remove();
	if(type == 'class') {
		var prox = jQuery(element).next();
		if(jQuery(prox).hasClass(value)) {
			var date = jQuery(element).val();
			date = date.split(' - ');
			if(date != "") {
				jQuery(prox).val(date[0]+" "+hora+":"+minuto);
				jQuery(element).val(date[0]+" - "+hora+":"+minuto);
			}
		}
	} else if (type == 'id') {
		jQuery(id).val(hora+":"+minuto);
	}
};