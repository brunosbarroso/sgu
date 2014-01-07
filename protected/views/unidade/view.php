<?php
$this->breadcrumbs=array(
	'Unidade'=>array('index'),
	$model->nome,
);

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar Unidade','icon'=>'icon-th-list','url'=>array('index')),
	array('label'=>'Criar Unidade','icon'=>'icon-plus','url'=>array('create')),
	array('label'=>'Editar Unidade','icon'=>'icon-edit','url'=>array('update','id'=>$model->id)),
	array('label'=>'Excluir Unidade','icon'=>'icon-trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja excluir este item?')),
    ),
));
?>

<h3>Visualizar Unidade :: <?php echo CHtml::encode($model->nome); ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'nome',
		array(
                    'name'=>'perfil_id',
                    'value'=>$model->perfil["descricao"]
                ),
		'encarregado',
		'telefone',
                array(
                    'name'=>'empresa_alimento_id',
                    'value'=>$model->empresaAlimento["nome"]
                ),
                array(
                    'name'=>'empresa_limpeza_id',
                    'value'=>$model->empresaLimpeza["nome"]
                ),
                array(
                    'label'=>'Área fisica:',
                    'type'=>'raw',
                    'value'=>
                        $model->area_fisica.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
                        '<b>População: </b>'.$model->populacao.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
                        '<b>Méd atend dia: </b>'.$model->media_diaria_atendimentos.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
                        '<b>Plantonistas: </b>'.$model->qtd_plantonistas.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
                        '<b>Funcionários: </b>'.$model->qtd_funcionarios,
                ),
	),
)); ?>



<?php
/*
echo '<h4><a>Estrutura Fisica: </a>';

if(!$estFisica)
{
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'buttons'=>array(
            array('label'=>'Criar Estrutura','icon'=>'icon-plus','url'=>Yii::app()->createUrl('estruturaFisica/create')),
        ),
    ));
    
    echo '</h4>';
    
    echo $this->renderPartial('_form',array('model'=>$model));
}
else
{
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'buttons'=>array(
            array('label'=>'Editar Estrutura','icon'=>'icon-edit','url'=>Yii::app()->createUrl('estruturaFisica/create')),
        ),
    ));
    
    echo '</h4>';
    
    $model = $estFisica;
    echo $this->renderPartial('_viewEstFisica',array('model'=>$estFisica));
}
 * 
 * 
 */
?>