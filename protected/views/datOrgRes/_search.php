<?php
/* @var $this DatOrgResController */
/* @var $model DatOrgRes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_dat_org_res'); ?>
		<?php echo $form->textField($model,'id_dat_org_res'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_nom_op'); ?>
		<?php echo $form->textField($model,'tx_nom_op',array('size'=>60,'maxlength'=>100)); ?>
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
		<?php echo $form->label($model,'id_org_res'); ?>
		<?php echo $form->textField($model,'id_org_res'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_uni_eje'); ?>
		<?php echo $form->textField($model,'tx_uni_eje',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_tel_uni_eje'); ?>
		<?php echo $form->textField($model,'tx_tel_uni_eje',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_fax_uni_eje'); ?>
		<?php echo $form->textField($model,'tx_fax_uni_eje',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_cor_uni_eje'); ?>
		<?php echo $form->textField($model,'tx_cor_uni_eje',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_nom_fun_res'); ?>
		<?php echo $form->textField($model,'tx_nom_fun_res',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_car_fun_res'); ?>
		<?php echo $form->textField($model,'tx_car_fun_res',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_tel_fun_res'); ?>
		<?php echo $form->textField($model,'tx_tel_fun_res',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_cor_fun_res'); ?>
		<?php echo $form->textField($model,'tx_cor_fun_res',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_nom_jef_inm'); ?>
		<?php echo $form->textField($model,'tx_nom_jef_inm',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_car_jef_inm'); ?>
		<?php echo $form->textField($model,'tx_car_jef_inm',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_tel_jef_inm'); ?>
		<?php echo $form->textField($model,'tx_tel_jef_inm',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_cor_jef_inm'); ?>
		<?php echo $form->textField($model,'tx_cor_jef_inm',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_met_rec_dat'); ?>
		<?php echo $form->textField($model,'id_met_rec_dat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sec_tem'); ?>
		<?php echo $form->textField($model,'id_sec_tem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_obj_pla_pat'); ?>
		<?php echo $form->textField($model,'id_obj_pla_pat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_obs'); ?>
		<?php echo $form->textField($model,'tx_obs',array('size'=>60,'maxlength'=>100)); ?>
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