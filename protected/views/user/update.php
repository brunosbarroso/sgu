<?php
$this->breadcrumbs=array(
	'Usuário'=>array('index'),
	$model->nome=>array('view','id'=>$model->id),
	'Atualizar',
);

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar Usuário','url'=>array('index')),
	array('label'=>'Criar Usuário','url'=>array('create')),
	array('label'=>'Cancelar Edição','url'=>array('view','id'=>$model->id)),
    ),
));
?>

<h3>Atualizar Usuário :: <?php echo $model->nome; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>