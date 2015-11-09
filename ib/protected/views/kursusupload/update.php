<?php
$this->breadcrumbs=array(
	'Daftar IB-Kursus'=>array('/kursus/'),
        Kursus::model()->findByPk($model->kursus_id)->ib_kursus_peserta_name=>array('/kursus/'.$model->kursus_id),
	'Update',
);
?>

<h1>Upload Ulang Dokumen <small>(<?php echo Kursus::model()->findByPk($model->kursus_id)->ib_kursus_peserta_name; ?>)</small></h1>
<?php
    if(Yii::app()->user->id!==1){
        if(!(Yii::app()->user->id==$model->user_id))
	throw new CHttpException(404,'You have no authorization to access this page');
    }
?>
<?php echo $this->renderPartial('_vresult',array('data'=>Kursusverifikasi::model()->findByAttributes(array('ib_kursus_id'=>$model->kursus_id)))); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>