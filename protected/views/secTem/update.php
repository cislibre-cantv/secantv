<?php
/* @var $this SecTemController */
/* @var $model SecTem */

$this->breadcrumbs=array(
	'Sec Tems'=>array('index'),
	$model->id_sec_tem=>array('view','id'=>$model->id_sec_tem),
	'Update',
);

$this->menu=array(
	array('label'=>'List SecTem', 'url'=>array('index')),
	array('label'=>'Create SecTem', 'url'=>array('create')),
	array('label'=>'View SecTem', 'url'=>array('view', 'id'=>$model->id_sec_tem)),
	array('label'=>'Manage SecTem', 'url'=>array('admin')),
);
?>

<h1>Update SecTem <?php echo $model->id_sec_tem; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>