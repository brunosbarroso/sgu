<?php
$this->breadcrumbs=array(
	'Perfil'=>array('index'),
	$model->descricao,
);

Yii::app()->clientScript->registerCoreScript('yii');

Yii::app()->clientScript->registerScript('excluir', "
jQuery('body').on('click','#botao-exclui',function(){if(confirm('Tem certeza que deseja excluir este item?')) {jQuery.yii.submitForm(this,'/sgu/index.php?r=perfil/delete&id=$model->id',{});return false;} else return false;});
");

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar Perfil','icon'=>'icon-th-list','url'=>array('index')),
	array('label'=>'Criar Perfil','icon'=>'icon-plus','url'=>array('create')),
	array('label'=>'Editar Perfil','icon'=>'icon-edit','url'=>array('update','id'=>$model->id)),
	array('label'=>'Excluir Perfil','icon'=>'icon-trash','url'=>'#','htmlOptions'=>array('id'=>'botao-exclui')),
    ),
));

?>

<h3>Atualizar Perfil :: <?php echo $model->descricao; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'populacao_minima',
		'populacao_maxima',
		'area_fisica',
		'medicos_por_plantao',
		'atendimento_em_24h',
		'leitos_minimo',
		'leitos_maximo',
	),
)); ?>
