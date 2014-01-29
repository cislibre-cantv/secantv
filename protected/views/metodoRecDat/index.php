<?php
/* @var $this MetodoRecDatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Metodo Rec Dats',
);

$this->menu=array(
	array('label'=>'Create MetodoRecDat', 'url'=>array('create')),
	array('label'=>'Manage MetodoRecDat', 'url'=>array('admin')),
);
?>

<h1>Metodo Rec Dats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
