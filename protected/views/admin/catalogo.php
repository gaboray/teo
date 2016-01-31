<script>
	$(document).on('ready',function(){
		$('#addTypeButton').on('click', function(){

			$('#addTypeForm').modal();
		});

		$('#addProductButton').on('click', function(){

			$('#addProductForm').modal();
		});
	})
</script>

<div class="modal fade" id="addTypeForm" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Agregar Tipo de Producto</h4>
      </div>
      <div class="modal-body">

		<form action="agregarTipoProducto" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nombre_tx">Nombre</label>
				<input type="text" class="form-control" name="Categoria[nombre]" id="nombre_tx" placeholder="Electrodomésticos">
			</div>
			<div class="form-group">
				<label for="foto">Foto de Perfil</label>
				<input type="file" id="foto" name="Categoria[perfil]">
			</div>
			<button type="submit" class="btn btn-default">Agregar</button>
		</form>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="addProductForm" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Agregar Producto</h4>
      </div>
      <div class="modal-body">

		<form action="agregarProducto" method="post">
			<div class="form-group">
				<label for="nombre_txt">Nombre</label>
				<input type="text" class="form-control" name="Producto[nombre]" id="nombre_txt" placeholder="Licuadora...">
			</div>
			<div class="form-group">
				<select class="form-control" name="Producto[id_cat_pro]">Categoría
					<?php foreach($categorias as $categoria): ?>
				  		<option value="<?php echo $categoria->id_cat; ?>"><?php echo $categoria->nombre; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="precio_txt">Precio</label>
				<input type="text" class="form-control" name="Producto[precio]" id="precio_txt" placeholder="Licuadora...">
			</div>
			<div class="form-group">
				<label for="marca_txt">Marca</label>
				<input type="text" class="form-control" name="Producto[marca]" id="marca_txt" placeholder="Oster">
			</div>
			<div class="form-group">
				<label for="perfil">Foto de Perfil</label>
				<input type="file" id="perfil" name="Producto[perfil]">
			</div>
			<div class="form-group">
				<label for="modelo_txt">Modelo</label>
				<input type="text" class="form-control" name="DetalleProducto[modelo]" id="modelo_txt">
			</div>			
			<div class="form-group">
				<label for="modelo_txt">Detalles</label>
				<textarea class="form-control" rows="3" name="DetalleProducto[detalles]" id="modelo_txt"></textarea>
			</div>				
			<div class="form-group">
				<label for="especificaciones_ta">Especificaciones</label>
				<textarea class="form-control" rows="3" name="DetalleProducto[especificaciones]" id="especificaciones_ta"></textarea>
			</div>			
			<button type="submit" class="btn btn-default">Agregar</button>
		</form>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<h1>Catálogo</h1>
<div class="container">
	<h2>Tipos de producto</h2>
	<button class="btn btn-default" id="addTypeButton">Agregar</button>
	<div class="row">
	<?php if($categorias == null): ?>
		<center><h2>No hay categorías</h2></center>
	<?php else: ?>
		<table class="table">
			<thead>
				<tr>
					<th>Clave</th>
					<th>Descripción</th>
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
				<tbody>
				<?php foreach($categorias as $categoria): ?>
					<tr>
						<td><?php echo $categoria->id_cat; ?></td>
						<td><?php echo $categoria->nombre; ?></td>
						<td>
							<a href="categoryStateEnable/<?php echo $categoria->id_cat; ?>" class="no-decoration">
								<span class="label label-<?php echo $categoria->status=='Habilitado'? "success":"warning" ?>">
								<?php echo $categoria->status; ?>	
								</span>
							</a>
						</td>
						<td><?php echo CHtml::link('edit', 'editar'); ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</thead>
		</table>
	<?php endif; ?>
	</div>

	<h2>Catálogo de Productos</h2>

	<?php if($categorias !=null): ?>
		<button class="btn btn-default" id="addProductButton">Agregar</button>
		<div class="row">
		<?php if($productos == null): ?>
			<center><h2>No hay Productos</h2></center>
		<?php else: ?>
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tipo</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
					<tbody>
					<?php foreach($productos as $producto): ?>
						<tr>
							<td><?php echo $producto->id_pro; ?></td>
							<td><?php echo $producto->idCatPro->nombre ?></td>
							<td><?php echo $producto->nombre; ?></td>
							<td><?php echo $producto->precio; ?></td>
							<td>
								<a href="productStateToggle?id=<?php echo $producto->id_pro; ?>" class="no-decoration">
									<span class="label label-<?php echo $producto->status=='Habilitado'? "success":"warning" ?>">
									<?php echo $producto->status; ?>
									</span>
								</a>
							</td>
							<td><?php echo CHtml::link('edit', 'editar'); ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</thead>
			</table>
		<?php endif; ?>
		</div>
	<?php else: ?>
		<center>
			<h2>Para agregar un tipo de producto, por favor agregue un tipo de producto.
			</h2>
		</center>
	<?php endif; ?>
</div>