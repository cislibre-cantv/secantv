<?php
/* @var $this SecTemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sec Tems',
);

$this->menu=array(
	array('label'=>'Create SecTem', 'url'=>array('create')),
	array('label'=>'Manage SecTem', 'url'=>array('admin')),
);
?>

<h1>Sec Tems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
