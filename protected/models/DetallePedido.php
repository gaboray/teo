<?php

/**
 * This is the model class for table "detalle_pedido".
 *
 * The followings are the available columns in table 'detalle_pedido':
 * @property string $id_ped_dp
 * @property integer $cantidad
 * @property integer $abono_plazo_ped
 * @property integer $pagos
 * @property string $fecha_sol
 * @property string $fecha_apr
 * @property string $fecha_ent
 * @property string $fecha_exp
 *
 * The followings are the available model relations:
 * @property Pedido $idPedDp
 */
class DetallePedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detalle_pedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ped_dp, cantidad, abono_plazo_ped, pagos, fecha_sol, fecha_apr, fecha_ent, fecha_exp', 'required'),
			array('cantidad, abono_plazo_ped, pagos', 'numerical', 'integerOnly'=>true),
			array('id_ped_dp', 'length', 'max'=>19),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ped_dp, cantidad, abono_plazo_ped, pagos, fecha_sol, fecha_apr, fecha_ent, fecha_exp', 'safe', 'on'=>'search'),
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
			'idPedDp' => array(self::BELONGS_TO, 'Pedido', 'id_ped_dp'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ped_dp' => 'Id Ped Dp',
			'cantidad' => 'Cantidad',
			'abono_plazo_ped' => 'Abono Plazo Ped',
			'pagos' => 'Pagos',
			'fecha_sol' => 'Fecha Sol',
			'fecha_apr' => 'Fecha Apr',
			'fecha_ent' => 'Fecha Ent',
			'fecha_exp' => 'Fecha Exp',
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

		$criteria->compare('id_ped_dp',$this->id_ped_dp,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('abono_plazo_ped',$this->abono_plazo_ped);
		$criteria->compare('pagos',$this->pagos);
		$criteria->compare('fecha_sol',$this->fecha_sol,true);
		$criteria->compare('fecha_apr',$this->fecha_apr,true);
		$criteria->compare('fecha_ent',$this->fecha_ent,true);
		$criteria->compare('fecha_exp',$this->fecha_exp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetallePedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
