<?php
/* @var $this MetRecDatController */
/* @var $model MetRecDat */

$this->breadcrumbs=array(
	'Met Rec Dats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MetRecDat', 'url'=>array('index')),
	array('label'=>'Manage MetRecDat', 'url'=>array('admin')),
);
?>

<h1>Create MetRecDat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>