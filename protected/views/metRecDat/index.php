<?php
/* @var $this MetRecDatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Met Rec Dats',
);

$this->menu=array(
	array('label'=>'Create MetRecDat', 'url'=>array('create')),
	array('label'=>'Manage MetRecDat', 'url'=>array('admin')),
);
?>

<h1>Met Rec Dats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
