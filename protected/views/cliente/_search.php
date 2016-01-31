<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cli'); ?>
		<?php echo $form->textField($model,'id_cli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tie_4'); ?>
		<?php echo $form->textField($model,'id_tie_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_cli'); ?>
		<?php echo $form->textField($model,'usuario_cli',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creditos_cli'); ?>
		<?php echo $form->textField($model,'creditos_cli'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->