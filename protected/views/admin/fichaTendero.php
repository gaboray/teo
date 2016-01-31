<div class="container">
	<div class="row">
	<?php echo CHtml::link('Volver', Yii::app()->request->urlReferrer); ?>
	<h1>Ficha Cliente <small>#<?php echo $cliente->id_cli_1; ?></small></h1>
		<div class="col-md-12">
			
			<dl class="dl-horizontal">
			  <dt>Nombre</dt>
			  <dd><?php echo $cliente->nombre_cli; ?></dd>
			  <br>
			  <dt>Apellido Paterno</dt>
			  <dd><?php echo $cliente->a_paterno_cli; ?></dd>
			  <br>
			  <dt>Apellido Materno</dt>
			  <dd><?php echo $cliente->a_materno_cli; ?></dd>
			  <br>
			  <dt>Celular</dt>
			  <dd><?php echo $cliente->celular_cli; ?></dd>
			  <br>
			  <dt>Correo</dt>
			  <dd><?php echo $cliente->correo_cli; ?></dd>
			  <br>
			  <dt>Colonia</dt>
			  <dd><?php echo $cliente->colonia_cli; ?></dd>
			  <br>
			  <dt>Calle</dt>
			  <dd><?php echo $cliente->calle_cli; ?></dd>
			  <br>
			  <dt>Número</dt>
			  <dd><?php echo $cliente->numero_cli; ?></dd>			  
			  <br>
			  <dt>C. Postal</dt>
			  <dd><?php echo $cliente->c_postal_cli; ?></dd>
			  <br>
			  <dt>Fecha de Solicitud</dt>
			  <dd><?php echo $cliente->fecha_sol	; ?></dd>
			</dl>
		</div>
	</div>
</div>
