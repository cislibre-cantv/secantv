<?php

/**
 * This is the model class for table "met_rec_dat".
 *
 * The followings are the available columns in table 'met_rec_dat':
 * @property integer $id_met_rec_dat
 * @property string $tx_des_met_rec_dat
 * @property string $tx_ficha
 * @property string $in_stat
 * @property integer $id_user_crea
 * @property string $fe_crea
 * @property integer $id_user_modif
 * @property string $fe_modif
 *
 * The followings are the available model relations:
 * @property DatOrgRes[] $datOrgRes
 * @property MetodoRecDat[] $metodoRecDats
 */
class MetRecDat extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MetRecDat the static model class
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
		return 'met_rec_dat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tx_des_met_rec_dat, tx_ficha, id_user_crea, fe_crea, id_user_modif, fe_modif', 'required'),
			array('id_user_crea, id_user_modif', 'numerical', 'integerOnly'=>true),
			array('tx_des_met_rec_dat', 'length', 'max'=>100),
			array('tx_ficha', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_met_rec_dat, tx_des_met_rec_dat, tx_ficha, in_stat, id_user_crea, fe_crea, id_user_modif, fe_modif', 'safe', 'on'=>'search'),
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
			'datOrgRes' => array(self::HAS_MANY, 'DatOrgRes', 'id_met_rec_dat'),
			'metodoRecDats' => array(self::HAS_MANY, 'MetodoRecDat', 'id_met_rec_dat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_met_rec_dat' => 'Id Met Rec Dat',
			'tx_des_met_rec_dat' => 'Tx Des Met Rec Dat',
			'tx_ficha' => 'Tx Ficha',
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

		$criteria->compare('id_met_rec_dat',$this->id_met_rec_dat);
		$criteria->compare('tx_des_met_rec_dat',$this->tx_des_met_rec_dat,true);
		$criteria->compare('tx_ficha',$this->tx_ficha,true);
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