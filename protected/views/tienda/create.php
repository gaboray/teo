<?php
/* @var $this TiendaController */
/* @var $model Tienda */

$this->breadcrumbs=array(
	'Tiendas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tienda', 'url'=>array('index')),
	array('label'=>'Manage Tienda', 'url'=>array('admin')),
);
?>

<h1>Create Tienda</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'tendero'=>$datosTendero)); ?>