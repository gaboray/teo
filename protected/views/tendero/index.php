<?php
/* @var $this TenderoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientes',
);

$this->menu=array(
	array('label'=>'Create Cliente', 'url'=>array('create')),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
);

?>

<?php 
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); 
?>