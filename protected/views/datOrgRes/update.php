<?php
/* @var $this DatOrgResController */
/* @var $model DatOrgRes */

$this->breadcrumbs=array(
	'Dat Org Res'=>array('index'),
	$model->id_dat_org_res=>array('view','id'=>$model->id_dat_org_res),
	'Update',
);

$this->menu=array(
	array('label'=>'List DatOrgRes', 'url'=>array('index')),
	array('label'=>'Create DatOrgRes', 'url'=>array('create')),
	array('label'=>'View DatOrgRes', 'url'=>array('view', 'id'=>$model->id_dat_org_res)),
	array('label'=>'Manage DatOrgRes', 'url'=>array('admin')),
);
?>

<h1>Update DatOrgRes <?php echo $model->id_dat_org_res; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>