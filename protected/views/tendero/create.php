<?php
/* @var $this TenderoController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
);
?>

<h1>Create Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>