<?php
$this->breadcrumbs=array(
	'Estrutura Física'=>array('estruturaFisica/index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'List EstruturaFisicaPerfil','url'=>array('index')),
	array('label'=>'Manage EstruturaFisicaPerfil','url'=>array('admin')),
);
?>

<h1>Criar EstruturaFisicaPerfil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>