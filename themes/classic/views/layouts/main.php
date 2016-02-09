<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Bootstrap CSS framework -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/cesta.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/fonts/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/script.js"></script>



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body id="shop">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <header>
    </header>

      <div id="logo-content">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/teocredit/logoh.png" class="logo">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </div>
    
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/marilyn.png" id="assistant">
<div class="container-fluid">
<br>
	<?php echo $content; ?>


</div>

	<div class="clear"></div>

	<div id="help">
		<small>¿Necesitas Ayuda?</small>
	</div>

	<footer>
		<a href="#" class="in-line">Términos y Condiciones</a>
		<a href="#" class="in-line">Aviso de Privacidad</a>
		<a href="#" class="in-line">Servicio al Cliente</a>
	</footer>


<div id="slideUp" class="container">
  <div class="row">
  	<div class="col-md-12">
  		<h2>¿Desea confirmar esta compra?</h2>
  		<div class="col-md-offset-2">
  			<div class="row">
  				<div class="col-md-3">
  					<img src="" width="100%">	
  				</div>
  				<div class="col-md-9">
  					<p class="contenido">Usted disfrutará de un(a) <span id="item-name"></span>
  					</p>
            <p class="contenido">Pagando $<span id="item-abono"></span> <span id="item-modalidad"></span></p>
  				</div>
  			</div>
        <br><br>
  			<div class="row footer">
          <div class="col-md-4 col-md-offset-1">
            <button class="btn btn-default btn-lg btn-block" type="button" id="cancel">Cancelar</button>
          </div>
          <div class="col-md-4">
            <button class="btn btn-primary btn-lg btn-block" type="button" id="confirm">Confirmar</button>
          </div>
  			</div>
  		</div>
  	</div>
  </div>
</div>


<div class="modal fade" id="shopModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="shopModalTitle"></h4>
      </div>
      <div class="modal-body" id="shopModalContent">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade bs-example-modal-sm" id="shopSmallModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="shopSmallModalTitle"></h4>
      </div>
      <div class="modal-body" id="shopSmallModalContent">
      </div>
    </div>
  </div>
</div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
