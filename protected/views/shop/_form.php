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

		<?php echo $form->labelEx($model,'id_pla'); ?>
		<?php echo $form->dropDownList($model,'plazo',array(''=>'',
		'0'=>'1',
		'1'=>'2',
		'2'=>'3',
		'3'=>'4',
		'4'=>'5')); ?>
		<?php echo $form->error($model,'plazo'); ?>
	

<?php $this->endWidget(); ?>

</div><!-- form -->