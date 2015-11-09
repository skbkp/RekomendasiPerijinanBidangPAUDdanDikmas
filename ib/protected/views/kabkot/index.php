<?php
$this->breadcrumbs=array(
	'Kabkots',
);

$this->menu=array(
	array('label'=>'Create Kabkot','url'=>array('create')),
	array('label'=>'Manage Kabkot','url'=>array('admin')),
);
?>

<h1>Kabkots</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
