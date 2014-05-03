<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
		<?php echo $form->radioButtonListRow($model,'name', array('py4noobs'=>'Py4Noobs')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
</br>

	<div class="row">
		
		<?php echo $form->radioButtonListRow($model,'schedule',array('morning'=>'Terça e Quintas às 09h - 11h','afternoon'=>'Terça e Quintas às 14h - 16h'));?>
		<?php echo $form->error($model,'schedule'); ?>
	</div>
	</br>


	<div class="row">
		
		<?php echo $form->radioButtonListRow($model,'paid',array(0=>'Não',1=>'Sim'));?>
		<?php echo $form->error($model,'paid'); ?>
	</div>
</br>

	<div class="row">
		
		<?php echo $form->radioButtonListRow($model,'notebook',array(0=>'Não',1=>'Sim'));?>
		<?php echo $form->error($model,'notebook'); ?>
	</div>
	</br>


	<!--<div class="row">
		<?php echo $form->labelEx($model,'tbl_user_id'); ?>
		<?php
		echo CHtml::activeDropDownList(
		  $model, 'tbl_user_id', 
		  CHtml::listData(User::model()->findAll(), 'id', 'name'),
		  array('template'=>'<li>{input} {label}</li>','separator'=>'',)
		);
		?>
		
		<?php echo $form->labelEx($model,'tbl_user_id'); ?>
		<?php echo $form->textField($model,'tbl_user_id'); ?>
		<?php echo $form->error($model,'tbl_user_id'); ?>
	
	</div>
	</br>-->



	<div class="">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'info',
            'label'=>'Cadastrar',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->