<script>
	$(document).on('ready', function(){
		$('button#addScreen').on('click', function(){
			var title = 'Agregar Pantalla';
			var content = 
				'<form action="agregarPantalla" method="post">'+
					'<div class="form-group">'+
						'<label for="modelo_tx">Modelo</label>'+
						'<input type="text" class="form-control" name="Pantalla[modelo]" id="modelo_tx" placeholder="Modelo">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="marca_tx">Marca</label>'+
						'<input type="text" class="form-control" name="Pantalla[marca]" id="marca_tx" placeholder="Marca">'+
					'</div>'+
					'<button type="submit" class="btn btn-default">Agregar</button>'+
				'</form>';
			$('h4.modal-title').html(title);
			$('div.modal-body').html(content);
			$('#modalAdmin').modal();
		});

		$('button#addTendero').on('click', function(){
			var title = 'Nuevo Tendero';
			var content = 
				'<form action="agregarTendero" method="post">'+
					'<div class="form-group">'+
						'<label for="nombre_tienda_tx">Nombre tienda</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[nombre_tienda]" id="nombre_tienda_tx" placeholder="Nombre de la Tienda">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="nombre_tx">Nombre</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[nombre]" id="nombre_tx" placeholder="Nombre">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="a_paterno_tx">Apellido Paterno</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[a_paterno]" id="a_paterno_tx" placeholder="A. Paterno">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="a_materno_tx">Apellido Materno</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[a_materno]" id="a_materno_tx" placeholder="A. Paterno">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="celular_tx">Celular</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[celular]" id="celular_tx" placeholder="9611234567" required>'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="correo_tx">Correo</label>'+
						'<input type="email" class="form-control" name="PerfilTendero[correo]" id="correo_tx" placeholder="ejemplo@dominio.com">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="estado_tx">Estado</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[estado]" id="estado_tx" placeholder="Chiapas">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="ciudad_tx">Ciudad</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[ciudad]" id="ciudad_tx" placeholder="Tuxtla Gutiérrez">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="municipio_tx">Municipio</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[municipio]" id="municipio_tx" placeholder="Tuxtla Gutiérrez">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="colonia_tx">Colonia</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[colonia]" id="colonia_tx" placeholder="Centro">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="calle_tx">Calle</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[calle]" id="calle_tx" placeholder="18 poniente">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="numero_nb">Número</label>'+
						'<input type="number" class="form-control" name="PerfilTendero[numero]" id="numero_nb" placeholder="28">'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="c_postal_tx">Código Postal</label>'+
						'<input type="text" class="form-control" name="PerfilTendero[c_postal]" id="c_postal_tx" placeholder="29060">'+
					'</div>'+
					'<button type="submit" class="btn btn-default">Agregar</button>'+
				'</form>';
			$('h4.modal-title').html(title);
			$('div.modal-body').html(content);
			$('#modalAdmin').modal();
		});
	})
</script>

<h1>Cartera</h1>

<div class="container">
	<h2>Pantallas táctiles</h2>
        <button type="button" class="btn btn-default" id="addScreen">Agregar</button>
	<div class="row">
	<?php if($pantallas != null): ?>
		<table class="table">
			<thead>
				<tr>
					<th>Identificador</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Acciones</th>
				</tr>
				<tbody>
				<?php foreach($pantallas as $pantalla): ?>
					<tr>
						<td><?php echo $pantalla->id_pan; ?></td>
						<td><?php echo $pantalla->marca; ?></td>
						<td>
								<?php echo $pantalla->modelo; ?>	
						</td>
						<td><?php echo CHtml::link('edit', 'editar'); ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</thead>
		</table>
	<?php else: ?>
		<center><h2>No hay pantallas registradas</h2></center>
	<?php endif; ?>
	</div>


	<h2>Tenderos</h2>
        <button type="button" class="btn btn-default" id="addTendero">
        	<span class="icon-person_add"></span> Agregar
        </button>
	<div class="row">
	<?php if($tiendas != null): ?>
		<table class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Tienda</th>
					<th>Pantalla</th>
					<th>Status</th>
					<th>Acciones</th>
				</tr>
				<tbody>
				<?php foreach($tiendas as $tienda): ?>
					<tr>
						<td><?php echo $tienda->perfilTendero->nombre." ".$tienda->perfilTendero->a_paterno." ".$tienda->perfilTendero->a_materno; ?></td>
						<td><?php echo $tienda->perfilTendero->nombre_tienda; ?></td>
						<td>
								<?php echo $tienda->datosTendero->idPanDatTen->marca; ?>	
						</td>
						<td>
							<a href="tenderoStatusToggle?id=<?php echo $tienda->id_tie; ?>" class="no-decoration">
								<span class="label label-<?php echo $tienda->datosTendero->status=='Activo'? "success":"warning" ?>">	
									<?php echo $tienda->datosTendero->status; ?>								
								</span>
							</a>
						</td>
						<td>
							<a href="perfilTendero?id=<?php echo $tienda->id_tie; ?>" title="Ver Perfil" class="no-decoration">
								<span class="icon-person"></span>
							</a>
							<a href="editarTendero?id=<?php echo $tienda->id_tie; ?>" title="Editar" class="no-decoration">
								<span class="icon-edit"></span>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</thead>
		</table>
	<?php else: ?>
		<center><h2>No hay tiendas registradas</h2></center>
	<?php endif; ?>
	</div>
</div>