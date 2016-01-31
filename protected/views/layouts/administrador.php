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
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tendero/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/fonts/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/script.js"></script>



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    

	<header id="tendero">
		<div class="row">
			
			<div class="col-md-12">
					
				<div class="row">
					<div class="logo col-md-2">
						<a href="goToShop"><img src="<?php echo Yii::app()->request->baseUrl ?>/images/logo1.png"></a>
					</div>
					<div class="col-md-10">
					    <nav>
							<?php $this->widget('zii.widgets.CMenu',array(
								'items'=>array(
									array('label'=>'Panel', 'url'=>array('/admin/panel')),
									array('label'=>'Catálogo', 'url'=>array('/admin/catalogo')),
									array('label'=>'Cartera', 'url'=>array('/admin/cartera')),
									array('label'=>'Créditos', 'url'=>array('/admin/creditos')),
									array('label'=>'Pagos', 'url'=>array('/admin/pagos')),
									array('label'=>'Entregas', 'url'=>array('/admin/entregas')),
									array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
									array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
								),
								'itemCssClass'=>'no-decoration white in-line',
							)); ?>
						</nav>
					</div>
				</div>


			</div>

		</div>

	</header>

<div class="container-fluid">
<br>
	<?php echo $content; ?>


</div>

	<div class="clear"></div>

<div class="modal fade" tabindex="-1" role="dialog" id="modalAdmin">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
