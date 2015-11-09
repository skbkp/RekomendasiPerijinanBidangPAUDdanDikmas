<div class="span9">
<?php

$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'daftar_ib_imta',
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
			'ib_imta_peserta_name',
			'imtajeniskelamin.ib_jeniskelamin_huruf',
			'imtapesertanegara.country',
			'ib_imta_lbg_name',
			'imtalbgkabkot.psr_kabkot_name',
			'imtajeniskursus.jeniskursus',
            'ib_imta_jatuh_tempo',
            
	),
));    


?>
</div>