<?php
/* @var $this OrgAdsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Org Ads',
);

$this->menu=array(
	array('label'=>'Create OrgAds', 'url'=>array('create')),
	array('label'=>'Manage OrgAds', 'url'=>array('admin')),
);
?>

<h1>Org Ads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
