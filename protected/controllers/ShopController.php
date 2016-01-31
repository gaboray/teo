<?php
class ShopController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionCategoria()
	{
		$categoriaBuscada = $_GET['name'];
		$categoria=Shop::model()->with(
			'idCatPro'
		)->findAll("id_cat_pro =  '".$categoriaBuscada."'");
		$this->render("categoria",array(
			"categoria"=>$categoria
		));
	}
	
	public function actionArticulo()
	{
		$id = $_GET['id'];
		
		$datosProducto = Shop::model()->with(
			'detalleProducto',
			'idCatPro',
			'fotoProductos'
			)->findByPk($id);

		$cat = $datosProducto->id_cat_pro;

		$plazos = Plazo::model()->findAll();

		$productos = Producto::model()->findAll(array(
			'condition'=>'id_cat_pro='.$cat,
			'order'=>'id_pro desc',
			'limit'=>5
		));

		$this->render("articulo",array(
			'datosProducto'=>$datosProducto,
			'productos'=>$productos,
			'plazos'=>$plazos
		));
	}
	public function actionConfirmarCompra()
	{
		$this->render('confirmarCompra');
	}

	public function actionBuyConfirm()
	{
		$cliente = Cliente::model()->find('celular ='. $_POST['Cliente']['celular']);
		if($cliente != null)
		{
			if($cliente->password == $_POST['Cliente']['pw'])
			{
				//Confirmación de Identidad
				$pedido = new Pedido();

				$idPedido = date('iHs').uniqid();
				$pedido->attributes = $_POST['Pedido'];
				$pedido->id_ped = $idPedido;
				$pedido->id_cli_ped = $cliente->id_cli;
				$pedido->id_tie_ped = $cliente->id_tie_cli;
				$pedido->status_ped = 'Solicitado';
				$pedido->status_pag = 'Al corriente';
				if($pedido->save())
				{
					$detallePedido = new DetallePedido();
					$detallePedido->attributes = $_POST['DetallePedido'];
					$detallePedido->id_ped_dp = $idPedido;
					$detallePedido->pagos = '0';
					$detallePedido->fecha_sol = date('Y-m-d');
					$detallePedido->fecha_apr = '000-00-00';
					$detallePedido->fecha_ent = '000-00-00';
					$detallePedido->fecha_exp = '000-00-00';	

					if($detallePedido->save())
					{
						$this->redirect('index');
					}
				}
				

			}
			else
				echo "Error pw";
		}
		echo var_dump($_POST['Cliente']);
	}
/*
	public function actionAddToCar()
	{
		$id_cli = $_POST['Cesta']['id_cli_2'];
		$id_pro = $_POST['Cesta']['id_pro_4'];
		$cantidad = $_POST['Cesta']['cantidad'];
	
		if(isset($_POST))
		{
			if(Cesta::model()->exists('id_cli_2 = '.$id_cli.' AND id_pro_4 = '.$id_pro))
			{
				$model = Cesta::model()->find('id_cli_2 = '.$id_cli.' AND id_pro_4 = '.$id_pro);
				#$model->cantidad=$cantidad;
				$model->attributes=$_POST['Cesta'];
				if($model->save())
					$this->redirect(Yii::app()->request->urlReferrer."&in_car=true");
			}
		}

		$cesta = new Cesta;
		
		$cesta->attributes=$_POST['Cesta'];

		if($cesta->save())
		{
			$this->redirect(Yii::app()->request->urlReferrer."&added=true");
			#$this->redirect(Yii::app()->user->returnUrl);
		}
		//$this->render("articulo",array("data"=>$data));

	}

	public function actionCesta()
	{
		$shop = Shop::model()->with(
			'detalleProducto.idPro1',
			'clientes'
			)->findAll('id_cli_2 = 1');

		$model = Cesta::model()->findAll('id_cli_2 = 1');

		$cesta = array();
		$count = 0;

		foreach($model as $data){
			$cesta[$count][0] = $data->abono;
			$cesta[$count][1] = $data->cantidad;
			$count++;
		}

		$plazos = array();
		$count = 0;


		$model = Plazos::model()->findAll();

		foreach ($model as $data) {
			$plazos[$count][0] = $data->plazo;
			$plazos[$count][1] = $data->modalidad;
			$count++;
		}

		$this->render('cesta',array(
			'model'=>$shop,
			'cesta'=>$cesta,
			'plazos'=>$plazos));
	}
*/
	public function actionRegistro()
	{
			$this->redirect(array("solicitudCliente/"));
	}
	

	public function getCategories()
	{
		return Categoria::model()->findAll("status = 'Habilitado'");
	}

	
}