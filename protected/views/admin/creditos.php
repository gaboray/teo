<h1>Creditos</h1>
<div class="container-fluid">

	<div class="row">
		<div class="col-md-6">
			<h2>Solicitados</h2>
			<?php if($pedidosSolicitados != null): ?>
			<table class="table">
				<thead>
					<tr>
						<th>Producto</th>
						<th>Teléfono</th>
						<th>Cliente</th>
						<th>Monto</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($pedidosSolicitados as $pedido): ?>
					<tr>
						<td><?php echo $pedido->idProPed->nombre; ?></td>
						<td><?php echo $pedido->idCliPed->celular; ?></td>
						<td>
							<?php echo $pedido->idCliPed->nombre; ?>
							<?php echo $pedido->idCliPed->a_paterno; ?>
							<?php echo $pedido->idCliPed->a_materno; ?>
						</td>
						<td>$<?php echo $pedido->idProPed->precio * $pedido->detallePedido->cantidad; ?></td>
						<td>
							<a href="historialCliente?id=<?php echo $pedido->idCliPed->id_cli_pc; ?>">Historial</a>
							<a href="aceptarCredito?id=<?php echo $pedido->id_ped; ?>" class="no-decoration" title="Aceptar crédito">
								<span class="icon-check font20"></span>
							</a>
							<a href="rechazarCredito?id=<?php echo $pedido->id_ped; ?>" class="no-decoration" title="Rechazar crédito">
								<span class="icon-do_not_disturb font20"></span>
							</a>
							<a href="detallesPedido?id=<?php echo $pedido->id_ped; ?>">Detalle</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>		
			<?php else: ?>
			<center><h2>No hay créditos solicitados</h2></center>
			<?php endif; ?>
		</div>
		<div class="col-md-6">
			<h2>Activos</h2>
			<span class="punto punto-espera"></span>	&nbsp En espera &nbsp &nbsp
			<span class="punto punto-transito"></span>&nbsp En tránsito &nbsp &nbsp
			<span class="punto punto-reprogramada"></span>&nbsp Reprogramada &nbsp &nbsp
			<span class="punto punto-realizada"></span>&nbsp Realizada &nbsp &nbsp
			<table class="table">
				<thead>
					<tr>
						<th></th>
						<th>Producto</th>
						<th>Teléfono</th>
						<th>Cliente</th>
						<th>Saldo</th>
						<th>Pagos</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($pedidosActivos as $pedido): ?>
					<tr>
						<td>
							<span class="punto punto-<?php echo $pedido->status_ent;?>"></span>
						</td>
						<td><?php echo $pedido->idProPed->nombre; ?></td>
						<td><?php echo $pedido->idCliPed->celular; ?></td>
						<td>
							<?php echo $pedido->idCliPed->nombre; ?>
							<?php echo $pedido->idCliPed->a_paterno; ?>
							<?php echo $pedido->idCliPed->a_materno; ?>
						</td>
						<td>
							<?php echo ($pedido->idPlaPed->plazo - $pedido->detallePedido->pagos) * $pedido->detallePedido->abono_plazo_ped; ?>
						</td>
						<td><?php echo $pedido->detallePedido->pagos; ?></td>
						<td>
							<a href="historialCliente?id=<?php echo $pedido->idCliPed->id_cli_pc; ?>">Historial</a>
							<?php 
								if($pedido->status_ent == "realizada"):
							?>
							<?php echo CHtml::link("Pagar", array("agregarPago?id=".$pedido->id_ped), array('confirm'=>'¿Realmente desea confirmar el pago?')); ?>
							<?php
								endif;
							?>
							<a href="detallesPedido?id=<?php echo $pedido->id_ped; ?>">Detalle</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>		
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h2>Finalizados</h2>
			<?php if($pedidosFinalizados != null): ?>
			<table class="table">
				<thead>
					<tr>
						<th>Producto</th>
						<th>Teléfono</th>
						<th>Cliente</th>
						<th>Saldo</th>
						<th>Pagos</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($pedidosFinalizados as $pedido): ?>
					<tr>
						<td><?php echo $pedido->idProPed->nombre; ?></td>
						<td><?php echo $pedido->idCliPed->celular; ?></td>
						<td>
							<?php echo $pedido->idCliPed->nombre; ?>
							<?php echo $pedido->idCliPed->a_paterno; ?>
							<?php echo $pedido->idCliPed->a_materno; ?>
						</td>
						<td>
							<?php echo ($pedido->idPlaPed->plazo - $pedido->detallePedido->pagos) * $pedido->detallePedido->abono_plazo_ped; ?>
						</td>
						<td><?php echo $pedido->detallePedido->pagos; ?></td>
						<td>
							<a href="historialCliente?id=<?php echo $pedido->idCliPed->id_cli_pc; ?>">Historial</a>
							<a href="#">Pagar</a>
							<a href="#">Detalle</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>		
			<?php else: ?>
			<center><h2>No hay créditos finalizados</h2></center>
			<?php endif; ?>
		</div>

		<div class="col-md-6">
			<h2>Rechazados</h2>
			<?php if($pedidosRechazados != null): ?>
			<table class="table">
				<thead>
					<tr>
						<th>Producto</th>
						<th>Teléfono</th>
						<th>Cliente</th>
						<th>Saldo</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($pedidosRechazados as $pedido): ?>
					<tr>
						<td><?php echo $pedido->idProPed->nombre; ?></td>
						<td><?php echo $pedido->idCliPed->celular; ?></td>
						<td>
							<?php echo $pedido->idCliPed->nombre; ?>
							<?php echo $pedido->idCliPed->a_paterno; ?>
							<?php echo $pedido->idCliPed->a_materno; ?>
						</td>
						<td>
							<?php echo ($pedido->idPlaPed->plazo - $pedido->detallePedido->pagos) * $pedido->detallePedido->abono_plazo_ped; ?>
						</td>
						<td>
							<a href="historialCliente?id=<?php echo $pedido->idCliPed->id_cli_pc; ?>">Historial</a>
							<a href="detallesPedido?id=<?php echo $pedido->id_ped; ?>">Detalle</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>		
			<?php else: ?>
			<center><h2>No hay créditos rechazados</h2></center>
			<?php endif; ?>
		</div>
	</div>

</div>