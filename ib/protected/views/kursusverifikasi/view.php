<?php
$this->breadcrumbs=array(
	'Daftar IB-Kursus'=>array('/kursus/'),
	Kursus::model()->findByPk($model->ib_kursus_id)->ib_kursus_peserta_name=>array('view','id'=>$model->nilai_kursus_id),
);
?>
<?php
if(Yii::app()->user->id!=1){
            throw new CHttpException(404,'You have no authorization to access this page');
        }
?>
<h2>Hasil Verifikasi</h2>
<fieldset>
    <legend><?php echo Kursus::model()->findByPk($model->ib_kursus_id)->ib_kursus_peserta_name; ?></legend>

<?php   
        $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
        'type'=>'condensed striped',
        'htmlOptions'=>array('class'=>'span4'),
	'attributes'=>array(
                 array(
                        'label'=>'<a href="#">Surat Permohonan</a>',
                        'type'=>'raw',
                        'value'=>$model->v_surat == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                    ),
		array(
                    'label'=>'Surat Kuasa',
                    'type'=>'raw',
                    'value'=>$model->v_kuasa == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                ),
                array(
                    'label'=>'Nilek',
                    'type'=>'raw',
                    'value'=>$model->v_nilek == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                ),
                array(
                    'label'=>'Kurikulum',
                    'type'=>'raw',
                    'value'=>$model->v_kurikulum == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                ),
                array(
                    'label'=>'Akta Notaris',
                    'type'=>'raw',
                    'value'=>$model->v_aktanotaris == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                ),
                array(
                    'label'=>'Pengesahan Kumham',
                    'type'=>'raw',
                    'value'=>$model->v_pengesahankumham == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                ),
                array(
                    'label'=>'Keterangan Domisili',
                    'type'=>'raw',
                    'value'=>$model->v_domisili == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                ),
                array(
                    'label'=>'Alasan Kursus',
                    'type'=>'raw',
                    'value'=>$model->v_alasan == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                ),
	),
    )); 
        $this->widget('bootstrap.widgets.TbDetailView',array(
                    'data'=>$model,
                    'type'=>'condensed striped',
                    'htmlOptions'=>array('class'=>'span4'),
                    'attributes'=>array(
                            array(
                                'label'=>'Keterangan Biaya',
                                'type'=>'raw',
                                'value'=>$model->v_biaya == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Jaminan',
                                'type'=>'raw',
                                'value'=>$model->v_jaminan == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Paspor',
                                'type'=>'raw',
                                'value'=>$model->v_paspor == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Riwayat Hidup',
                                'type'=>'raw',
                                'value'=>$model->v_cv == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Foto',
                                'type'=>'raw',
                                'value'=>$model->v_foto == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Ijazah',
                                'type'=>'raw',
                                'value'=>$model->v_ijazah == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Sehat',
                                'type'=>'raw',
                                'value'=>$model->v_sehat == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Pernyataan Propaganda',
                                'type'=>'raw',
                                'value'=>$model->v_pernyataan == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            
                        ),
                ));
?>
</fieldset>