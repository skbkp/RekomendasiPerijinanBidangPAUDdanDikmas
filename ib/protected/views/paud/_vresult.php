<div class="span8">
    <fieldset>
        <legend>Status Permohonan (Nomor Pendaftaran : <b>P - <?php echo $model->ib_paud_id;?></b>)</legend>
        <p><span class="label label-important"><?php echo Status::model()->findByPk($model->ib_paud_status)->status;?></span></p>
        <p><?php echo Status::model()->findByPk($model->ib_paud_status)->desc;?></p>
        <?php
            if($model->ib_paud_status==107){
                echo "<p>Berikut ini adalah status verifikasi fisik dokumen atas nama <strong>".$model->ib_paud_peserta_name."</strong>:</p>";
                //$idverifikasi=Paudupload::model()->findByPK($model->ib_paud_id)->upload_id;
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
                                'value'=>$data->v_biaya == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Kurikulum',
                                'type'=>'raw',
                                'value'=>$data->v_paspor_anak == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Akta Notaris',
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
                                'label'=>'Keterangan Biaya',
                                'type'=>'raw',
                                'value'=>$data->v_paspor_ortu == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Keterangan Jaminan',
                                'type'=>'raw',
                                'value'=>$data->v_kk == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Paspor',
                                'type'=>'raw',
                                'value'=>$data->v_nikah == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Riwayat Hidup',
                                'type'=>'raw',
                                'value'=>$data->v_jaminan == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                            array(
                                'label'=>'Foto',
                                'type'=>'raw',
                                'value'=>$data->v_domisili == 1 ? '<span class="label label-success"><i class="icon-ok icon-white"></i> OK</span>':'<span class="label label-important"><i class="icon-remove icon-white"></i> TIDAK</span>',
                            ),
                        ),
                ));
            }
        ?>
    </fieldset>
</div>

<div class="span8 alert alert-success">
<fieldset>
    <legend>Data Pribadi  <?php 
		if(!in_array($model->ib_paud_status,array(67,47))) {
			echo CHtml::link('Ubah Data', 
				array('paud/update','id'=>$_GET['id'] )) ;
		}
		?></legend>
        <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                'data'=>$model,
                'type'=>'condensed striped',
                'attributes'=>array(
                        'ib_paud_peserta_name',
                        'paudjeniskelamin.ib_jeniskelamin',
                        'ib_paud_peserta_tmplahir',
                        'ib_paud_peserta_tgllahir',
                        'paudpesertanegara.country',
                        'ib_paud_peserta_alamat_ln',
                        'ib_paud_peserta_alamat_id',
                        'paudpesertapropinsi.psr_prop_name',
                        'paudpesertakabkot.psr_kabkot_name',
                ),
        )); ?>
</fieldset>
</div>

<div class="span5 alert alert-success">
<fieldset>
    <legend>Identitas Ayah</legend>
        <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                'data'=>$model,
                'type'=>'condensed striped',
                'attributes'=>array(
                        'ib_paud_peserta_ortu_name',
                        'ib_paud_ayah_pasport',
                        'ib_paud_ayah_pasport_start',
                        'ib_paud_ayah_pasport_exp',
                        'ib_paud_ayah_ktp',
                        'ib_paud_ayah_ktp_start',
                        'ib_paud_ayah_ktp_exp',
                ),
        )); ?>
</fieldset>
</div>

<div class="span5 alert alert-success">
<fieldset>
    <legend>Identitas Ibu</legend>
        <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                'data'=>$model,
                'type'=>'condensed striped',
                'attributes'=>array(
                        'ib_paud_peserta_ortu_name_ibu',
                        'ib_paud_ibu_pasport',
                        'ib_paud_ibu_pasport_start',
                        'ib_paud_ibu_pasport_exp',
                        'ib_paud_ibu_ktp',
                        'ib_paud_ibu_ktp_start',
                        'ib_paud_ibu_ktp_exp',
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
                            'ib_paud_lbg_name',
                            'ib_paud_lbg_alamat',
                            'paudlbgpropinsi.psr_prop_name',
                            'paudlbgkabkot.psr_kabkot_name',
                            'ib_paud_lbg_kodepos',
                            'ib_paud_lbg_tlp',
                            'ib_paud_lbg_fax',
                            'ib_paud_lbg_ijin_oleh',
                            'ib_paud_lbg_ijin_tgl',
                            'ib_paud_lbg_ijin_start',
                            'ib_paud_lbg_ijin_exp',
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
                            'ib_paud_peserta_surat',
                            'ib_paud_peserta_ortu_name',
                            'ib_paud_peserta_ortu_job',
                            'ib_paud_peserta_kk',
                            'ib_paud_peserta_tgjwb',
                            'ib_paud_peserta_jaminan',
                    ),
            )); ?>
    </fieldset>
</div>
<?php 
	if(!$modelPAUDupload) {
		?>
        
        <div class="span8 alert alert-success">
    	<fieldset>
        <legend>Data Gambar <?php
			
				echo CHtml::link('Upload data Gambar', 
					array('paudupload/create'));
			?></legend>
            </fieldset></div>
            
        <?php
		
	}else{
?>
<div class="span8 alert alert-success">
    <fieldset>
        <legend>Data Gambar   <i class="icon-pencil"></i><?php 
			if(!in_array($model->ib_paud_status,array(67,47))) {
				echo CHtml::link('Ubah Data Gambar', 
					array('paudupload/update','id'=>$modelPAUDupload->upload_id ));
			} ?></legend>
            <?php $this->widget('bootstrap.widgets.TbDetailView',array(
				'data'=>$modelPAUDupload,
				'attributes'=>array(
//					'upload_id',
//					'paud_id',
//					'user_id',
					'upload_at',
					'update_at',
					
					array(
						'label'=>'Surat Permohonan',
						'type'=>'raw',
						'value'=>CHtml::link($modelPAUDupload->file_surat, 
						array('viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_surat),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Surat Kuasa',
						'type'=>'raw',
						'value'=>CHtml::link($modelPAUDupload->file_kuasa, 
						array('viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_kuasa),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Keterangan Biaya',
						'type'=>'raw',
						'value'=>CHtml::link($modelPAUDupload->file_biaya, 
						array('viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_biaya),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Paspor Anak',
						'type'=>'raw',
						'value'=>CHtml::link($modelPAUDupload->file_paspor_anak, 
						array('viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_paspor_anak),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Akta Lahir Anak',
						'type'=>'raw',
						'value'=>CHtml::link($modelPAUDupload->file_aktalahir, 
						array('viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_aktalahir),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Paspor Orang Tua',
						'type'=>'raw',
						'value'=>CHtml::link($modelPAUDupload->file_paspor_ortu, 
						array('viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_paspor_ortu),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Kartu Keluarga',
						'type'=>'raw',
						'value'=>CHtml::link($modelPAUDupload->file_kk, 
						array('viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_kk),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Surat Nikah Orang Tua',
						'type'=>'raw',
						'value'=>CHtml::link($modelPAUDupload->file_nikah, 
						array('viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_nikah),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Surat Jaminan',
						'type'=>'raw',
						'value'=>CHtml::link($modelPAUDupload->file_jaminan, 
						array('viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_jaminan),
						array('data-toggle'=>"modal")),
					),
					array(
						'label'=>'Keterangan Domisili',
						'type'=>'raw',
						'value'=>CHtml::link($modelPAUDupload->file_domisili, 
						array('viewfile', 'id'=>$model->ib_paud_id, 'fid'=>$modelPAUDupload->file_domisili),
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