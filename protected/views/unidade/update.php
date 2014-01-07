<?php
$this->breadcrumbs=array(
	'Unidade'=>array('index'),
	$model->nome=>array('view','id'=>$model->id),
	'Atualizar',
);

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar Unidade','url'=>array('index')),
	array('label'=>'Criar Unidade','url'=>array('create')),
	array('label'=>'Cancelar Edição','url'=>array('view','id'=>$model->id)),
    ),
));
?>

<h3>Atualizar Unidade :: <?php echo CHtml::encode($model->nome); ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>