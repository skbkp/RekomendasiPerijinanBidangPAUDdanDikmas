<?php
$this->breadcrumbs=array(
	'Propinsis'=>array('index'),
	$model->psr_prop_id,
);

$this->menu=array(
	array('label'=>'List Propinsi','url'=>array('index')),
	array('label'=>'Create Propinsi','url'=>array('create')),
	array('label'=>'Update Propinsi','url'=>array('update','id'=>$model->psr_prop_id)),
	array('label'=>'Delete Propinsi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->psr_prop_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Propinsi','url'=>array('admin')),
);
?>

<h1>View Propinsi #<?php echo $model->psr_prop_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'psr_prop_id',
		'psr_prop_name',
		'psr_reg_id',
		'psr_posted_by',
		'psr_lastupdate',
		'psr_sync',
	),
)); ?>
