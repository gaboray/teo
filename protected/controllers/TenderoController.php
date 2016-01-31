<?php

class TenderoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/col_ten';

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
					'panel',
					'cartera',
					'creditos',
					'pagos',
					'historialCliente',
					'editarCliente',
					'fichaCliente',
					'aceptarSolicitud',
					'rechazarSolicitud',
					'perdonarCliente',
					'enable',
					'detallesPedido'
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

	/*
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Cliente', array(
			'criteria'=>array(
				'with'=>array('perfilCliente'),
			),
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


	public function actionPanel()
	{
		$entregasEnEspera = EntregaEspera::model()->with(
			'idPed6.idTie5'
		)->count('idTie5.id_tie = 1');

		$entregasProgramadas = EntregaProgramada::model()->with(
			'idPed3.idTie5'
		)->count();
		$entregasReprogramadas = EntregaReprogramada::model()->with(
			'idPed5.idTie5'
		)->count();
		$entregas = Entrega::model()->with(
			'idPed2.idTie5'
		)->count();

		$tienda = Tienda::model()->findByPk("1");

		$clientesMora = Cliente::model()->count('status_pag = 0 AND id_tie_4 = 1');
		$clientesCorriente = Cliente::model()->count('status_pag = 1 AND id_tie_4 = 1');

		$pedidosEnMora = Pedidos::model()->count('id_tie_5 = 1 AND status_ped = 0');
		$pedidosAlCorriente = Pedidos::model()->count('id_tie_5 = 1 AND status_ped = 1');
		$pedidosFinalizados = Pedidos::model()->count('id_tie_5 = 1 AND status_ped = 2');


		$this->render('panel', array(
			'entregasEnEspera'=>$entregasEnEspera,
			'entregasProgramadas'=>$entregasProgramadas,
			'entregasReprogramadas'=>$entregasReprogramadas,
			'entregas'=>$entregas,
			'clientesMora'=>$clientesMora,
			'clientesCorriente'=>$clientesCorriente,
			'tienda'=>$tienda,
			'pedidosEnMora'=>$pedidosEnMora,
			'pedidosAlCorriente'=>$pedidosAlCorriente,
			'pedidosFinalizados'=>$pedidosFinalizados
		));
	}
	*/

	public function actionCartera()
	{
		$solicitudes = SolicitudCliente::model()->findAll();
		$rechazados = SolicitudRechazada::model()->findAll();

		$clientes = Cliente::model()->with(
			'perfilCliente',
			'datosCliente'
		)->findAll();

		$this->render('cartera', array(
			'clientes'=>$clientes,
			'solicitudes'=>$solicitudes,
			'rechazados'=>$rechazados
		));
	}
	
	public function actionAceptarSolicitud($id)
	{
		$solicitud = SolicitudCliente::model()->findByPk($id);

		$cliente = new Cliente();
		$perfilCliente = new PerfilCliente();
		$datosCliente = new DatosCliente();
		
		$idCliente = uniqid('c');

		$cliente->id_cli = $idCliente;
		$cliente->id_tie_cli = $solicitud->id_tie_sol;
		$cliente->celular = $solicitud->celular;
		$cliente->password = date('is');

		$datosCliente->id_cli_dc = $idCliente;
		$datosCliente->status = 'Deshabilitado';
		$datosCliente->status_pago = 'Al corriente';
		$datosCliente->creditos = '0';
		$datosCliente->creditos_activos = '0';
		$datosCliente->creditos_rechazados = '0';
		$datosCliente->creditos_finalizados = '0';
		$datosCliente->fecha_sol = $solicitud->fecha;
		$datosCliente->fecha_alta = date('Y-m-d');

		if($cliente->save())
		{
			if($datosCliente->save())
			{

				$perfilCliente->id_cli_pc = $idCliente;			
				$perfilCliente->nombre = $solicitud->nombre;
				$perfilCliente->a_paterno = $solicitud->a_paterno;
				$perfilCliente->a_materno = $solicitud->a_materno;
				$perfilCliente->celular = $solicitud->celular;
				$perfilCliente->correo = 'Desconocido';
				$perfilCliente->colonia = 'Desconocido';
				$perfilCliente->calle = 'Desconocido';
				$perfilCliente->numero = '0';
				$perfilCliente->c_postal = '0';
				#echo var_dump($perfilCliente);

				if($perfilCliente->save())
				{
					if($solicitud->delete())
						$this->redirect(array('cartera'));
				}	
			}
		}
	}

	public function actionRechazarSolicitud($id)
	{
		$solicitud = SolicitudCliente::model()->findByPk($id);

		$solicitudRechazada = new SolicitudRechazada();


		$solicitudRechazada->id_tie_rec = $solicitud->id_tie_sol;
		$solicitudRechazada->nombre = $solicitud->nombre;
		$solicitudRechazada->a_paterno = $solicitud->a_paterno;
		$solicitudRechazada->a_materno = $solicitud->a_materno;
		$solicitudRechazada->celular = $solicitud->celular;
		$solicitudRechazada->fecha_sol = $solicitud->fecha;
		$solicitudRechazada->fecha_rec = date('Y-m-d');

		if($solicitudRechazada->save())
		{
			if($solicitud->delete())
				$this->redirect(array('cartera'));
		}
	}
/*
	public function actionPerdonarCliente($id)
	{
		$rechazado = SolicitudRechazados::model()->findByPk($id);

		$cliente = new Cliente();
		$perfilCliente = new PerfilCliente();
		
		$cliente->id_tie_4 = $rechazado->id_tie_3;
		$cliente->usuario_cli = "root";
		$cliente->password_cli = "1234";
		$cliente->creditos_cli = "3000";
		$cliente->status = "1";

		if($cliente->save()){
			$nuevoCliente = Cliente::model()->findBySql("
				SELECT * 
				FROM  `cliente` 
				WHERE 1 
				ORDER BY id_cli DESC 
				LIMIT 0 , 30
			");
			$perfilCliente->id_cli_1 = $nuevoCliente->id_cli;
			
			
			$perfilCliente->nombre_cli = $rechazado->nombre_rec;
			$perfilCliente->a_paterno_cli = $rechazado->a_paterno_rec;
			$perfilCliente->a_materno_cli = $rechazado->a_materno_rec;
			$perfilCliente->celular_cli = $rechazado->celular_rec;
			$perfilCliente->fecha_sol = $rechazado->fecha_sol;
			
			#echo var_dump($perfilCliente);

			if($perfilCliente->save()){
				if($rechazado->delete())
					$this->redirect(array('cartera'));
			}
			
		}
	}
*/

	public function actionEnable()
	{
		$id = $_GET['id'];
		$cliente = datosCliente::model()->findByPk($id);

		if($cliente->status=='Habilitado'){
			$cliente->status='Deshabilitado';
		}else{
			$cliente->status='Habilitado';
		}
		$cliente->save();
		$this->redirect(array("cartera"));
	}

	public function actionCreditos()
	{
		$pedidosActivos = Pedido::model()->with(
			'idProPed',
			'idCliPed',
			'idPlaPed',
			'detallePedido'
		)->findAll("status_ped = 'Activo' AND id_tie_ped = 't56a3d93e90856'");

		$pedidosSolicitados = Pedido::model()->with(
			'idProPed',
			'idCliPed',
			'idPlaPed',
			'detallePedido'
		)->findAll("status_ped = 'Solicitado' AND id_tie_ped = 't56a3d93e90856'");


		$pedidosFinalizados = Pedido::model()->with(
			'idProPed',
			'idCliPed',
			'idPlaPed',
			'detallePedido'
		)->findAll("status_ped = 'Finalizado' AND id_tie_ped = 't56a3d93e90856'");
		

		$pedidosRechazados = Pedido::model()->with(
			'idProPed',
			'idCliPed',
			'idPlaPed',
			'detallePedido'
		)->findAll("status_ped = 'Rechazado' AND id_tie_ped = 't56a3d93e90856'");
		/*$finalizados = Pedidos::model()->with(
		)->findAll('status_ped = 2');

		#$solicitados = Pedidos::model()->with(
		)->findAll('status_ped = -1');

		#$rechazados = Pedidos::model()->with(
		)->findAll('status_ped = -2');
*/
		$this->render('creditos', array(
			'pedidosActivos'=>$pedidosActivos,
			'pedidosSolicitados'=>$pedidosSolicitados,
			'pedidosFinalizados'=>$pedidosFinalizados,
			'pedidosRechazados'=>$pedidosRechazados
		));
	}
/*
	public function actionPagos()
	{
		$pedidos = Pedidos::model()->with(
			'idPla2',
			'pagos0',
			'idCli3',
			'idCli3.perfilCliente'
		)->findAll();
		$this->render('pagos', array(
			'model'=>$pedidos
		));
	}


	public function actionEditarCliente($id)
	{
		$cliente = PerfilCliente::model()->findByPk($id);

		if(isset($_POST['PerfilCliente']))
		{
			$cliente->attributes=$_POST['PerfilCliente'];

			if($cliente->save())
			{	
				$this->redirect(array("cartera"));
			}
		}

		$this->render('updateCliente', array(
			'cliente'=>$cliente
		));
	}
*/
	public function actionfichaCliente()
	{
		$id = $_GET['id'];
		$pedidosCliente = Pedido::model()->with(
			'idProPed',
			'idPlaPed'
		)->findAll("id_cli_ped = '".$id."'");
			
		$cliente = PerfilCliente::model()->findByPk($id);

		$this->render('fichaCliente', array(
			'pedidosCliente'=>$pedidosCliente,
			'cliente'=>$cliente
		));
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

	public function actionDetallesPedido($id)
	{
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

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cliente the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Cliente::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cliente $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cliente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
