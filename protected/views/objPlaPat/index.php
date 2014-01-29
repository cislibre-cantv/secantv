<?php
/* @var $this ObjPlaPatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obj Pla Pats',
);

$this->menu=array(
	array('label'=>'Create ObjPlaPat', 'url'=>array('create')),
	array('label'=>'Manage ObjPlaPat', 'url'=>array('admin')),
);
?>

<h1>Obj Pla Pats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
