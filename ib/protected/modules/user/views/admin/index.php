<?php
$this->layout='//layouts/bootstrap2cright';
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('/user'),
	UserModule::t('Manage'),
);

$this->menu=array(
    array('label'=>UserModule::t('Create User'), 'url'=>array('create')),
    array('label'=>UserModule::t('Manage Users'), 'url'=>array('admin')),
    array('label'=>UserModule::t('Manage Profile Field'), 'url'=>array('profileField/admin')),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});	
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('user-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>
<h1><?php echo UserModule::t("Manage Users"); ?></h1>

<div class='well well-small'>
	<?php echo CHtml::link(UserModule::t('Advanced Search'),'#',array('class'=>'search-button btn btn-success btn-medium')); ?>
</div>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'user-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		array(
        		'name'=>'id',
        		'value'=>'$this->grid->dataProvider->getPagination()->getOffset()+$row+1',
        		'header'=>'No.',
        		'filter'=>false,
		),
		'username',
		'email',
		'create_at',
		'lastvisit_at',
		array(
			'name'=>'superuser',
			'value'=>'User::itemAlias("AdminStatus",$data->superuser)',
			'filter'=>User::itemAlias("AdminStatus"),
		),
		array(
			'name'=>'status',
			'value'=>'User::itemAlias("UserStatus",$data->status)',
			'filter' => User::itemAlias("UserStatus"),
		),
		array(
			'header'=>'Opr',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view}{update}{delete}',
			'buttons'=>array(       
						'update' => array(
							'url'=>'Yii::app()->controller->createUrl("admin/update/id/".$data->id)',
						),
						'delete' => array(
							'url'=>'Yii::app()->controller->createUrl("admin/delete/id/".$data->id)',
						),
					),
		),
	),
)); ?>
