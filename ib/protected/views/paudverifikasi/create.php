<?php
$this->breadcrumbs=array(
	'Paudverifikasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Paudverifikasi','url'=>array('index')),
	array('label'=>'Manage Paudverifikasi','url'=>array('admin')),
);
?>

<h1>Create Paudverifikasi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>