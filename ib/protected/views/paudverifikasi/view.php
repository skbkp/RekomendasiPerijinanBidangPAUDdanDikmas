<?php
$this->breadcrumbs=array(
	'Daftar IB-PAUD'=>array('/paud/'),
	Paud::model()->findByPk($model->ib_paud_id)->ib_paud_peserta_name=>array('view','id'=>$model->nilai_paud_id),
);
?>
<?php
if(Yii::app()->user->id!=1){
            throw new CHttpException(404,'You have no authorization to access this page');
        }
?>


<h1>Hasil Verifikasi</h1>
<fieldset>
    <legend><?php echo Paud::model()->findByPk($model->ib_paud_id)->ib_paud_peserta_name; ?></legend>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
        'type'=>'condensed striped',
        'htmlOptions'=>array('class'=>'span4'),
	'attributes'=>array(
                array(
                        'label'=>'Surat Permohonan',
                        'type'=>'raw',
                        'value'=>$model->v_surat == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
                array(
                        'label'=>'Surat Kuasa',
                        'type'=>'raw',
                        'value'=>$model->v_kuasa == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
                array(
                        'label'=>'Keterangan Biaya',
                        'type'=>'raw',
                        'value'=>$model->v_biaya == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
                array(
                        'label'=>'Paspor Anak',
                        'type'=>'raw',
                        'value'=>$model->v_paspor_anak == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
                array(
                        'label'=>'Akta Lahir Anak',
                        'type'=>'raw',
                        'value'=>$model->v_aktalahir == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
	),
)); ?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
        'type'=>'condensed striped',
        'htmlOptions'=>array('class'=>'span4'),
	'attributes'=>array(
                array(
                        'label'=>'Paspor Orang Tua',
                        'type'=>'raw',
                        'value'=>$model->v_paspor_ortu == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
		array(
                        'label'=>'Kartu Keluarga',
                        'type'=>'raw',
                        'value'=>$model->v_kk == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
                array(
                        'label'=>'Akta Nikah',
                        'type'=>'raw',
                        'value'=>$model->v_nikah == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
		array(
                        'label'=>'Surat Jaminan',
                        'type'=>'raw',
                        'value'=>$model->v_jaminan == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
		array(
                        'label'=>'Surat Keterangan Domisili',
                        'type'=>'raw',
                        'value'=>$model->v_domisili == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
	),
)); ?>
</fieldset>