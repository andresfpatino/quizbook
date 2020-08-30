(function($){
	$('#quizbook ul li .quizbook__question--answer').on('click', function(){
		$(this).siblings().removeClass('selected');
		$(this).siblings().removeAttr('seleccionada');
		$(this).addClass('selected');
		$(this).attr('seleccionada', true);		
	});

	$('#quizbook_enviar').on('submit', function(e){
		e.preventDefault();
		var respuestas = $('[seleccionada]');
		var id_respuestas = [];

		$.each(respuestas, function(llave, valor){
			id_respuestas.push(valor.id);
		});

		var datos = {
			action: 'quizbook_resultados', 
			data: id_respuestas
		}
		
		$.ajax({
			url: admin_url.ajax_url, 
			type: 'POST',
			data: datos
		}).done(function(respuesta){
			var clase;
			if(respuesta.total > 60){
				clase= 'aprobado';
			}else {
				clase = 'noaprobado';
			}

			$('#quizbook_resultado').append('Total: ' + respuesta.total).addClass(clase);
			$('#quizbook_submit').remove();
		});

	});

})(jQuery);
