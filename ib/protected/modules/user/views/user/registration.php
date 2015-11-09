<?php 
$this->layout='//layouts/bootstrap';
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");
$this->breadcrumbs=array(
	UserModule::t("Registration"),
);
?>

<?php if(Yii::app()->user->hasFlash('registration')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('registration'); ?>
</div>
<?php else: ?>

<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'registration-form',
	'enableAjaxValidation'=>true,
	//'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
	'type'=>'horizontal',
)); ?>
	<fieldset>
	<legend>User Registration Form</legend>
	<?php echo $form->errorSummary(array($model,$profile)); ?>
	
	<?php echo $form->textFieldRow($model,'username',array('prepend'=>'<i class="icon-user"></i>')); ?>
	<?php echo $form->passwordFieldRow($model,'password',array('prepend'=>'<i class="icon-lock"></i>')); ?>
	<?php echo $form->passwordFieldRow($model,'verifyPassword',array('prepend'=>'<i class="icon-lock"></i>')); ?>
	<?php echo $form->textFieldRow($model,'email',array('prepend'=>'<i class="icon-envelope"></i>')); ?>
	
	<?php 
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
				if ($widgetEdit = $field->widgetEdit($profile)) {
					echo $widgetEdit;
				} elseif ($field->range) {
					echo $form->dropDownListRow($profile,$field->varname,Profile::range($field->range));
				} elseif ($field->field_type=="TEXT") {
					echo$form->textAreaRow($profile,$field->varname,array('rows'=>6, 'cols'=>50));
				} else {
					echo $form->textFieldRow($profile,$field->varname,array('prepend'=>'<i class="icon-check"></i>','size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
				}
			}
		}
	?>
	<?php if (UserModule::doCaptcha('registration')): ?>		
		<?php echo $form->captchaRow($model,'verifyCode',array(
            		'hint'=>'Please enter the letters as they are shown in the image above.<br/>Letters are not case-sensitive.',
        	)); ?>
	<?php endif; ?>
	</fieldset>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton',array(
            		'buttonType'=>'submit',
            		'type'=>'primary',
            		'label'=>'Register',
        	)); ?>
	</div>
<?php $this->endWidget(); ?>
</div><!-- form -->
<?php endif; ?>