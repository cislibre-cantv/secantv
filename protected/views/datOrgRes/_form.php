<?php
/* @var $this DatOrgResController */
/* @var $model DatOrgRes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dat-org-res-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre de la Operacion Estadistica'); ?>
		<?php echo $form->textField($model,'tx_nom_op',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tx_nom_op'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ambito del Organismo'); ?>
		<?php echo $form->dropDownList($model,'id_amb_org',
			CHtml::listData(AmbOrg::model()->findAll(), 'id_amb_org', 'tx_des_amb_org'),
				array (
					'ajax'=>array (
						'type'=>'POST',
						'url'=>CController::createUrl('DatOrgRes/Listaestado'),
						'update'=>'#'.CHtml::activeId($model,'id_estado'),
					),
				)
		); ?>
		<?php echo $form->error($model,'id_amb_org'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Estidad'); ?>
		<?php echo $form->dropDownList($model,'id_estado', CHtml::listData(Estado::model()->findAll(), 'id_estado', 'tx_des_estado')); ?>			
		<?php echo $form->error($model,'id_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_org_res'); ?>
		<?php echo $form->textField($model,'id_org_res'); ?>
		<?php echo $form->error($model,'id_org_res'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_uni_eje'); ?>
		<?php echo $form->textField($model,'tx_uni_eje',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tx_uni_eje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_tel_uni_eje'); ?>
		<?php echo $form->textField($model,'tx_tel_uni_eje',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tx_tel_uni_eje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_fax_uni_eje'); ?>
		<?php echo $form->textField($model,'tx_fax_uni_eje',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tx_fax_uni_eje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_cor_uni_eje'); ?>
		<?php echo $form->textField($model,'tx_cor_uni_eje',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tx_cor_uni_eje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_nom_fun_res'); ?>
		<?php echo $form->textField($model,'tx_nom_fun_res',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tx_nom_fun_res'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_car_fun_res'); ?>
		<?php echo $form->textField($model,'tx_car_fun_res',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tx_car_fun_res'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_tel_fun_res'); ?>
		<?php echo $form->textField($model,'tx_tel_fun_res',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tx_tel_fun_res'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_cor_fun_res'); ?>
		<?php echo $form->textField($model,'tx_cor_fun_res',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tx_cor_fun_res'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_nom_jef_inm'); ?>
		<?php echo $form->textField($model,'tx_nom_jef_inm',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tx_nom_jef_inm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_car_jef_inm'); ?>
		<?php echo $form->textField($model,'tx_car_jef_inm',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tx_car_jef_inm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_tel_jef_inm'); ?>
		<?php echo $form->textField($model,'tx_tel_jef_inm',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tx_tel_jef_inm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_cor_jef_inm'); ?>
		<?php echo $form->textField($model,'tx_cor_jef_inm',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tx_cor_jef_inm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_met_rec_dat'); ?>
		<?php echo $form->textField($model,'id_met_rec_dat'); ?>
		<?php echo $form->error($model,'id_met_rec_dat'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'Ambito del Organismo'); ?>
		<?php echo $form->dropDownList($model,'id_met_rec_dat', CHtml::listData(AmbOrg::model()->findAll(), 'id_met_rec_dat', 'tx_met_rec_dat')); ?>		
		<?php echo $form->error($model,'id_met_rec_dat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sec_tem'); ?>
		<?php echo $form->textField($model,'id_sec_tem'); ?>
		<?php echo $form->error($model,'id_sec_tem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_obj_pla_pat'); ?>
		<?php echo $form->textField($model,'id_obj_pla_pat'); ?>
		<?php echo $form->error($model,'id_obj_pla_pat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_obs'); ?>
		<?php echo $form->textField($model,'tx_obs',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tx_obs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'in_stat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user_crea'); ?>
		<?php echo $form->textField($model,'id_user_crea'); ?>
		<?php echo $form->error($model,'id_user_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
		<?php echo $form->error($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user_modif'); ?>
		<?php echo $form->textField($model,'id_user_modif'); ?>
		<?php echo $form->error($model,'id_user_modif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_modif'); ?>
		<?php echo $form->textField($model,'fe_modif'); ?>
		<?php echo $form->error($model,'fe_modif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->