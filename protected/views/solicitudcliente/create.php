<?php
/* @var $this SolicitudClienteController */
/* @var $model SolicitudCliente */

$this->breadcrumbs=array(
	'Solicitud Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SolicitudCliente', 'url'=>array('index')),
	array('label'=>'Manage SolicitudCliente', 'url'=>array('admin')),
);
?>

<h1>Create SolicitudCliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>