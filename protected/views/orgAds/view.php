<?php
/* @var $this OrgAdsController */
/* @var $model OrgAds */

$this->breadcrumbs=array(
	'Org Ads'=>array('index'),
	$model->id_org_ads,
);

$this->menu=array(
	array('label'=>'List OrgAds', 'url'=>array('index')),
	array('label'=>'Create OrgAds', 'url'=>array('create')),
	array('label'=>'Update OrgAds', 'url'=>array('update', 'id'=>$model->id_org_ads)),
	array('label'=>'Delete OrgAds', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_org_ads),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrgAds', 'url'=>array('admin')),
);
?>

<h1>View OrgAds #<?php echo $model->id_org_ads; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_org_ads',
		'tx_des_org_ads',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		'fe_modif',
	),
)); ?>
