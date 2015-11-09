<?php
$this->breadcrumbs=array(
	'Paudverifikasis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Paudverifikasi','url'=>array('index')),
	array('label'=>'Create Paudverifikasi','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('paudverifikasi-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Paudverifikasis</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'paudverifikasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nilai_paud_id',
		'ib_paud_id',
		'created_by',
		'create_at',
		'update_at',
		'update_by',
		/*
		'v_surat',
		'v_kuasa',
		'v_biaya',
		'v_paspor_anak',
		'v_aktalahir',
		'v_paspor_ortu',
		'v_kk',
		'v_nikah',
		'v_jaminan',
		'v_domisili',
		'global_reason',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
