<?php
$this->breadcrumbs=array(
	'Daftar IB-PAUD'=>array('/paud/'),
	Paud::model()->findByPk($model->ib_paud_id)->ib_paud_peserta_name=>array('view','id'=>$model->nilai_paud_id),
	'Verifikasi Fisik',
);

$this->menu=array(
	array('label'=>'List Paudverifikasi','url'=>array('index')),
	array('label'=>'Create Paudverifikasi','url'=>array('create')),
	array('label'=>'View Paudverifikasi','url'=>array('view','id'=>$model->nilai_paud_id)),
	array('label'=>'Manage Paudverifikasi','url'=>array('admin')),
);
?>

<h1>Verifikasi Fisik Dokumen</h1>

<?php echo $this->renderPartial('_form', 
			array('model'=>$model, 'modelPAUDupload'=>$modelPAUDupload)); ?>