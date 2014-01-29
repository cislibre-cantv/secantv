<?php
/* @var $this AmbOrgController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Amb Orgs',
);

$this->menu=array(
	array('label'=>'Create AmbOrg', 'url'=>array('create')),
	array('label'=>'Manage AmbOrg', 'url'=>array('admin')),
);
?>

<h1>Amb Orgs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
