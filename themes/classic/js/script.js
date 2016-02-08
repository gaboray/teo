var plazo;
var modalidad;
var abono;
var cantidad;
$(document).on('ready', function(){
	var idLabel = "";
	function updateDeposit(){

		var precio = $('.plazo-picker').attr('data-price');
		plazo = $(idLabel).attr('data-plazo');
		modalidad = $(idLabel).attr('data-modalidad');
		var idPlazo = $(idLabel).attr('data-id');
		cantidad = $('input#cantidad').val();

		abono = (precio * cantidad)/plazo;
		abono = Math.ceil(abono);
		$('.abono').text(abono);
		$('.payment2').text("pesos " + modalidad);
		$('input#plazo').attr('value',idPlazo);
		$('input#abono').attr('value',abono);

		$('button#addSubmit').removeAttr('disabled');
		$('button#addSubmit').attr('tittle','Agregar a la cesta de compras');
	}

	$('.plazo-picker label').on('click', function(){
		var id = $(this).attr('id');
		idLabel = "label#" + id;
		updateDeposit();
	});

	$("input#cantidad").change(function(){
		if(idLabel != ""){
			updateDeposit();
		}
	});

	

	$('#pago').fadeOut(50);
	$('#envio').fadeOut(50);
	$('#compra').fadeOut(50);
	$('#compra').fadeIn(1000);
/*
*/

	$('.mode label').on('click',function(){
		var id = $(this).attr('id');
		
	$('#pago').css({
		'opacity':'1'
	});
	$('#envio').css({
		'opacity':'1'
	});
	
		switch(id)
		{
			case 'p1':
				$('#pago').fadeOut(100);
				$('#envio').fadeOut(100);
				$('#compra').fadeIn(1000);
				break;
			case 'p2':
				$('#envio').fadeOut(100);
				$('#compra').fadeOut(100);
				$('#pago').fadeIn(1000);
				break;
			case 'p3':
				$('#pago').fadeOut(100);
				$('#compra').fadeOut(100);
				$('#envio').fadeIn(1000);
				break;
		}
		
	});


    $('li.pictures-product:first').addClass('active');
    
    var imageActive = $('li.pictures-product:first').attr('id');
    var idImage = imageActive;

    renderProfilePicture(idImage)

    $('li.pictures-product').on('click', function(){
      renderProfilePicture(this.id);
      $('li.pictures-product#'+imageActive).removeClass('active');
      $('li.pictures-product#'+this.id).addClass('active');
      imageActive = this.id;
    });

    function renderProfilePicture(id)
    {
      idImage = 'li.pictures-product#'+id;
      var sourceImg = $(idImage).attr('data-source');
      $('img.main-picture').attr('src',sourceImg);
      $('#slideUp img').attr('src',sourceImg);
    }

    $('button#addSubmit').on('click', function(){
      var itemName = $('h1.item-name').html();
      $('span#item-name').html(itemName);
      var itemAbono = $('.abono').html();
      var itemModalidad = $('.payment2').html();

      $('span#item-abono').html(itemAbono);
      $('span#item-modalidad').html(itemModalidad);

      $('div#slideUp').css({
        'right': '0'
      });
      $('img#assistant').addClass('active');
      
      
    });

  //Cancelar confirmacion de la compra  
    $('button#cancel').on('click', function(){

      $('img#assistant').removeClass('active');
      $('div#slideUp').css({
        'right': '-100%'
      });
    });
  //Confirmar compra
    $('button#confirm').on('click', function(){
      var productoC = $('input#producto').val();
      var plazoC = $('input#plazo').val();
      var abonoC = $('input#abono').val();
      var cantidadC = $('input#cantidad').val();



      var title = "Confirmación de Compra";
	var content = '<form class="form-horizontal" action="buyConfirm" method="post" id="buy">' +
          '<div class="form-group form-group-lg sr-only">' +
            '<label for="producto" class="col-sm-4 control-label">Producto</label>' +
            '<div class="col-sm-6">' +
              '<input type="text" class="form-control" name="Pedido[id_pro_ped]" id="producto" ' +
              'value="'+ productoC +'">' +
            '</div>' +
          '</div>' +

          '<div class="form-group form-group-lg sr-only">' +
            '<label for="plazo" class="col-sm-4 control-label">Plazo</label>' +
            '<div class="col-sm-6">' +
              '<input type="number" class="form-control" name="Pedido[id_pla_ped]" id="plazo" value="'+plazoC+'" required>' +
            '</div>' +
          '</div>' +

          '<div class="form-group form-group-lg sr-only">' +
            '<label for="abono" class="col-sm-4 control-label">Abono</label>' +
            '<div class="col-sm-6">' +
              '<input type="number" class="form-control" name="DetallePedido[abono_plazo_ped]" id="abono" value="'+abonoC+'" required>' +
            '</div>' +
          '</div>' +
          '<div class="form-group form-group-lg sr-only">' +
            '<label for="cantidad" class="col-sm-4 control-label">Cantidad</label>' +
            '<div class="col-sm-6">' +
              '<input type="number" class="form-control" name="DetallePedido[cantidad]" id="cantidad" min="1" value="'+cantidadC+'">' +
            '</div>' +
          '</div>' +
          '<div class="form-group form-group-lg">' +
            '<label for="cantidad" class="col-sm-4 control-label">Celular</label>' +
            '<div class="col-sm-6">' +
              '<input type="text" class="form-control" name="Cliente[celular]" id="cantidad" min="1">' +
            '</div>' +
          '</div>' +
          '<div class="form-group form-group-lg">' +
            '<label for="cantidad" class="col-sm-4 control-label">Contraseña</label>' +
            '<div class="col-sm-6">' +
              '<input type="password" class="form-control" name="Cliente[pw]" id="cantidad" min="1">' +
            '</div>' +
          '</div>' +
		  '<div class="form-group">' +
		    '<div class="col-sm-offset-2 col-sm-10">' +
		      '<button type="submit" class="btn btn-default">Confirmar</button>' +
		    '</div>' +
		  '</div>' +
        '</form>';
      $('h4#shopModalTitle').html(title);
      $('div#shopModalContent').html(content);
      $('#shopModal').modal();

    })

})