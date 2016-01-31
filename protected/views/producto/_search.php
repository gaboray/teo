<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pro'); ?>
		<?php echo $form->textField($model,'id_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_pro'); ?>
		<?php echo $form->textField($model,'nombre_pro',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_pro'); ?>
		<?php echo $form->textField($model,'precio_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marca_pro'); ?>
		<?php echo $form->textField($model,'marca_pro',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruta_foto_pro'); ?>
		<?php echo $form->textField($model,'ruta_foto_pro',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->