<div class="col-md-10">
  <div class="row">
    <div class="col-md-4">
      <div class="row">
        <img src="" class="main-picture" width="100%">
      </div>
      <div class="row pictures">
        <ul>
          <li class="pictures-product" id="<?php echo $datosProducto->id_pro; ?>"  data-source="<?php echo Yii::app()->request->baseUrl."/images/productos/".$datosProducto->idCatPro->nombre."/".$datosProducto->id_pro."/".$datosProducto->perfil; ?>">
            <img src="<?php echo Yii::app()->request->baseUrl."/images/productos/".$datosProducto->idCatPro->nombre."/".$datosProducto->id_pro."/".$datosProducto->perfil; ?>">
          </li>
      <?php 
        $var = $datosProducto->fotoProductos;
        foreach($var as $key):
      ?>
          <li class="pictures-product" id="<?php echo $key->id; ?>"  data-source="<?php echo Yii::app()->request->baseUrl."/images/productos/".$datosProducto->idCatPro->nombre."/".$datosProducto->id_pro."/".$key->nombre; ?>">
            <img src="<?php echo Yii::app()->request->baseUrl."/images/productos/".$datosProducto->idCatPro->nombre."/".$datosProducto->id_pro."/".$key->nombre; ?>">
          </li>
      <?php endforeach; ?>
        </ul>
      </div>

    </div>
    <div class="col-md-8">
      <h1 class="item-name"><?php echo CHtml::encode($datosProducto->nombre); ?></h1>
      <p class="descripcion">
        <?php echo CHtml::encode($datosProducto->detalleProducto->detalles); ?>
      </p>
      <div class="col-md-6">
        <br>
        <span class="payment1">Sólo paga</span>
        <br>
        <span class="abono"></span>
        <span class="payment2"><i>Por favor escoja su plazo de pago</i></span>
        <br>
        <a id="verEspecificacion" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          <span class="glyphicon glyphicon-plus"></span>&nbsp Ver especificaciones
        </a>
      </div>
      <div class="col-md-6">
        <form class="form-horizontal" action="buyConfirm" method="post" id="buy">

          <input type="text" class="form-control sr-only" id="producto" 
          value="<?php echo $datosProducto->id_pro; ?>">

          <input type="number" class="form-control sr-only" id="plazo">

          <input type="number" class="form-control sr-only" id="abono">
          
          <div class="form-group form-group-lg">
            <label for="cantidad" class="col-sm-4 control-label">Cantidad</label>
            <div class="col-sm-6">
              <input type="number" class="form-control" name="Cesta[cantidad]" id="cantidad" min="1" value="1">
            </div>
          </div>

        </form>
          <div class="form-group">
            <div class="col-sm-12">
              <button class="btn btn-primary btn-lg btn-block comprar" id="addSubmit"
              disabled title="Por favor escoja su plazo de pago">Adquirir</button>
            </div>
          </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <div class="row">
    <div class="col-md-12">
      
      <div class="collapse" id="collapseExample">
        <div class="">
        <?php echo $datosProducto->detalleProducto->especificaciones; ?>
        


        </div>
      </div>
    </div>
  </div>

</div>
  
<div class="col-md-2">
  <center>
    <label>Escoje tu plazo de pago:</label>
  
    <div class="btn-group-vertical plazo-picker" data-toggle="buttons" 
    data-price="<?php echo CHtml::encode($datosProducto->precio); ?>">
    <?php foreach($plazos as $plazo): ?>
      <label class="btn btn-default" id="p<?php echo $plazo->id_pla;?>" data-plazo="<?php echo $plazo->plazo;?>"
       data-modalidad="<?php echo $plazo->modalidad;?>" 
       data-id="<?php echo $plazo->id_pla;?>">
        <input type="radio" name="options" id="option<?php echo $plazo->id_pla;?>" autocomplete="off">
        <?php echo $plazo->plazo." ".$plazo->modalidad; ?>
      </label>
     <?php endforeach; ?>
    </div>
  </center>
</div>
