<?php

/**
 * This is the model class for table "pedido".
 *
 * The followings are the available columns in table 'pedido':
 * @property string $id_ped
 * @property string $id_cli_ped
 * @property integer $id_pla_ped
 * @property string $id_tie_ped
 * @property string $id_pro_ped
 * @property string $status_ped
 * @property string $status_pag
 * @property string $status_ent
 *
 * The followings are the available model relations:
 * @property DetallePedido $detallePedido
 * @property EntregaEspera $entregaEspera
 * @property EntregaProgramada $entregaProgramada
 * @property EntregaRealizada $entregaRealizada
 * @property Pago[] $pagos
 * @property Plazo $idPlaPed
 * @property Producto $idProPed
 * @property PerfilCliente $idCliPed
 * @property PerfilTendero $idTiePed
 */
class Pedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ped, id_cli_ped, id_pla_ped, id_tie_ped, id_pro_ped, status_ped, status_pag, status_ent', 'required'),
			array('id_pla_ped', 'numerical', 'integerOnly'=>true),
			array('id_ped', 'length', 'max'=>19),
			array('id_cli_ped, id_tie_ped', 'length', 'max'=>14),
			array('id_pro_ped', 'length', 'max'=>13),
			array('status_ped', 'length', 'max'=>10),
			array('status_pag, status_ent', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ped, id_cli_ped, id_pla_ped, id_tie_ped, id_pro_ped, status_ped, status_pag, status_ent', 'safe', 'on'=>'search'),
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
			'detallePedido' => array(self::HAS_ONE, 'DetallePedido', 'id_ped_dp'),
			'entregaEspera' => array(self::HAS_ONE, 'EntregaEspera', 'id_ped_ee'),
			'entregaProgramada' => array(self::HAS_ONE, 'EntregaProgramada', 'id_ped_ep'),
			'entregaRealizada' => array(self::HAS_ONE, 'EntregaRealizada', 'id_ped_er'),
			'pagos' => array(self::HAS_MANY, 'Pago', 'id_ped_pag'),
			'idPlaPed' => array(self::BELONGS_TO, 'Plazo', 'id_pla_ped'),
			'idProPed' => array(self::BELONGS_TO, 'Producto', 'id_pro_ped'),
			'idCliPed' => array(self::BELONGS_TO, 'PerfilCliente', 'id_cli_ped'),
			'idTiePed' => array(self::BELONGS_TO, 'PerfilTendero', 'id_tie_ped'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ped' => 'Id Ped',
			'id_cli_ped' => 'Id Cli Ped',
			'id_pla_ped' => 'Id Pla Ped',
			'id_tie_ped' => 'Id Tie Ped',
			'id_pro_ped' => 'Id Pro Ped',
			'status_ped' => 'Status Ped',
			'status_pag' => 'Status Pag',
			'status_ent' => 'Status Ent',
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

		$criteria->compare('id_ped',$this->id_ped,true);
		$criteria->compare('id_cli_ped',$this->id_cli_ped,true);
		$criteria->compare('id_pla_ped',$this->id_pla_ped);
		$criteria->compare('id_tie_ped',$this->id_tie_ped,true);
		$criteria->compare('id_pro_ped',$this->id_pro_ped,true);
		$criteria->compare('status_ped',$this->status_ped,true);
		$criteria->compare('status_pag',$this->status_pag,true);
		$criteria->compare('status_ent',$this->status_ent,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
