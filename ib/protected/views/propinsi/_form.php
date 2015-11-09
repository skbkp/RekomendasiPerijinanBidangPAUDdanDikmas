<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'propinsi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'psr_prop_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'psr_reg_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'psr_posted_by',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'psr_lastupdate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'psr_sync',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
