<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kursus-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>
<fieldset>
	<legend><i class='icon-list'></i> Identitas Pemohon</legend>

	<?php echo $form->textFieldRow($model,'ib_kursus_peserta_name',array('class'=>'span3','maxlength'=>200)); ?>
	<?php echo $form->dropDownListRow($model,'ib_kursus_peserta_jk',CHtml::listData(Jeniskelamin::model()->findAll(),'ib_jeniskelamin_id','ib_jeniskelamin'),array('empty'=>'- Jenis Kelamin -','class'=>'span2')); ?>
	<?php echo $form->textFieldRow($model,'ib_kursus_peserta_tmplahir',array('class'=>'span2','maxlength'=>50)); ?>
	<?php echo $form->datepickerRow($model,'ib_kursus_peserta_tgllahir', array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->dropDownListRow($model,'ib_kursus_peserta_negara',CHtml::listData(Negara::model()->findAll(),'id','country'),array('empty'=>'- Negara -','class'=>'span3')); ?>
	<?php echo $form->textFieldRow($model,'ib_kursus_peserta_pasport',array('class'=>'span3','maxlength'=>50)); ?>
	<?php echo $form->datepickerRow($model,'ib_kursus_peserta_pasport_start', array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->datepickerRow($model,'ib_kursus_peserta_pasport_exp',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->textFieldRow($model,'ib_kursus_peserta_alamat_ln',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'ib_kursus_peserta_alamat_id',array('class'=>'span5')); ?>
	<?php echo $form->dropDownListRow($model, 'ib_kursus_peserta_prop_id',CHtml::listData(Propinsi::model()->findAll(), 'psr_prop_id', 'psr_prop_name'),
	array(
		'empty'=>'- Pilih Propinsi -',
		'class'=>'span3',
		'ajax'=>array(
			'type'=>'POST',
			'url'=>CController::createurl('kabkot/carikabkot'),
			'update'=>'#'.CHtml::activeId($model,'ib_kursus_peserta_kabkot_id'),
		),
	)); ?>

	<?php echo $form->dropDownListRow($model,'ib_kursus_peserta_kabkot_id',CHtml::listData(Kabkot::model()->findAll(), 'psr_kabkot_id', 'psr_kabkot_name')); ?>
</fieldset>

<fieldset>
	<legend><i class='icon-list'></i> Identitas Lembaga Kursus</legend>
	<?php echo $form->textFieldRow($model,'ib_kursus_lbg_name',array('class'=>'span3','maxlength'=>200)); ?>
	<?php echo $form->textFieldRow($model,'ib_kursus_lbg_alamat',array('class'=>'span5','maxlength'=>300)); ?>
	<?php echo $form->dropDownListRow($model, 'ib_kursus_lbg_prop_id',CHtml::listData(Propinsi::model()->findAll(), 'psr_prop_id', 'psr_prop_name'),
	array(
		'empty'=>'- Pilih Propinsi -',
		'class'=>'span3',
		'ajax'=>array(
			'type'=>'POST',
			'url'=>CController::createurl('kabkot/carikabkot2'),
			'update'=>'#'.CHtml::activeId($model,'ib_kursus_lbg_kabkot_id'),
		),
	)); ?>

	<?php echo $form->dropDownListRow($model,'ib_kursus_lbg_kabkot_id',CHtml::listData(Kabkot::model()->findAll(), 'psr_kabkot_id', 'psr_kabkot_name')); ?>

	<?php echo $form->textFieldRow($model,'ib_kursus_lbg_kodepos',array('class'=>'span2')); ?>
	<?php echo $form->textFieldRow($model,'ib_kursus_lbg_tlp',array('class'=>'span2','maxlength'=>15)); ?>
	<?php echo $form->textFieldRow($model,'ib_kursus_lbg_fax',array('class'=>'span2','maxlength'=>15)); ?>
    <?php echo $form->dropDownListRow($model,'ib_kursus_lbg_pemodal',CHtml::listData(IbRpemodalan::model()->findAll(),'ib_pemodalan_id','ib_pemodalan'),array('class'=>'span3','empty'=>'- Pemodalan -')); ?>
    
	<?php echo $form->textFieldRow($model,'ib_kursus_lbg_ijin_oleh',array('class'=>'span5')); ?>
        <?php echo $form->textFieldRow($model,'ib_kursus_lbg_ijin_oleh_name',array('class'=>'span5')); ?>
        <?php echo $form->textFieldRow($model,'ib_kursus_lbg_ijin_no',array('class'=>'span5')); ?>
	<?php echo $form->datepickerRow($model,'ib_kursus_lbg_ijin_tgl',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->datepickerRow($model,'ib_kursus_lbg_ijin_start',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->datepickerRow($model,'ib_kursus_lbg_ijin_exp',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
</fieldset>

<fieldset>
	<legend><i class='icon-list'></i> Informasi Tambahan</legend>
	<?php echo $form->textFieldRow($model,'ib_kursus_peserta_biaya',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->textAreaRow($model,'ib_kursus_peserta_alasan',array('rows'=>3, 'cols'=>30, 'class'=>'span4')); ?>
	<?php echo $form->textFieldRow($model,'ib_kursus_peserta_jaminan',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->textFieldRow($model,'ib_kursus_peserta_pendidikan',array('class'=>'span5','maxlength'=>200)); ?>
        <?php echo $form->textFieldRow($model,'ib_kursus_peserta_nosurat',array('class'=>'span5','maxlength'=>50)); ?>
        <?php echo $form->datepickerRow($model,'ib_kursus_peserta_tglsurat',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->dropDownListRow($model,'ib_jeniskursus',CHtml::listData(Jeniskursus::model()->findAll(),'jeniskursus_id','jeniskursus'),array('class'=>'span3','empty'=>'- Jenis Kursus -')); ?>
</fieldset>

<div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType'=>'submit',
                'type'=>'primary',
                'label'=>$model->isNewRecord ? 'Submit' : 'Save',
        )); ?>
</div>
<?php $this->endWidget(); ?>