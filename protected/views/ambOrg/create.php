<?php
/* @var $this AmbOrgController */
/* @var $model AmbOrg */

$this->breadcrumbs=array(
	'Amb Orgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AmbOrg', 'url'=>array('index')),
	array('label'=>'Manage AmbOrg', 'url'=>array('admin')),
);
?>

<h1>Create AmbOrg</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>