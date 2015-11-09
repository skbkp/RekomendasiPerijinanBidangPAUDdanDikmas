<?php
$this->breadcrumbs=array(
	'Daftar Permohonan KURSUS-PAUD-IMTA',
);

?>

<h3>REK-KURSUS</h3>
<div class="container">

<?php $this->renderPartial('_datapengajuankursus',array(
			'dataProvider'=>$dataProvider,
		)); ?>
</div>


<h3>RIB-PAUD</h3>
<div class="container">
<?php 
	   $dataProvider=new CActiveDataProvider('Daftarpaud',array(
			'criteria'=>array(
					'condition'=>'ib_paud_status=67',
				),
			));
		

$this->renderPartial('_datapengajuanpaud',array(
			'dataProvider'=>$dataProvider,
		)); 


		?>
</div>

<h3>REK-IMTA</h3>
<div class="container">
<?php 
	  
	   $dataProvider=new CActiveDataProvider('Daftarimta',array(
			'criteria'=>array(
					'condition'=>'ib_imta_status=67',
				),
			));


$this->renderPartial('_datapengajuanimta',array(
			'dataProvider'=>$dataProvider,
		)); 
		?>
</div>

