<?php
$this->breadcrumbs=array(
	'Daftar IB-IMTA'=>array('index'),
	'Manajemen Data REK-IMTA',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('imta-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<fieldset>
<legend>Manajemen Data REK-IMTA</legend>

<?php echo CHtml::link('Pencarian Data','#',array('class'=>'search-button btn btn-primary')); ?>
<div class="search-form" style="display:none">
    <hr />
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php if (Yii::app()->user->id==1){
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'imta-grid',
	'type'=>'condensed striped bordered',
	'enableSorting'=>false,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
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
		array(
                    'class'=>'editable.EditableColumn',
                    'name'=>'ib_imta_status',
                    'editable'=>array(
                        'type'=>'select',
                        'url'=>$this->createUrl('imta/updatable'),
                        'source'=>CHtml::listdata(Status::model()->findAll(),'status_id','status'),
                        'options'  => array(    //custom display 
                        'display' => 'js: function(value, sourceData) {
                          		var selected = $.grep(sourceData, function(o){ return value == o.value; }),
                              	colors = {7: "red", 27: "orange", 47: "orangered", 67: "green", 107: "blue"};
                                $(this).text(selected[0].text).css("color", colors[value]);    
                        	}'
                  		),
                 //onsave event handler 
                 'onSave' => 'js: function(e, params) {
                      console && console.log("saved value: "+params.newValue);
                  }'
                    ),
                ),
		'imtajeniskursus.jeniskursus',
            array(
                'name'=>'ib_imta_jatuh_tempo',
                'header'=>'Tanggal Jatuh Tempo',
                'type'=>'raw',
                'value'=>'$data->ib_imta_jatuh_tempo < $data->ib_imta_sekarang && $data->status_perpanjangan=="N" && $data->ib_imta_status==67? 
                 CHtml::link($data->ib_imta_jatuh_tempo,array("imta/perpanjangan","id"=>$data->ib_imta_id)):
                 $data->ib_imta_jatuh_tempo=="0000-00-00" ? "Belum ada" :
                 $data->ib_imta_jatuh_tempo',
                ),
		array(
			'header'=>'Opr',
                        'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=>'{view} {update} {print}',
                        'buttons'=>array(
                            'print'=>array(
                                'icon'=>'print',
                                'label'=>'Print',
                                'url'=>'Yii::app()->createUrl("print/imtapdf", array("id"=>$data->ib_imta_id))',
                            ),
                        ),
		),
	),
)); 
}else{
    $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'imta-grid',
	'type'=>'condensed striped bordered',
	'enableSorting'=>false,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
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
		array(
                    'name'=>'status',
                    'header'=>'Status',
                    'type'=>'raw',
                    'value'=>'$data->ib_imta_status==107? CHtml::link($data->imtastatus->status,array("imtaupload/update","id"=>$data->imtaupload->upload_id)):($data->imtastatus->status_id==7 ? CHtml::link($data->imtastatus->status,array("imtaupload/create")):$data->imtastatus->status)',
                ),
		'imtajeniskursus.jeniskursus',            
            array(
                'name'=>'ib_imta_jatuh_tempo',
                'header'=>'Tanggal Jatuh Tempo',
                'type'=>'raw',
                'value'=>'$data->ib_imta_jatuh_tempo < $data->ib_imta_sekarang && $data->status_perpanjangan=="N" && $data->ib_imta_status==67? 
                 CHtml::link($data->ib_imta_jatuh_tempo,array("imta/perpanjangan","id"=>$data->ib_imta_id)):
                 $data->ib_imta_jatuh_tempo=="0000-00-00" ? "Belum ada" :
                 $data->ib_imta_jatuh_tempo',
                ),
		array(
			'header'=>'Opr',
                        'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=>'{view} {update}',
		),
	),
));
}
?>
</fieldset>
