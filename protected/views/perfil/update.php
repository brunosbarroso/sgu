<?php
$this->breadcrumbs=array(
	'Perfil'=>array('index'),
	$model->descricao=>array('view','id'=>$model->id),
	'Atualizar',
);

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar Perfil','url'=>array('index')),
	array('label'=>'Criar Perfil','url'=>array('create')),
	array('label'=>'Cancelar Edição','url'=>array('view','id'=>$model->id)),
    ),
));
?>

<h3>Atualizar Perfil :: <?php echo $model->descricao; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>