<?php
/* @var $this MetRecDatController */
/* @var $model MetRecDat */

$this->breadcrumbs=array(
	'Met Rec Dats'=>array('index'),
	$model->id_met_rec_dat=>array('view','id'=>$model->id_met_rec_dat),
	'Update',
);

$this->menu=array(
	array('label'=>'List MetRecDat', 'url'=>array('index')),
	array('label'=>'Create MetRecDat', 'url'=>array('create')),
	array('label'=>'View MetRecDat', 'url'=>array('view', 'id'=>$model->id_met_rec_dat)),
	array('label'=>'Manage MetRecDat', 'url'=>array('admin')),
);
?>

<h1>Update MetRecDat <?php echo $model->id_met_rec_dat; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>