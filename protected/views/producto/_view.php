<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pro), array('view', 'id'=>$data->id_pro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_pro')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_pro')); ?>:</b>
	<?php echo CHtml::encode($data->precio_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca_pro')); ?>:</b>
	<?php echo CHtml::encode($data->marca_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta_foto_pro')); ?>:</b>
	<?php echo CHtml::encode($data->ruta_foto_pro); ?>
	<br />


</div>