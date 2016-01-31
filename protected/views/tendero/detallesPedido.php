<?php 
	for($x = 0; $x<12; $x++)
	{
		$time = $x*2;
		$effectiveDate = strtotime("+$time week", strtotime(date('Y-m-d'))); // returns timestamp
		echo date('Y-m-d',$effectiveDate)."<br>"; // formatted version	
	}

 ?>
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
		<div class="col-md-12">
			<?php $var = $pedido->pagos; ?>
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
						<td><?php echo $key->fecha_pag; ?></td>	
						<td>$<?php echo $pedido->abono_plazo_ped; ?></td>
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