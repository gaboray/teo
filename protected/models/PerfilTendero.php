<?php

/**
 * This is the model class for table "perfil_tendero".
 *
 * The followings are the available columns in table 'perfil_tendero':
 * @property string $id_tie_per_ten
 * @property string $nombre_tienda
 * @property string $nombre
 * @property string $a_paterno
 * @property string $a_materno
 * @property string $celular
 * @property string $correo
 * @property string $estado
 * @property string $ciudad
 * @property string $municipio
 * @property string $colonia
 * @property string $calle
 * @property integer $numero
 * @property string $c_postal
 *
 * The followings are the available model relations:
 * @property Tienda $idTiePerTen
 */
class PerfilTendero extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'perfil_tendero';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tie_per_ten, nombre_tienda, nombre, a_paterno, a_materno, celular, correo, estado, ciudad, municipio, colonia, calle, numero, c_postal', 'required'),
			array('numero', 'numerical', 'integerOnly'=>true),
			array('id_tie_per_ten', 'length', 'max'=>14),
			array('nombre_tienda, nombre, a_paterno, a_materno, correo, estado, ciudad, municipio, colonia, calle', 'length', 'max'=>30),
			array('celular', 'length', 'max'=>10),
			array('c_postal', 'length', 'max'=>7),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tie_per_ten, nombre_tienda, nombre, a_paterno, a_materno, celular, correo, estado, ciudad, municipio, colonia, calle, numero, c_postal', 'safe', 'on'=>'search'),
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
			'idTiePerTen' => array(self::BELONGS_TO, 'Tienda', 'id_tie_per_ten'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tie_per_ten' => 'Id Tie Per Ten',
			'nombre_tienda' => 'Nombre Tienda',
			'nombre' => 'Nombre',
			'a_paterno' => 'A Paterno',
			'a_materno' => 'A Materno',
			'celular' => 'Celular',
			'correo' => 'Correo',
			'estado' => 'Estado',
			'ciudad' => 'Ciudad',
			'municipio' => 'Municipio',
			'colonia' => 'Colonia',
			'calle' => 'Calle',
			'numero' => 'Numero',
			'c_postal' => 'C Postal',
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

		$criteria->compare('id_tie_per_ten',$this->id_tie_per_ten,true);
		$criteria->compare('nombre_tienda',$this->nombre_tienda,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('a_paterno',$this->a_paterno,true);
		$criteria->compare('a_materno',$this->a_materno,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('municipio',$this->municipio,true);
		$criteria->compare('colonia',$this->colonia,true);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('c_postal',$this->c_postal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PerfilTendero the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
