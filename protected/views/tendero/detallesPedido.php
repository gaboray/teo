<h1>Detalles Pedido</h1>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				
		        <dl class="dl-horizontal">
		            <dt>Marca y Modelo</dt>
		            <dd>
		            	<?php echo $pedido->idProPed->marca; ?>
		            	<?php echo $pedido->idProPed->detalleProducto->modelo; ?>
		            </dd>
		            <dt>Producto</dt>
		            <dd><?php echo $pedido->idProPed->nombre; ?></dd>
		            <dt>Fecha Solicitud</dt>
		            <dd><?php $pedido->detallePedido->fecha_sol; ?></dd>

		        </dl>
			</div>
			<div class="col-md-6">
				
		        <dl class="dl-horizontal">
		        	<dt>Cliente</dt>
		        	<dd>
		        		<?php echo $pedido->idCliPed->nombre; ?>
		        		<?php echo $pedido->idCliPed->a_materno; ?>
		        		<?php echo $pedido->idCliPed->a_materno; ?>
		        	</dd>
		            <dt>Teléfono</dt>
		            <dd><?php echo $pedido->idCliPed->celular; ?></dd>
		            <dt>Semanas del crédito</dt>
		            <dd><?php echo $pedido->idPlaPed->plazo; ?></dd>
		            <dt>Monto Semanal</dt>
		            <dd>$<?php echo $pedido->detallePedido->abono_plazo_ped; ?></dd>
		            <dt>Monto Total</dt>
		            <dd>$<?php echo $pedido->detallePedido->abono_plazo_ped*$pedido->detallePedido->pagos; ?></dd>
		        </dl>
			</div>			
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<?php $var = $pedido->pagos; ?>
			<?php echo CHtml::link("Agregar", array("agregarPago?id=".$pedido->id_ped), array('confirm'=>'¿Realmente desea confirmar el pago?')); ?><br>
			<?php if ($var != null): ?>
			<table class="table">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Monto</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($var as $key): ?>
					<tr>
						<td><?php echo $key->fecha_pago; ?></td>	
						<td>$<?php echo $pedido->detallePedido->abono_plazo_ped; ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<?php else: ?>
				<center><h2>El cliente no ha realizado ningún pago</h2></center>
			<?php endif; ?>
		</div>
	</div>
</div>