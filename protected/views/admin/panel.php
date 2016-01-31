<h1>Panel</h1>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>Entregas</h2>
			<div class="col-md-8">
				<table class="table table-hover">
					<tr>
						<th>En espera</th>
						<td><?php echo $entregasEnEspera; ?></td>
					</tr>
					<tr>
						<th>Programadas</th>
						<td><?php echo $entregasProgramadas; ?></td>
					</tr>
					<tr>
						<th>Reprogramadas</th>
						<td><?php echo $entregasReprogramadas; ?></td>
					</tr>
					<tr>
						<th>Entregados</th>
						<td><?php echo $entregas; ?></td>
					</tr>
				</table>
			</div>
		</div>	
		<div class="col-md-6">
			<h2>Tenderos</h2>
			<div class="col-md-8">
				<table class="table table-hover">
					<tr>
						<th>Activos</th>
						<td>///6///</td>
					</tr>
					<tr>
						<th>En Mora</th>
						<td><?php echo $tiendasMora; ?></td>
					</tr>
					<tr>
						<th>Al corriente</th>
						<td><?php echo $tiendasCorriente; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2>Créditos</h2>
			<div class="col-md-8">
				<table class="table table-hover">
					<tr>
						<th>Saldo</th>
						<td>$4000.00</td>
					</tr>
					<tr>
						<th>Activos</th>
						<td>11</td>
					</tr>
					<tr>
						<th>En mora</th>
						<td>2</td>
					</tr>
					<tr>
						<th>Al corriente</th>
						<td>9</td>
					</tr>
				</table>
			</div>
		</div>	
		<div class="col-md-6">
			<h2>Pagos</h2>
			<div class="col-md-8">
				<table class="table table-hover">
					<tr>
						<th>Cobrado esta Semana</th>
						<td>$4000.00</td>
					</tr>
					<tr>
						<th>Pago Mínimo Esta Semana</th>
						<td>$300.00</td>
					</tr>
					<tr>
						<th>Monto Total de Mora</th>
						<td>$500.00</td>
					</tr>
					<tr>
						<th>Al corriente</th>
						<td>9</td>
					</tr>
					<tr>
						<th>En Mora</th>
						<td>15</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>