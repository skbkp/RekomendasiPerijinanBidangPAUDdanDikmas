<div class="span9">
 
<?php
if(Yii::app()->user->id==1){
    $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'daftar_ib_paud',
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
                    'labelExpression'=>'$data->ib_paud_peserta_name',
                    'urlExpression'=>'Yii::app()->createUrl("paud/".$data->ib_paud_id)',
                ),
		'ib_paud_nilek',
		'paudjeniskelamin.ib_jeniskelamin_huruf',
		'paudpesertanegara.country',
		'ib_paud_lbg_name',
		'paudlbgkabkot.psr_kabkot_name',
		array(
                    'name'=>'status',
                    'header'=>'Status',
                    'type'=>'raw',
                    'value'=>'$data->ib_paud_status==27 ? CHtml::link($data->paudstatus->status,array("paudverifikasi/update","id"=>$data->paudverifikasi->nilai_paud_id)):$data->paudstatus->status',
                ),
		    array(
				'name'=>'ib_paud_jatuh_tempo',
				'header'=>'Tanggal Jatuh Tempo',
				'type'=>'raw',
				'value'=>'$data->ib_paud_jatuh_tempo < $data->ib_paud_sekarang && $data->status_perpanjangan=="N" && $data->ib_paud_status==67? 
				 CHtml::link($data->ib_paud_jatuh_tempo,array("paud/perpanjangan","id"=>$data->ib_paud_id)):
				 $data->ib_paud_jatuh_tempo',
				),

	),
));
}else{
    $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'daftar_ib_paud',
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
                    'labelExpression'=>'$data->ib_paud_peserta_name',
                    'urlExpression'=>'Yii::app()->createUrl("paud/".$data->ib_paud_id)',
                ),
		'paudjeniskelamin.ib_jeniskelamin_huruf',
		'paudpesertanegara.country',
		'ib_paud_lbg_name',
		'paudlbgkabkot.psr_kabkot_name',
		array(
                    'name'=>'status',
                    'header'=>'Status',
                    'type'=>'raw',
                    'value'=>'$data->ib_paud_status==107? CHtml::link($data->paudstatus->status,array("paudupload/update","id"=>$data->paudupload->upload_id)):($data->paudstatus->status_id == 7? CHtml::link($data->paudstatus->status,array("paudupload/create")):$data->paudstatus->status)',
                ),
				 array(
				'name'=>'ib_paud_jatuh_tempo',
				'header'=>'Tanggal Jatuh Tempo',
				'type'=>'raw',
				'value'=>'$data->ib_paud_jatuh_tempo < $data->ib_paud_sekarang && $data->status_perpanjangan=="N" && $data->ib_paud_status==67? 
				 CHtml::link($data->ib_paud_jatuh_tempo,array("paud/perpanjangan","id"=>$data->ib_paud_id)):
				 $data->ib_paud_jatuh_tempo',
				),
	),
));
}
?>
</div>