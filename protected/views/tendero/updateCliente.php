<h1>Update Cliente</h1>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php $form=$this->beginWidget('CActiveForm'); ?>

			<div class="form-group sr-only">
				<?php echo $form->label($cliente,"nombre_cli"); ?>
				<?php echo $form->textField($cliente,"nombre_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"nombre_cli"); ?>
			</div>

			<div class="form-group sr-only">
				<?php echo $form->label($cliente,"a_paterno_cli"); ?>
				<?php echo $form->textField($cliente,"a_paterno_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"a_paterno_cli"); ?>
			</div>

			<div class="form-group sr-only">
				<?php echo $form->label($cliente,"a_materno_cli"); ?>
				<?php echo $form->textField($cliente,"a_materno_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"a_materno_cli"); ?>
			</div>

			<div class="form-group">
				<?php echo $form->label($cliente,"celular_cli"); ?>				
				<?php echo $form->textField($cliente,"celular_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"celular_cli"); ?>
			</div>

			<div class="form-group">
				<?php echo $form->label($cliente,"calle_cli"); ?>	
				<?php echo $form->textField($cliente,"calle_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"calle_cli"); ?>
			</div>

			<div class="from-group">
				<?php echo $form->label($cliente,"numero_cli"); ?>	
				<?php echo $form->textField($cliente,"numero_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"numero_cli"); ?>
			</div>

			<div class="form-group sr-only">
				<?php echo $form->label($cliente,"estado_cli"); ?>					
				<?php echo $form->textField($cliente,"estado_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"estado_cli"); ?>
			</div>

			<div class="form-group sr-only">
				<?php echo $form->label($cliente,"municipio_cli"); ?>					
				<?php echo $form->textField($cliente,"municipio_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"municipio_cli"); ?>
			</div>

			<div class="form-group">
				<?php echo $form->label($cliente,"colonia_cli"); ?>					
				<?php echo $form->textField($cliente,"colonia_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"colonia_cli"); ?>
			</div>

			<div class="form-group">
				<?php echo $form->label($cliente,"c_postal_cli"); ?>						
				<?php echo $form->textField($cliente,"c_postal_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"c_postal_cli"); ?>
			</div>

			<div class="form-group">
				<?php echo $form->label($cliente,"correo_cli"); ?>					
				<?php echo $form->textField($cliente,"correo_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"correo_cli"); ?>
			</div>

			<div class="form-group sr-only">
				<?php echo $form->label($cliente,"lat_cli"); ?>						
				<?php echo $form->textField($cliente,"lat_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"lat_cli"); ?>
			</div>

			<div class="form-group sr-only">
				<?php echo $form->label($cliente,"lon_cli"); ?>					
				<?php echo $form->textField($cliente,"lon_cli",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"lon_cli"); ?>
			</div>

			<div class="form-group sr-only">
				<?php echo $form->label($cliente,"fecha_sol"); ?>					
				<?php echo $form->textField($cliente,"fecha_sol",array('class'=>'form-control')); ?>
				<?php echo $form->error($cliente,"fecha_sol"); ?>
			</div>
			<?php echo CHtml::link('Cancelar', Yii::app()->request->urlReferrer, array('class'=>'btn btn-default')); ?>
			<?php echo CHtml::submitButton("Guardar", array('class'=>'btn btn-primary btn-large')); ?>

			<?php $this->endWidget(); ?>		
		</div>
	</div>
</div>