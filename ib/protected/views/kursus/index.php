<?php
$this->breadcrumbs=array(
	'Daftar IB-Kursus',
);

?>

<h1>Daftar Pengajuan Izin Belajar Kursus</h1>
<div class="row">

<?php $this->renderPartial('_view',array(
			'dataProvider'=>$dataProvider,
		)); ?>
</div>