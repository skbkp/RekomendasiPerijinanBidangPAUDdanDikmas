<?php
$this->breadcrumbs=array(
	'Daftar Unggah Dokumen IB-PAUD'=>array('index'),
	'Unggah Dokumen',
);

?>

<h2>Unggah Dokumen Permohonan Ijin Belajar PAUD</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>