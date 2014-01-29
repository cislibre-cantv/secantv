<?php
/* @var $this UsuPriInfController */
/* @var $model UsuPriInf */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usu-pri-inf-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tx_des_usu_pri_inf'); ?>
		<?php echo $form->textField($model,'tx_des_usu_pri_inf',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tx_des_usu_pri_inf'); ?>
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