<?php

/**
 * This is the model class for table "solicitud_rechazada".
 *
 * The followings are the available columns in table 'solicitud_rechazada':
 * @property integer $id_rec
 * @property string $id_tie_rec
 * @property string $nombre
 * @property string $a_paterno
 * @property string $a_materno
 * @property string $celular
 * @property string $fecha_sol
 * @property string $fecha_rec
 *
 * The followings are the available model relations:
 * @property Tienda $idTieRec
 */
class SolicitudRechazada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitud_rechazada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tie_rec, nombre, a_paterno, a_materno, celular, fecha_sol, fecha_rec', 'required'),
			array('id_tie_rec', 'length', 'max'=>14),
			array('nombre, a_paterno, a_materno', 'length', 'max'=>30),
			array('celular', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_rec, id_tie_rec, nombre, a_paterno, a_materno, celular, fecha_sol, fecha_rec', 'safe', 'on'=>'search'),
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
			'idTieRec' => array(self::BELONGS_TO, 'Tienda', 'id_tie_rec'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_rec' => 'Id Rec',
			'id_tie_rec' => 'Id Tie Rec',
			'nombre' => 'Nombre',
			'a_paterno' => 'A Paterno',
			'a_materno' => 'A Materno',
			'celular' => 'Celular',
			'fecha_sol' => 'Fecha Sol',
			'fecha_rec' => 'Fecha Rec',
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

		$criteria->compare('id_rec',$this->id_rec);
		$criteria->compare('id_tie_rec',$this->id_tie_rec,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('a_paterno',$this->a_paterno,true);
		$criteria->compare('a_materno',$this->a_materno,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('fecha_sol',$this->fecha_sol,true);
		$criteria->compare('fecha_rec',$this->fecha_rec,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SolicitudRechazada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
