<?php
/* @var $this MetRecDatController */
/* @var $model MetRecDat */

$this->breadcrumbs=array(
	'Met Rec Dats'=>array('index'),
	$model->id_met_rec_dat,
);

$this->menu=array(
	array('label'=>'List MetRecDat', 'url'=>array('index')),
	array('label'=>'Create MetRecDat', 'url'=>array('create')),
	array('label'=>'Update MetRecDat', 'url'=>array('update', 'id'=>$model->id_met_rec_dat)),
	array('label'=>'Delete MetRecDat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_met_rec_dat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MetRecDat', 'url'=>array('admin')),
);
?>

<h1>View MetRecDat #<?php echo $model->id_met_rec_dat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_met_rec_dat',
		'tx_des_met_rec_dat',
		'tx_ficha',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		'fe_modif',
	),
)); ?>
