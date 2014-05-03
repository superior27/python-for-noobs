<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';

?>
</br>
<div class="row-fluid">
<div class"offset4 span8">
</br>
<h1>Error <?php echo $code; ?></h1>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>
</div>
</div>