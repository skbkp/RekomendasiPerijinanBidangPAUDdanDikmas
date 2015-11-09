<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
		<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	    		'brand'=>'RIB PAUDNI',
    			'brandUrl'=>Yii::app()->baseUrl.'/',
    			'collapse'=>true, // requires bootstrap-responsive.css
			'items'=>array(
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'items'=>array(
						array('label'=>'Home', 'icon'=>'home','url'=>array('/site/index')),
						array('label'=>'About', 'icon'=>'list', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contact', 'icon'=>'envelope', 'url'=>array('/site/contact')),
						//array('label'=>'Login', 'icon'=>'off', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						//array('label'=>'Logout ('.Yii::app()->user->name.')', 'icon'=>'off', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
						array('url'=>Yii::app()->getModule('user')->loginUrl, 'icon'=>'off', 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
						array('url'=>Yii::app()->getModule('user')->registrationUrl, 'icon'=>'edit', 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
						array('url'=>Yii::app()->getModule('user')->profileUrl, 'icon'=>'user', 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
						array('url'=>Yii::app()->getModule('user')->logoutUrl, 'icon'=>'off', 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
					),
				),
				array(
					'class'=>'bootstrap.widgets.TbButtonGroup',
					//'type'=>'success',
					'toggle'=>'radio',
					'htmlOptions'=>array('class'=>'pull-right'),
					'buttons'=>array(
						array('icon'=>'share white','type'=>'primary','label'=>'RIB KURSUS','url'=>array('/kursus'),'visible'=>!Yii::app()->user->isGuest),
						array('icon'=>'share white','type'=>'warning','label'=>'RIB PAUD','url'=>array('/paud'),'visible'=>!Yii::app()->user->isGuest),
						array('icon'=>'share white','type'=>'primary','label'=>'REK IMTA','url'=>array('/imta'),'visible'=>!Yii::app()->user->isGuest),
					),
				),
			),
		)); ?>
<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
	<hr>
		Copyright &copy; <?php echo date('Y'); ?> by ICT Ditjen PAUDNI.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->
</body>
</html>
