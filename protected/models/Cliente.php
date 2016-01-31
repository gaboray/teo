<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property string $id_cli
 * @property string $id_tie_cli
 * @property string $celular
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Tienda $idTieCli
 * @property DatosCliente $datosCliente
 * @property PerfilCliente $perfilCliente
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cli, id_tie_cli, celular, password', 'required'),
			array('id_cli, id_tie_cli', 'length', 'max'=>14),
			array('celular, password', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cli, id_tie_cli, celular, password', 'safe', 'on'=>'search'),
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
			'idTieCli' => array(self::BELONGS_TO, 'Tienda', 'id_tie_cli'),
			'datosCliente' => array(self::HAS_ONE, 'DatosCliente', 'id_cli_dc'),
			'perfilCliente' => array(self::HAS_ONE, 'PerfilCliente', 'id_cli_pc'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cli' => 'Id Cli',
			'id_tie_cli' => 'Id Tie Cli',
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

		$criteria->compare('id_cli',$this->id_cli,true);
		$criteria->compare('id_tie_cli',$this->id_tie_cli,true);
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
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
