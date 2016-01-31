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

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/site/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/script.js"></script>



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    

	<header>
		<div class="row">
			
			<div class="col-md-12">
					
				<div class="row">
					<div class="logo col-md-2">
						<img src="<?php echo Yii::app()->request->baseUrl ?>/images/logo1.png">
					</div>
					<div class="col-md-6">
					   <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" id="search" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> </button>
				      </form>
					</div>
					<div class="col-md-4">
						<a href="cesta" id="car" class="no-decoration btn btn-default" role="button">
							<span id="amount">(<?php echo $this->getElementsInCar(); ?>)</span>
							<span class="glyphicon glyphicon-shopping-cart"></span>
						</a>
						<a href="#" class="no-decoration btn">
							<span class="glyphicon glyphicon-user"></span> &nbsp
							<span class="action-user">Identifícate</span>
						</a>
						<a href="registro" class="no-decoration btn">
							<span class="glyphicon glyphicon-edit"></span> &nbsp
							<span class="action-user">Regístrate</span>
						</a>
					</div>
				</div>

				<div class="row">
					<div class="categories">
						<nav>
							<ul>
								<li>Top Ventas</li>
								<li>Nuevos</li>

								<a href="<?php echo Yii::app()->request->baseUrl ?>/shop/categoria?name=1"><li>Electrodomésticos</li></a>
								<a href="<?php echo Yii::app()->request->baseUrl ?>/shop/categoria?name=2"><li>Línea Blanca</li></a>
								<a href="<?php echo Yii::app()->request->baseUrl ?>/shop/categoria?name=3"><li>Computo</li></a>
								<a href="<?php echo Yii::app()->request->baseUrl ?>/shop/categoria?name=4"><li>Muebles</li></a>
								<a href="<?php echo Yii::app()->request->baseUrl ?>/shop/categoria?name=5"><li>Pantallas</li></a>
							</ul>
						</nav>
					</div>
				</div>

			</div>

		</div>

	</header>

<div class="container-fluid content">
<br>
	<?php echo $content; ?>


</div>

	<div class="clear"></div>

<footer>
	<div class="container">
		<div class="col-md-4">
			<h4>Atención al Cliente</h4>
			<ul>
				<li><a href="#">Contacto</a></li>
				<li><a href="#">FAQs</a></li>
			</ul>
		</div>
		<div class="col-md-4">
			<h4>¿Quiénes Somos?</h4>
			<ul>
				<li><a href="#">Acerca de</a></li>
				<li><a href="#">Filosofía</a></li>
			</ul>
		</div>
		<div class="col-md-4">
			<h4>Información</h4>
			<ul>
				<li><a href="#">Términos y Condiciones</a></li>
				<li><a href="#">Aviso de Privacidad</a></li>
				<li><a href="#">Política de Cookies</a></li>
			</ul>
		</div>
	</div>	
</footer>





    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
