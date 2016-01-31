<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tie_4'); ?>
		<?php echo $form->textField($model,'id_tie_4'); ?>
		<?php echo $form->error($model,'id_tie_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_cli'); ?>
		<?php echo $form->textField($model,'usuario_cli',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usuario_cli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password_cli'); ?>
		<?php echo $form->textField($model,'password_cli',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'password_cli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creditos_cli'); ?>
		<?php echo $form->textField($model,'creditos_cli'); ?>
		<?php echo $form->error($model,'creditos_cli'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->