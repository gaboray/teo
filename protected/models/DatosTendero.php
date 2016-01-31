<?php

/**
 * This is the model class for table "datos_tendero".
 *
 * The followings are the available columns in table 'datos_tendero':
 * @property string $id_tie_dat_ten
 * @property integer $id_pan_dat_ten
 * @property integer $creditos
 * @property integer $saldo_historia
 * @property integer $saldo_semana
 * @property integer $cobrado_semana
 * @property string $status
 * @property string $fecha_alta
 *
 * The followings are the available model relations:
 * @property Pantalla $idPanDatTen
 * @property Tienda $idTieDatTen
 */
class DatosTendero extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'datos_tendero';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tie_dat_ten, id_pan_dat_ten, creditos, saldo_historia, saldo_semana, cobrado_semana, status, fecha_alta', 'required'),
			array('id_pan_dat_ten, creditos, saldo_historia, saldo_semana, cobrado_semana', 'numerical', 'integerOnly'=>true),
			array('id_tie_dat_ten', 'length', 'max'=>14),
			array('status', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tie_dat_ten, id_pan_dat_ten, creditos, saldo_historia, saldo_semana, cobrado_semana, status, fecha_alta', 'safe', 'on'=>'search'),
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
			'idPanDatTen' => array(self::BELONGS_TO, 'Pantalla', 'id_pan_dat_ten'),
			'idTieDatTen' => array(self::BELONGS_TO, 'Tienda', 'id_tie_dat_ten'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tie_dat_ten' => 'Id Tie Dat Ten',
			'id_pan_dat_ten' => 'Id Pan Dat Ten',
			'creditos' => 'Creditos',
			'saldo_historia' => 'Saldo Historia',
			'saldo_semana' => 'Saldo Semana',
			'cobrado_semana' => 'Cobrado Semana',
			'status' => 'Status',
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

		$criteria->compare('id_tie_dat_ten',$this->id_tie_dat_ten,true);
		$criteria->compare('id_pan_dat_ten',$this->id_pan_dat_ten);
		$criteria->compare('creditos',$this->creditos);
		$criteria->compare('saldo_historia',$this->saldo_historia);
		$criteria->compare('saldo_semana',$this->saldo_semana);
		$criteria->compare('cobrado_semana',$this->cobrado_semana);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('fecha_alta',$this->fecha_alta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DatosTendero the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
