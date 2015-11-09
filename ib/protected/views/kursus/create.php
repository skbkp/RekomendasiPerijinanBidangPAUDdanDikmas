<?php
$this->breadcrumbs=array(
	'Daftar IB-Kursus'=>array('index'),
	'Formulir IB-Kursus',
);

?>

<h1>Formulir Permohonan Izin Belajar Kursus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>