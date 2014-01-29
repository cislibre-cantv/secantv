<?php
/* @var $this DatOrgResController */
/* @var $model DatOrgRes */

$this->breadcrumbs=array(
	'Dat Org Res'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DatOrgRes', 'url'=>array('index')),
	array('label'=>'Manage DatOrgRes', 'url'=>array('admin')),
);
?>

<h1>Create DatOrgRes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>