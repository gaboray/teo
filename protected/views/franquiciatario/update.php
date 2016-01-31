<?php
/* @var $this FranquiciatarioController */
/* @var $model Tienda */

$this->breadcrumbs=array(
	'Tiendas'=>array('index'),
	$model->id_tie=>array('view','id'=>$model->id_tie),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tienda', 'url'=>array('index')),
	array('label'=>'Create Tienda', 'url'=>array('create')),
	array('label'=>'View Tienda', 'url'=>array('view', 'id'=>$model->id_tie)),
	array('label'=>'Manage Tienda', 'url'=>array('admin')),
);
?>

<h1>Update Tienda <?php echo $model->id_tie; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>