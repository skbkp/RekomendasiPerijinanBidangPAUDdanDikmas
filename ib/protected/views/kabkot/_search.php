<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'psr_kabkot_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'psr_kabkot_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'psr_prop_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'psr_reg_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'psr_posted_by',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'psr_lastupdate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'psr_sync',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
