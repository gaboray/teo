<h1>Pagos</h1>

<table class="table">
	<thead>
		<tr>
			<th>Cliente</th>
			<th>Dirección</th>
			<th>Ciudad</th>
			<th>Saldo</th>
			<th>Pago mínimo</th>
			<th>Fecha de Pago</th>
			<th>Estado</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($pagos as $pago): ?>
		<tr>
			<td>
				<?php echo $pago->idPedPag->idCliPed->nombre; ?>
				<?php echo $pago->idPedPag->idCliPed->a_paterno; ?>
				<?php echo $pago->idPedPag->idCliPed->a_materno; ?>
			</td>
			<td>
				<?php echo $pago->idPedPag->idCliPed->calle; ?>
				#<?php echo $pago->idPedPag->idCliPed->numero; ?>
				Col. <?php echo $pago->idPedPag->idCliPed->colonia; ?>
			</td>
			<td>
				<?php echo $pago->idPedPag->idTiePed->ciudad; ?>,
				<?php echo $pago->idPedPag->idTiePed->estado; ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

<?php /*
if(($msgs=Yii::app()->user->getFlashes())!==null): ?>
	<?php foreach($msgs as $type => $message): ?>
		<?php $this->renderPartial('historialPago') ?>
	<?php endforeach; ?>
<?php endif; */
?>


