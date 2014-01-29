<?php

/**
 * This is the model class for table "dat_org_res".
 *
 * The followings are the available columns in table 'dat_org_res':
 * @property integer $id_dat_org_res
 * @property string $tx_nom_op
 * @property integer $id_amb_org
 * @property integer $id_estado
 * @property integer $id_org_res
 * @property string $tx_uni_eje
 * @property string $tx_tel_uni_eje
 * @property string $tx_fax_uni_eje
 * @property string $tx_cor_uni_eje
 * @property string $tx_nom_fun_res
 * @property string $tx_car_fun_res
 * @property string $tx_tel_fun_res
 * @property string $tx_cor_fun_res
 * @property string $tx_nom_jef_inm
 * @property string $tx_car_jef_inm
 * @property string $tx_tel_jef_inm
 * @property string $tx_cor_jef_inm
 * @property integer $id_met_rec_dat
 * @property integer $id_sec_tem
 * @property integer $id_obj_pla_pat
 * @property string $tx_obs
 * @property string $in_stat
 * @property integer $id_user_crea
 * @property string $fe_crea
 * @property integer $id_user_modif
 * @property string $fe_modif
 *
 * The followings are the available model relations:
 * @property MetRecDat $idMetRecDat
 * @property ObjPlaPat $idObjPlaPat
 * @property OrgRes $idOrgRes
 * @property SecTem $idSecTem
 */
class DatOrgRes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DatOrgRes the static model class
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
		return 'dat_org_res';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tx_nom_op, id_amb_org, id_estado, id_org_res, tx_uni_eje, tx_tel_uni_eje, tx_fax_uni_eje, tx_cor_uni_eje, tx_nom_fun_res, tx_car_fun_res, tx_tel_fun_res, tx_cor_fun_res, tx_nom_jef_inm, tx_car_jef_inm, tx_tel_jef_inm, tx_cor_jef_inm, id_met_rec_dat, id_sec_tem, id_obj_pla_pat, tx_obs, in_stat, id_user_crea, fe_crea, id_user_modif, fe_modif', 'required'),
			array('id_amb_org, id_estado, id_org_res, id_met_rec_dat, id_sec_tem, id_obj_pla_pat, id_user_crea, id_user_modif', 'numerical', 'integerOnly'=>true),
			array('tx_nom_op, tx_uni_eje, tx_obs', 'length', 'max'=>100),
			array('tx_tel_uni_eje, tx_fax_uni_eje, tx_tel_fun_res, tx_tel_jef_inm', 'length', 'max'=>20),
			array('tx_cor_uni_eje, tx_nom_fun_res, tx_car_fun_res, tx_cor_fun_res, tx_nom_jef_inm, tx_car_jef_inm, tx_cor_jef_inm', 'length', 'max'=>50),
			array('in_stat', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dat_org_res, tx_nom_op, id_amb_org, id_estado, id_org_res, tx_uni_eje, tx_tel_uni_eje, tx_fax_uni_eje, tx_cor_uni_eje, tx_nom_fun_res, tx_car_fun_res, tx_tel_fun_res, tx_cor_fun_res, tx_nom_jef_inm, tx_car_jef_inm, tx_tel_jef_inm, tx_cor_jef_inm, id_met_rec_dat, id_sec_tem, id_obj_pla_pat, tx_obs, in_stat, id_user_crea, fe_crea, id_user_modif, fe_modif', 'safe', 'on'=>'search'),
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
			'idMetRecDat' => array(self::BELONGS_TO, 'MetRecDat', 'id_met_rec_dat'),
			'idObjPlaPat' => array(self::BELONGS_TO, 'ObjPlaPat', 'id_obj_pla_pat'),
			'idOrgRes' => array(self::BELONGS_TO, 'OrgRes', 'id_org_res'),
			'idSecTem' => array(self::BELONGS_TO, 'SecTem', 'id_sec_tem'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_dat_org_res' => 'Id Dat Org Res',
			'tx_nom_op' => 'Tx Nom Op',
			'id_amb_org' => 'Id Amb Org',
			'id_estado' => 'Id Estado',
			'id_org_res' => 'Id Org Res',
			'tx_uni_eje' => 'Tx Uni Eje',
			'tx_tel_uni_eje' => 'Tx Tel Uni Eje',
			'tx_fax_uni_eje' => 'Tx Fax Uni Eje',
			'tx_cor_uni_eje' => 'Tx Cor Uni Eje',
			'tx_nom_fun_res' => 'Tx Nom Fun Res',
			'tx_car_fun_res' => 'Tx Car Fun Res',
			'tx_tel_fun_res' => 'Tx Tel Fun Res',
			'tx_cor_fun_res' => 'Tx Cor Fun Res',
			'tx_nom_jef_inm' => 'Tx Nom Jef Inm',
			'tx_car_jef_inm' => 'Tx Car Jef Inm',
			'tx_tel_jef_inm' => 'Tx Tel Jef Inm',
			'tx_cor_jef_inm' => 'Tx Cor Jef Inm',
			'id_met_rec_dat' => 'Id Met Rec Dat',
			'id_sec_tem' => 'Id Sec Tem',
			'id_obj_pla_pat' => 'Id Obj Pla Pat',
			'tx_obs' => 'Tx Obs',
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

		$criteria->compare('id_dat_org_res',$this->id_dat_org_res);
		$criteria->compare('tx_nom_op',$this->tx_nom_op,true);
		$criteria->compare('id_amb_org',$this->id_amb_org);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('id_org_res',$this->id_org_res);
		$criteria->compare('tx_uni_eje',$this->tx_uni_eje,true);
		$criteria->compare('tx_tel_uni_eje',$this->tx_tel_uni_eje,true);
		$criteria->compare('tx_fax_uni_eje',$this->tx_fax_uni_eje,true);
		$criteria->compare('tx_cor_uni_eje',$this->tx_cor_uni_eje,true);
		$criteria->compare('tx_nom_fun_res',$this->tx_nom_fun_res,true);
		$criteria->compare('tx_car_fun_res',$this->tx_car_fun_res,true);
		$criteria->compare('tx_tel_fun_res',$this->tx_tel_fun_res,true);
		$criteria->compare('tx_cor_fun_res',$this->tx_cor_fun_res,true);
		$criteria->compare('tx_nom_jef_inm',$this->tx_nom_jef_inm,true);
		$criteria->compare('tx_car_jef_inm',$this->tx_car_jef_inm,true);
		$criteria->compare('tx_tel_jef_inm',$this->tx_tel_jef_inm,true);
		$criteria->compare('tx_cor_jef_inm',$this->tx_cor_jef_inm,true);
		$criteria->compare('id_met_rec_dat',$this->id_met_rec_dat);
		$criteria->compare('id_sec_tem',$this->id_sec_tem);
		$criteria->compare('id_obj_pla_pat',$this->id_obj_pla_pat);
		$criteria->compare('tx_obs',$this->tx_obs,true);
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