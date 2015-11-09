<?php
$this->breadcrumbs=array(
	'Daftar IB-Paud'=>array('index'),
	$model->ib_paud_peserta_name,
);
?>

<h1>Data Detail Pemohon <small>(<?php echo $model->ib_paud_peserta_name;?>)</small></h1>
<?php
//	if(Yii::app()->user->id!=1){
//            if(!(Yii::app()->user->id==$model->user_id))
//            throw new CHttpException(404,'You have no authorization to access this page');
//        }
?>

<?php 
    echo $this->renderPartial('_vresult',array(
        'model'=>$model,
		'modelPAUDupload'=>$modelPAUDupload,
        'data'=>Paudverifikasi::model()->findByAttributes(array('ib_paud_id'=>$model->ib_paud_id)),
        ));
?>