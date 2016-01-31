<?php

/**
 * This is the model class for table "perfil_cliente".
 *
 * The followings are the available columns in table 'perfil_cliente':
 * @property string $id_cli_pc
 * @property string $nombre
 * @property string $a_paterno
 * @property string $a_materno
 * @property string $celular
 * @property string $correo
 * @property string $colonia
 * @property string $calle
 * @property integer $numero
 * @property string $c_postal
 *
 * The followings are the available model relations:
 * @property Pedido[] $pedidos
 * @property Cliente $idCliPc
 */
class PerfilCliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'perfil_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cli_pc, nombre, a_paterno, a_materno, celular, correo, colonia, calle, numero, c_postal', 'required'),
			array('numero', 'numerical', 'integerOnly'=>true),
			array('id_cli_pc', 'length', 'max'=>14),
			array('nombre, a_paterno, a_materno, correo, colonia, calle', 'length', 'max'=>30),
			array('celular', 'length', 'max'=>10),
			array('c_postal', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cli_pc, nombre, a_paterno, a_materno, celular, correo, colonia, calle, numero, c_postal', 'safe', 'on'=>'search'),
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
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'id_cli_ped'),
			'idCliPc' => array(self::BELONGS_TO, 'Cliente', 'id_cli_pc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cli_pc' => 'Id Cli Pc',
			'nombre' => 'Nombre',
			'a_paterno' => 'A Paterno',
			'a_materno' => 'A Materno',
			'celular' => 'Celular',
			'correo' => 'Correo',
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

		$criteria->compare('id_cli_pc',$this->id_cli_pc,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('a_paterno',$this->a_paterno,true);
		$criteria->compare('a_materno',$this->a_materno,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('correo',$this->correo,true);
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
	 * @return PerfilCliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
