<?php
/* @var $this MetodoRecDatController */
/* @var $model MetodoRecDat */

$this->breadcrumbs=array(
	'Metodo Rec Dats'=>array('index'),
	$model->id_metodo_rec_dat,
);

$this->menu=array(
	array('label'=>'List MetodoRecDat', 'url'=>array('index')),
	array('label'=>'Create MetodoRecDat', 'url'=>array('create')),
	array('label'=>'Update MetodoRecDat', 'url'=>array('update', 'id'=>$model->id_metodo_rec_dat)),
	array('label'=>'Delete MetodoRecDat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_metodo_rec_dat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MetodoRecDat', 'url'=>array('admin')),
);
?>

<h1>View MetodoRecDat #<?php echo $model->id_metodo_rec_dat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_metodo_rec_dat',
		'id_met_rec_dat',
		'tx_des_metodo',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		'fe_modif',
	),
)); ?>
