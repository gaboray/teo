<?php
/* @var $this TiendaController */
/* @var $model Tienda */

$this->breadcrumbs=array(
	'Tiendas'=>array('index'),
	$model->id_tie,
);

$this->menu=array(
	array('label'=>'List Tienda', 'url'=>array('index')),
	array('label'=>'Create Tienda', 'url'=>array('create')),
	array('label'=>'Update Tienda', 'url'=>array('update', 'id'=>$model->id_tie)),
	array('label'=>'Delete Tienda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tie),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tienda', 'url'=>array('admin')),
);
?>

<h1>View Tienda #<?php echo $model->id_tie; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tie',
		'nombre_tie',
		'usuario_tie',
		'password_tie',
		'creditos_tie',
	),
)); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$tendero,
	'attributes'=>array(
		'nombre_ten',
		'a_paterno_ten',
		'a_materno_ten',
		'estado_ten',
		'ciudad_ten',
		'municipio_ten',
		'colonia_ten',
		'calle_ten',
		'numero_ten',
		'c_postal_ten',
		'lat_ten',
		'lon_ten',
		'fecha_alta_ten',
	),
)); ?>
