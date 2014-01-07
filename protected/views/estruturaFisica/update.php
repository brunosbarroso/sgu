<?php
$this->breadcrumbs=array(
	'Estrutura Fisica'=>array('index'),
	$model->descricao=>array('view','id'=>$model->id),
	'Atualizar',
);

$this->menu=array(
	array('label'=>'List EstruturaFisica','url'=>array('index')),
	array('label'=>'Create EstruturaFisica','url'=>array('create')),
	array('label'=>'View EstruturaFisica','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EstruturaFisica','url'=>array('admin')),
);
?>

<h3>Atualizar Item de Estrutura Física :: <?php echo $model->descricao; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>