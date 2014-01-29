<?php
/* @var $this UsuPriInfController */
/* @var $model UsuPriInf */

$this->breadcrumbs=array(
	'Usu Pri Infs'=>array('index'),
	$model->id_usu_pri_inf=>array('view','id'=>$model->id_usu_pri_inf),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuPriInf', 'url'=>array('index')),
	array('label'=>'Create UsuPriInf', 'url'=>array('create')),
	array('label'=>'View UsuPriInf', 'url'=>array('view', 'id'=>$model->id_usu_pri_inf)),
	array('label'=>'Manage UsuPriInf', 'url'=>array('admin')),
);
?>

<h1>Update UsuPriInf <?php echo $model->id_usu_pri_inf; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>