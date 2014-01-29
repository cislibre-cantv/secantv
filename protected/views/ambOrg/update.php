<?php
/* @var $this AmbOrgController */
/* @var $model AmbOrg */

$this->breadcrumbs=array(
	'Amb Orgs'=>array('index'),
	$model->id_amb_org=>array('view','id'=>$model->id_amb_org),
	'Update',
);

$this->menu=array(
	array('label'=>'List AmbOrg', 'url'=>array('index')),
	array('label'=>'Create AmbOrg', 'url'=>array('create')),
	array('label'=>'View AmbOrg', 'url'=>array('view', 'id'=>$model->id_amb_org)),
	array('label'=>'Manage AmbOrg', 'url'=>array('admin')),
);
?>

<h1>Update AmbOrg <?php echo $model->id_amb_org; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>