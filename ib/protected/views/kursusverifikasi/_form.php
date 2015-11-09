<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kursusverifikasi-form',
    //    'type'=>'form-inline',
		'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->hiddenField($model,'ib_kursus_id'); ?>
<fieldset>
    <legend><?php echo Kursus::model()->findByPk($model->ib_kursus_id)->ib_kursus_peserta_name; ?></legend>
<div class="row-fluid">
    <div class="span6">
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_surat'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_surat),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_kuasa'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_kuasa),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_nilek'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_nilek),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_kurikulum'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_kurikulum),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_aktanotaris'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_aktanotaris),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_pengesahankumham'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_pengesahankumham),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_domisili'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_domisili),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_alasan'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_alasan),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
    </div>
    <div class="span6">
    	<div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_biaya'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_biaya),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_jaminan'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_jaminan),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_paspor'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_paspor),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_cv'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_cv),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_foto'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_foto),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_ijazah'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_ijazah),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_sehat'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_sehat),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_pernyataan'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('kursus/viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_pernyataan),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
<?php //echo $form->html5EditorRow($model,'global_reason',array('class'=>'span3', 'rows'=>5, 'height'=>'200', 'options'=>array('color'=>true))); ?>
    <div class="span6">
    <?php echo $form->ckEditorRow($model, 'global_reason', array('options'=>array('fullpage'=>'js:true', 'width'=>'640', 'resize_maxWidth'=>'640','resize_minWidth'=>'320')));?>
    </div>
    </div>
</fieldset>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
$(document).ready(function() {
	
// Support for AJAX loaded modal window.
// Focuses on first input textbox after it loads the window.
$('[data-toggle="modal"]').click(function(e) {
	e.preventDefault();
	var url = $(this).attr('href');
	if (url.indexOf('#') == 0) {
		$(url).modal('open');
	} else {
		$.get(url, function(data) {
			$('<div class="modal hide fade">' + data + '</div>').modal();
		}).success(function() { $('input:text:visible:first').focus(); });
	}
});
	
});

</script>