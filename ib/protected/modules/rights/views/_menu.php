
<?php
$this->widget('bootstrap.widgets.TbButtonGroup', array(
	'type'=>'success',
	'buttons'=>array(
		array('label'=>'Assignments', 'url'=>array('assignment/view')),
		array('label'=>'Permissions', 'url'=>array('authItem/permissions')),
		array('label'=>'Roles', 'url'=>array('authItem/roles')),
		array('label'=>'Tasks', 'url'=>array('authItem/tasks')),
		array('label'=>'Operations', 'url'=>array('authItem/operations')),
	),
));
?>