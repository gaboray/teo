<?php

class SolicitudClienteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$solicitudCliente = new SolicitudCliente();
		if(isset($_POST['SolicitudCliente']))
		{
			$solicitudCliente->attributes = $_POST['SolicitudCliente'];
			$solicitudCliente->id_tie_sol = 't56a3d93e90856';
			$solicitudCliente->fecha = date('Y-m-d');
			if($solicitudCliente->save())
			{
				$this->redirect(array('Shop/index'));
			}
		}
		$this->render('index');
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return SolicitudCliente the loaded model
	 * @throws CHttpException
	 */

	/*
	public function loadModel($id)
	{
		$model=SolicitudCliente::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	public function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='solicitud-cliente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	*/
}
