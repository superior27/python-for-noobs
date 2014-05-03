<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pt_br" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'inverse',
    'collapse'=>true,    
    'items'=>array(

        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/')),
                array('label'=>'Usuário', 'url'=>'#', 'items'=>array(
                    array('label'=>'Cadastrar', 'url'=>array('/user/create')),
                    array('label'=>'Administrar', 'url'=>array('/user/admin')),
                    array('label'=>'Meus Detalhes', 'url'=>array('/user/userdetail')),
                    )),
                array('label'=>'Curso', 'url'=>'#', 'items'=>array(
                    array('label'=>'Inscrever', 'url'=>array('/course/createuser')),
                    array('label'=>'Administrar', 'url'=>array('/course/admin')),
                    array('label'=>'Meus Detalhes', 'url'=>array('/course/coursedetail')),
                    )),
                array('label'=>'Ambiente Virtual','url'=>'http://py4noobs.commsystem.net/moodle/',),						
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); 

?>

<!--
Se eu não colocar a class container aqui o foot e meu content ficam na página toda quando eu quiser usar só um pedaço dá
página adiciono apenas dentro do html dele, invés de aplicar a todas as coisas
-->
<div>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
	

	<div class="clear"></div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
	
<div id="footer1">
		Copyright &copy; <?php echo date('Y'); ?> CommSystem.<br/>
		Todos os Direitos Reservados.<br/><a href="http://azmind.com">CommSystem</a>.</p>
		
	</div><!-- footer -->
</body>
</html>
