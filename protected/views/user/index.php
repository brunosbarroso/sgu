<?php
$this->breadcrumbs=array(
	'Usuário'=>array('index'),
	'Gerenciar',
);
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	    array('label'=>'Criar Usuário', 'url'=>array('create')),
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
	array('label'=>'List User','url'=>),
	array('label'=>'Create User','url'=>array('create')),
);
*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Gerenciar Usuários</h2>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'user-grid',
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
                  'value'=>'CHtml::link(CHtml::encode($data->nome), Yii::app()->createAbsoluteUrl("user/view", array("id"=>$data->id)))',
                ),
		'email',
		'username',
		'roles',
		/*
		'last_login_time',
		'create_time',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
