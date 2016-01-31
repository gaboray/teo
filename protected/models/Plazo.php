<?php

/**
 * This is the model class for table "plazo".
 *
 * The followings are the available columns in table 'plazo':
 * @property integer $id_pla
 * @property integer $plazo
 * @property string $modalidad
 * @property double $interes
 */
class Plazo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plazo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('plazo, modalidad, interes', 'required'),
			array('plazo', 'numerical', 'integerOnly'=>true),
			array('interes', 'numerical'),
			array('modalidad', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pla, plazo, modalidad, interes', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pla' => 'Id Pla',
			'plazo' => 'Plazo',
			'modalidad' => 'Modalidad',
			'interes' => 'Interes',
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

		$criteria->compare('id_pla',$this->id_pla);
		$criteria->compare('plazo',$this->plazo);
		$criteria->compare('modalidad',$this->modalidad,true);
		$criteria->compare('interes',$this->interes);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Plazo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
