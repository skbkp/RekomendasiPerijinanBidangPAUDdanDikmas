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
			'title'=>'<span class="label label-warning">RIB PAUD</span>',
			'headerIcon'=>'icon-wrench',
		));
		$this->widget('bootstrap.widgets.TbMenu', array(
			//'items'=>$this->menu,
                        'items'=>array(
                                array('label'=>'Formulir IB-Paud','icon'=>'chevron-right','url'=>Yii::app()->baseUrl.'/index.php/paud/create'),
                                array('label'=>'Daftar IB-Paud','icon'=>'chevron-right','url'=>Yii::app()->baseUrl.'/index.php/paud'),
                                array('label'=>'Manajemen Data IB-Paud','icon'=>'chevron-right','url'=>Yii::app()->baseUrl.'/index.php/paud/admin'),
                                array('label'=>'Upload','icon'=>'chevron-right','url'=>Yii::app()->baseUrl.'/index.php/paudupload/create','visible'=>Yii::app()->user->id==1 ? 0:1),
                        ),
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
</div>
<?php $this->endContent(); ?>