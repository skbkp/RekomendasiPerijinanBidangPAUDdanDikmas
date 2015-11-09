<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'paudverifikasi-form',
        'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->hiddenField($model,'ib_paud_id'); ?>
<fieldset>
    <legend><?php echo Paud::model()->findByPk($model->ib_paud_id)->ib_paud_peserta_name; ?></legend>
<div class="row-fluid">    
    <div class="span6">
    	<div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_surat'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('paud/viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_surat),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_kuasa'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('paud/viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_kuasa),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_biaya'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('paud/viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_biaya),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_paspor_anak'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('paud/viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_paspor_anak),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_aktalahir'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('paud/viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_aktalahir),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
    </div>
    <div class="span6">
    	<div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_paspor_ortu'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('paud/viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_paspor_ortu),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_kk'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('paud/viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_kk),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_nikah'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('paud/viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_nikah),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_jaminan'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('paud/viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_jaminan),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_domisili'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('paud/viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_domisili),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
    </div>
	<?php echo $form->html5EditorRow($model,'global_reason', 
		array('class'=>'span3', 'rows'=>5, 'height'=>'200', 'options'=>array('color'=>true))); ?>
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