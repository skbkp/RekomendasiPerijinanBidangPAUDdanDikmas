<?php $this->beginContent('//layouts/bootstrap'); ?>
<div class='row'>
<div class="span9">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span3">
	<div id="sidebar">
	<?php
		$this->beginWidget('bootstrap.widgets.TbBox', array(
			'title'=>'<span class="label label-info">RIB KURSUS</span>',
			'headerIcon'=>'icon-wrench',
                        'htmlOptions'=>array('class'=>'operations'),
		));
		$this->widget('bootstrap.widgets.TbMenu', array(
			//'items'=>$this->menu,
                        'items'=>array(
                                array('label'=>'Formulir IB-Kursus','icon'=>'chevron-right','url'=>Yii::app()->baseUrl.'/index.php/kursus/create'),
                                array('label'=>'Daftar IB-Kursus','icon'=>'chevron-right','url'=>Yii::app()->baseUrl.'/index.php/kursus'),
                                array('label'=>'Manajemen Data IB-Kursus','icon'=>'chevron-right','url'=>Yii::app()->baseUrl.'/index.php/kursus/admin'),
                                array('label'=>'Upload','icon'=>'chevron-right','url'=>Yii::app()->baseUrl.'/index.php/kursusupload/create','visible'=>Yii::app()->user->id==1 ? 0:1),
                        ),
			//'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
</div>
<?php $this->endContent(); ?>