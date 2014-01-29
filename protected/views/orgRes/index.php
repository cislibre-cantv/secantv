<?php
/* @var $this OrgResController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Org Res',
);

$this->menu=array(
	array('label'=>'Create OrgRes', 'url'=>array('create')),
	array('label'=>'Manage OrgRes', 'url'=>array('admin')),
);
?>

<h1>Org Res</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
