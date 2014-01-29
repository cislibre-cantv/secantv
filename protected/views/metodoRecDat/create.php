<?php
/* @var $this MetodoRecDatController */
/* @var $model MetodoRecDat */

$this->breadcrumbs=array(
	'Metodo Rec Dats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MetodoRecDat', 'url'=>array('index')),
	array('label'=>'Manage MetodoRecDat', 'url'=>array('admin')),
);
?>

<h1>Create MetodoRecDat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>