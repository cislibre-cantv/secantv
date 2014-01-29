<?php
/* @var $this DatOrgResController */
/* @var $model DatOrgRes */

$this->breadcrumbs=array(
	'Dat Org Res'=>array('index'),
	$model->id_dat_org_res,
);

$this->menu=array(
	array('label'=>'List DatOrgRes', 'url'=>array('index')),
	array('label'=>'Create DatOrgRes', 'url'=>array('create')),
	array('label'=>'Update DatOrgRes', 'url'=>array('update', 'id'=>$model->id_dat_org_res)),
	array('label'=>'Delete DatOrgRes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dat_org_res),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DatOrgRes', 'url'=>array('admin')),
);
?>

<h1>View DatOrgRes #<?php echo $model->id_dat_org_res; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dat_org_res',
		'tx_nom_op',
		'id_amb_org',
		'id_estado',
		'id_org_res',
		'tx_uni_eje',
		'tx_tel_uni_eje',
		'tx_fax_uni_eje',
		'tx_cor_uni_eje',
		'tx_nom_fun_res',
		'tx_car_fun_res',
		'tx_tel_fun_res',
		'tx_cor_fun_res',
		'tx_nom_jef_inm',
		'tx_car_jef_inm',
		'tx_tel_jef_inm',
		'tx_cor_jef_inm',
		'id_met_rec_dat',
		'id_sec_tem',
		'id_obj_pla_pat',
		'tx_obs',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		'fe_modif',
	),
)); ?>
