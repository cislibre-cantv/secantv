<?php
/* @var $this OrgResController */
/* @var $model OrgRes */

$this->breadcrumbs=array(
	'Org Res'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OrgRes', 'url'=>array('index')),
	array('label'=>'Create OrgRes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#org-res-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Org Res</h1>

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
	'id'=>'org-res-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_org_res',
		'id_amb_org',
		'id_estado',
		'id_municipio',
		'tx_nom_org_agr',
		'tx_pag_web_org_agr',
		/*
		'id_org_ads',
		'in_stat',
		'id_user_crea',
		'fe_crea',
		'id_user_modif',
		'fe_modif',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
