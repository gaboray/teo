<h1>Cartera</h1>
<div class="container">
	<div class="row">
		<h2>Solicitudes</h2>
		<div class="col-md-12">
		<?php if($solicitudes != null): ?>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Celular</th>
					<th>Fecha Solicitud</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($solicitudes as $solicitud): ?>
				<tr>
					<td><?php echo $solicitud->nombre; ?></td>
					<td><?php echo $solicitud->a_paterno; ?></td>
					<td><?php echo $solicitud->a_materno; ?></td>
					<td><?php echo $solicitud->celular; ?></td>
					<td><?php echo $solicitud->fecha; ?></td>
					<td>
						<a href="aceptarSolicitud/<?php echo $solicitud->id_sol; ?>" class="no-decoration"><span class="icon-check font20"></span></a>
						<a href="rechazarSolicitud/<?php echo $solicitud->id_sol; ?>" class="no-decoration"><span class="icon-do_not_disturb font20"></span></a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<?php else: ?>
			<center><h2>No hay solicitudes</h2></center>
		<?php endif; ?>
		</div>
	</div>


	<div class="row">
		<h2>Clientes</h2>
		<div class="col-md-12">
		<?php if($clientes != null): ?>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Teléfono</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Saldo</th>
					<th>Activo</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($clientes as $cliente): ?>
				<tr>
					<td><?php echo $cliente->perfilCliente->celular; ?></td>
					<td>
						<?php echo $cliente->perfilCliente->nombre; ?>
						<?php echo $cliente->perfilCliente->a_paterno; ?>
						<?php echo $cliente->perfilCliente->a_materno; ?>
					</td>
					<td><?php echo $cliente->perfilCliente->calle." #".$cliente->perfilCliente->numero; ?></td>	
					<td><?php echo $cliente->datosCliente->creditos; ?></td>		
					<td>
						<a href="enable?id=<?php echo $cliente->id_cli; ?>" class="no-decoration">
							<span class="label label-<?php echo $cliente->datosCliente->status=='Habilitado'? "success":"warning"; ?>">
								<?php echo $cliente->datosCliente->status; ?>
							</span>
						</a>
					</td>		
					<td>
						<?php #echo CHtml::link('Editar', array('editarCliente','id'=>$cliente->id_cli)); ?> 
						<?php #echo CHtml::link('Ficha', array('fichaCliente','id'=>$cliente->id_cli)); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<?php else: ?>
			<center><h2>No hay clientes</h2></center>
		<?php endif; ?>
		</div>
	</div>


	<div class="row">
		<h2>Rechazados</h2>
		<div class="col-md-12">
		<?php if($rechazados != null): ?>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Celular</th>
					<th>Fecha Solicitud</th>
					<th>Fecha Rechazado</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($rechazados as $rechazado): ?>
				<tr>
					<td><?php echo $rechazado->nombre; ?></td>
					<td><?php echo $rechazado->a_paterno; ?></td>
					<td><?php echo $rechazado->a_materno; ?></td>
					<td><?php echo $rechazado->celular; ?></td>
					<td><?php echo $rechazado->fecha_sol; ?></td>
					<td><?php echo $rechazado->fecha_rec; ?></td>
					<td>
						<a href="perdonarCliente/<?php echo $rechazado->id_rec; ?>" title="Perdonar" class="no-decoration">
							<?php /* ?>
								span class="icon-mood font20"></span>
							<?php */ ?>
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<?php else: ?>
			<center><h2>No haz rechazado a nadie</h2></center>
		<?php endif; ?>
		</div>
	</div>
</div>