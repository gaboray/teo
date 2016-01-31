<h1>Tendero <small><?php echo $perfil->id_tie_per_ten; ?></small></h1>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<dl class="dl-horizontal">
			  <dt>Nombre de la Tienda</dt>
			  <dd><?php echo $perfil->nombre_tienda; ?></dd>
			  <dt>Nombre</dt>
			  <dd><?php echo $perfil->nombre; ?></dd>

			  <dt>Apellido Paterno</dt>
			  <dd><?php echo $perfil->a_paterno; ?></dd>

			  <dt>Apellido Materno</dt>
			  <dd><?php echo $perfil->a_materno; ?></dd>

			  <dt>Celular</dt>
			  <dd><?php echo $perfil->celular; ?></dd>
			  <dt>Correo</dt>
			  <dd><?php echo $perfil->correo; ?></dd>
			  <dt>Estado</dt>
			  <dd><?php echo $perfil->estado; ?></dd>
			  <dt>Ciudad</dt>
			  <dd><?php echo $perfil->ciudad; ?></dd>
			  <dt>Municipio</dt>
			  <dd><?php echo $perfil->municipio; ?></dd>
			  <dt>Colonia</dt>
			  <dd><?php echo $perfil->colonia; ?></dd>
			  <dt>Calle</dt>
			  <dd><?php echo $perfil->calle; ?></dd>
			  <dt>Número</dt>
			  <dd><?php echo $perfil->numero; ?></dd>
			  <dt>Código Postal</dt>
			  <dd><?php echo $perfil->c_postal; ?></dd>
			</dl>
		</div>
		<div class="col-sm-6">
			<dl class="dl-horizontal">
				<dt>Pantalla</dt>
				<dd>
					<?php echo $datos->idPanDatTen->marca; ?>
					<?php echo $datos->idPanDatTen->modelo; ?>
				</dd>
				<dt>Créditos</dt>
				<dd><?php echo $datos->creditos; ?></dd>
				<dt>Saldo Historia</dt>
				<dd><?php echo $datos->saldo_historia; ?></dd>
				<dt>Saldo esta Semana</dt>
				<dd><?php echo $datos->saldo_semana; ?></dd>
				<dt>Cobrado esta Semana</dt>
				<dd><?php echo $datos->cobrado_semana; ?></dd>
				<dt>Status</dt>
				<dd><?php echo $datos->status; ?></dd>
				<dt>Miembro desde</dt>
				<dd><?php echo $datos->fecha_alta; ?></dd>
			</dl>
		</div>
	</div>
</div>