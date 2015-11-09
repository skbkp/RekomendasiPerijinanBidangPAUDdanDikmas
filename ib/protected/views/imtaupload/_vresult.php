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
                                'label'=>'Nilek',
                                'type'=>'raw',
                                'value'=>$data->v_nilek == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Kurikulum',
                                'type'=>'raw',
                                'value'=>$data->v_kurikulum == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Akta Notaris',
                                'type'=>'raw',
                                'value'=>$data->v_aktanotaris == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Pengesahan Kumham',
                                'type'=>'raw',
                                'value'=>$data->v_pengesahankumham == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Domisili',
                                'type'=>'raw',
                                'value'=>$data->v_domisili == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'SK RPTKA',
                                'type'=>'raw',
                                'value'=>$data->v_skrptka == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Izin Operasional',
                                'type'=>'raw',
                                'value'=>$data->v_ijinoperasional == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Berkas rekap siswa & PTK',
                                'type'=>'raw',
                                'value'=>$data->v_rekapsiswadanptk == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Rekomendasi Dinas',
                                'type'=>'raw',
                                'value'=>$data->v_rekomendasidinas == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Alasan Kursus',
                                'type'=>'raw',
                                'value'=>$data->v_alasan == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            
                        ),
                ));
$this->widget('bootstrap.widgets.TbDetailView',array(
                    'data'=>$data,
                    'type'=>'condensed striped',
                    'htmlOptions'=>array('class'=>'span3'),
                    'attributes'=>array(
                            array(
                                'label'=>'Paspor',
                                'type'=>'raw',
                                'value'=>$data->v_paspor == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Riwayat Hidup',
                                'type'=>'raw',
                                'value'=>$data->v_cv == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Foto',
                                'type'=>'raw',
                                'value'=>$data->v_foto == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Ijazah',
                                'type'=>'raw',
                                'value'=>$data->v_ijazah == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Sehat',
                                'type'=>'raw',
                                'value'=>$data->v_sehat == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Pernyataan Propaganda',
                                'type'=>'raw',
                                'value'=>$data->v_pernyataan == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            
                        ),
                ));
?>
</fieldset>