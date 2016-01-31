<?php
/* @var $this SolicitudClienteController */
/* @var $model SolicitudCliente */

$this->breadcrumbs=array(
	'Solicitud Clientes'=>array('index'),
	$model->id_sol=>array('view','id'=>$model->id_sol),
	'Update',
);

$this->menu=array(
	array('label'=>'List SolicitudCliente', 'url'=>array('index')),
	array('label'=>'Create SolicitudCliente', 'url'=>array('create')),
	array('label'=>'View SolicitudCliente', 'url'=>array('view', 'id'=>$model->id_sol)),
	array('label'=>'Manage SolicitudCliente', 'url'=>array('admin')),
);
?>

<h1>Update SolicitudCliente <?php echo $model->id_sol; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>