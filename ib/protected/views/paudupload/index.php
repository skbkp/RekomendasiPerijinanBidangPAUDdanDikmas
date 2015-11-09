<?php
$this->breadcrumbs=array(
	'Pauduploads',
);
?>

<h1>Pauduploads</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
