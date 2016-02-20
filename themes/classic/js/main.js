/*$(document).on('ready', function(){
	$.getCategoria = function() {
		alert('categorias');
	}

	$('.categoria').on('click', function(e){
		e.preventDefault();
		var categoria = $(this).data('categoria');


		$.ajax({
			url: '/yii/plataforma/shop/categoria/',
			data: { name: categoria },
			beforeSend: function(){
				$('#loading-content').css({
					'display': 'none'
				});
			},
			success: function(results){
				console.log(results);
			}
		});

	});
})*/