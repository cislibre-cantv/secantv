<?php
/* @var $this UsuPriInfController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usu Pri Infs',
);

$this->menu=array(
	array('label'=>'Create UsuPriInf', 'url'=>array('create')),
	array('label'=>'Manage UsuPriInf', 'url'=>array('admin')),
);
?>

<h1>Usu Pri Infs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
