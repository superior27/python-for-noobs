<?php
/* @var $this UserController */
/* @var $model User */


?>

<h1>Usuário #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'email',
		'username',
		'password',
		'birth_date',
		'cpf',
		'phone',
	),
)); ?>