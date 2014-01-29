<?php
/* @var $this OrgResController */
/* @var $model OrgRes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_org_res'); ?>
		<?php echo $form->textField($model,'id_org_res'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_amb_org'); ?>
		<?php echo $form->textField($model,'id_amb_org'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estado'); ?>
		<?php echo $form->textField($model,'id_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_municipio'); ?>
		<?php echo $form->textField($model,'id_municipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_nom_org_agr'); ?>
		<?php echo $form->textField($model,'tx_nom_org_agr',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_pag_web_org_agr'); ?>
		<?php echo $form->textField($model,'tx_pag_web_org_agr',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_org_ads'); ?>
		<?php echo $form->textField($model,'id_org_ads'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user_crea'); ?>
		<?php echo $form->textField($model,'id_user_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user_modif'); ?>
		<?php echo $form->textField($model,'id_user_modif'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_modif'); ?>
		<?php echo $form->textField($model,'fe_modif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->