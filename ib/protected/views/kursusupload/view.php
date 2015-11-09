<?php
$this->breadcrumbs=array(
	'Daftar IB-Kursus'=>array('/kursus'),
	$model->upload_id,
);
?>

<h1>View Kursusupload #<?php echo $model->upload_id; ?></h1>
<?php
	if(Yii::app()->user->id!==1){
            if(!(Yii::app()->user->id==$model->user_id))
            throw new CHttpException(404,'You have no authorization to access this page');
        }
        
?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'kursus_id',
		'upload_at',
		'update_at',
		'file_surat',
		'file_kuasa',
		'file_nilek',
		'file_kurikulum',
		'file_aktanotaris',
		'file_pengesahankumham',
		'file_domisili',
		'file_alasan',
		'file_biaya',
		'file_jaminan',
		'file_paspor',
		'file_cv',
		'file_foto',
		'file_ijazah',
		'file_sehat',
		'file_pernyataan',
	),
)); ?>
