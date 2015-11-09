<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'paud-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>
<fieldset>
	<legend><i class='icon-list'></i> Identitas Pemohon</legend>
	<?php echo $form->textFieldRow($model,'ib_paud_peserta_name',array('class'=>'span3','maxlength'=>200)); ?>
	<?php echo $form->textFieldRow($model,'ib_paud_nilek',array('class'=>'span3','maxlength'=>200)); ?>
	<?php echo $form->dropDownListRow($model,'ib_paud_peserta_jk',CHtml::listData(Jeniskelamin::model()->findAll(),'ib_jeniskelamin_id','ib_jeniskelamin'),array('empty'=>'- Jenis Kelamin -','class'=>'span2')); ?>
	<?php echo $form->textFieldRow($model,'ib_paud_peserta_tmplahir',array('class'=>'span2','maxlength'=>50)); ?>
	<?php echo $form->datepickerRow($model,'ib_paud_peserta_tgllahir',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->dropDownListRow($model,'ib_paud_peserta_negara',CHtml::listData(Negara::model()->findAll(),'id','country'),array('empty'=>'- Negara -','class'=>'span3',)); ?>
        <?php echo $form->textFieldRow($model,'ib_paud_peserta_surat',array('class'=>'span3','maxlength'=>50)); ?>
        <?php echo $form->datepickerRow($model,'ib_paud_peserta_surat_tgl',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
        <?php echo $form->textFieldRow($model,'ib_paud_peserta_tgjwb',array('class'=>'span2','maxlength'=>50)); ?>
</fieldset>

<fieldset>
        <legend><i class="icon-list"></i> Identitas Orang Tua</legend>
        <div class="alert alert-warning">
            <p><span class="label label-info">IDENTITAS AYAH</span></p>
            <?php echo $form->textFieldRow($model,'ib_paud_peserta_ortu_name',array('class'=>'span3','maxlength'=>100)); ?>
            <?php echo $form->dropDownListRow($model, 'ib_paud_ayah_wn',CHtml::listData(Wn::model()->findAll(), 'id', 'wn'),array('empty'=>'-','class'=>'span1')); ?>
            <?php echo $form->textFieldRow($model,'ib_paud_ayah_pasport',array('class'=>'span3','maxlength'=>50)); ?>
            <?php echo $form->datepickerRow($model,'ib_paud_ayah_pasport_start',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
            <?php echo $form->datepickerRow($model,'ib_paud_ayah_pasport_exp',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
            <?php echo $form->textFieldRow($model,'ib_paud_ayah_ktp',array('class'=>'span3','maxlength'=>50)); ?>
            <?php echo $form->datepickerRow($model,'ib_paud_ayah_ktp_start',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
            <?php echo $form->datepickerRow($model,'ib_paud_ayah_ktp_exp',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
        </div>
        <div class="alert alert-warning">
            <p><span class="label label-info">IDENTITAS IBU</span></p>
            <?php echo $form->textFieldRow($model,'ib_paud_peserta_ortu_name_ibu',array('class'=>'span3','maxlength'=>100)); ?>
            <?php echo $form->dropDownListRow($model, 'ib_paud_ibu_wn',CHtml::listData(Wn::model()->findAll(), 'id', 'wn'),array('empty'=>'-','class'=>'span1')); ?>
            <?php echo $form->textFieldRow($model,'ib_paud_ibu_pasport',array('class'=>'span3','maxlength'=>50)); ?>
            <?php echo $form->datepickerRow($model,'ib_paud_ibu_pasport_start',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
            <?php echo $form->datepickerRow($model,'ib_paud_ibu_pasport_exp',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
            <?php echo $form->textFieldRow($model,'ib_paud_ibu_ktp',array('class'=>'span3','maxlength'=>50)); ?>
            <?php echo $form->datepickerRow($model,'ib_paud_ibu_ktp_start',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
            <?php echo $form->datepickerRow($model,'ib_paud_ibu_ktp_exp',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
        </div>
	<?php echo $form->textFieldRow($model,'ib_paud_peserta_ortu_job',array('class'=>'span2','maxlength'=>50)); ?>
	<?php echo $form->textFieldRow($model,'ib_paud_peserta_kk',array('class'=>'span3','maxlength'=>100)); ?>
        <?php echo $form->textAreaRow($model,'ib_paud_peserta_alamat_ln');?>
	<?php echo $form->textAreaRow($model,'ib_paud_peserta_alamat_id'); ?>
	<?php echo $form->dropDownListRow($model, 'ib_paud_peserta_prop_id',CHtml::listData(Propinsi::model()->findAll(), 'psr_prop_id', 'psr_prop_name'),
	array(
		'empty'=>'- Pilih Propinsi -',
		'class'=>'span3',
		'ajax'=>array(
			'type'=>'POST',
			'url'=>CController::createurl('kabkot/carikabkot3'),
			'update'=>'#'.CHtml::activeId($model,'ib_paud_peserta_kabkot_id'),
		),
	)); ?>
	
	<?php echo $form->dropDownListRow($model,'ib_paud_peserta_kabkot_id',CHtml::listData(Kabkot::model()->findAll(), 'psr_kabkot_id', 'psr_kabkot_name')); ?>
</fieldset>

<fieldset>
	<legend><i class='icon-list'></i> Identitas Lembaga</legend>
	<?php echo $form->textFieldRow($model,'ib_paud_lbg_name',array('class'=>'span3','maxlength'=>200)); ?>
	<?php echo $form->textFieldRow($model,'ib_paud_lbg_alamat',array('class'=>'span4','maxlength'=>300)); ?>
	<?php echo $form->dropDownListRow($model, 'ib_paud_lbg_prop_id',CHtml::listData(Propinsi::model()->findAll(), 'psr_prop_id', 'psr_prop_name'),
	array(
		'empty'=>'- Pilih Propinsi -',
		'class'=>'span3',
		'ajax'=>array(
			'type'=>'POST',
			'url'=>CController::createurl('kabkot/carikabkot4'),
			'update'=>'#'.CHtml::activeId($model,'ib_paud_lbg_kabkot_id'),
		),
	)); ?>

	<?php echo $form->dropDownListRow($model,'ib_paud_lbg_kabkot_id',CHtml::listData(Kabkot::model()->findAll(), 'psr_kabkot_id', 'psr_kabkot_name')); ?>
	<?php echo $form->textFieldRow($model,'ib_paud_lbg_kodepos',array('class'=>'span1')); ?>
	<?php echo $form->textFieldRow($model,'ib_paud_lbg_tlp',array('class'=>'span2','maxlength'=>15)); ?>
	<?php echo $form->textFieldRow($model,'ib_paud_lbg_fax',array('class'=>'span2','maxlength'=>15)); ?>
	<?php echo $form->textFieldRow($model,'ib_paud_lbg_ijin_oleh',array('class'=>'span4')); ?>
	<?php echo $form->datePickerRow($model,'ib_paud_lbg_ijin_tgl',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->datePickerRow($model,'ib_paud_lbg_ijin_start',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->datePickerRow($model,'ib_paud_lbg_ijin_exp',array('prepend'=>'<i class="icon-calendar"></i>','append'=>'<span class="label label-important">yyyy-mm-dd</span>','class'=>'span2','options'=>array('format'=>'yyyy-mm-dd'))); ?>
	<?php echo $form->textFieldRow($model,'ib_paud_peserta_jaminan',array('class'=>'span3','maxlength'=>200)); ?>
</fieldset>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
