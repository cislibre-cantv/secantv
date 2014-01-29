<?php
/* @var $this ObjPlaPatController */
/* @var $model ObjPlaPat */

$this->breadcrumbs=array(
	'Obj Pla Pats'=>array('index'),
	$model->id_obj_pla_pat=>array('view','id'=>$model->id_obj_pla_pat),
	'Update',
);

$this->menu=array(
	array('label'=>'List ObjPlaPat', 'url'=>array('index')),
	array('label'=>'Create ObjPlaPat', 'url'=>array('create')),
	array('label'=>'View ObjPlaPat', 'url'=>array('view', 'id'=>$model->id_obj_pla_pat)),
	array('label'=>'Manage ObjPlaPat', 'url'=>array('admin')),
);
?>

<h1>Update ObjPlaPat <?php echo $model->id_obj_pla_pat; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>