<?php
/* @var $this DatOrgResController */
/* @var $model DatOrgRes */

$this->breadcrumbs=array(
	'Dat Org Res'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DatOrgRes', 'url'=>array('index')),
	array('label'=>'Create DatOrgRes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dat-org-res-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dat Org Res</h1>

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
	'id'=>'dat-org-res-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_dat_org_res',
		'tx_nom_op',
		'id_amb_org',
		'id_estado',
		'id_org_res',
		'tx_uni_eje',
		/*
		'tx_tel_uni_eje',
		'tx_fax_uni_eje',
		'tx_cor_uni_eje',
		'tx_nom_fun_res',
		'tx_car_fun_res',
		'tx_tel_fun_res',
		'tx_cor_fun_res',
		'tx_nom_jef_inm',
		'tx_car_jef_inm',
		'tx_tel_jef_inm',
		'tx_cor_jef_inm',
		'id_met_rec_dat',
		'id_sec_tem',
		'id_obj_pla_pat',
		'tx_obs',
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
