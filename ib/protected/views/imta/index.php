<?php
$this->breadcrumbs=array(
	'Daftar REK-IMTA',
);

?>

<h1>Daftar Pengajuan IMTA</h1>
<div class="row">

<?php $this->renderPartial('_view',array(
			'dataProvider'=>$dataProvider,
		)); ?>
</div>