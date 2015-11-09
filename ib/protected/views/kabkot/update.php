<?php
$this->breadcrumbs=array(
	'Kabkots'=>array('index'),
	$model->psr_kabkot_id=>array('view','id'=>$model->psr_kabkot_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kabkot','url'=>array('index')),
	array('label'=>'Create Kabkot','url'=>array('create')),
	array('label'=>'View Kabkot','url'=>array('view','id'=>$model->psr_kabkot_id)),
	array('label'=>'Manage Kabkot','url'=>array('admin')),
);
?>

<h1>Update Kabkot <?php echo $model->psr_kabkot_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>