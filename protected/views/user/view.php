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

<ul>
	<?php foreach(Yii::app()->authManager->getAuthItems() as $data):?>
	<?php  $enabled=Yii::app()->authManager->checkAccess($data->name,$model->id)?>
		<li>
			<h4><?php echo $data->name?>
				<?php echo CHtml::link($enabled?"On":"Off",array("user/assign","id"=>$model->id,"item"=>$data->name),
					array("class"=>$enabled?"btn btn-primary":"btn btn-danger"));?>
			</h4>
			<p><?php echo $data->description?></p>
			<hr>
		</li>
	<?php endforeach;?>





</ul>