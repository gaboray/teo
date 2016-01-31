<div class="col-md-8 col-md-offset-2">
	<h1>Cesta de compras</h1>
	<table class="table">
		<thead>
			<tr>
				<td></td>
				<td>Nombre</td>
				<td>Cantidad</td>
				<td></td>
				<td>Abono</td>
			</tr>
		</thead>
		
	<?php
	$count = 0;
		foreach ($model as $data):
	?>
		<tbody>
			<tr>
				<td><img src="<?php echo Yii::app()->request->baseUrl."/images/".$data->ruta_foto_pro; ?>" width="100px"></td>
				<td><?php echo CHtml::link($data->nombre_pro, 'articulo?categoria='.$data->id_cat_1."&id=".$data->id_pro); ?></td>
				<td><?php echo $cesta[$count][1]; ?></td>
				<td>
				<?php echo $plazos[$count][0]." ".$plazos[$count][1]; ?>
				</td>
				<td>
					<span style="color:#6A5ACD; font-size:40px; font-weight:bold"><?php echo $cesta[$count][0]; ?></span>
				</td>
			</tr>
		</tbody>
	<?php
		$count++;
		endforeach;

	?>

	</table>

	<?php
	?>

</div>