<?php
$this->breadcrumbs=array(
	'Estrutura Fisica Perfil'=>array('index'),
	$model->id,
);

Yii::app()->clientScript->registerCoreScript('yii');

Yii::app()->clientScript->registerScript('excluir', "
jQuery('body').on('click','#botao-exclui',function(){if(confirm('Tem certeza que deseja excluir este item?')) {jQuery.yii.submitForm(this,'/sgu/index.php?r=estruturaFisicaPerfil/delete&id=$model->id',{});return false;} else return false;});
");

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar EstruturaFisicaPerfil','icon'=>'icon-th-list','url'=>array('index')),
	array('label'=>'Criar EstruturaFisicaPerfil','icon'=>'icon-plus','url'=>array('create')),
	array('label'=>'Editar EstruturaFisicaPerfil','icon'=>'icon-edit','url'=>array('update','id'=>$model->id)),
	array('label'=>'Excluir EstruturaFisicaPerfil','icon'=>'icon-trash','url'=>'#','htmlOptions'=>array('id'=>'botao-exclui')),
    ),
));

/*
$this->menu=array(
	array('label'=>'Gerenciar EstruturaFisicaPerfil','url'=>array('index')),
	array('label'=>'Criar EstruturaFisicaPerfil','url'=>array('create')),
	array('label'=>'Editar EstruturaFisicaPerfil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Excluir EstruturaFisicaPerfil','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja excluir este item?')),
);
*/

?>

<h3>Visualizar EstruturaFisicaPerfil :: <?php echo $model->id; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_id',
		'perfil_id',
		'quantidade',
	),
)); ?>
