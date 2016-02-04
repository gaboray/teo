<h1>Entregas</h1>

<div class="row">
	<div class="col-md-12">
		<h2>En espera</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Tendero</th>
					<th>Dirección</th>
					<th>Ciudad</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Producto</th>
					<th>Cliente</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($esperas as $espera): ?>

				<tr>
					<td>
						<?php echo $espera->idPedEe->idTiePed->nombre; ?>
						<?php echo $espera->idPedEe->idTiePed->a_paterno; ?>
						<?php echo $espera->idPedEe->idTiePed->a_materno; ?>
					</td>
					<td>
						<?php echo $espera->idPedEe->idTiePed->calle; ?>
						#<?php echo $espera->idPedEe->idTiePed->numero; ?>
						Col. <?php echo $espera->idPedEe->idTiePed->colonia; ?>
					</td>
					<td>
						<?php echo $espera->idPedEe->idTiePed->ciudad; ?>
					</td>
					<td>
						<?php echo $espera->idPedEe->idProPed->marca; ?>
					</td>
					<td>
						<?php echo $espera->idPedEe->idProPed->detalleProducto->modelo; ?>
					</td>
					<td>
						<?php echo $espera->idPedEe->idProPed->nombre; ?>
					</td>
					<td>
						<?php echo $espera->idPedEe->idCliPed->nombre; ?>
						<?php echo $espera->idPedEe->idCliPed->a_paterno; ?>
						<?php echo $espera->idPedEe->idCliPed->a_materno; ?>
					</td>
					<td>
						<a href="programarEntrega?id=<?php echo $espera->id_ped_ee; ?>">Programar</a>
					</td>
				</tr>

			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h2>Programadas</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Tendero</th>
					<th>Dirección</th>
					<th>Ciudad</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Producto</th>
					<th>Cliente</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($programadas as $programada): ?>

				<tr>
					<td>
						<?php echo $programada->idPedEp->idTiePed->nombre; ?>
						<?php echo $programada->idPedEp->idTiePed->a_paterno; ?>
						<?php echo $programada->idPedEp->idTiePed->a_materno; ?>
					</td>
					<td>
						<?php echo $programada->idPedEp->idTiePed->calle; ?>
						#<?php echo $programada->idPedEp->idTiePed->numero; ?>
						Col. <?php echo $programada->idPedEp->idTiePed->colonia; ?>
					</td>
					<td>
						<?php echo $programada->idPedEp->idTiePed->ciudad; ?>
					</td>
					<td>
						<?php echo $programada->idPedEp->idProPed->marca; ?>
					</td>
					<td>
						<?php echo $programada->idPedEp->idProPed->detalleProducto->modelo; ?>
					</td>
					<td>
						<?php echo $programada->idPedEp->idProPed->nombre; ?>
					</td>
					<td>
						<?php echo $programada->idPedEp->idCliPed->nombre; ?>
						<?php echo $programada->idPedEp->idCliPed->a_paterno; ?>
						<?php echo $programada->idPedEp->idCliPed->a_materno; ?>
					</td>
					<td>

						<span class="punto punto-<?php echo $programada->idPedEp->status_ent; ?>"></span>
					</td>
				</tr>

			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<h2>Realizadas</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Tendero</th>
					<th>Dirección</th>
					<th>Ciudad</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Producto</th>
					<th>Cliente</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($realizadas as $realizada): ?>

				<tr>
					<td>
						<?php echo $realizada->idPedEr->idTiePed->nombre; ?>
						<?php echo $realizada->idPedEr->idTiePed->a_paterno; ?>
						<?php echo $realizada->idPedEr->idTiePed->a_materno; ?>
					</td>
					<td>
						<?php echo $realizada->idPedEr->idTiePed->calle; ?>
						#<?php echo $realizada->idPedEr->idTiePed->numero; ?>
						Col. <?php echo $realizada->idPedEr->idTiePed->colonia; ?>
					</td>
					<td>
						<?php echo $realizada->idPedEr->idTiePed->ciudad; ?>
					</td>
					<td>
						<?php echo $realizada->idPedEr->idProPed->marca; ?>
					</td>
					<td>
						<?php echo $realizada->idPedEr->idProPed->detalleProducto->modelo; ?>
					</td>
					<td>
						<?php echo $realizada->idPedEr->idProPed->nombre; ?>
					</td>
					<td>
						<?php echo $realizada->idPedEr->idCliPed->nombre; ?>
						<?php echo $realizada->idPedEr->idCliPed->a_paterno; ?>
						<?php echo $realizada->idPedEr->idCliPed->a_materno; ?>
					</td>
				</tr>

			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>