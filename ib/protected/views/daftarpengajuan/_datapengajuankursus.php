<div class="span9">
<?php

$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'daftar_ib_kursus',
	'type'=>'striped condensed bordered',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>true,
	'template'=>'{summary}{items}{pager}',
	'enablePagination' => true, 
	'ajaxUpdate' => true,
	'columns'=>array(
		array(
			'name'=>'id',
			'value'=>'$this->grid->dataProvider->getPagination()->getOffset()+$row+1',
			'header'=>'No',
			'filter'=>false,
		),
			'ib_kursus_peserta_name',
			'kursusjeniskelamin.ib_jeniskelamin_huruf',
			'kursuspesertanegara.country',
			'ib_kursus_lbg_name',
			'kursuslbgkabkot.psr_kabkot_name',
			array(
				'name'=>'status',
				'header'=>'Status',
				'type'=>'raw',
				'value'=>'$data->kursusstatus->status',
			),
	),
));    

?>
</div>