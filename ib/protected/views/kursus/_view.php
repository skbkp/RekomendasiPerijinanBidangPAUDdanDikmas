<div class="span9">
<?php

if(Yii::app()->user->id==1){
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'daftar_ib_kursus',
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
				'labelExpression'=>'$data->ib_kursus_peserta_name',
				'urlExpression'=>'Yii::app()->createUrl("kursus/".$data->ib_kursus_id)',
			),
			'ib_kursus_nilek',
			'kursusjeniskelamin.ib_jeniskelamin_huruf',
			'kursuspesertanegara.country',
			'ib_kursus_lbg_name',
			'kursuslbgkabkot.psr_kabkot_name',
			'kursusjeniskursus.jeniskursus',
			array(
				'name'=>'status',
				'header'=>'Status',
				'type'=>'raw',
				'value'=>'$data->ib_kursus_status==27 ? CHtml::link($data->kursusstatus->status,array("kursusverifikasi/update","id"=>$data->kursusverifikasi->nilai_kursus_id)):$data->kursusstatus->status',
			),
            array(
				'name'=>'ib_kursus_jatuh_tempo',
				'header'=>'Tanggal Jatuh Tempo',
				'type'=>'raw',
				'value'=>'$data->ib_kursus_jatuh_tempo < $data->ib_kursus_sekarang && $data->status_perpanjangan=="N" && $data->ib_kursus_status==67? 
				 CHtml::link($data->ib_kursus_jatuh_tempo,array("kursus/perpanjangan","id"=>$data->ib_kursus_id)):
				 $data->ib_kursus_jatuh_tempo',
				),
	),
));    
}else{
    $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'daftar_ib_kursus',
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
				'labelExpression'=>'$data->ib_kursus_peserta_name',
				'urlExpression'=>'Yii::app()->createUrl("kursus/".$data->ib_kursus_id)',
			),
			'ib_kursus_nilek',
			'kursusjeniskelamin.ib_jeniskelamin_huruf',
			'kursuspesertanegara.country',
			'ib_kursus_lbg_name',
			'kursuslbgkabkot.psr_kabkot_name',
			'kursusjeniskursus.jeniskursus',
			array(
				'name'=>'status',
				'header'=>'Status',
				'type'=>'raw',
				'value'=>'$data->ib_kursus_status==107? CHtml::link($data->kursusstatus->status,array("kursusupload/update","id"=>$data->skursusupload->upload_id)):($data->kursusstatus->status_id==7 ? CHtml::link($data->kursusstatus->status,array("kursusupload/create")):$data->kursusstatus->status)',
			),
	        array(
				'name'=>'ib_kursus_jatuh_tempo',
				'header'=>'Tanggal Jatuh Tempo',
				'type'=>'raw',
				'value'=>'$data->ib_kursus_jatuh_tempo < $data->ib_kursus_sekarang && $data->status_perpanjangan=="N" && $data->ib_kursus_status==67? 
				 CHtml::link($data->ib_kursus_jatuh_tempo,array("kursus/perpanjangan","id"=>$data->ib_kursus_id)):
				 $data->ib_kursus_jatuh_tempo',
				),
	),
));
}
?>
</div>