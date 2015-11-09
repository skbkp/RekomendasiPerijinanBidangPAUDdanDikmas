<?php
$this->breadcrumbs=array(
	'Daftar IB-Paud'=>array('index'),
	'Manajemen Data IB-Paud',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('paud-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
<legend>Manajemen Data IB-PAUD</legend>

<?php echo CHtml::link('Pencarian Data','#',array('class'=>'search-button btn btn-warning')); ?>
<div class="search-form" style="display:none">
    <hr />
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php if (Yii::app()->user->id==1){
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'paud-grid',
	'type'=>'condensed bordered striped',
	'dataProvider'=>$model->search(),
	'enableSorting'=>false,
	//'filter'=>$model,
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
                array(
                    'class'=>'editable.EditableColumn',
                    'name'=>'ib_paud_status',
                    'editable'=>array(
                        'type'=>'select',
                        'url'=>$this->createUrl('paud/updatable'),
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
		array(
			'header'=>'Opr',
                        'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=>'{view} {update} {print}',
                        'buttons'=>array(
                            'print'=>array(
                                'icon'=>'print',
                                'label'=>'Print',
                                'url'=>'Yii::app()->createUrl("print/paudpdf", array("id"=>$data->ib_paud_id))',
                            ),
                        ),
		),
	),
));
}else{
    $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'paud-grid',
	'type'=>'condensed bordered striped',
	'dataProvider'=>$model->search(),
	'enableSorting'=>false,
	//'filter'=>$model,
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
                array(
                    'name'=>'status',
                    'header'=>'Status',
                    'type'=>'raw',
                    'value'=>'$data->ib_paud_status==107? CHtml::link($data->paudstatus->status,array("paudupload/update","id"=>$data->paudupload->upload_id)):($data->paudstatus->status_id==7 ? CHtml::link($data->paudstatus->status,array("paudupload/create")):$data->paudstatus->status)',
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