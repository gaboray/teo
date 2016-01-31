<?php
/* @var $this FranquiciatarioController */
/* @var $data Tienda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tie')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tie), array('view', 'id'=>$data->id_tie)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tie')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_tie')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_tie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_tie')); ?>:</b>
	<?php echo CHtml::encode($data->password_tie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creditos_tie')); ?>:</b>
	<?php echo CHtml::encode($data->creditos_tie); ?>
	<br />


</div>