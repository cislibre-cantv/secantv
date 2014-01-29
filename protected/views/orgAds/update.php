<?php
/* @var $this OrgAdsController */
/* @var $model OrgAds */

$this->breadcrumbs=array(
	'Org Ads'=>array('index'),
	$model->id_org_ads=>array('view','id'=>$model->id_org_ads),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrgAds', 'url'=>array('index')),
	array('label'=>'Create OrgAds', 'url'=>array('create')),
	array('label'=>'View OrgAds', 'url'=>array('view', 'id'=>$model->id_org_ads)),
	array('label'=>'Manage OrgAds', 'url'=>array('admin')),
);
?>

<h1>Update OrgAds <?php echo $model->id_org_ads; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>