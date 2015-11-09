<?php
$this->breadcrumbs=array(
	'Daftar Pengajuan IB-Kursus'=>array('index'),
	$model->ib_kursus_id=>array('view','id'=>$model->ib_kursus_id),
	'Update',
);

?>

<h1>Update Kursus <?php echo $model->ib_kursus_id; ?></h1>
<?php
    if(Yii::app()->user->id!=1){
        if(!(Yii::app()->user->id==$model->user_id))
	throw new CHttpException(404,'You have no authorization to access this page');
    }
?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>