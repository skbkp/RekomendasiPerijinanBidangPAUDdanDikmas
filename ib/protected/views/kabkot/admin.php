<?php
$this->breadcrumbs=array(
	'Kabkots'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Kabkot','url'=>array('index')),
	array('label'=>'Create Kabkot','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('kabkot-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Kabkots</h1>

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
	'id'=>'kabkot-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'psr_kabkot_id',
		'psr_kabkot_name',
		'psr_prop_id',
		'psr_reg_id',
		'psr_posted_by',
		'psr_lastupdate',
		/*
		'psr_sync',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
