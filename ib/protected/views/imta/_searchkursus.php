<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'type'=>'horizontal',
	'method'=>'get',
)); ?>

<?php echo $form->textFieldRow($model,'psr_lbg_nama',
array(
	//'class'=>'span3',
	'maxlength'=>225,
)); ?>


<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
			'icon'=>'search white',
		)); ?>
</div>
<?php $this->endWidget(); ?>