<?php
$this->breadcrumbs=array(
	'Estrutura Fisica'=>array('index'),
	$model->id,
);

Yii::app()->clientScript->registerCoreScript('yii');

Yii::app()->clientScript->registerScript('excluir', "
jQuery('body').on('click','#botao-exclui',function(){if(confirm('Tem certeza que deseja excluir este item?')) {jQuery.yii.submitForm(this,'/sgu/index.php?r=estruturaFisica/delete&id=$model->id',{});return false;} else return false;});
");

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar EstruturaFisica','icon'=>'icon-th-list','url'=>array('index')),
	array('label'=>'Criar EstruturaFisica','icon'=>'icon-plus','url'=>array('create')),
	array('label'=>'Editar EstruturaFisica','icon'=>'icon-edit','url'=>array('update','id'=>$model->id)),
	array('label'=>'Excluir EstruturaFisica','icon'=>'icon-trash','url'=>'#','htmlOptions'=>array('id'=>'botao-exclui')),
    ),
));

/*
$this->menu=array(
	array('label'=>'Gerenciar EstruturaFisica','url'=>array('index')),
	array('label'=>'Criar EstruturaFisica','url'=>array('create')),
	array('label'=>'Editar EstruturaFisica','url'=>array('update','id'=>$model->id)),
	array('label'=>'Excluir EstruturaFisica','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja excluir este item?')),
);
*/

?>

<h3>Visualizar EstruturaFisica :: <?php echo $model->id; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'unidade_id',
		'recepcao_qtd',
		'recepcao_padrao',
		'sala_classif_risco_qtd',
		'sala_classif_risco_padrao',
		'sanitario_qtd',
		'sanitario_padrao',
		'consultorio_qtd',
		'consultorio_padrao',
		'sala_urgencia_qtd',
		'sala_urgencia_padrao',
		'sala_urgencia_monitor_qtd',
		'sala_urgencia_monitor_padrao',
		'sala_urgencia_respirador_qtd',
		'sala_urgencia_respirador_padrao',
		'sala_urgencia_desfibrilador_qtd',
		'sala_urgencia_desfibrilador_padrao',
		'sala_urgencia_eletrocardiografo_qtd',
		'sala_urgencia_eletrocardiografo_padrao',
		'sala_urgencia_leito_qtd',
		'sala_urgencia_leito_padrao',
		'sala_sutura_qtd',
		'sala_sutura_padrao',
		'sala_nebulizacao_qtd',
		'sala_nebulizacao_padrao',
		'sala_reidratacao_qtd',
		'sala_reidratacao_padrao',
		'sala_rx_qtd',
		'sala_rx_padrao',
		'laboratorio_qtd',
		'laboratorio_padrao',
		'posto_enfermagem_qtd',
		'posto_enfermagem_padrao',
		'leito_obs_adulto_qtd',
		'leito_obs_adulto_padrao',
		'leito_obs_pediatrico_qtd',
		'leito_obs_pediatrico_padrao',
		'farmacia_interna_qtd',
		'farmacia_interna_padrao',
		'refeitorio_qtd',
		'refeitorio_padrao',
		'rede_gases_qtd',
		'rede_gases_padrao',
		'area_armazenagem_cadaveres_qtd',
		'area_armazenagem_cadaveres_padrao',
		'abrigo_residuos_qtd',
		'abrigo_residuos_padrao',
		'ambulancia_qtd',
		'ambulancia_padrao',
	),
)); ?>
