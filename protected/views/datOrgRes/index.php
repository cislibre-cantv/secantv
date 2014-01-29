<?php
/* @var $this DatOrgResController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dat Org Res',
);

$this->menu=array(
	array('label'=>'Create DatOrgRes', 'url'=>array('create')),
	array('label'=>'Manage DatOrgRes', 'url'=>array('admin')),
);
?>

<h1>Dat Org Res</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
