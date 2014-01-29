<?php
/* @var $this OrgResController */
/* @var $model OrgRes */

$this->breadcrumbs=array(
	'Org Res'=>array('index'),
	$model->id_org_res=>array('view','id'=>$model->id_org_res),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrgRes', 'url'=>array('index')),
	array('label'=>'Create OrgRes', 'url'=>array('create')),
	array('label'=>'View OrgRes', 'url'=>array('view', 'id'=>$model->id_org_res)),
	array('label'=>'Manage OrgRes', 'url'=>array('admin')),
);
?>

<h1>Update OrgRes <?php echo $model->id_org_res; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>