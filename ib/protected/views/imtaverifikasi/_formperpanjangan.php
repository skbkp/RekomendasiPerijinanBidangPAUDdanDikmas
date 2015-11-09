<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'imtaverifikasi-form',
    //    'type'=>'form-inline',
		'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->hiddenField($model,'ib_imta_id'); ?>
<fieldset>
    <legend><?php echo Imta::model()->findByPk($model->ib_imta_id)->ib_imta_peserta_name; ?></legend>


<div class="row-fluid">
    <div class="span6">
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_surat'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_surat),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_kuasa'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_kuasa),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_nilek'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_nilek),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_kurikulum'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_kurikulum),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_aktanotaris'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_aktanotaris),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_pengesahankumham'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_pengesahankumham),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_domisili'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_domisili),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_skrptka'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_skrptka),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_ijinoperasional'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_ijinoperasional),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_rekapsiswadanptk'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_rekapsiswadanptk),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_rekomendasidinas'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_rekomendasidinas),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_alasan'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_alasan),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
    </div>
    
    <div class="span6">

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_jaminan'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_jaminan),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_paspor'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_paspor),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_cv'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_cv),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_foto'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_foto),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_ijazah'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_ijazah),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_sehat'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_sehat),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_pernyataan'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_pernyataan),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_stm'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_stm),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_kitas'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_kitas),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_rekom'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_rekom),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_imtakemnaker'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_imtakemnaker),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_suratkontakkerja'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_suratkontakkerja),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_hasilpenilaianijazah'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_hasilpenilaianijazah),
                    array('data-toggle'=>"modal")); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span10"> <?php echo $form->toggleButtonRow($model,'v_laporankegiatanproses'); ?></div> 
            <div class="span2"><?php
             echo CHtml::link('<i class="icon-eye-open"></i>view', 
                    array('imta/viewfile', 'id'=>$model->ib_imta_id, 'fid'=>$modelImtaupload->file_laporankegiatanproses),
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