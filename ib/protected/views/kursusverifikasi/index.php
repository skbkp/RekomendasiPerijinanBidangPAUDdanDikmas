<?php
$this->breadcrumbs=array(
	'Kursusverifikasis',
);
?>

<h1>Kursusverifikasis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
