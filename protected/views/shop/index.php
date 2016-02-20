<?php
/* @var $this SiteController */

$this->layout="//layouts/column2";
$this->pageTitle="Bienvenido a ".Yii::app()->name;
?>


<div id="protect" style="background: url('<?php echo Yii::app()->request->baseUrl; ?>/images/protect/phpn2Esw7.jpg');
background-size:100%;">
	<div id="slider-content">
		<div class="slide" id="slide1">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/teocredit/logo.png" id="logo">
			<span class="text">
				Crédito <span id="lema">Fácil, Rápido y Seguro</span>
			</span>
			<center>
				<button class="btn" id="entry">Entrar</button>
			</center>
			<center>
				<span class="text">o</span>
			</center>
			<center>
			<?php echo CHtml::link('Registrarte',array('solicitudcliente/index'), array("class"=>"btn btn-primary btn-lg")); ?>
				
			</center>
		</div>
		<div class="slide" id="slide2">
			<span class="slide-title">
				Lo mejor de línea blanca para tu hogar
			</span>

			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/protect/main.png"
			class="img-lg top-sm" id="img1">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/protect/8001532.png"
			class="img-md top-md" id="img2">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/protect/6001546.png"
			class="img-md top-md" id="img3">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/protect/11000951.png"
			class="img-sm" id="img4">
		</div>
	</div>
</div>
