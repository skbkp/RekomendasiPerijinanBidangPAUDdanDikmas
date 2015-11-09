<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kursusupload-form',
	'type'=>'horizontal',
	'htmlOptions'=>array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>

<fieldset>
<legend>Nama Pemohon</legend>
        <?php 
            $pilihquery="SELECT * FROM ib_kursus WHERE user_id=".Yii::app()->user->id." AND ib_kursus_id NOT IN (SELECT kursus_id FROM ib_kursus_upload)";
            $pilih=Yii::app()->db->createCommand($pilihquery)->queryAll();
        ?>
	<?php 
                $cek=$model->isNewRecord ? 1:0;
                switch ($cek){
                    case 1:
                        echo $form->dropDownListRow($model,'kursus_id',CHtml::listData($pilih,'ib_kursus_id','ib_kursus_peserta_name'),array('empty'=>'- Nama Pemohon -','class'=>'span2'));
                        echo "<div class='alert alert-success'>Pilihlah nama pemohon dengan benar sesuai dokumen yang akan di-<i>upload</i>, jika nama pemohon tidak terdapat di menu pilihan ini artinya dokumen pemohon sudah di-<i>upload</i> atau pemohon belum mendaftar melalui <a href='".Yii::app()->createUrl('kursus/create')."'><i class='icon-hand-right'></i> halaman pendaftaran rekomendasi izin belajar Kursus</a></div>";
                        break;
                    
                    case 0:
                        echo $form->dropDownListRow($model,'kursus_id',CHtml::listData(Kursus::model()->findAll(array('condition'=>'user_id='.Yii::app()->user->id)),'ib_kursus_id','ib_kursus_peserta_name'),array('empty'=>'- Nama Pemohon -','class'=>'span2','disabled'=>true));
                        echo "<div class='alert alert-success'>Silahkan upload kembali dokumen yang bermasalah (berlabel 'TIDAK') dengan dokumen yang benar</div>";
                        break;
                }
            ?>
</fieldset>
<fieldset>
<legend>Kelengkapan Bagi Satuan Penyelenggara Pendidikan Kursus</legend>	
	<?php echo $form->fileFieldRow($model,'file_surat', array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_kuasa',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_nilek',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_kurikulum',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_aktanotaris',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_pengesahankumham',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_domisili',array('class'=>'span5','maxlength'=>200)); ?>
</fieldset>

<fieldset>
<legend>Kelengkapan Dokumen WNA</legend>
	<?php echo $form->fileFieldRow($model,'file_alasan',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_biaya',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_jaminan',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_paspor',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_cv',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_foto',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_ijazah',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_sehat',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_pernyataan',array('class'=>'span5','maxlength'=>200)); ?>
</fieldset>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>