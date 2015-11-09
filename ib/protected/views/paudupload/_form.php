<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'paudupload-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype' => 'multipart/form-data'),
)); ?>
	<?php echo $form->errorSummary($model); ?>

<fieldset>
<legend>Nama Pemohon</legend>
        <?php
            $pilihquery="SELECT * FROM ib_paud WHERE user_id=".Yii::app()->user->id." AND ib_paud_id NOT IN (SELECT paud_id FROM ib_paud_upload)";
            $pilih=Yii::app()->db->createCommand($pilihquery)->queryAll();
        ?>
	<?php 
                $cek=$model->isNewRecord ? 1:0;
                switch ($cek){
                    case 1:
                        echo $form->dropDownListRow($model,'paud_id',CHtml::listData($pilih,'ib_paud_id','ib_paud_peserta_name'),array('empty'=>'- Nama Pemohon -','class'=>'span2'));
                        echo "<div class='alert alert-success'>Pilihlah nama pemohon dengan benar sesuai dokumen yang akan di-<i>upload</i>, jika nama pemohon tidak terdapat di menu pilihan ini artinya dokumen pemohon sudah di-<i>upload</i> atau pemohon belum mendaftar melalui <a href='".Yii::app()->createUrl('paud/create')."'><i class='icon-hand-right'></i> halaman pendaftaran rekomendasi izin belajar PAUD</a></div>";
                        break;
                    
                    case 0:
                        echo $form->dropDownListRow($model,'paud_id',CHtml::listData(Paud::model()->findAll(array('condition'=>'user_id='.Yii::app()->user->id)),'ib_paud_id','ib_paud_peserta_name'),array('empty'=>'- Nama Pemohon -','class'=>'span2','disabled'=>true));
                        echo "<div class='alert alert-success'>Silahkan upload kembali dokumen yang bermasalah (berlabel 'TIDAK') dengan dokumen yang benar</div>";
                        break;
                }
        ?>
</fieldset>
<fieldset>
<legend>Kelengkapan Bagi Satuan Penyelenggara Pendidikan PAUD</legend>
	<?php echo $form->fileFieldRow($model,'file_surat',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_kuasa',array('class'=>'span5','maxlength'=>200)); ?>
</fieldset>
<fieldset>
<legend>Kelengkapan Dokumen Peserta Didik PAUD</legend>
	<?php echo $form->fileFieldRow($model,'file_biaya',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_paspor_anak',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_aktalahir',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_paspor_ortu',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_kk',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_nikah',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_jaminan',array('class'=>'span5','maxlength'=>200)); ?>
	<?php echo $form->fileFieldRow($model,'file_domisili',array('class'=>'span5','maxlength'=>200)); ?>
</fieldset>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
