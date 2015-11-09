<fieldset>
    <legend>Hasil Verifikasi Sebelumnya</legend>
<?php
$this->widget('bootstrap.widgets.TbDetailView',array(
                    'data'=>$data,
                    'type'=>'condensed striped',
                    'htmlOptions'=>array('class'=>'span3'),
                    'attributes'=>array(
                            array(
                                'label'=>'Surat Permohonan',
                                'type'=>'raw',
                                'value'=>$data->v_surat == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Surat Kuasa',
                                'type'=>'raw',
                                'value'=>$data->v_kuasa == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Biaya',
                                'type'=>'raw',
                                'value'=>$data->v_biaya == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Paspor Anak',
                                'type'=>'raw',
                                'value'=>$data->v_paspor_anak == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Akta Lahir Anak',
                                'type'=>'raw',
                                'value'=>$data->v_aktalahir == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                        ),
                ));
$this->widget('bootstrap.widgets.TbDetailView',array(
                    'data'=>$data,
                    'type'=>'condensed striped',
                    'htmlOptions'=>array('class'=>'span3'),
                    'attributes'=>array(
                            array(
                                'label'=>'Paspor Orang Tua',
                                'type'=>'raw',
                                'value'=>$data->v_paspor_ortu == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Kartu Keluarga',
                                'type'=>'raw',
                                'value'=>$data->v_kk == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Akta Nikah Orang Tua',
                                'type'=>'raw',
                                'value'=>$data->v_nikah == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Jaminan',
                                'type'=>'raw',
                                'value'=>$data->v_jaminan == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Domisili',
                                'type'=>'raw',
                                'value'=>$data->v_domisili == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                        ),
                ));
?>
</fieldset>