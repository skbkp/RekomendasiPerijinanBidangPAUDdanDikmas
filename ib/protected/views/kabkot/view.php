<?php
$this->breadcrumbs=array(
	'Kabkots'=>array('index'),
	$model->psr_kabkot_id,
);

$this->menu=array(
	array('label'=>'List Kabkot','url'=>array('index')),
	array('label'=>'Create Kabkot','url'=>array('create')),
	array('label'=>'Update Kabkot','url'=>array('update','id'=>$model->psr_kabkot_id)),
	array('label'=>'Delete Kabkot','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->psr_kabkot_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kabkot','url'=>array('admin')),
);
?>

<h1>View Kabkot #<?php echo $model->psr_kabkot_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'psr_kabkot_id',
		'psr_kabkot_name',
		'psr_prop_id',
		'psr_reg_id',
		'psr_posted_by',
		'psr_lastupdate',
		'psr_sync',
	),
)); ?>
