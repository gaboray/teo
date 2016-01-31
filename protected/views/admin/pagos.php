<h1>Pagos</h1>

<h2>Cobrado</h2>
<table class="table">
	<thead>
		<tr>
			<th>Tendero</th>
			<th>Dirección</th>
			<th>Ciudad</th>
			<th>Saldo</th>
			<th>Pago mínimo</th>
			<th>Fecha pago</th>
			<th>Estado</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($pagos as $pago): ?>
		<tr>
			<td><?php echo $pago->idPed3->idCli3->idTie4->nombre_tie; ?></td>
			<td>
				<?php echo $pago->idPed3->idCli3->idTie4->perfilTendero->calle_ten; ?>
				#<?php echo $pago->idPed3->idCli3->idTie4->perfilTendero->numero_ten; ?>
			</td>
			<td>
				<?php echo $pago->idPed3->idCli3->idTie4->perfilTendero->ciudad_ten; ?>,
				<?php echo $pago->idPed3->idCli3->idTie4->perfilTendero->estado_ten; ?>
			</td>
			<td>
				$<?php echo ($pago->idPed3->idPla2->plazo - $pago->idPed3->pagos)*$pago->idPed3->abono_plazo_ped; ?>
			</td>
			<td>$<?php echo $pago->idPed3->abono_plazo_ped; ?></td>
			<td><?php echo $pago->fecha_pag; ?></td>
			<td>
				<?php 
					switch($pago->idPed3->status_ped) {
						case '0': echo "En Mora"; break;
						case '1': echo "Al Corriente"; break;
						case '2': echo "Finalizado"; break;
						default: echo "Desconocido";
					}
				?>
			</td>
			<td><?php echo CHtml::link('Historial', array('historialTendero', 'id'=>$pago->idPed3->idCli3->idTie4->id_tie)) ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

<h2>Por cobrar</h2>
<table class="table">
	<thead>
		<tr>
			<th>Tendero</th>
			<th>Dirección</th>
			<th>Ciudad</th>
			<th>Saldo</th>
			<th>Pago mínimo</th>
			<th>Fecha pago</th>
			<th>Estado</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($pagosProgramados as $pagoProgramado): ?>
		<tr>
			<td><?php echo $pagoProgramado->idPed4->idCli3->idTie4->nombre_tie; ?></td>
			<td>
				<?php echo $pagoProgramado->idPed4->idCli3->idTie4->perfilTendero->calle_ten; ?>
				#<?php echo $pagoProgramado->idPed4->idCli3->idTie4->perfilTendero->numero_ten; ?>
			</td>
			<td>
				<?php echo $pagoProgramado->idPed4->idCli3->idTie4->perfilTendero->ciudad_ten; ?>,
				<?php echo $pagoProgramado->idPed4->idCli3->idTie4->perfilTendero->estado_ten; ?>
			</td>
			<td>
				$<?php echo ($pagoProgramado->idPed4->idPla2->plazo - $pagoProgramado->idPed4->pagos)*$pagoProgramado->idPed4->abono_plazo_ped; ?>
			</td>
			<td>$<?php echo $pagoProgramado->idPed4->abono_plazo_ped; ?></td>
			<td><?php echo $pago->fecha_pag; ?></td>
			<td>
				<?php 
					switch($pagoProgramado->idPed4->status_ped) {
						case '0': echo "En Mora"; break;
						case '1': echo "Al Corriente"; break;
						case '2': echo "Finalizado"; break;
						default: echo "Desconocido";
					}
				?>
			</td>
			<td>
				<?php echo CHtml::link('Historial', array('historialTendero', 'id'=>$pagoProgramado->idPed4->id_ped)) ?> | 
				<?php echo CHtml::link('Cobrar', array('cobrar', 'id'=>$pagoProgramado->id_pago_pro), array('class'=>'btn btn-primary')) ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>