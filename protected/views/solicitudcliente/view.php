<?php
/* @var $this SolicitudClienteController */
/* @var $model SolicitudCliente */

$this->breadcrumbs=array(
	'Solicitud Clientes'=>array('index'),
	$model->id_sol,
);

$this->menu=array(
	array('label'=>'List SolicitudCliente', 'url'=>array('index')),
	array('label'=>'Create SolicitudCliente', 'url'=>array('create')),
	array('label'=>'Update SolicitudCliente', 'url'=>array('update', 'id'=>$model->id_sol)),
	array('label'=>'Delete SolicitudCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sol),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SolicitudCliente', 'url'=>array('admin')),
);
?>

<h1>View SolicitudCliente #<?php echo $model->id_sol; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sol',
		'id_tie_sol',
		'nombre',
		'a_paterno',
		'a_materno',
		'celular',
		'fecha',
	),
)); ?>
