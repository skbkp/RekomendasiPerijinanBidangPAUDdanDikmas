<?php
$this->breadcrumbs=array(
	'Daftar IB-Paud',
);

?>

<h1>Daftar Pengajuan Ijin Belajar PAUD</h1>

<div class="row">
<?php $this->renderPartial('_view',array(
			'dataProvider'=>$dataProvider,
		)); ?>
</div>