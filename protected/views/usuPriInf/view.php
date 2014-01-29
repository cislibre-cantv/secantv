<?php
/* @var $this UsuPriInfController */
/* @var $model UsuPriInf */

$this->breadcrumbs=array(
	'Usu Pri Infs'=>array('index'),
	$model->id_usu_pri_inf,
);

$this->menu=array(
	array('label'=>'List UsuPriInf', 'url'=>array('index')),
	array('label'=>'Create UsuPriInf', 'url'=>array('create')),
	array('label'=>'Update UsuPriInf', 'url'=>array('update', 'id'=>$model->id_usu_pri_inf)),
	array('label'=>'Delete UsuPriInf', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usu_pri_inf),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuPriInf', 'url'=>array('admin')),
);
?>

<h1>View UsuPriInf #<?php echo $model->id_usu_pri_inf; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_usu_pri_inf',
		'tx_des_usu_pri_inf',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		'fe_modif',
	),
)); ?>
