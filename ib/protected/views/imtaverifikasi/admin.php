<?php
$this->breadcrumbs=array(
	'Imtaverifikasis'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('imtaverifikasi-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Imta verifikasi</h1>

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
	'id'=>'imtaverifikasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nilai_imta_id',
		'ib_imta_id',
		'created_by',
		'upload_at',
		'update_at',
		'update_by',
		/*
		'v_surat',
		'v_reason_surat',
		'v_kuasa',
		'v_reason_kuasa',
		'v_nilek',
		'v_reason_nilek',
		'v_kurikulum',
		'v_reason_kurikulum',
		'v_aktanotaris',
		'v_reason_aktanotaris',
		'v_pengesahankumham',
		'v_reason_kumham',
		'v_domisili',
		'v_reason_domisili',
		'v_alasan',
		'v_reason_alasan',
		'v_biaya',
		'v_reason_biaya',
		'v_jaminan',
		'v_reason_jaminan',
		'v_paspor',
		'v_reason_paspor',
		'v_cv',
		'v_reason_cv',
		'v_foto',
		'v_reason_foto',
		'v_ijazah',
		'v_reason_ijazah',
		'v_sehat',
		'v_reason_sehat',
		'v_pernyataan',
		'v_reason_pernyataan',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
