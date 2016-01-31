<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Producto', 'url'=>array('index')),
	array('label'=>'Manage Producto', 'url'=>array('admin')),
);
?>

<h1>Create Producto</h1>


<?php
	$label = array();
	$value = array();
	$count = 0;


	foreach ($codCategoria as $data) {
		$label[$count] = $data->nombre_cat;
		$value[$count] = $data->id_cat;
		$count++;
	}

?>

<?php $this->renderPartial('_form', array(
	'model'=>$producto,
	'model2'=>$detalle,
	#'model3'=>$categoria,
	'label'=>$label,
	'value'=>$value)); ?>