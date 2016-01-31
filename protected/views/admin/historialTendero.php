<h1>Historial Tendero</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <dl class="dl-horizontal">

            <dt>Tendero</dt>
            <dd>
                <?php echo $tienda->perfilTendero->nombre_ten; ?>
                <?php echo $tienda->perfilTendero->a_paterno_ten; ?>
                <?php echo $tienda->perfilTendero->a_materno_ten; ?>
            </dd>

            <dt>Tienda</dt>
            <dd><?php echo $tienda->nombre_tie; ?></dd>
        </dl>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Monto</th>
                        <th>Saldo</th>
                        <th>Cliente</th>
                        <th>Producto</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $pedidos = $tienda->pedidoses;
                    foreach($pedidos as $pedido):
                ?>
                    <tr>
                        <td><?php echo $pedido->fecha_ped; ?></td>
                        <td>$<?php echo $pedido->abono_plazo_ped*$pedido->idPla2->plazo; ?></td>
                        <td>$<?php echo ($pedido->idPla2->plazo - $pedido->pagos)*$pedido->abono_plazo_ped; ?></td>
                        <td>
                            <?php echo $pedido->idCli3->perfilCliente->nombre_cli;  ?>
                            <?php echo $pedido->idCli3->perfilCliente->a_paterno_cli;  ?>
                            <?php echo $pedido->idCli3->perfilCliente->a_materno_cli;  ?>
                        </td>
                        <td>
                        <?php 
                            $var = $pedido->productosPedidoses;
                            #echo var_dump($var);
                            
                            foreach ($var as $key){
                                #echo var_dump($key);
                                echo $key->idPro5->nombre_pro."<br>";
                            }
                        ?>
                        </td>
                        <td>
                            <span class="label label-<?php echo $pedido->status_ped==1? "success":"warning"; ?>">
                                <?php echo $pedido->status_ped==1? "Al corriente":"En mora"; ?>
                            </span>
                        </td>
                        <td>
                            <?php echo CHtml::link('Detalle', array('detallePedido','id'=> $pedido->id_ped)); ?>
                        </td>
                    </tr>
                <?php
                    endforeach;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>