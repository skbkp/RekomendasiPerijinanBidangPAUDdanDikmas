<?php
$this->layout='//layouts/bootstrap';
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(UserModule::t("Login"),);
?>

<div class='container'>
<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<div>
<fieldset>
	<legend>Login Form</legend>
		<?php echo $form->errorSummary($model); ?>
		<?php echo $form->textFieldRow($model,'username',array('prepend'=>'<i class="icon-user"></i>')); ?>
		<?php echo $form->passwordFieldRow($model,'password',array('prepend'=>'<i class="icon-lock"></i>')); ?>
		<?php echo $form->toggleButtonRow($model, 'rememberMe'); ?>
</fieldset>
<div class='form-actions'>

<div>
	<p class="hint">
		<?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
	</p>
</div>

<?php $this->widget('bootstrap.widgets.TbButton', array(
	'buttonType'=>'submit',
	'type'=>'primary',
	'label'=>'Login',
	'icon'=>'off white',
)); ?>
</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
</div>