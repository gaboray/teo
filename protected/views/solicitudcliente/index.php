<div class="container" style="background:url('<?php echo Yii::app()->request->baseUrl; ?>/images/bg.jpg') no-repeat; 
position:absolute; width:100%; height:100%; background-size:100%; background-position:0px -120px;">
  <div class="col-sm-5">

    <form class="form-horizontal" method="post" style="margin-top: 100px;">
    <div class="form-group">
      <label for="nombre_tx" class="col-sm-4 control-label white">Nombre</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="SolicitudCliente[nombre]" id="nombre_tx" placeholder="José Mauricio" autofocus>
      </div>
    </div>
    <div class="form-group">
      <label for="a_paterno_tx" class="col-sm-4 control-label white">Apellido Paterno</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="SolicitudCliente[a_paterno]" id="a_paterno_tx" placeholder="López">
      </div>
    </div>
    <div class="form-group">
      <label for="a_materno_tx" class="col-sm-4 control-label white">Apellido Materno</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="SolicitudCliente[a_materno]" id="a_materno_tx" placeholder="López">
      </div>
    </div>
    <div class="form-group">
      <label for="celular_tx" class="col-sm-4 control-label white">Celular</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="SolicitudCliente[celular]" id="celular_tx" placeholder="9611234567">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-8">
        <a href="<?php echo Yii::app()->request->urlReferrer; ?>" class="btn btn-default">Volver</a>
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
    </div>
    </form>
  </div>
</div>