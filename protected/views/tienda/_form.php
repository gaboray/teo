<?php
/* @var $this TiendaController */
/* @var $model Tienda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tienda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_tie'); ?>
		<?php echo $form->textField($model,'nombre_tie',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_tie'); ?>
		<?php echo $form->textField($model,'usuario_tie',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usuario_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password_tie'); ?>
		<?php echo $form->textField($model,'password_tie'); ?>
		<?php echo $form->error($model,'password_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creditos_tie'); ?>
		<?php echo $form->textField($model,'creditos_tie'); ?>
		<?php echo $form->error($model,'creditos_tie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($tendero,'nombre_ten'); ?>
		<?php echo $form->textField($tendero,'nombre_ten'); ?>
		<?php echo $form->error($tendero,'nombre_ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($tendero,'a_paterno_ten'); ?>
		<?php echo $form->textField($tendero,'a_paterno_ten'); ?>
		<?php echo $form->error($tendero,'a_paterno_ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($tendero,'a_materno_ten'); ?>
		<?php echo $form->textField($tendero,'a_materno_ten'); ?>
		<?php echo $form->error($tendero,'a_materno_ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($tendero,'estado_ten'); ?>
		<?php echo $form->textField($tendero,'estado_ten'); ?>
		<?php echo $form->error($tendero,'estado_ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($tendero,'ciudad_ten'); ?>
		<?php echo $form->textField($tendero,'ciudad_ten'); ?>
		<?php echo $form->error($tendero,'ciudad_ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($tendero,'municipio_ten'); ?>
		<?php echo $form->textField($tendero,'municipio_ten'); ?>
		<?php echo $form->error($tendero,'municipio_ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($tendero,'colonia_ten'); ?>
		<?php echo $form->textField($tendero,'colonia_ten'); ?>
		<?php echo $form->error($tendero,'colonia_ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($tendero,'calle_ten'); ?>
		<?php echo $form->textField($tendero,'calle_ten'); ?>
		<?php echo $form->error($tendero,'calle_ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($tendero,'numero_ten'); ?>
		<?php echo $form->textField($tendero,'numero_ten'); ?>
		<?php echo $form->error($tendero,'numero_ten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($tendero,'c_postal_ten'); ?>
		<?php echo $form->textField($tendero,'c_postal_ten'); ?>
		<?php echo $form->error($tendero,'c_postal_ten'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->