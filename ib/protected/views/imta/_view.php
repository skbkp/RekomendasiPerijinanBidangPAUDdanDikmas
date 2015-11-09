<div class="span9">
<?php



if(Yii::app()->user->id==1){

$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'daftar_ib_imta',
	'type'=>'striped condensed bordered',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'template'=>"{items}",
	'columns'=>array(
       array(
			'name'=>'id',
			'value'=>'$this->grid->dataProvider->getPagination()->getOffset()+$row+1',
			'header'=>'No',
			'filter'=>false,
		),
			array(
				'class'=>'CLinkColumn',
				'header'=>'Nama Lengkap',
				'labelExpression'=>'$data->ib_imta_peserta_name',
				'urlExpression'=>'Yii::app()->createUrl("imta/".$data->ib_imta_id)',
			),
			'ib_imta_nilek',
			'imtajeniskelamin.ib_jeniskelamin_huruf',
			'imtapesertanegara.country',
			'ib_imta_lbg_name',
			'imtalbgkabkot.psr_kabkot_name',
			'imtajeniskursus.jeniskursus',
			array(
				'name'=>'status',
				'header'=>'Status',
				'type'=>'raw',
				'value'=>'$data->ib_imta_status==27 ? $data->imtajenisimta->jenisimta_id==2 ? CHtml::link($data->imtastatus->status,array("imtaverifikasi/updateperpanjangan","id"=>$data->imtaverifikasi->nilai_imta_id)):CHtml::link($data->imtastatus->status,array("imtaverifikasi/update","id"=>$data->imtaverifikasi->nilai_imta_id)):$data->imtastatus->status',
			),
		    array(
				'name'=>'ib_imta_jatuh_tempo',
				'header'=>'Tanggal Jatuh Tempo',
				'type'=>'raw',
				'value'=>'$data->ib_imta_jatuh_tempo < $data->ib_imta_sekarang && $data->status_perpanjangan=="N" && $data->ib_imta_status==67? 
				 CHtml::link($data->ib_imta_jatuh_tempo,array("imta/perpanjangan","id"=>$data->ib_imta_id)):
				 $data->ib_imta_jatuh_tempo',
				),

	),
));    
}else{
    $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'daftar_ib_imta',
	'type'=>'striped condensed bordered',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'template'=>"{items}",
	'columns'=>array(
		array(
			'name'=>'id',
			'value'=>'$this->grid->dataProvider->getPagination()->getOffset()+$row+1',
			'header'=>'No',
			'filter'=>false,
		),
			array(
				'class'=>'CLinkColumn',
				'header'=>'Nama Lengkap',
				'labelExpression'=>'$data->ib_imta_peserta_name',
				'urlExpression'=>'Yii::app()->createUrl("imta/".$data->ib_imta_id)',
			),
			'ib_imta_nilek',
			'imtajeniskelamin.ib_jeniskelamin_huruf',
			'imtapesertanegara.country',
			'ib_imta_lbg_name',
			'imtalbgkabkot.psr_kabkot_name',
			'imtajeniskursus.jeniskursus',
			array(
				'name'=>'status',
				'header'=>'Status',
				'type'=>'raw',
				'value'=>'$data->ib_imta_status==107? CHtml::link($data->imtastatus->status,array("imtaupload/update","id"=>$data->imtaupload->upload_id)):($data->imtastatus->status_id==7 ? $data->imtajenisimta->jenisimta_id==2 ? CHtml::link($data->imtastatus->status,array("imtaupload/perpanjangan")):CHtml::link($data->imtastatus->status,array("imtaupload/create")):$data->imtastatus->status)',
			),
		    array(
				'name'=>'ib_imta_jatuh_tempo',
				'header'=>'Tanggal Jatuh Tempo',
				'type'=>'raw',
				'value'=>'$data->ib_imta_jatuh_tempo < $data->ib_imta_sekarang && $data->status_perpanjangan=="N" && $data->ib_imta_status==67? 
				 CHtml::link($data->ib_imta_jatuh_tempo,array("imta/perpanjangan","id"=>$data->ib_imta_id)):
				 $data->ib_imta_jatuh_tempo',
				),
	),
));
}
?>
</div>