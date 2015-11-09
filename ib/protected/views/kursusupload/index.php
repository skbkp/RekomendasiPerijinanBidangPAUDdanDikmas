<?php
$this->breadcrumbs=array(
	'Kursusuploads',
);

?>

<h1>Imtauploads</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
