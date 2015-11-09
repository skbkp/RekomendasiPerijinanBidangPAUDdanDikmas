<?php
$this->breadcrumbs=array(
	'Daftar REK-IMTA'=>array('/imta'),
	$model->upload_id,
);
?>

<h1>View Imtaupload #<?php echo $model->upload_id; ?></h1>
<?php
	if(Yii::app()->user->id!==1){
            if(!(Yii::app()->user->id==$model->user_id))
            throw new CHttpException(404,'You have no authorization to access this page');
        }
        
?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'imta_id',
		'upload_at',
		'update_at',
		'file_surat',
		'file_kuasa',
		'file_nilek',
		'file_kurikulum',
		'file_aktanotaris',
		'file_pengesahankumham',
		'file_domisili',
		'file_skrptka',
		'file_ijinoperasional',
		'file_rekapsiswadanptk',
		'file_rekomendasidinas',
		'file_alasan',
		'file_jaminan',
		'file_paspor',
		'file_cv',
		'file_foto',
		'file_ijazah',
		'file_sehat',
		'file_pernyataan',
	),
)); ?>
