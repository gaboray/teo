<?php
/* @var $this TenderoController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cli')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cli), array('view', 'id'=>$data->id_cli)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tie_4')); ?>:</b>
	<?php echo CHtml::encode($data->id_tie_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_cli')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_cli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_cli')); ?>:</b>
	<?php echo CHtml::encode($data->password_cli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creditos_cli')); ?>:</b>
	<?php echo CHtml::encode($data->creditos_cli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>