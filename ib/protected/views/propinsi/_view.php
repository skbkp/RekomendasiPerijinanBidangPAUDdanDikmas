<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('psr_prop_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->psr_prop_id),array('view','id'=>$data->psr_prop_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psr_prop_name')); ?>:</b>
	<?php echo CHtml::encode($data->psr_prop_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psr_reg_id')); ?>:</b>
	<?php echo CHtml::encode($data->psr_reg_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psr_posted_by')); ?>:</b>
	<?php echo CHtml::encode($data->psr_posted_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psr_lastupdate')); ?>:</b>
	<?php echo CHtml::encode($data->psr_lastupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psr_sync')); ?>:</b>
	<?php echo CHtml::encode($data->psr_sync); ?>
	<br />


</div>