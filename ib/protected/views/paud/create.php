<?php
$this->breadcrumbs=array(
	'Daftar IB-Paud'=>array('index'),
	'Formulir IB-Paud',
);
?>

<h1>Formulir Permohonan Ijin Belajar PAUD</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>