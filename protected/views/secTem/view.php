<?php
/* @var $this SecTemController */
/* @var $model SecTem */

$this->breadcrumbs=array(
	'Sec Tems'=>array('index'),
	$model->id_sec_tem,
);

$this->menu=array(
	array('label'=>'List SecTem', 'url'=>array('index')),
	array('label'=>'Create SecTem', 'url'=>array('create')),
	array('label'=>'Update SecTem', 'url'=>array('update', 'id'=>$model->id_sec_tem)),
	array('label'=>'Delete SecTem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sec_tem),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SecTem', 'url'=>array('admin')),
);
?>

<h1>View SecTem #<?php echo $model->id_sec_tem; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sec_tem',
		'tx_des_sec_tem',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		'fe_modif',
	),
)); ?>
