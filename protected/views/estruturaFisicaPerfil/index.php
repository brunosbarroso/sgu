<?php
$this->breadcrumbs=array(
	'Estrutura Fisica Perfil'=>array('index'),
	'Gerenciar',
);
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	    array('label'=>'Criar EstruturaFisicaPerfil', 'url'=>array('create')),
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
	array('label'=>'Gerenciar EstruturaFisicaPerfil','url'=>),
	array('label'=>'Criar EstruturaFisicaPerfil','url'=>array('create')),
);
*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('estrutura-fisica-perfil-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Gerenciar Estrutura Fisica Perfil</h2>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'estrutura-fisica-perfil-grid',
        'type'=>'striped bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'item_id',
		'perfil_id',
		'quantidade',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
