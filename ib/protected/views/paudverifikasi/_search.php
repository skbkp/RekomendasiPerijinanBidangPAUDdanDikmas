<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'nilai_paud_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ib_paud_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_by',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_by',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_surat',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_kuasa',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_biaya',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_paspor_anak',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_aktalahir',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_paspor_ortu',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_kk',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_nikah',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_jaminan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_domisili',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'global_reason',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
