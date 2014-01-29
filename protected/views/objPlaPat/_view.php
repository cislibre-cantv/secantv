<?php
/* @var $this ObjPlaPatController */
/* @var $data ObjPlaPat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obj_pla_pat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_obj_pla_pat), array('view', 'id'=>$data->id_obj_pla_pat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_des_obj_pla_pat')); ?>:</b>
	<?php echo CHtml::encode($data->tx_des_obj_pla_pat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_stat')); ?>:</b>
	<?php echo CHtml::encode($data->in_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user_crea')); ?>:</b>
	<?php echo CHtml::encode($data->id_user_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_crea')); ?>:</b>
	<?php echo CHtml::encode($data->fe_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user_modif')); ?>:</b>
	<?php echo CHtml::encode($data->id_user_modif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_modif')); ?>:</b>
	<?php echo CHtml::encode($data->fe_modif); ?>
	<br />


</div>