<?php
$this->breadcrumbs=array(
	'Daftar REK-IMTA'=>array('/imta/'),
	Imta::model()->findByPk($model->ib_imta_id)->ib_imta_peserta_name=>array('view','id'=>$model->nilai_imta_id),
	'Verifikasi Fisik',
);
?>
<?php
if(Yii::app()->user->id!=1){
            throw new CHttpException(404,'You have no authorization to access this page');
        }
?>
<h2>Verifikasi Fisik Dokumen</h2>
<?php echo $this->renderPartial('_formperpanjangan',
	array('model'=>$model, 
		'modelImtaupload'=>$modelImtaupload)); ?>