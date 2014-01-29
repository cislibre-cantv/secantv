<?php
/* @var $this MetodoRecDatController */
/* @var $model MetodoRecDat */

$this->breadcrumbs=array(
	'Metodo Rec Dats'=>array('index'),
	$model->id_metodo_rec_dat=>array('view','id'=>$model->id_metodo_rec_dat),
	'Update',
);

$this->menu=array(
	array('label'=>'List MetodoRecDat', 'url'=>array('index')),
	array('label'=>'Create MetodoRecDat', 'url'=>array('create')),
	array('label'=>'View MetodoRecDat', 'url'=>array('view', 'id'=>$model->id_metodo_rec_dat)),
	array('label'=>'Manage MetodoRecDat', 'url'=>array('admin')),
);
?>

<h1>Update MetodoRecDat <?php echo $model->id_metodo_rec_dat; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>