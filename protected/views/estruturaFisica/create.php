<?php
$this->breadcrumbs=array(
	'Estrutura Fisica'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'List EstruturaFisica','url'=>array('index')),
	array('label'=>'Manage EstruturaFisica','url'=>array('admin')),
);
?>

<h3><?php echo CHtml::encode('Novo item de Estrutura Física') ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>