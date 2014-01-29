<?php
/* @var $this ObjPlaPatController */
/* @var $model ObjPlaPat */

$this->breadcrumbs=array(
	'Obj Pla Pats'=>array('index'),
	$model->id_obj_pla_pat,
);

$this->menu=array(
	array('label'=>'List ObjPlaPat', 'url'=>array('index')),
	array('label'=>'Create ObjPlaPat', 'url'=>array('create')),
	array('label'=>'Update ObjPlaPat', 'url'=>array('update', 'id'=>$model->id_obj_pla_pat)),
	array('label'=>'Delete ObjPlaPat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_obj_pla_pat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObjPlaPat', 'url'=>array('admin')),
);
?>

<h1>View ObjPlaPat #<?php echo $model->id_obj_pla_pat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_obj_pla_pat',
		'tx_des_obj_pla_pat',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		'fe_modif',
	),
)); ?>
