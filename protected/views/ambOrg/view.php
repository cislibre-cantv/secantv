<?php
/* @var $this AmbOrgController */
/* @var $model AmbOrg */

$this->breadcrumbs=array(
	'Amb Orgs'=>array('index'),
	$model->id_amb_org,
);

$this->menu=array(
	array('label'=>'List AmbOrg', 'url'=>array('index')),
	array('label'=>'Create AmbOrg', 'url'=>array('create')),
	array('label'=>'Update AmbOrg', 'url'=>array('update', 'id'=>$model->id_amb_org)),
	array('label'=>'Delete AmbOrg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_amb_org),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AmbOrg', 'url'=>array('admin')),
);
?>

<h1>View AmbOrg #<?php echo $model->id_amb_org; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_amb_org',
		'tx_des_amb_org',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		'fe_modif',
	),
)); ?>
