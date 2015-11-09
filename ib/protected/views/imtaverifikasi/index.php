<?php
$this->breadcrumbs=array(
	'Imtaverifikasiperpanjangan',
);
?>

<h1>IMTA Verifikasis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
