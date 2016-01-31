
	<div class="row">
	<?php
		if($categoria == null):
	?>
		<center>
			<h1>No hay productos en esta categoría</h1>
			<br><br>
			<span class="glyphicon glyphicon-alert"></span>
			<br><br>
		</center>
	<?php
		endif;
	?>
	<?php foreach ($categoria as $data):?>

	  <div class="col-xs-6 col-md-3">
	    <a href="articulo?categoria=<?php echo CHtml::encode($data->id_cat_pro); ?>&id=<?php echo CHtml::encode($data->id_pro); ?>" class="thumbnail">
	      <img src="<?php echo Yii::app()->request->baseUrl."/images/productos/".$data->idCatPro->nombre."/".$data->id_pro."/".CHtml::encode($data->perfil); ?>" alt="...">
	    </a>
	  </div>
	<?php endforeach;?>

	</div>