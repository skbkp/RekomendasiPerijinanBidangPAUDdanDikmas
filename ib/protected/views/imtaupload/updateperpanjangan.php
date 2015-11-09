<?php
$this->breadcrumbs=array(
	'Daftar IMTA'=>array('/imta/'),
        Imta::model()->findByPk($model->imta_id)->ib_imta_peserta_name=>array('/imta/'.$model->imta_id),
	'Update',
);
?>

<h1>Upload Ulang Dokumen <small>(<?php echo Imta::model()->findByPk($model->imta_id)->ib_imta_peserta_name; ?>)</small></h1>
<?php
    if(Yii::app()->user->id!==1){
        if(!(Yii::app()->user->id==$model->user_id))
	throw new CHttpException(404,'You have no authorization to access this page');
    }
?>
<?php echo $this->renderPartial('_vresultperpanjangan',array('data'=>Imtaverifikasi::model()->findByAttributes(array('ib_imta_id'=>$model->imta_id)))); ?>
<?php echo $this->renderPartial('_formperpanjangan',array('model'=>$model)); ?>