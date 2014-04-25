<?php
/* @var $this UserController */
/* @var $model User */


?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		'name',
		'birth_date',
		'cpf',
		'phone',
	),
)); ?>
