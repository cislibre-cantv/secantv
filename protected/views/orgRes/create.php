<?php
/* @var $this OrgResController */
/* @var $model OrgRes */

$this->breadcrumbs=array(
	'Org Res'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrgRes', 'url'=>array('index')),
	array('label'=>'Manage OrgRes', 'url'=>array('admin')),
);
?>

<h1>Create OrgRes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>