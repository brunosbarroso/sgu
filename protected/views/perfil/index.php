<?php
$this->breadcrumbs=array(
	'Perfil'=>array('index'),
	'Gerenciar',
);
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	    array('label'=>'Criar Perfil', 'url'=>array('create')),
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
	array('label'=>'List Perfil','url'=>),
	array('label'=>'Create Perfil','url'=>array('create')),
);
*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('perfil-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Gerenciar Perfil</h2>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'perfil-grid',
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
                    'name'=>'descricao',
                    'type'=>'raw',
                    'value'=>'CHtml::link($data->descricao, Yii::app()->createUrl("perfil/view", array("id"=>$data->id)))',
                    'htmlOptions'=>array('style'=>'padding-left:15px;'),
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
