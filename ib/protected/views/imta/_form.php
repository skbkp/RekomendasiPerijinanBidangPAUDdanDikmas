<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'imta-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>
<fieldset>
	<legend><i class='icon-list'></i> Identitas Pemohon</legend>

	<?php echo $form->textFieldRow($model,'ib_imta_peserta_name',array('class'=>'span3','maxlength'=>200)); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_nilek',array('class'=>'span3','maxlength'=>200)); ?>
	<?php echo $form->dropDownListRow($model,'ib_imta_peserta_jk',CHtml::listData(Jeniskelamin::model()->findAll(),'ib_jeniskelamin_id','ib_jeniskelamin'),array('empty'=>'- Jenis Kelamin -','class'=>'span2')); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_peserta_tmplahir',array('class'=>'span2','maxlength'=>50)); ?>
	<?php echo $form->datepickerRow($model,'ib_imta_peserta_tgllahir', array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->dropDownListRow($model,'ib_imta_peserta_negara',CHtml::listData(Negara::model()->findAll(),'id','country'),array('empty'=>'- Negara -','class'=>'span3')); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_peserta_pasport',array('class'=>'span3','maxlength'=>50)); ?>
	<?php echo $form->datepickerRow($model,'ib_imta_peserta_pasport_start', array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->datepickerRow($model,'ib_imta_peserta_pasport_exp',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_peserta_alamat_ln',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_peserta_alamat_id',array('class'=>'span5')); ?>
	<?php echo $form->dropDownListRow($model, 'ib_imta_peserta_prop_id',CHtml::listData(Propinsi::model()->findAll(), 'psr_prop_id', 'psr_prop_name'),

	array(
		'empty'=>'- Pilih Propinsi -',
		'class'=>'span3',
		'ajax'=>array(
			'type'=>'POST',
			'url'=>CController::createurl('kabkot/carikabkot5'),
			'update'=>'#'.CHtml::activeId($model,'ib_imta_peserta_kabkot_id'),
		),
	)); ?>
	<?php echo $form->dropDownListRow($model,'ib_imta_peserta_kabkot_id',CHtml::listData(Kabkot::model()->findAll(), 'psr_kabkot_id', 'psr_kabkot_name')); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_peserta_pendidikan',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_peserta_jurusanpendidikan',array('class'=>'span5')); ?>	
</fieldset>

<fieldset>
	<legend><i class='icon-list'></i> Identitas Lembaga imta</legend>
	<?php echo $form->textFieldRow($model,'ib_imta_lbg_name',array('class'=>'span3','maxlength'=>200)); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_lbg_alamat',array('class'=>'span5','maxlength'=>300)); ?>
	<?php echo $form->dropDownListRow($model, 'ib_imta_lbg_prop_id',CHtml::listData(Propinsi::model()->findAll(), 'psr_prop_id', 'psr_prop_name'),
	array(
		'empty'=>'- Pilih Propinsi -',
		'class'=>'span3',
		'ajax'=>array(
			'type'=>'POST',
			'url'=>CController::createurl('kabkot/carikabkot6'),
			'update'=>'#'.CHtml::activeId($model,'ib_imta_lbg_kabkot_id'),
		),
	)); ?>
	<?php echo $form->dropDownListRow($model,'ib_imta_lbg_kabkot_id',CHtml::listData(Kabkot::model()->findAll(), 'psr_kabkot_id', 'psr_kabkot_name')); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_lbg_kodepos',array('class'=>'span2')); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_lbg_tlp',array('class'=>'span2','maxlength'=>15)); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_lbg_fax',array('class'=>'span2','maxlength'=>15)); ?>
    <?php echo $form->dropDownListRow($model,'ib_imta_lbg_jenislembaga',CHtml::listData(Jenislembaga::model()->findAll(),'jenislembaga_id','jenislembaga'),array('class'=>'span3','empty'=>'- Lembaga -')); ?>
    
	<?php echo $form->textFieldRow($model,'ib_imta_lbg_ijin_oleh',array('class'=>'span5')); ?>
        <?php echo $form->textFieldRow($model,'ib_imta_lbg_ijin_oleh_name',array('class'=>'span5')); ?>
        <?php echo $form->textFieldRow($model,'ib_imta_lbg_ijin_no',array('class'=>'span5')); ?>
	<?php echo $form->datepickerRow($model,'ib_imta_lbg_ijin_tgl',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->datepickerRow($model,'ib_imta_lbg_ijin_start',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->datepickerRow($model,'ib_imta_lbg_ijin_exp',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
</fieldset>

<fieldset>
	<legend><i class='icon-list'></i> Informasi Tambahan</legend>

	<?php echo $form->textFieldRow($model,'ib_imta_peserta_nosurat',array('class'=>'span5','maxlength'=>50)); ?>
    <?php echo $form->datepickerRow($model,'ib_imta_peserta_tglsurat',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->dropDownListRow($model,'ib_imta_jenis_kursus',CHtml::listData(Jeniskursus::model()->findAll(),'jeniskursus_id','jeniskursus'),array('class'=>'span3','empty'=>'- Jenis Kursus -')); ?>
    <?php echo $form->dropDownListRow($model,'ib_imta_jenis_imta',CHtml::listData(Jenisimta::model()->findAll(),'jenisimta_id','jenisimta'),array('class'=>'span3','empty'=>'- Jenis imta -')); ?>
	<?php echo $form->textAreaRow($model,'ib_imta_peserta_nosurat_rptka',array('rows'=>3, 'cols'=>30, 'class'=>'span4')); ?>
	<?php echo $form->datepickerRow($model,'ib_imta_peserta_tglsurat_rptka',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->textFieldRow($model,'ib_imta_jumlah_rptka',array('class'=>'span5','maxlength'=>200)); ?>
    <?php echo $form->dropDownListRow($model,'ib_imta_jenisjabatan_ptka',CHtml::listData(Jenisjabatanrptka::model()->findAll(),'jenisjabatanrptka_id','jenisjabatanrptka'),array('class'=>'span3','empty'=>'- Jenis jabatan RPTKA -')); ?>
	<?php echo $form->datepickerRow($model,'ib_imta_kadaluarsa_rptka',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	
</fieldset>

<div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType'=>'submit',
                'type'=>'primary',
                'label'=>$model->isNewRecord ? 'Submit' : 'Save',
        )); ?>
</div>
<?php $this->endWidget(); ?>