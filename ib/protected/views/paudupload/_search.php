<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'upload_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'paud_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'upload_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'file_surat',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_kuasa',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_biaya',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_paspor_anak',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_aktalahir',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_paspor_ortu',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_kk',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_nikah',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_jaminan',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_domisili',array('class'=>'span5','maxlength'=>200)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
