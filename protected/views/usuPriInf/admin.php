<?php
/* @var $this UsuPriInfController */
/* @var $model UsuPriInf */

$this->breadcrumbs=array(
	'Usu Pri Infs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UsuPriInf', 'url'=>array('index')),
	array('label'=>'Create UsuPriInf', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usu-pri-inf-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Usu Pri Infs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usu-pri-inf-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_usu_pri_inf',
		'tx_des_usu_pri_inf',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		/*
		'fe_modif',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
