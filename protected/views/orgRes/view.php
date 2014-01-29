<?php
/* @var $this OrgResController */
/* @var $model OrgRes */

$this->breadcrumbs=array(
	'Org Res'=>array('index'),
	$model->id_org_res,
);

$this->menu=array(
	array('label'=>'List OrgRes', 'url'=>array('index')),
	array('label'=>'Create OrgRes', 'url'=>array('create')),
	array('label'=>'Update OrgRes', 'url'=>array('update', 'id'=>$model->id_org_res)),
	array('label'=>'Delete OrgRes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_org_res),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrgRes', 'url'=>array('admin')),
);
?>

<h1>View OrgRes #<?php echo $model->id_org_res; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_org_res',
		'id_amb_org',
		'id_estado',
		'id_municipio',
		'tx_nom_org_agr',
		'tx_pag_web_org_agr',
		'id_org_ads',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		'fe_modif',
	),
)); ?>
