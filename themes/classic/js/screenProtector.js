$(document).on('ready', function(){

	$('button#entry').on('click', function(){
		var title = "Ingresa";

		var content = '<form class="form-horizontal" action="confirmUser" method="post">' +
          '<div class="form-group form-group-lg">' +
            '<label for="producto" class="col-md-3 control-label input-lg">Celular</label>' +
            '<div class="col-md-9">' +
              '<input type="text" class="form-control input-lg" name="Cliente[celular]" id="producto" '+
              'placeholder="Ingrese su número para ingresar" autofocus>' +
            '</div>' +
          '</div>' +
		  '<div class="form-group">' +
		    '<div class="col-sm-offset-3 col-sm-10">' +
		      '<button type="submit" class="btn btn-primary btn-lg">Confirmar</button>' +
		    '</div>' +
		  '</div>' +
        '</form>' +
        '<div class="alter-modal">' +
        '<p>¿Todavía no eres cliente?</p>' +
        '<center><span>¡Solícita tu crédito con el tendero!</span></center>' +
        '</div>';

		$('#alterModalTitle').text(title);
		$('#alterModalContent').html(content);

		$('#alterModal').modal();
	});

	init();

})

	var items = 1;
	var interval = 5000;
	//setInterval(changeItem, interval);

	function init()
	{
		firstItem();	
	}

	function firstItem()
	{
		$('#slide1 img#logo').animate({
			width: '300px',
			opacity: '1'
		}, 2000);
		//$('#slide1 button#entry').slide('slow');
	}

	function secondItem()
	{
		
		$('#slide2 #img1').animate({
			opacity: '1',
			left: '-=50px',
			top: '-=10px'
		}, 1000);
		$('#slide2 #img2').animate({
			opacity: '1',
			left: '-=50px',
			top: '-=10px'
		}, 1300);
		$('#slide2 #img3').animate({
			opacity: '1',
			left: '-=50px',
			top: '-=10px'
		}, 1500);
		$('#slide2 #img4').animate({
			opacity: '1',
			left: '-=50px',
			top: '-=10px'
		}, 1700);
		
		/*
		$('#slide1 #img1')	.animate({
			opacity: '1',
			left: '-=20px',
			top: '-=10px'
		},{
			duration: 500,
			complete: function(){
				$('#slide1 #img2').animate({
					opacity: '1',
					left: '-=20px',
					top: '-=10px'
				}, 500);
			}
		});
		*/
	}

	function changeItem()
	{

	}

	function showItem()
	{

	}
