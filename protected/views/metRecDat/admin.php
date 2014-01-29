<?php
/* @var $this MetRecDatController */
/* @var $model MetRecDat */

$this->breadcrumbs=array(
	'Met Rec Dats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MetRecDat', 'url'=>array('index')),
	array('label'=>'Create MetRecDat', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#met-rec-dat-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Met Rec Dats</h1>

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
	'id'=>'met-rec-dat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_met_rec_dat',
		'tx_des_met_rec_dat',
		'tx_ficha',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		/*
		'id_user_modif',
		'fe_modif',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
