<?php
/* @var $this OrgAdsController */
/* @var $model OrgAds */

$this->breadcrumbs=array(
	'Org Ads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrgAds', 'url'=>array('index')),
	array('label'=>'Manage OrgAds', 'url'=>array('admin')),
);
?>

<h1>Create OrgAds</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>