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
		<?php foreach($model as $data): ?>
			<?php if($data->pagos0 != null): ?>
			<tr>
				<td>
					<?php echo $data->idCli3->perfilCliente->nombre_cli; ?>
					<?php echo $data->idCli3->perfilCliente->a_paterno_cli; ?>
					<?php echo $data->idCli3->perfilCliente->a_materno_cli; ?>
				</td>
				<td>
					<?php echo $data->idCli3->perfilCliente->calle_cli; ?>
					<?php echo "# ".$data->idCli3->perfilCliente->numero_cli; ?>
				</td>
				<td>
					<?php echo $data->idCli3->perfilCliente->ciudad_cli; ?>
				</td>
				
				<td>
					$<?php echo ($data->idPla2->plazo - $data->pagos)*$data->abono_plazo_ped; ?>
				</td>
				<td>
					$<?php echo $data->abono_plazo_ped; ?>
				</td>
				<td>
					<?php 
						$var = $data->pagos0; 
						foreach($var as $key){
							echo $key->fecha_pag."<br>";
						}
					?>
				</td>

				<td>
					<span class="label label-<?php echo $data->status_ped==1? "success":"warning"; ?>">
						<?php echo $data->status_ped==1? "Al corriente":"En mora"; ?>
					</span>
				</td>		
				<td><?php echo CHtml::link("Historial", array('historialCliente','id'=>$data->idCli3->id_cli)); ?></td>
			</tr>
			<?php endif; ?>
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


