<?php
$this->breadcrumbs=array(
	'Pauduploads'=>array('index'),
	$model->upload_id,
);
?>

<h1>View Paudupload #<?php echo $model->upload_id; ?></h1>
<?php
	if(!(Yii::app()->user->id==$model->user_id))
	throw new CHttpException(404,'You have no authorization to access this page');
?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'upload_id',
		'paud_id',
		'user_id',
		'upload_at',
		'update_at',
		'file_surat',
		'file_kuasa',
		'file_biaya',
		'file_paspor_anak',
		'file_aktalahir',
		'file_paspor_ortu',
		'file_kk',
		'file_nikah',
		'file_jaminan',
		'file_domisili',
	),
)); ?>
