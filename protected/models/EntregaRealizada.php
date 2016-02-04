<?php

/**
 * This is the model class for table "entrega_realizada".
 *
 * The followings are the available columns in table 'entrega_realizada':
 * @property string $id_ped_er
 * @property string $fecha_entrega
 * @property string $fecha_programada
 *
 * The followings are the available model relations:
 * @property Pedido $idPedEr
 */
class EntregaRealizada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'entrega_realizada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ped_er, fecha_entrega, fecha_programada', 'required'),
			array('id_ped_er', 'length', 'max'=>19),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ped_er, fecha_entrega, fecha_programada', 'safe', 'on'=>'search'),
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
			'idPedEr' => array(self::BELONGS_TO, 'Pedido', 'id_ped_er'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ped_er' => 'Id Ped Er',
			'fecha_entrega' => 'Fecha Entrega',
			'fecha_programada' => 'Fecha Programada',
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

		$criteria->compare('id_ped_er',$this->id_ped_er,true);
		$criteria->compare('fecha_entrega',$this->fecha_entrega,true);
		$criteria->compare('fecha_programada',$this->fecha_programada,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EntregaRealizada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
