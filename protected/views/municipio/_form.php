<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'municipio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estado'); ?>				
		<?php echo $form->dropDownList($model,'id_estado', CHtml::listData(Estado::model()->findAll(), 'id_estado', 'tx_des_estado')); ?>		
		<?php echo $form->error($model,'id_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_des_municipio'); ?>
		<?php echo $form->textField($model,'tx_des_municipio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tx_des_municipio'); ?>
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