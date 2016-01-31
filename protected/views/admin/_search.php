<?php
/* @var $this AdminController */
/* @var $model Tienda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tie'); ?>
		<?php echo $form->textField($model,'id_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_tie'); ?>
		<?php echo $form->textField($model,'nombre_tie',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_tie'); ?>
		<?php echo $form->textField($model,'usuario_tie',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creditos_tie'); ?>
		<?php echo $form->textField($model,'creditos_tie'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->