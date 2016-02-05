<?php

class AdminController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/col_admin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array(
					'index',
					'view',
					'catalogo',
					'cartera',
					'creditos',
					'pagos',
					'entregas',
					'cobrar',
					'historialTendero',
					'panel',
					'agregarTipoProducto',
					'agregarProducto',
					'CategoryStateEnable',
					'productStateToggle',
					'agregarPantalla',
					'agregarTendero',
					'perfilTendero',
					'datosTendero',
					'tenderoStatusToggle',
					'getID',
					'aceptarCredito',
					'rechazarCredito',
					'getRequest',
					'programarEntrega',
					'entregar',
					'detallesPedido',
					'agregarPago',
					'historialCliente'
				),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	/*
	public function actionCreate()
	{
		$model=new Tienda;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tienda']))
		{
			$model->attributes=$_POST['Tienda'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tie));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
*/
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	/*
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tienda']))
		{
			$model->attributes=$_POST['Tienda'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tie));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
*/
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Tienda');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	/*
	public function actionAdmin()
	{
		$model=new Tienda('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tienda']))
			$model->attributes=$_GET['Tienda'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	*/
/*
	public function actionPanel()
	{
		$entregasEnEspera = EntregaEspera::model()->count();
		$entregasProgramadas = EntregaProgramada::model()->count();
		$entregasReprogramadas = EntregaReprogramada::model()->count();
		$entregas = Entrega::model()->count();

		$tiendasMora = Tienda::model()->count('status = 0');
		$tiendasCorriente = Tienda::model()->count('status = 1');

		$this->render('panel', array(
			'entregasEnEspera'=>$entregasEnEspera,
			'entregasProgramadas'=>$entregasProgramadas,
			'entregasReprogramadas'=>$entregasReprogramadas,
			'entregas'=>$entregas,
			'tiendasMora'=>$tiendasMora,
			'tiendasCorriente'=>$tiendasCorriente
		));
	}
*/
	public function actionCatalogo()
	{
		$categorias = Categoria::model()->findAll();
		$productos = Producto::model()->with(
			'idCatPro'
		)->findAll();

		$this->render('catalogo', array(
			'categorias'=>$categorias,
			'productos'=>$productos,
		));
	}

	public function actionAgregarTipoProducto()
	{
		$categoria = new Categoria();

		if(isset($_POST['Categoria']))
		{
			$categoria->attributes = $_POST['Categoria'];
			if (!isset($_POST['Categoria']['perfil']))
				$categoria->perfil = "default_image.png";	

			$categoria->status = "Habilitado";
						
			if($categoria->save())
				$this->redirect(array('catalogo'));		
		}
	}
	
	public function actionCategoryStateEnable($id)
	{
		$categoria = Categoria::model()->findByPk($id);
		$status = $categoria->status;
		if($status == 'Habilitado'){
			$status = 'Deshabilitado';
		}else{
			$status = 'Habilitado';
		}
		$categoria->status = $status;
		if ($categoria->save())
			$this->redirect(array('catalogo'));
	}


	public function actionAgregarProducto()
	{
		$id = uniqid();
		$producto = new Producto();
		$detalleProducto = new DetalleProducto();

		if(isset($_POST['Producto']))
		{	
			echo var_dump($_POST['Producto']);
			echo var_dump($_POST['DetalleProducto']);

			$producto->attributes = $_POST['Producto'];
			$producto->id_pro = $id;
			$producto->status = "Habilitado";
			$producto->fecha = date('Y-m-d');

			if($producto->perfil == "")
				$producto->perfil = "main.png";

			echo var_dump($producto);

			if(isset($_POST['DetalleProducto']))
			{
				$detalleProducto->attributes = $_POST['DetalleProducto'];
				if($_POST['DetalleProducto']['modelo'] == null)
					$detalleProducto->modelo = "No espeficidado";
				if($_POST['DetalleProducto']['detalles'] == null)
					$detalleProducto->detalles = "No especificado";
				if($_POST['DetalleProducto']['especificaciones'] == null)
					$detalleProducto->especificaciones = "No especificado";				
			}
			$detalleProducto->id_pro_det_pro = $id;
			echo var_dump($detalleProducto);

			
			if($producto->save())
			{
				if($detalleProducto->save())
					$this->redirect(array('catalogo'));
			}
			
		}
	}
	public function actionProductStateToggle()
	{	
		$id = $_GET['id'];
		$producto = Producto::model()->findByPk($id);
		if($producto->status == 'Habilitado')
			$producto->status = 'Deshabilitado';
		else
			$producto->status = 'Habilitado';

		if($producto->save())
			$this->redirect(array('catalogo'));
	}

	public function actionCartera()
	{
		$pantallas = Pantalla::model()->findAll();
		$tiendas = Tienda::model()->with(
			'perfilTendero',
			'datosTendero.idPanDatTen'
		)->findAll();

		$this->render('cartera', array(
			'pantallas'=>$pantallas,
			'tiendas'=>$tiendas
		));
	}
	public function actionAgregarPantalla()
	{
		$pantalla = new Pantalla();
		if($_POST['Pantalla'])
		{
			$pantalla->attributes = $_POST['Pantalla'];
			if($pantalla->save())
			{
				$this->redirect(array('cartera'));
			}
		}
	}
	public function actionAgregarTendero()
	{
		
		$tienda = new Tienda();

		if(isset($_POST['PerfilTendero']))
		{
			$id = uniqid('t');
			$tienda->id_tie = $id;
			$tienda->celular = $_POST['PerfilTendero']['celular'];
			$tienda->password = date('is');
			
			if($tienda->save())
			{
				$perfilTendero = new PerfilTendero();
				$perfilTendero->attributes = $_POST['PerfilTendero'];
				$perfilTendero->id_tie_per_ten = $id;
				
				if($perfilTendero->save())
				{
					$datosTendero = new DatosTendero();
					$datosTendero->id_tie_dat_ten = $id;
					$datosTendero->id_pan_dat_ten = '1';
					$datosTendero->creditos = '0';
					$datosTendero->saldo_historia = '0';
					$datosTendero->saldo_semana = '0';
					$datosTendero->cobrado_semana = '0';
					$datosTendero->status = 'Inactivo';
					$datosTendero->status_pago = 'Al corriente';
					$datosTendero->fecha_alta = date('Y-m-d');

					if($datosTendero->save())
					{
						$this->redirect(array('cartera'));
					}
				}
				
			}
			
		}
	}
	public function actionTenderoStatusToggle()
	{
		$id = $_GET['id'];
		$tendero = DatosTendero::model()->findByPk($id);
		if($tendero->status == 'Activo')
			$tendero->status = 'Inactivo';
		else
			$tendero->status = 'Activo';
		if($tendero->save())
			$this->redirect(array('cartera'));
	}
	public function actionPerfilTendero()
	{
		$id = $_GET['id'];

		$perfil = PerfilTendero::model()->findByPk($id);
		$datos = DatosTendero::model()->with(
			'idPanDatTen'
		)->findByPk($id);

		$this->render('perfilTendero', array(
			'perfil'=>$perfil,
			'datos'=>$datos
		));
	}
/*
	public function actionEditarTendero()
	{
		$id = getID();
	}

	public function getID()
	{
		return $_GET['id'];
	}
*/

	public function actionCreditos()
	{
		$pedidosActivos = Pedido::model()->with(
			'idProPed',
			'idCliPed',
			'idPlaPed',
			'detallePedido'
		)->findAll("status_ped = 'Activo'");

		$pedidosSolicitados = Pedido::model()->with(
			'idProPed',
			'idCliPed',
			'idPlaPed',
			'detallePedido'
		)->findAll("status_ped = 'Solicitado'");


		$pedidosFinalizados = Pedido::model()->with(
			'idProPed',
			'idCliPed',
			'idPlaPed',
			'detallePedido'
		)->findAll("status_ped = 'Finalizado'");
		

		$pedidosRechazados = Pedido::model()->with(
			'idProPed',
			'idCliPed',
			'idPlaPed',
			'detallePedido'
		)->findAll("status_ped = 'Rechazado'");

		$this->render('creditos', array(
			'pedidosActivos'=>$pedidosActivos,
			'pedidosSolicitados'=>$pedidosSolicitados,
			'pedidosFinalizados'=>$pedidosFinalizados,
			'pedidosRechazados'=>$pedidosRechazados
		));
	}
	public function actionAceptarCredito()
	{
		$id = $_GET['id'];

		$pedido = Pedido::model()->with(
			'idPlaPed'
		)->findByPk($id);

		$pedido->status_ped = 'Activo';
		$pedido->status_ent = 'espera';

/*
		$plazo  	= $pedido->idPlaPed->plazo;
		$modalidad	= $pedido->idPlaPed->modalidad;
		for($x = 1; $x<=$plazo; $x++)
		{
			$pagoProgamado = new Pago();

			$time = $x;
			if($modalidad == 'quincenales')
				$time = $x*2;

			$effectiveDate = strtotime("+$time week", strtotime(date('Y-m-d'))); // returns timestamp
			echo date('Y-m-d',$effectiveDate)."<br>"; // formatted version	
		}
*/
		if($pedido->save()){
			$enEspera = new EntregaEspera();
			$enEspera->id_ped_ee = $pedido->id_ped;
			if($enEspera->save())
				$this->redirect(array('creditos'));
		}

	}
	public function actionRechazarCredito()
	{
		$id = $_GET['id'];
		$pedido = Pedido::model()->findByPk($id);
		$pedido->status_ped = 'Rechazado';
		if($pedido->save())
			$this->redirect(array('creditos'));

	}

	public function actionhistorialCliente()
	{
		$id = $_GET['id'];

		$perfil = PerfilCliente::model()->findByPk($id);
		$datos = DatosCliente::model()->findByPk($id);
		$pedidos = Pedido::model()->with(
			'idProPed',
			'idPlaPed',
			'detallePedido'
		)->findAll("id_cli_ped = '".$id."'");
		#Yii::app()->user->setFlash("model", "Abriendo modal");

		$this->render('historialCliente', array(
			'perfil'=>$perfil,
			'datos'=>$datos,
			'pedidos'=>$pedidos
		));
	}
	public function actionDetallesPedido()
	{
		$id = $_GET['id'];
		$pedido = Pedido::model()->with(
			'idProPed',
			'detallePedido',
			'pagos',
			'idCliPed',
			'idPlaPed'
		)->find("id_ped = '".$id."'");

		$this->render('detallesPedido', array(
			'pedido'=>$pedido
		));
	}

	public function actionAgregarPago()
	{
		$id = $_GET['id'];

		$pagoProgramado = PagoProgramado::model()->find(array(
			"condition"=>"id_ped_pp= '".$id."'",
			"order"=>"fecha ASC"
		));

		$pago = new Pago();
		$pago->id_ped_pag = $id;
		$pago->fecha_programada = $pagoProgramado->fecha;
		$pago->fecha_pago = date("Y-m-d");
		echo var_dump($pago);
		
		if($pago->save())
		{
			$pedido = DetallePedido::model()->findByPk($id);

			$pedido->pagos++;
			if($pedido->save()){
				if($pagoProgramado->delete())
					$this->redirect(array('creditos'));
			}
		}
		
	}

	public function actionPagos()
	{

		$pagos = Pago::model()->with(
			'idPed3.idCli3.idTie4.perfilTendero',
			'idPed3.idPla2'
		)->findAll("status_ped > 0");

		$pagosProgramados = PagoProgramado::model()->with(
			'idPed4.idCli3.idTie4.perfilTendero',
			'idPed4.idPla2'
		)->findAll();

		$this->render('pagos', array(
			#'model'=>$pedidos,
			'pagos'=>$pagos,
			'pagosProgramados'=>$pagosProgramados
		));
	}
/*
	public function actionHistorialTendero($id)
	{
		$tienda = Tienda::model()->with(
			'perfilTendero',
			'clientes.perfilCliente',
			'pedidoses.idPla2',
			'pedidoses.idCli3',
			'pedidoses.productosPedidoses.idPro5'
		)->findByPk($id);
			
		$this->render('historialTendero', array(
			'tienda'=>$tienda
		));
	}

	public function actionCobrar($id)
	{
		$pagoProgramado = PagoProgramado::model()->findByPk($id);
		$pago = new Pago();

		$pago->id_ped_3 = $pagoProgramado->id_ped_4;
		$pago->fecha_pag = date("Y-m-d");
		if($pago->save())
		{
			if($pagoProgramado->delete())
				$this->redirect(array('pagos'));
		}
	}
*/
	public function actionEntregas()
	{
		$esperas = EntregaEspera::model()->with(
			'idPedEe.idTiePed',
			'idPedEe.idCliPed',
			'idPedEe.idProPed.detalleProducto'
		)->findAll();

		$programadas = EntregaProgramada::model()->with(
			'idPedEp.idTiePed',
			'idPedEp.idCliPed',
			'idPedEp.idProPed.detalleProducto'

		)->findAll();

		$realizadas = EntregaRealizada::model()->with(
			'idPedEr.idTiePed',
			'idPedEr.idCliPed',
			'idPedEr.idProPed.detalleProducto'

		)->findAll();
		
		$this->render('entregas', array(
			'esperas'=>$esperas,
			'programadas'=>$programadas,
			'realizadas'=>$realizadas
		));
	}
	public function actionProgramarEntrega(){
		$id = $_GET['id'];

		$enEspera = EntregaEspera::model()->findByPk($id);

		$programada = new EntregaProgramada();
		$programada->id_ped_ep = $enEspera->id_ped_ee;
		$programada->status_ent = "En transito";
		$programada->fecha_programada = date('Y-m-d');

		if($programada->save())

			$pedido = Pedido::model()->findByPk($id);
			$pedido->status_ent = "transito";
			if($pedido->save()){
				if($enEspera->delete())
					$this->redirect(array('entregas'));	
			}
	}
	public function actionEntregar()
	{
		$id = $_GET['id'];
		$programada = EntregaProgramada::model()->findByPk($id);

		$realizada = new EntregaRealizada();
		$realizada->id_ped_er = $id;
		$realizada->fecha_entrega = date("Y-m-d");
		$realizada->fecha_programada = $programada->fecha_programada;
		if($realizada->save())
		{
			$pedido = Pedido::model()->with(
				'idPlaPed'
			)->findByPk($id);
			$pedido->status_ent = "realizada";

			$plazo  	= $pedido->idPlaPed->plazo;
			$modalidad	= $pedido->idPlaPed->modalidad;

			if($pedido->save())
			{
				for($x = 1; $x<=$plazo; $x++)
				{
					$pagoProgramado = new PagoProgramado();

					$time = $x;
					if($modalidad == 'quincenales')
						$time = $x*2;

					$effectiveDate = strtotime("+$time week", strtotime(date('Y-m-d'))); // returns timestamp
					$pagoProgramado->id_ped_pp = $id;
					$pagoProgramado->fecha =  date('Y-m-d',$effectiveDate); // formatted version	
					$pagoProgramado->save();

				}

				if($programada->delete())
					$this->redirect(array('entregas'));
			}
		}

	}

	public function getRequest()
	{
		return Pedido::model()->count("status_ped = 'Solicitado'");
	}	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tienda the loaded model
	 * @throws CHttpException
	 */ 
	public function loadModel($id)
	{
		$model=Tienda::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tienda $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tienda-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
