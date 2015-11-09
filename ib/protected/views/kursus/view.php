<?php
$this->breadcrumbs=array(
	'Daftar IB-Kursus'=>array('index'),
	$model->ib_kursus_peserta_name,
);
?>

<h1>Data Detail Pemohon <small>(<?php echo $model->ib_kursus_peserta_name;?>)</small></h1>

<?php
    if(Yii::app()->user->id!=1){
	if(!(Yii::app()->user->id==$model->user_id))
	throw new CHttpException(404,'You have no authorization to access this page');
    }
?>
<div class="span8">
    <fieldset>
        <legend>Status Permohonan (Nomor Pendaftaran : <b>K - <?php echo $model->ib_kursus_id;?></b>)</legend>
        <p><span class="label label-important"><?php echo Status::model()->findByPk($model->ib_kursus_status)->status;?></span></p>
        <p><?php echo Status::model()->findByPk($model->ib_kursus_status)->desc;?></p>
        <?php
            if($model->ib_kursus_status==107){
                echo "<p>Berikut ini adalah status verifikasi fisik dokumen atas nama <strong>".$model->ib_kursus_peserta_name."</strong>:</p>";
                //$idverifikasi=Kursusupload::model()->findByPK($model->ib_kursus_id)->upload_id;
                $data=Kursusverifikasi::model()->findByAttributes(array('ib_kursus_id'=>$model->ib_kursus_id));
                
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
                                'label'=>'Keterangan Biaya',
                                'type'=>'raw',
                                'value'=>$data->v_biaya == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
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
		if(!in_array($model->ib_kursus_status,array(67,47))) {
			echo CHtml::link('Ubah Data', 
				array('kursus/update','id'=>$_GET['id'] )) ;
		}
						
						?></legend>
        <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                'data'=>$model,
                'type'=>'condensed striped',
                'attributes'=>array(
                        'ib_kursus_peserta_name',
                        'kursusjeniskelamin.ib_jeniskelamin',
                        'kursuspesertanegara.country',
                        'ib_kursus_peserta_pasport',
                        'ib_kursus_peserta_pasport_start',
                        'ib_kursus_peserta_pasport_exp',
                        'ib_kursus_peserta_alamat_ln',
                        'ib_kursus_peserta_alamat_id',
                        'kursuspesertapropinsi.psr_prop_name',
                        'kursuspesertakabkot.psr_kabkot_name',
                        'kursusjeniskursus.jeniskursus',
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
                            'ib_kursus_lbg_name',
                            'ib_kursus_lbg_alamat',
                            'kursuslbgpropinsi.psr_prop_name',
                            'kursuslbgkabkot.psr_kabkot_name',
                            'ib_kursus_lbg_kodepos',
                            'ib_kursus_lbg_tlp',
                            'ib_kursus_lbg_fax',
                            'ib_kursus_lbg_ijin_oleh',
                            'ib_kursus_lbg_ijin_tgl',
                            'ib_kursus_lbg_ijin_start',
                            'ib_kursus_lbg_ijin_exp',
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
                            'ib_kursus_peserta_biaya',
                            'ib_kursus_peserta_alasan',
                            'ib_kursus_peserta_jaminan',
                            'ib_kursus_peserta_pendidikan',
                            'ib_kursus_peserta_nosurat',
                            'ib_kursus_peserta_tglsurat',
                    ),
            )); ?>
    </fieldset>
</div>
<?php 
	if(!$modelKursusupload) {
		?>
        
        <div class="span8 alert alert-success">
    	<fieldset>
        <legend>Data Gambar <?php
			
				echo CHtml::link('Upload data Gambar', 
					array('kursusupload/create'));
			?></legend>
            </fieldset></div>
            
        <?php
		
	}else{
?>
<div class="span8 alert alert-success">
    <fieldset>
        <legend>Data Gambar <?php
			if(!in_array($model->ib_kursus_status,array(67,47))) {
				echo CHtml::link('Ubah Data Gambar', 
					array('kursusupload/update','id'=>$modelKursusupload->upload_id ));
			} ?></legend>
            <?php 

			$this->widget('bootstrap.widgets.TbDetailView',array(
				'data'=>$modelKursusupload,
				'attributes'=>array(
					
					'upload_at',
					'update_at',
					array(
						'label'=>'Surat Permohonan',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_surat, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_surat),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Surat Kuasa',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_kuasa, 
						array('viewfile','id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_kuasa),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Nilek',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_nilek, 
						array('viewfile','id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_nilek),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Kurikulum',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_kurikulum, 
						array('viewfile','id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_kurikulum),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Akta Notaris',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_aktanotaris, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_aktanotaris),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Pengesahan Kumham', 
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_pengesahankumham, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 
							'fid'=>$modelKursusupload->file_pengesahankumham),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Keterangan Domisili',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_domisili, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_domisili),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Alasan Belajar',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_alasan, 
						array('viewfile','filename'=>$modelKursusupload->file_alasan),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Keterangan Biaya',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_biaya, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_biaya),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Surat Jaminan',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_jaminan, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_jaminan),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Paspor',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_paspor, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_paspor),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Riwayat Hidup',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_cv, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_cv),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Foto',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_foto, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_foto),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Ijazah',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_ijazah, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_ijazah),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Keterangan Sehat',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_sehat, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_sehat),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Surat Pernyataan',
						'type'=>'raw',
						'value'=>CHtml::link($modelKursusupload->file_pernyataan, 
						array('viewfile', 'id'=>$model->ib_kursus_id, 'fid'=>$modelKursusupload->file_pernyataan),
						array('data-toggle'=>"modal")),
					),
                	
				),
			)); ?>
    </fieldset>
</div>
<?php } ?>

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