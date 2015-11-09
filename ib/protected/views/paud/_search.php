<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'type'=>'horizontal',
)); ?>

	<?php echo $form->textFieldRow($model,'ib_paud_id',array('class'=>'span1')); ?>
        <?php echo $form->textFieldRow($model,'ib_paud_peserta_name',array('class'=>'span3','maxlength'=>200)); ?>

	

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'warning',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
