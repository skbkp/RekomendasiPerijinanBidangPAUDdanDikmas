<?php
$this->breadcrumbs=array(
	'Propinsis'=>array('index'),
	$model->psr_prop_id=>array('view','id'=>$model->psr_prop_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Propinsi','url'=>array('index')),
	array('label'=>'Create Propinsi','url'=>array('create')),
	array('label'=>'View Propinsi','url'=>array('view','id'=>$model->psr_prop_id)),
	array('label'=>'Manage Propinsi','url'=>array('admin')),
);
?>

<h1>Update Propinsi <?php echo $model->psr_prop_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>