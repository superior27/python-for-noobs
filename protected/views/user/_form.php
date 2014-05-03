<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); 
$_jj = Yii::app()->getClientScript();
$_jj->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.maskedinput.min.js');
$_jj->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.cpf-validate.1.0.min.js');
Yii::app()->clientScript->registerScript('form', "
    $('#User_cpf').mask('999.999.999-99');
  	$('#User_phone').mask('(99)9999-9999');
",CClientScript::POS_READY);

Yii::app()->clientScript->registerScript('script', <<<JS
    if(!$('#User_cpf').validateCPF())
    {
    alert('CPF Inválido');
    return false;
	}
JS
, CClientScript::POS_READY);




?>




<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
</br>
</br>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
</br>
</br>
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
</br>
</br>
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
</br>
</br>
	<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php echo $form->dateField($model,'birth_date',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'birth_date'); ?>
	</div>
</br>
</br>
	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>
</br>
</br>
	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>
</br>
</br>
	<div class="">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'info',
            'label'=>'Cadastrar',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->