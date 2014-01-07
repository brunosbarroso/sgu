<?php
$this->breadcrumbs=array(
	'Usuário'=>array('index'),
	$model->nome,
);

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar Usuário','icon'=>'icon-th-list','url'=>array('index')),
	array('label'=>'Criar Usuário','icon'=>'icon-plus','url'=>array('create')),
	array('label'=>'Editar Usuário','icon'=>'icon-edit','url'=>array('update','id'=>$model->id)),
	array('label'=>'Excluir Usuário','icon'=>'icon-trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja excluir este item?')),
    ),
));

?>

<h3>Visualizar User :: <?php echo $model->id; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nome',
		'email',
		'username',
		'roles',
	),
)); ?>
