<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    	'action'=>Yii::app()->createUrl($this->route),
    	'method'=>'get',
	'type'=>'horizontal',
)); ?>

<?php echo $form->textFieldRow($model,'username',array('size'=>20,'maxlength'=>20)); ?>
<?php echo $form->textFieldRow($model,'email',array('size'=>60,'maxlength'=>128)); ?>
<?php echo $form->dropDownListRow($model,'status',$model->itemAlias('UserStatus')); ?>

    <div class="form-actions">
       <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Search')); ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->