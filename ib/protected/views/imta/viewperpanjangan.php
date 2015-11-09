<?php
$this->breadcrumbs=array(
	'Daftar REK-IMTA'=>array('index'),
	$model->ib_imta_peserta_name,
);
?>

<h1>Data Detail Pemohon <small>(<?php echo $model->ib_imta_peserta_name;?>)</small></h1>

<?php
    if(Yii::app()->user->id!=1){
	if(!(Yii::app()->user->id==$model->user_id))
	throw new CHttpException(404,'You have no authorization to access this page');
    }
?>
<div class="span8">
    <fieldset>
        <legend>Status Permohonan (Nomor Pendaftaran : <b>K - <?php echo $model->ib_imta_id;?></b>)</legend>
        <p><span class="label label-important"><?php echo Status::model()->findByPk($model->ib_imta_status)->status;?></span></p>
        <p><?php echo Status::model()->findByPk($model->ib_imta_status)->desc;?></p>
        <?php
            if($model->ib_imta_status==107){
                echo "<p>Berikut ini adalah status verifikasi fisik dokumen atas nama <strong>".$model->ib_imta_peserta_name."</strong>:</p>";
     
                $data=Imtaverifikasi::model()->findByAttributes(array('ib_imta_id'=>$model->ib_imta_id));
                
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
                                'label'=>'Keterangan SKRPTKA',
                                'type'=>'raw',
                                'value'=>$data->v_skrptka == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Izin Operasional',
                                'type'=>'raw',
                                'value'=>$data->v_ijinoperasional == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Rekap Siswa dan PTK',
                                'type'=>'raw',
                                'value'=>$data->v_rekapsiswadanptk == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Rekomendasi Dinas',
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
                                'label'=>'Keterangan Jaminan',
                                'type'=>'raw',
                                'value'=>$data->v_jaminan == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
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
            }
        ?>
    </fieldset>
</div>
<div class="span8 alert alert-success">

<fieldset>
    <legend>Data Pribadi <?php 
		if(!in_array($model->ib_imta_status,array(67,47))) {
			echo CHtml::link('Ubah Data', 
				array('imta/update','id'=>$_GET['id'] )) ;
		}
						
						?></legend>
        <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                'data'=>$model,
                'type'=>'condensed striped',
                'attributes'=>array(
                        'ib_imta_peserta_name',
                        'imtajeniskelamin.ib_jeniskelamin',
                        'imtapesertanegara.country',
                        'ib_imta_peserta_pasport',
                        'ib_imta_peserta_pasport_start',
                        'ib_imta_peserta_pasport_exp',
                        'ib_imta_peserta_alamat_ln',
                        'ib_imta_peserta_alamat_id',
                        'imtapesertapropinsi.psr_prop_name',
                        'imtapesertakabkot.psr_kabkot_name',
                        'imtajeniskursus.jeniskursus', 
                ),
        )); ?>
</fieldset>
</div>

<div class="span8 alert alert-success">
    <fieldset>
        <legend>Data Lembaga Tujuan</legend>
            <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                    'data'=>$model,
                    'attributes'=>array(
                            'ib_imta_lbg_name',
                            'ib_imta_lbg_alamat',
                            'imtalbgpropinsi.psr_prop_name',
                            'imtalbgkabkot.psr_kabkot_name',
                            'ib_imta_lbg_kodepos',
                            'ib_imta_lbg_tlp',
                            'ib_imta_lbg_fax',
                            'imtajenislembaga.jenislembaga',
                            'ib_imta_lbg_ijin_oleh',
                            'ib_imta_lbg_ijin_oleh_name',
                            'ib_imta_lbg_ijin_no',
                            'ib_imta_lbg_ijin_tgl',
                            'ib_imta_lbg_ijin_start',
                            'ib_imta_lbg_ijin_exp',
                    ),
            )); ?>
    </fieldset>
</div>

<div class="span8 alert alert-success">
    <fieldset>
        <legend>Keterangan Tambahan</legend>
            <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                    'data'=>$model,
                    'attributes'=>array(
                            'ib_imta_peserta_nosurat',
                            'ib_imta_peserta_tglsurat',
                            'imtajeniskursus.jeniskursus',
                            'imtajenisimta.jenisimta',
                            'ib_imta_peserta_nosurat_rptka',
                            'ib_imta_peserta_tglsurat_rptka',
                            'ib_imta_jumlah_rptka',
                            'imtajenisjabatanptka.jenisjabatanrptka',
                            'ib_imta_kadaluarsa_rptka',

                    ),
            )); ?>
    </fieldset>
</div>


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