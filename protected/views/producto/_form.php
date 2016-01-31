<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_pro'); ?>
		<?php echo $form->textField($model,'nombre_pro',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_pro'); ?>
		<?php echo $form->textField($model,'precio_pro'); ?>
		<?php echo $form->error($model,'precio_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca_pro'); ?>
		<?php echo $form->textField($model,'marca_pro',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'marca_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruta_foto_pro'); ?>
		<?php echo $form->textField($model,'ruta_foto_pro',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ruta_foto_pro'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model2,'modelo_pro'); ?>
		<?php echo $form->textField($model2,'modelo_pro',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model2,'modelo_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'detalles_pro'); ?>
		<?php echo $form->textArea($model2,'detalles_pro'); ?>
		<?php echo $form->error($model2,'detalles_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'especificaciones_pro'); ?>
		<?php echo $form->textArea($model2,'especificaciones_pro'); ?>
		<?php echo $form->error($model2,'especificaciones_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cat_1'); ?>
		<?php echo $form->dropDownList($model,'id_cat_1',array(''=>'',
		$value[0]=>$label[0],
		$value[1]=>$label[1],
		$value[2]=>$label[2],
		$value[3]=>$label[3],
		$value[4]=>$label[4])); ?>
		<?php echo $form->error($model,'id_cat_1'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->