<?php

/**
 * This is the model class for table "datos_cliente".
 *
 * The followings are the available columns in table 'datos_cliente':
 * @property string $id_cli_dc
 * @property string $status
 * @property string $status_pago
 * @property integer $creditos
 * @property integer $creditos_activos
 * @property integer $creditos_finalizados
 * @property integer $creditos_rechazados
 * @property string $fecha_sol
 * @property string $fecha_alta
 *
 * The followings are the available model relations:
 * @property Cliente $idCliDc
 */
class DatosCliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'datos_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cli_dc, status, status_pago, creditos, creditos_activos, creditos_finalizados, creditos_rechazados, fecha_sol, fecha_alta', 'required'),
			array('creditos, creditos_activos, creditos_finalizados, creditos_rechazados', 'numerical', 'integerOnly'=>true),
			array('id_cli_dc', 'length', 'max'=>14),
			array('status', 'length', 'max'=>13),
			array('status_pago', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cli_dc, status, status_pago, creditos, creditos_activos, creditos_finalizados, creditos_rechazados, fecha_sol, fecha_alta', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idCliDc' => array(self::BELONGS_TO, 'Cliente', 'id_cli_dc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cli_dc' => 'Id Cli Dc',
			'status' => 'Status',
			'status_pago' => 'Status Pago',
			'creditos' => 'Creditos',
			'creditos_activos' => 'Creditos Activos',
			'creditos_finalizados' => 'Creditos Finalizados',
			'creditos_rechazados' => 'Creditos Rechazados',
			'fecha_sol' => 'Fecha Sol',
			'fecha_alta' => 'Fecha Alta',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_cli_dc',$this->id_cli_dc,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('status_pago',$this->status_pago,true);
		$criteria->compare('creditos',$this->creditos);
		$criteria->compare('creditos_activos',$this->creditos_activos);
		$criteria->compare('creditos_finalizados',$this->creditos_finalizados);
		$criteria->compare('creditos_rechazados',$this->creditos_rechazados);
		$criteria->compare('fecha_sol',$this->fecha_sol,true);
		$criteria->compare('fecha_alta',$this->fecha_alta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DatosCliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
