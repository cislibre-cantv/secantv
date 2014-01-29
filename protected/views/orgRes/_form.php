<?php
/* @var $this OrgResController */
/* @var $model OrgRes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'org-res-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Ambito del Organismo'); ?>
		<?php echo $form->dropDownList($model,'id_amb_org', CHtml::listData(AmbOrg::model()->findAll(), 'id_amb_org', 'tx_des_amb_org')); ?>		
		<?php echo $form->error($model,'id_amb_org'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>		
		<?php echo $form->dropDownList($model,'id_estado', 
				CHtml::listData(Estado::model()->findAll(), 'id_estado', 'tx_des_estado'),
				array (
					'ajax'=>array(
						'type'=>'POST',
						'url'=>CController::createUrl('OrgRes/Listamunicipio'),
						'update'=>'#'.CHtml::activeId($model,'id_municipio'),					
					)
				)
		); ?>
		<?php echo $form->error($model,'id_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Municipio'); ?>
		<?php echo $form->dropDownList($model,'id_municipio', CHtml::listData(Municipio::model()->findAll(), 'id_municipio', 'tx_des_municipio')); ?>		
		<?php echo $form->error($model,'id_municipio'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Nombre del Organismo a Agregar'); ?>
		<?php echo $form->textField($model,'tx_nom_org_agr',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tx_nom_org_agr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pagina Web del Organismo'); ?>
		<?php echo $form->textField($model,'tx_pag_web_org_agr',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tx_pag_web_org_agr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,' Organismo de Adscripci&oacute;n '); ?>		
		<?php echo $form->dropDownList($model,'id_org_ads', CHtml::listData(OrgAds::model()->findAll(), 'id_org_ads', 'tx_des_org_ads')); ?>		
		<?php echo $form->error($model,'id_org_ads'); ?>
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