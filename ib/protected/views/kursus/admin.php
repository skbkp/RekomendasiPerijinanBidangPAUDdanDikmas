<?php
$this->breadcrumbs=array(
	'Daftar IB-Kursus'=>array('index'),
	'Manajemen Data IB-Kursus',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('kursus-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<fieldset>
<legend>Manajemen Data IB-Kursus</legend>

<?php echo CHtml::link('Pencarian Data','#',array('class'=>'search-button btn btn-primary')); ?>
<div class="search-form" style="display:none">
    <hr />
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php if (Yii::app()->user->id==1){
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'kursus-grid',
	'type'=>'condensed striped bordered',
	'enableSorting'=>false,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'ib_kursus_id',
		array(
        		'name'=>'id',
        		'value'=>'$this->grid->dataProvider->getPagination()->getOffset()+$row+1',
        		'header'=>'No',
        		'filter'=>false,
		),
		'ib_kursus_peserta_name',
		'kursusjeniskelamin.ib_jeniskelamin_huruf',
		'kursuspesertanegara.country',
		array(
                    'class'=>'editable.EditableColumn',
                    'name'=>'ib_kursus_status',
                    'editable'=>array(
                        'type'=>'select',
                        'url'=>$this->createUrl('kursus/updatable'),
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
		'kursusjeniskursus.jeniskursus',
		array(
			'header'=>'Opr',
                        'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=>'{view} {update} {print}',
                        'buttons'=>array(
                            'print'=>array(
                                'icon'=>'print',
                                'label'=>'Print',
                                'url'=>'Yii::app()->createUrl("print/pdf", array("id"=>$data->ib_kursus_id))',
                            ),
                        ),
		),
	),
)); 
}else{
    $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'kursus-grid',
	'type'=>'condensed striped bordered',
	'enableSorting'=>false,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'ib_kursus_id',
		array(
        		'name'=>'id',
        		'value'=>'$this->grid->dataProvider->getPagination()->getOffset()+$row+1',
        		'header'=>'No',
        		'filter'=>false,
		),
		'ib_kursus_peserta_name',
		'kursusjeniskelamin.ib_jeniskelamin_huruf',
		'kursuspesertanegara.country',
		array(
                    'name'=>'status',
                    'header'=>'Status',
                    'type'=>'raw',
                    'value'=>'$data->ib_kursus_status==107? CHtml::link($data->kursusstatus->status,array("kursusupload/update","id"=>$data->skursusupload->upload_id)):($data->kursusstatus->status_id==7 ? CHtml::link($data->kursusstatus->status,array("kursusupload/create")):$data->kursusstatus->status)',
                ),
		'kursusjeniskursus.jeniskursus',
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
