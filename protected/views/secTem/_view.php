<?php
/* @var $this SecTemController */
/* @var $data SecTem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sec_tem')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sec_tem), array('view', 'id'=>$data->id_sec_tem)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_des_sec_tem')); ?>:</b>
	<?php echo CHtml::encode($data->tx_des_sec_tem); ?>
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