<?php
$this->breadcrumbs=array(
	'Estrutura Física'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Atualizar',
);

$this->menu=array(
	array('label'=>'List EstruturaFisicaPerfil','url'=>array('index')),
	array('label'=>'Create EstruturaFisicaPerfil','url'=>array('create')),
	array('label'=>'View EstruturaFisicaPerfil','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EstruturaFisicaPerfil','url'=>array('admin')),
);
?>

<h1>Atualizar EstruturaFisicaPerfil <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>