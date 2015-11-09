<?php
$this->breadcrumbs=array(
	'Kabkots'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kabkot','url'=>array('index')),
	array('label'=>'Manage Kabkot','url'=>array('admin')),
);
?>

<h1>Create Kabkot</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>