<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="language" content="en"/>

	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
	      media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	      media="print"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection"/>
	<![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
        <?php $user = Yii::app()->user; // referenciando o usuario ?>
	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type' => 'inverse', // null or 'inverse'
	'brand' => '<img src="images/quadrado.png" /> '.CHtml::encode(Yii::app()->name),
	'brandUrl' => '#',
	'collapse' => true, // requires bootstrap-responsive.css
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'htmlOptions' => array('class' => 'pull-left'),
			'items' => array(
				//array('label' => 'Link', 'url' => '#'),
				//'---',
				array('label' => 'Unidade', 'url' => array('/unidade/index'), 'items' => array(
					array('label' => 'Listar', 'url' => array('/unidade/index')),
					array('label' => 'Criar', 'url' => array('/unidade/create')),
					//'---',
					//array('label' => 'Separated link', 'url' => '#'),
				)),
				array('label' => 'Empresa', 'url' => array('/empresa/index'), 'items' => array(
					array('label' => 'Listar', 'url' => array('/empresa/index')),
					array('label' => 'Criar', 'url' => array('/empresa/create')),
				)),
				array('label' => 'Perfil', 'url' => array('/perfil/index'), 'items' => array(
					array('label' => 'Listar', 'url' => array('/perfil/index')),
					array('label' => 'Criar', 'url' => array('/perfil/create')),
				)),
				array('label' => 'Est. Física', 'url' => array('/estruturaFisica/index'), 'items' => array(
					array('label' => 'Listar', 'url' => array('/estruturaFisica/index')),
					array('label' => 'Criar', 'url' => array('/estruturaFisica/create')),
				)),
				array('label' => 'Usuário', 'url' => array('/user/index'),'visible'=>$user->checkAccess('admin'), 'items' => array(
					array('label' => 'Listar', 'url' => array('/user/index'),'visible'=>$user->checkAccess('admin')),
					array('label' => 'Criar', 'url' => array('/user/create'),'visible'=>$user->checkAccess('admin')),
				)),
			),
		),
            /* comentando os links para usar o drpdown
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => array(
				array('label' => 'Unidades', 'url' => array('/site/index')),
				array('label' => 'Empresas', 'url' => array('/site/page', 'view' => 'about')),
				array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
				array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
			),
		),
             * 
             */
		//'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
		(!Yii::app()->user->isGuest) 
                    ? '<p class="navbar-text pull-right">Logado como: <a href="#">'.Yii::app()->user->name.'</a> - '
                        .CHtml::link(CHtml::encode('SAIR'),Yii::app()->createUrl("site/logout")).'</p>' 
                    : '',
	),
)); ?>
	<!-- mainmenu -->
	<div class="container" style="margin-top:50px">
		<?php if (isset($this->breadcrumbs)): ?>
			<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links' => $this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
		<?php endif?>

		<?php echo $content; ?>
		<hr/>
		<!-- footer 
		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div>
                -->
	</div>
</div>
<!-- page -->
</body>
</html>