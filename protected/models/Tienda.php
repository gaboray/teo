<?php

/**
 * This is the model class for table "tienda".
 *
 * The followings are the available columns in table 'tienda':
 * @property string $id_tie
 * @property string $celular
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Cliente[] $clientes
 * @property DatosTendero $datosTendero
 * @property PerfilTendero $perfilTendero
 * @property SolicitudCliente[] $solicitudClientes
 * @property SolicitudRechazada[] $solicitudRechazadas
 */
class Tienda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tienda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tie, celular, password', 'required'),
			array('id_tie', 'length', 'max'=>14),
			array('celular, password', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tie, celular, password', 'safe', 'on'=>'search'),
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
			'clientes' => array(self::HAS_MANY, 'Cliente', 'id_tie_cli'),
			'datosTendero' => array(self::HAS_ONE, 'DatosTendero', 'id_tie_dat_ten'),
			'perfilTendero' => array(self::HAS_ONE, 'PerfilTendero', 'id_tie_per_ten'),
			'solicitudClientes' => array(self::HAS_MANY, 'SolicitudCliente', 'id_tie_sol'),
			'solicitudRechazadas' => array(self::HAS_MANY, 'SolicitudRechazada', 'id_tie_rec'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tie' => 'Id Tie',
			'celular' => 'Celular',
			'password' => 'Password',
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

		$criteria->compare('id_tie',$this->id_tie,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tienda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
