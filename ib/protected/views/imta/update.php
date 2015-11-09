<?php
$this->breadcrumbs=array(
	'Daftar Pengajuan REK-IMTA'=>array('index'),
	$model->ib_imta_id=>array('view','id'=>$model->ib_imta_id),
	'Update',
);

?>

<h1>Update Imta <?php echo $model->ib_imta_id; ?></h1>
<?php
    if(Yii::app()->user->id!=1){
        if(!(Yii::app()->user->id==$model->user_id))
	throw new CHttpException(404,'You have no authorization to access this page');
    }
?>
<?php echo $this->renderPartial('_formperpanjangan',array('model'=>$model)); ?>