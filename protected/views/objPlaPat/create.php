<?php
/* @var $this ObjPlaPatController */
/* @var $model ObjPlaPat */

$this->breadcrumbs=array(
	'Obj Pla Pats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ObjPlaPat', 'url'=>array('index')),
	array('label'=>'Manage ObjPlaPat', 'url'=>array('admin')),
);
?>

<h1>Create ObjPlaPat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>