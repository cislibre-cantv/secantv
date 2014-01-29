<?php
/* @var $this MetodoRecDatController */
/* @var $model MetodoRecDat */

$this->breadcrumbs=array(
	'Metodo Rec Dats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MetodoRecDat', 'url'=>array('index')),
	array('label'=>'Create MetodoRecDat', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#metodo-rec-dat-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Metodo Rec Dats</h1>

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
	'id'=>'metodo-rec-dat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_metodo_rec_dat',
		'id_met_rec_dat',
		'tx_des_metodo',
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
