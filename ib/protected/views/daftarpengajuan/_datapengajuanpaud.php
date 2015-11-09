<div class="span9">
 
<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'daftar_ib_paud',
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
		'ib_paud_peserta_name',
		'paudjeniskelamin.ib_jeniskelamin_huruf',
		'paudpesertanegara.country',
		'ib_paud_lbg_name',
		'paudlbgkabkot.psr_kabkot_name',
		array(
                    'name'=>'status',
                    'header'=>'Status',
                    'type'=>'raw',
                    'value'=>'$data->paudstatus->status',
                ),
	),
));

?>
</div>