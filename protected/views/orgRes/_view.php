<?php
/* @var $this OrgResController */
/* @var $data OrgRes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_org_res')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_org_res), array('view', 'id'=>$data->id_org_res)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_amb_org')); ?>:</b>
	<?php echo CHtml::encode($data->id_amb_org); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estado')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_municipio')); ?>:</b>
	<?php echo CHtml::encode($data->id_municipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_nom_org_agr')); ?>:</b>
	<?php echo CHtml::encode($data->tx_nom_org_agr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_pag_web_org_agr')); ?>:</b>
	<?php echo CHtml::encode($data->tx_pag_web_org_agr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_org_ads')); ?>:</b>
	<?php echo CHtml::encode($data->id_org_ads); ?>
	<br />

	<?php /*
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

	*/ ?>

</div>