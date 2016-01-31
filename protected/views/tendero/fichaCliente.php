<div class="container">
	<div class="row">
	<?php echo CHtml::link('Volver', Yii::app()->request->urlReferrer); ?>
	<h1>Ficha pedidosCliente <small>#<?php echo $cliente->id_cli_pc; ?></small></h1>
		<div class="col-md-12">
			
			<dl class="dl-horizontal">
			  <dt>Nombre</dt>
			  <dd><?php echo $cliente->nombre; ?></dd>
			  <br>
			  <dt>Apellido Paterno</dt>
			  <dd><?php echo $cliente->a_paterno; ?></dd>
			  <br>
			  <dt>Apellido Materno</dt>
			  <dd><?php echo $cliente->a_materno; ?></dd>
			  <br>
			  <dt>Celular</dt>
			  <dd><?php echo $cliente->celular; ?></dd>
			  <br>
			  <dt>Correo</dt>
			  <dd><?php echo $cliente->correo; ?></dd>
			  <br>
			  <dt>Colonia</dt>
			  <dd><?php echo $cliente->colonia; ?></dd>
			  <br>
			  <dt>Calle</dt>
			  <dd><?php echo $cliente->calle; ?></dd>
			  <br>
			  <dt>Número</dt>
			  <dd><?php echo $cliente->numero; ?></dd>			  
			  <br>
			  <dt>C. Postal</dt>
			  <dd><?php echo $cliente->c_postal; ?></dd>
			  <br>
			  <dt>Fecha de Solicitud</dt>
			  <dd></dd>
			</dl>
		</div>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Producto</th>
						<th>Pagado</th>
						<th>Saldo</th>
						<th>Estado</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($pedidosCliente as $pedido): ?>
					<tr>
						<td><?php echo $pedido->fecha_ped; ?></td>
						<td><?php echo $pedido->idProPed->nombre; ?></td>
						<td>$<?php echo $pedido->abono_plazo_ped * $pedido->pagos; ?></td>
						<td>$<?php echo ($pedido->idPlaPed->plazo - $pedido->pagos) * $pedido->abono_plazo_ped;?></td>
						<td><?php echo $pedido->status_ped; ?></td>
						<td><a href="#">Detalle</a></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
