<div class="container">
  <div class="row">
    <h1>Historial</h1>
    <div class="col-md-12">
        <dl class="dl-horizontal">
            <dt>Teléfono</dt>
            <dd><?php echo $perfil->celular; ?></dd>
            <dt>Dirección</dt>
            <dd>
                <?php echo $perfil->calle; ?>
                #<?php echo $perfil->numero;     ?>
            </dd>
            <dt>Créditos</dt>
            <dd><?php echo $datos->creditos; ?></dd>
            <dt>Créditos Solicitados</dt>
            <dd><?php echo $datos->creditos_activos + $datos->creditos_finalizados + $datos->creditos_rechazados; ?></dd>
            <dt>Créditos Finalizados</dt>
            <dd><?php echo $datos->creditos_finalizados; ?></dd>
            <dt>Créditos Rechazados</dt>
            <dd><?php echo $datos->creditos_rechazados; ?></dd>
            <dt>Créditos Activos</dt>
            <dd><?php echo $datos->creditos_activos; ?></dd>
        </dl>

            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Producto</th>
                        <th>Pagado</th>
                        <th>Saldo</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($pedidos as $pedido): ?>
                    <tr>
                        <td><?php echo $pedido->detallePedido->fecha_sol; ?></td>
                        <td><?php echo $pedido->idProPed->nombre; ?></td>
                        <td>$<?php echo $pedido->detallePedido->abono_plazo_ped * $pedido->detallePedido->pagos; ?></td>
                        <td>$<?php echo ($pedido->idPlaPed->plazo - $pedido->detallePedido->pagos) * $pedido->detallePedido->abono_plazo_ped;?></td>
                        <td><?php echo $pedido->status_ped; ?></td>
                        <td><a href="detallesPedido?id=<?php echo $pedido->id_ped; ?>">Detalle</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </div>
  </div>
</div>