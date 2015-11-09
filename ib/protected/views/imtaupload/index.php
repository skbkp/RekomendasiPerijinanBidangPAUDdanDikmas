<?php
$this->breadcrumbs=array(
	'Imtauploads',
);

?>

<h1>Kursusuploads</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
