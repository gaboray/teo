<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property string $id_pro
 * @property integer $id_cat_pro
 * @property string $nombre
 * @property double $precio
 * @property string $marca
 * @property string $perfil
 * @property string $status
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property DetalleProducto $detalleProducto
 * @property FotoProducto[] $fotoProductos
 * @property Categoria $idCatPro
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pro, id_cat_pro, nombre, precio, marca, perfil, status, fecha', 'required'),
			array('id_cat_pro', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('id_pro, status', 'length', 'max'=>13),
			array('nombre', 'length', 'max'=>30),
			array('marca', 'length', 'max'=>20),
			array('perfil', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pro, id_cat_pro, nombre, precio, marca, perfil, status, fecha', 'safe', 'on'=>'search'),
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
			'detalleProducto' => array(self::HAS_ONE, 'DetalleProducto', 'id_pro_det_pro'),
			'fotoProductos' => array(self::HAS_MANY, 'FotoProducto', 'id_pro_fot_pro'),
			'idCatPro' => array(self::BELONGS_TO, 'Categoria', 'id_cat_pro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pro' => 'Id Pro',
			'id_cat_pro' => 'Id Cat Pro',
			'nombre' => 'Nombre',
			'precio' => 'Precio',
			'marca' => 'Marca',
			'perfil' => 'Perfil',
			'status' => 'Status',
			'fecha' => 'Fecha',
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

		$criteria->compare('id_pro',$this->id_pro,true);
		$criteria->compare('id_cat_pro',$this->id_cat_pro);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('perfil',$this->perfil,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
