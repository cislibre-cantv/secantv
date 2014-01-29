<?php

/**
 * This is the model class for table "estado".
 *
 * The followings are the available columns in table 'estado':
 * @property integer $id_estado
 * @property string $tx_des_estado
 * @property string $in_stat
 * @property integer $id_user_crea
 * @property string $fe_crea
 * @property integer $id_user_modif
 * @property string $fe_modif
 *
 * The followings are the available model relations:
 * @property DatOrgRes[] $datOrgRes
 * @property Municipio[] $municipios
 * @property OrgRes[] $orgRes
 */
class Estado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tx_des_estado, id_user_crea, fe_crea, id_user_modif, fe_modif', 'required'),
			array('id_user_crea, id_user_modif', 'numerical', 'integerOnly'=>true),
			array('tx_des_estado', 'length', 'max'=>50),
			array('in_stat', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_estado, tx_des_estado, in_stat, id_user_crea, fe_crea, id_user_modif, fe_modif', 'safe', 'on'=>'search'),
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
			'datOrgRes' => array(self::HAS_MANY, 'DatOrgRes', 'id_entado'),
			'municipios' => array(self::HAS_MANY, 'Municipio', 'id_estado'),
			'orgRes' => array(self::HAS_MANY, 'OrgRes', 'id_estado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_estado' => 'Id Estado',
			'tx_des_estado' => 'Tx Des Estado',
			'in_stat' => 'In Stat',
			'id_user_crea' => 'Id User Crea',
			'fe_crea' => 'Fe Crea',
			'id_user_modif' => 'Id User Modif',
			'fe_modif' => 'Fe Modif',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('tx_des_estado',$this->tx_des_estado,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('id_user_crea',$this->id_user_crea);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('id_user_modif',$this->id_user_modif);
		$criteria->compare('fe_modif',$this->fe_modif,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}