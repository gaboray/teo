<?php
/* @var $this SiteController */

$this->layout="//layouts/column3";
$this->pageTitle=Yii::app()->name;
?>

<?php
/*
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
*/
?>

<div class="row" id="tv">
	<div class="col-md-5 bg-image">
	</div>
	<div class="col-md-7 category-description">
		<h3 class="promotion text-right">La pantalla que siempre quisiste, desde <span class="deal">$140</span> semanales</h3>
		<br>
		<div class="row">
		  <div class="col-sm-6 col-md-6">
		    <div class="thumbnail">
		      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/promocion.png" alt="...">
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-6">
		    <div class="thumbnail">
		      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/promocion.png" alt="...">
		    </div>
		  </div>
		</div>

	</div>
</div>
<hr>
<div class="row" id="furniture">
	<div class="col-md-7 category-description">
		<h3 class="promotion text-left">Aprovecha nuestro <span class="deal">40%</span> de descuento en muebles y ¡ESTRENA!</h3>
		<br>
		<div class="row">
		  <div class="col-sm-6 col-md-6">
		    <div class="thumbnail">
		      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/promocion2.jpeg" alt="...">
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-6">
		    <div class="thumbnail">
		      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/promocion.png" alt="...">
		    </div>
		  </div>
		</div>
	</div>
	<div class="col-md-5 bg-image">
	</div>
</div>
<hr>
<div class="row">
		
	<div class="col-md-4 bg-image" id="hombre">
	</div>

	<div class="col-md-4 category-description">

		<div class="row">
		  <div class="col-sm-6 col-md-offset-1 col-md-10">
		    <div class="thumbnail">
		      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/promocion2.jpeg" alt="...">
		    </div>
		  </div>
		</div>
	</div>

	<div class="col-md-4 bg-image" id="mujer">
	</div>

</div>

<?php
	if($_GET)
	{
		if(isset($_GET['action']) == "solicitud")
		{
		?>
<script>
	$(document).ready(function(){
		$("#myModal").modal();
	});
</script>
		<?php
		}
	}
?>





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Solicitud Enviada</h4>
      </div>
      <div class="modal-body">
        <p>Acabamos de enviar tu solicitud a tu tendero, quien lo procesará.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>