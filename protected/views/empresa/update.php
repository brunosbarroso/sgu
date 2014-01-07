<?php
$this->breadcrumbs=array(
	'Empresa'=>array('index'),
	$model->nome=>array('view','id'=>$model->id),
	'Atualizar',
);

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar Empresa','url'=>array('index')),
	array('label'=>'Criar Empresa','url'=>array('create')),
	array('label'=>'Cancelar Edição','url'=>array('view','id'=>$model->id)),
    ),
));
?>

<h1>Atualizar Empresa <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>