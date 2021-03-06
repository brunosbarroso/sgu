<?php
$this->breadcrumbs=array(
	'Empresa'=>array('index'),
	'Gerenciar',
);
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	    array('label'=>'Criar Empresa', 'url'=>array('create')),
            array(
                'label'=>'Dica!',
                'type'=>'primary',
                'htmlOptions'=>array(
                                'data-title'=>'A Title',
                                'data-placement'=>'bottom', 
                                'data-content'=>'Você também pode usar expressões com comparadores (<, <=, >, >=, <> ou =) no início de cada busca, para determinar como a comparação deverá ser feita.', 
                                'rel'=>'popover'
                            ),
            ),
    ),
));

/*
$this->menu=array(
	array('label'=>'List Empresa','url'=>),
	array('label'=>'Create Empresa','url'=>array('create')),
);
*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('empresa-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Gerenciar Empresa</h2>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'empresa-grid',
        'type'=>'striped bordered',
        'summaryText'=>'',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array(
                    'name'=>'id',
                    'value' => 'str_pad($data->id, 4, "0", STR_PAD_LEFT)',
                    'htmlOptions'=>array('style'=>'width:50px;text-align:center;'),
                ),
                array(
                    'name'=>'nome',
                    'type'=>'raw',
                    'value'=>'CHtml::link(CHtml::encode($data->nome), Yii::app()->createUrl("empresa/view",array("id"=>$data->id)))',
                    'htmlOptions'=>array('style'=>'padding-left:15px;'),
                ),
		'telefone',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
