<?php
/* @var $this SolicitudClienteController */
/* @var $data SolicitudCliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sol')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sol), array('view', 'id'=>$data->id_sol)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tie_sol')); ?>:</b>
	<?php echo CHtml::encode($data->id_tie_sol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->a_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a_materno')); ?>:</b>
	<?php echo CHtml::encode($data->a_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>