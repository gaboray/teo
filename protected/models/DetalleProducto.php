<?php

/**
 * This is the model class for table "detalle_producto".
 *
 * The followings are the available columns in table 'detalle_producto':
 * @property string $id_pro_det_pro
 * @property string $modelo
 * @property string $detalles
 * @property string $especificaciones
 *
 * The followings are the available model relations:
 * @property Producto $idProDetPro
 */
class DetalleProducto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detalle_producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pro_det_pro, modelo, detalles, especificaciones', 'required'),
			array('id_pro_det_pro', 'length', 'max'=>13),
			array('modelo', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pro_det_pro, modelo, detalles, especificaciones', 'safe', 'on'=>'search'),
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
			'idProDetPro' => array(self::BELONGS_TO, 'Producto', 'id_pro_det_pro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pro_det_pro' => 'Id Pro Det Pro',
			'modelo' => 'Modelo',
			'detalles' => 'Detalles',
			'especificaciones' => 'Especificaciones',
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

		$criteria->compare('id_pro_det_pro',$this->id_pro_det_pro,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('detalles',$this->detalles,true);
		$criteria->compare('especificaciones',$this->especificaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetalleProducto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
