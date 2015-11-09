<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'upload_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'imta_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'upload_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'file_surat',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_kuasa',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_nilek',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_kurikulum',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_aktanotaris',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_pengesahankumham',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_domisili',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'v_skrptka',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'v_ijinoperasional',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'v_rekapsiswadanptk',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'v_rekomendasidinas',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_alasan',array('class'=>'span5','maxlength'=>200)); ?>


	<?php echo $form->textFieldRow($model,'file_jaminan',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_paspor',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_cv',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_foto',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_ijazah',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_sehat',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'file_pernyataan',array('class'=>'span5','maxlength'=>200)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
