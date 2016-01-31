<div class="col-md-10">
	<div class="container-fluid" id="cesta">
		<div class="row" id="pago">
			<div class="col-md-12">
				
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Panel title</h3>
				  </div>
				  <div class="panel-body">
				    <h1>Pago</h1>
				  </div>
				</div>

			</div>
		</div>
		<div class="row" id="envio">
			<div class="col-md-12">
				
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Panel title</h3>
				  </div>
				  <div class="panel-body">
				    <h1>Envio</h1>
				  </div>
				</div>

			</div>
		</div>
		<div class="row" id="compra">
			<div class="col-md-12">
				
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


			</div>
		</div>
	</div>
</div>
<div class="col-md-2">

  <center>
  
    <div class="btn-group-vertical mode" data-toggle="buttons">
      <label class="btn btn-default active" id="p1">
        <input type="radio" name="options" id="option1" autocomplete="off" checked="">
        <span class="icon-local_mall cesta"></span><br>Detalles de Compra
      </label>
      <label class="btn btn-default" id="p2">
        <input type="radio" name="options" id="option2" autocomplete="off">
        <span class="icon-credit_card cesta"></span><br>Pago
      </label>
      <label class="btn btn-default" id="p3">
        <input type="radio" name="options" id="option3" autocomplete="off">
        <span class="icon-local_shipping cesta"></span><br>Envío
      </label>
    </div>
  </center>
</div>