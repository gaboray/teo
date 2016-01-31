<h1>Entregas</h1>

<h2>Programadas</h2>
<table class="table">
	<thead>
		<tr>
			<th>Fecha Aprobación</th>
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
	<?php foreach($programadas as $programada): ?>

		<tr>
			<td><?php echo $programada->fecha_aprobacion; ?></td>
			<td><?php echo $programada->idPed3->idCli3->idTie4->nombre_tie; ?></td>
			<td>
				<?php echo $programada->idPed3->idCli3->idTie4->perfilTendero->calle_ten; ?>
				#<?php echo $programada->idPed3->idCli3->idTie4->perfilTendero->numero_ten; ?>
			</td>
			<td>
				<?php echo $programada->idPed3->idCli3->idTie4->perfilTendero->ciudad_ten; ?>,
				<?php echo $programada->idPed3->idCli3->idTie4->perfilTendero->estado_ten; ?>
			</td>
			<td>
				<?php
					#echo $programada->idPed3->productosPedidoses->idPro5->marca_pro; 
					$var = $programada->idPed3->productosPedidoses;

					$product = array();
					$i = 0;

					foreach ($var as $key) {
						#echo var_dump($key->idPro5);
						$product[$i][0] = $key->idPro5->marca_pro;
						$product[$i][1] = $key->idPro5->detalleProducto->modelo_pro;
						$product[$i][2] = $key->idPro5->nombre_pro;

						echo $product[$i][0]."<br>";
						$i++;
					}
				?>
			</td>
			<td>
				<?php #echo $programada->idPed3->productosPedidoses->idPro5->detalleProducto->modelo_pro; ?>
				<?php 
					foreach ($product as $key) {
						#echo var_dump($key);
						echo $key[1]."<br>";
					}
				?>
			</td>
			<td>
				<?php #echo $programada->idPed3->productosPedidoses->idPro5->detalleProducto->modelo_pro; ?>
				<?php 
					foreach ($product as $key) {
						#echo var_dump($key);
						echo $key[2]."<br>";
					}
				?>
			</td>
			<td>
				<?php echo $programada->idPed3->idCli3->perfilCliente->nombre_cli; ?>
				<?php echo $programada->idPed3->idCli3->perfilCliente->a_paterno_cli; ?>
				<?php echo $programada->idPed3->idCli3->perfilCliente->a_materno_cli; ?>
			</td>
		</tr>

	<?php endforeach; ?>
	</tbody>
</table>

<h2>Realizadas</h2>
<table class="table">
	<thead>
		<tr>			
			<th>Fecha Aprobación</th>
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
		<?php foreach($entregas as $entrega): ?>
			
		<tr>
			<td><?php echo $entrega->fecha_aprobacion; ?></td>
			<td><?php echo $entrega->idPed2->idCli3->idTie4->nombre_tie; ?></td>
			<td>
				<?php echo $entrega->idPed2->idCli3->idTie4->perfilTendero->calle_ten; ?>
				#<?php echo $entrega->idPed2->idCli3->idTie4->perfilTendero->numero_ten; ?>
			</td>
			<td>
				<?php echo $entrega->idPed2->idCli3->idTie4->perfilTendero->ciudad_ten; ?>,
				<?php echo $entrega->idPed2->idCli3->idTie4->perfilTendero->estado_ten; ?>
			</td>
			<td>
				<?php
					#echo $entrega->idPed2->productosPedidoses->idPro5->marca_pro; 
					$var = $entrega->idPed2->productosPedidoses;

					$product = array();
					$i = 0;

					foreach ($var as $key) {
						#echo var_dump($key->idPro5);
						$product[$i][0] = $key->idPro5->marca_pro;
						$product[$i][1] = $key->idPro5->detalleProducto->modelo_pro;
						$product[$i][2] = $key->idPro5->nombre_pro;

						echo $product[$i][0]."<br>";
						$i++;
					}
				?>
			</td>
			<td>
				<?php #echo $entrega->idPed2->productosPedidoses->idPro5->detalleProducto->modelo_pro; ?>
				<?php 
					foreach ($product as $key) {
						#echo var_dump($key);
						echo $key[1]."<br>";
					}
				?>
			</td>
			<td>
				<?php #echo $entrega->idPed2->productosPedidoses->idPro5->detalleProducto->modelo_pro; ?>
				<?php 
					foreach ($product as $key) {
						#echo var_dump($key);
						echo $key[2]."<br>";
					}
				?>
			</td>
			<td>
				<?php echo $entrega->idPed2->idCli3->perfilCliente->nombre_cli; ?>
				<?php echo $entrega->idPed2->idCli3->perfilCliente->a_paterno_cli; ?>
				<?php echo $entrega->idPed2->idCli3->perfilCliente->a_materno_cli; ?>
			</td>
		</tr>

		<?php endforeach; ?>
	</tbody>
</table>