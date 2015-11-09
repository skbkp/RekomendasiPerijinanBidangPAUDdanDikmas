<?php
$this->breadcrumbs=array(
	'Daftar IB-Paud'=>array('/paud/'),
	Paud::model()->findByPk($model->paud_id)->ib_paud_peserta_name=>array('/paud/'.$model->paud_id),
	'Update',
);
?>

<h1>Upload Ulang Dokumen <small>(<?php echo Paud::model()->findByPk($model->paud_id)->ib_paud_peserta_name; ?>)</small></h1>
<?php
//	if(!(Yii::app()->user->id==$model->user_id))
//	throw new CHttpException(404,'You have no authorization to access this page');
?>
<?php echo $this->renderPartial('_vresult',array('data'=>Paudverifikasi::model()->findByAttributes(array('ib_paud_id'=>$model->paud_id)))); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>