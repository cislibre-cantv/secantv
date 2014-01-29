<?php

/**
 * This is the model class for table "municipio".
 *
 * The followings are the available columns in table 'municipio':
 * @property integer $id_municipio
 * @property integer $id_estado
 * @property string $tx_des_municipio
 * @property string $in_stat
 * @property integer $id_user_crea
 * @property string $fe_crea
 * @property integer $id_user_modif
 * @property string $fe_modif
 *
 * The followings are the available model relations:
 * @property Estado $idEstado
 */
class Municipio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Municipio the static model class
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
		return 'municipio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_estado, tx_des_municipio, id_user_crea, fe_crea, id_user_modif, fe_modif', 'required'),
			array('id_estado, id_user_crea, id_user_modif', 'numerical', 'integerOnly'=>true),
			array('tx_des_municipio', 'length', 'max'=>50),
			array('in_stat', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_municipio, id_estado, tx_des_municipio, in_stat, id_user_crea, fe_crea, id_user_modif, fe_modif', 'safe', 'on'=>'search'),
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
			'idEstado' => array(self::BELONGS_TO, 'Estado', 'id_estado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_municipio' => 'Id Municipio',
			'id_estado' => 'Id Estado',
			'tx_des_municipio' => 'Tx Des Municipio',
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

		$criteria->compare('id_municipio',$this->id_municipio);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('tx_des_municipio',$this->tx_des_municipio,true);
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