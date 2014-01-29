<?php

/**
 * This is the model class for table "org_res".
 *
 * The followings are the available columns in table 'org_res':
 * @property integer $id_org_res
 * @property integer $id_amb_org
 * @property integer $id_estado
 * @property integer $id_municipio
 * @property string $tx_nom_org_agr
 * @property string $tx_pag_web_org_agr
 * @property integer $id_org_ads
 * @property string $in_stat
 * @property integer $id_user_crea
 * @property string $fe_crea
 * @property integer $id_user_modif
 * @property string $fe_modif
 *
 * The followings are the available model relations:
 * @property DatOrgRes[] $datOrgRes
 * @property AmbOrg $idAmbOrg
 * @property Estado $idEstado
 * @property OrgAds $idOrgAds
 */
class OrgRes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrgRes the static model class
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
		return 'org_res';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_amb_org, id_estado, id_municipio, tx_nom_org_agr, tx_pag_web_org_agr, id_org_ads, id_user_crea, fe_crea, id_user_modif, fe_modif', 'required'),
			array('id_amb_org, id_estado, id_municipio, id_org_ads, id_user_crea, id_user_modif', 'numerical', 'integerOnly'=>true),
			array('tx_nom_org_agr, tx_pag_web_org_agr', 'length', 'max'=>100),
			array('in_stat', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_org_res, id_amb_org, id_estado, id_municipio, tx_nom_org_agr, tx_pag_web_org_agr, id_org_ads, in_stat, id_user_crea, fe_crea, id_user_modif, fe_modif', 'safe', 'on'=>'search'),
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
			'datOrgRes' => array(self::HAS_MANY, 'DatOrgRes', 'int_org_res'),
			'idAmbOrg' => array(self::HAS_MANY, 'AmbOrg', 'id_amb_org'),
			'idEstado' => array(self::BELONGS_TO, 'Estado', 'id_estado'),
			'idOrgAds' => array(self::BELONGS_TO, 'OrgAds', 'id_org_ads'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_org_res' => 'Id Org Res',
			'id_amb_org' => 'Id Amb Org',
			'id_estado' => 'Id Estado',
			'id_municipio' => 'Id Municipio',
			'tx_nom_org_agr' => 'Tx Nom Org Agr',
			'tx_pag_web_org_agr' => 'Tx Pag Web Org Agr',
			'id_org_ads' => 'Id Org Ads',
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

		$criteria->compare('id_org_res',$this->id_org_res);
		$criteria->compare('id_amb_org',$this->id_amb_org);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('id_municipio',$this->id_municipio);
		$criteria->compare('tx_nom_org_agr',$this->tx_nom_org_agr,true);
		$criteria->compare('tx_pag_web_org_agr',$this->tx_pag_web_org_agr,true);
		$criteria->compare('id_org_ads',$this->id_org_ads);
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