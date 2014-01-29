<?php
/* @var $this SecTemController */
/* @var $model SecTem */

$this->breadcrumbs=array(
	'Sec Tems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SecTem', 'url'=>array('index')),
	array('label'=>'Manage SecTem', 'url'=>array('admin')),
);
?>

<h1>Create SecTem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>