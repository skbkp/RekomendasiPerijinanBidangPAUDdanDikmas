<?php
$this->breadcrumbs=array(
	'Daftar IB-Kursus'=>array('/kursus/'),
	Kursus::model()->findByPk($model->ib_kursus_id)->ib_kursus_peserta_name=>array('view','id'=>$model->nilai_kursus_id),
	'Verifikasi Fisik',
);
?>
<?php
if(Yii::app()->user->id!=1){
            throw new CHttpException(404,'You have no authorization to access this page');
        }
?>
<h2>Verifikasi Fisik Dokumen</h2>
<?php echo $this->renderPartial('_form',
	array('model'=>$model, 
		'modelKursusupload'=>$modelKursusupload)); ?>