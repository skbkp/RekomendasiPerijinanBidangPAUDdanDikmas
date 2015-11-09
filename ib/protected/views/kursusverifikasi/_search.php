<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'nilai_kursus_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ib_kursus_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_by',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'upload_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_by',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'v_surat',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_surat',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_kuasa',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_kuasa',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_nilek',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_nilek',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_kurikulum',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_kurikulum',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_aktanotaris',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_aktanotaris',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_pengesahankumham',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_kumham',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_domisili',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_domisili',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_alasan',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_alasan',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_biaya',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_biaya',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_jaminan',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_jaminan',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_paspor',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_paspor',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_cv',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_cv',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_foto',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_foto',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_ijazah',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_ijazah',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_sehat',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_sehat',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'v_pernyataan',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'v_reason_pernyataan',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
