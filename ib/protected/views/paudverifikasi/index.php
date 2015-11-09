<?php
$this->breadcrumbs=array(
	'Paudverifikasis',
);

$this->menu=array(
	array('label'=>'Create Paudverifikasi','url'=>array('create')),
	array('label'=>'Manage Paudverifikasi','url'=>array('admin')),
);
?>

<h1>Paudverifikasis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
