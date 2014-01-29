<?php
/* @var $this UsuPriInfController */
/* @var $model UsuPriInf */

$this->breadcrumbs=array(
	'Usu Pri Infs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuPriInf', 'url'=>array('index')),
	array('label'=>'Manage UsuPriInf', 'url'=>array('admin')),
);
?>

<h1>Create UsuPriInf</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>