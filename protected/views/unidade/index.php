<?php
$this->breadcrumbs=array(
	'Unidade'=>array('index'),
	'Gerenciar',
); ?>

<h2>Gerenciar Unidade</h2>

<?php
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	    array('label'=>'Criar Unidade', 'url'=>array('create')),
            array(
                'label'=>'Dica!',
                'type'=>'primary',
                'htmlOptions'=>array(
                                'data-title'=>'Dicas',
                                'data-placement'=>'bottom', 
                                'data-content'=>'Você também pode usar expressões com comparadores (<, <=, >, >=, <> ou =) no início de cada busca, para determinar como a comparação deverá ser feita.', 
                                'rel'=>'popover'
                            ),
            ),
    ),
));

/*
$this->menu=array(
	array('label'=>'List Unidade','url'=>),
	array('label'=>'Create Unidade','url'=>array('create')),
);
*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('unidade-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'unidade-grid',
        'type'=>'striped bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'summaryText'=>'',
	'columns'=>array(
                array(
                    'name'=>'id',
                    'value' => 'str_pad($data->id, 4, "0", STR_PAD_LEFT)',
                    'htmlOptions'=>array('style'=>'width:50px;text-align:center;'),
                ),
                array(
                    'name'=>'nome',
                    'type'=>'raw',
                    'value' => 'CHtml::link(CHtml::encode($data->nome), Yii::app()->createUrl("unidade/view",array("id"=>$data->id)))',
                    'filter' => CHtml::listData(Unidade::model()->findAll(), 'nome', 'nome'),
                ),
                array(
                    'name'=>'perfil_id',
                    'value' => '$data->perfil["descricao"]',
                    'filter' => CHtml::listData(Perfil::model()->findAll(), 'id', 'descricao'),
                ),
		'encarregado',
                array(
                    'name'=>'telefone',
                    'htmlOptions'=>array('style'=>'width:120px;text-align:center;'),
                ),
                array(
                    'name'=>'populacao',
                    'htmlOptions'=>array('style'=>'width:80px;text-align:center;'),
                ),
                array(
                    'name'=>'area_fisica',
                    'htmlOptions'=>array('style'=>'width:80px;text-align:center;'),
                ),
		/*
		'media_diaria_atendimentos',
		'qtd_plantonistas',
		'qtd_funcionarios',
		'empresa_alimento_id',
		'empresa_limpeza_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
