<?php
$this->breadcrumbs=array(
	'Estrutura Fisica'=>array('index'),
	'Gerenciar',
);
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	    array('label'=>'Novo item de Estrutura Física', 'url'=>array('create')),
        /*
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
         * 
         */
    ),
));

/*
$this->menu=array(
	array('label'=>'Gerenciar EstruturaFisica','url'=>),
	array('label'=>'Criar EstruturaFisica','url'=>array('create')),
);
*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('estrutura-fisica-grid', {
		data: $(this).serialize()
	});
	return false;
});");

?>

<h3><?php echo CHtml::encode('Gerenciar Itens de Estrutura Física') ?></h3>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
/* COMENTANDO CRIAÇÃO DO GRID DINAMICO PRA FAZE-LO ESTATICO PARA AGILIZAR
$i = 0;
$p = count(Perfil::model()->search()->data);
//var_dump(Perfil::model()->search()->data[0]->descricao);die();

    for ($i=0;$i<$p;$i++) {

        $perfilColumns[$i] = array(
                                'name'=>'estruturaFisicaPerfils.'.$i.'.perfil.descricao',
                                'header'=>Perfil::model()->search()->data[$i]->descricao,
                                'value'=>'function($data){
                                                if( !$data->estruturaFisicaPerfils['.$i.']->quantidade ){
                                                    return "Não definido";
                                                } else {
                                                    return CHtml::link($data->estruturaFisicaPerfils['.$i.']->quantidade, Yii::app()->createUrl("estruturaFisicaPerfil/update",array("id"=>$data->estruturaFisicaPerfils['.$i.']->id)));
                                                        
                                                }
                                            }',
                                'type'=>'raw',
                                'sortable'=>false, 
                        );
    }
    //print_r($perfilColumns);die();
 * 
 */

$this->widget('bootstrap.widgets.TbExtendedGridView',array(
	'id'=>'estrutura-fisica-grid',
        'type'=>'striped bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'columns' => array(
                        array(
                            'name'=>'id',
                            'value' => 'str_pad($data->id, 4, "0", STR_PAD_LEFT)',
                            'headerHtmlOptions'=>array('style'=>'width:50px;text-align:center;'),
                            'htmlOptions'=>array('style'=>'width:50px;text-align:center;'),
                        ),
                        array(
                            'name' => 'descricao',
                        ),
                        /*
                         * 
                        array(
                            'class'=>'bootstrap.widgets.TbRelationalColumn',
                            'name' => 'descricao',
                            //'headerHtmlOptions'=>array('style'=>'width:280px;'),
                            //'htmlOptions'=>array('style'=>'width:280px;'),
                            'url' => $this->createUrl('estruturaFisica/relational'),
                        ),
                        array(
                            'class' => 'bootstrap.widgets.TbEditableColumn',
                            'name' => 'unidade',
                            'sortable'=>false,
                            'editable' => array('type' => 'text',
                                    //'url'=>$this->createUrl("estruturaFisicaPerfil/editableUpdate"),
                                    //'url'=>$this->createUrl("perfil/editableUpdate", array('model'=>'Perfil', 'field'=>'descricao')),
                                    'placement' => 'top',
                                    'inputclass' => 'span2'
                            )
                        ),
                         * 
                         */
                        array(
                            'name'=>'unidade',
                            'headerHtmlOptions'=>array('style'=>'width:50px;text-align:center;'),
                            'htmlOptions'=>array('style'=>'width:50px;text-align:center;'),
                        ),
                        array(
                                'name'=>'estruturaFisicaPerfils.0.perfil.descricao',
                                'htmlOptions'=>array('style'=>'width:90px;text-align:right;'),
                                'headerHtmlOptions'=>array('style'=>'text-align:center;'),
                                'value'=>'!array_key_exists(0,$data->estruturaFisicaPerfils)?CHtml::link("----", Yii::app()->createUrl("estruturaFisicaPerfil/create",array("estruturaFisica_id"=>$data->id,"perfil_id"=>1))):CHtml::link($data->estruturaFisicaPerfils[0]->quantidade, Yii::app()->createUrl("estruturaFisicaPerfil/update",array("id"=>$data->estruturaFisicaPerfils[0]->id)))',
                                'header'=>'Sl. Estab.',
                                'type'=>'raw',
                                'sortable'=>false,
                        ),
                        array(
                                'name'=>'estruturaFisicaPerfils.1.perfil.descricao',
                                'htmlOptions'=>array('style'=>'width:90px;text-align:right;'),
                                'headerHtmlOptions'=>array('style'=>'text-align:center;'),
                                'header'=>'UPA Porte 1',
                                'type'=>'raw',
                                'value' => '!array_key_exists(1,$data->estruturaFisicaPerfils)?CHtml::link("----", Yii::app()->createUrl("estruturaFisicaPerfil/create",array("estruturaFisica_id"=>$data->id,"perfil_id"=>2))):CHtml::link($data->estruturaFisicaPerfils[1]->quantidade, Yii::app()->createUrl("estruturaFisicaPerfil/update",array("id"=>$data->estruturaFisicaPerfils[1]->id)))',
                                'sortable'=>false,
                        ),
                        array(
                                'name'=>'estruturaFisicaPerfils.2.perfil.descricao',
                                'htmlOptions'=>array('style'=>'width:90px;text-align:right;'),
                                'headerHtmlOptions'=>array('style'=>'text-align:center;'),
                                'header'=>'UPA Porte 2',
                                'type'=>'raw',
                                'value' => '!array_key_exists(2,$data->estruturaFisicaPerfils)?CHtml::link("----", Yii::app()->createUrl("estruturaFisicaPerfil/create",array("estruturaFisica_id"=>$data->id,"perfil_id"=>3))):CHtml::link($data->estruturaFisicaPerfils[2]->quantidade, Yii::app()->createUrl("estruturaFisicaPerfil/update",array("id"=>$data->estruturaFisicaPerfils[2]->id)))',
                                'sortable'=>false,
                        ),
                        array(
                                'name'=>'estruturaFisicaPerfils.3.perfil.descricao',
                                'htmlOptions'=>array('style'=>'width:90px;text-align:right;'),
                                'headerHtmlOptions'=>array('style'=>'text-align:center;'),
                                'header'=>'UPA Porte 3',
                                'type'=>'raw',
                                'value' => '!array_key_exists(3,$data->estruturaFisicaPerfils)?CHtml::link("----", Yii::app()->createUrl("estruturaFisicaPerfil/create",array("estruturaFisica_id"=>$data->id,"perfil_id"=>4))):CHtml::link($data->estruturaFisicaPerfils[3]->quantidade, Yii::app()->createUrl("estruturaFisicaPerfil/update",array("id"=>$data->estruturaFisicaPerfils[3]->id)))',
                                'sortable'=>false,
                        ),
                        array(
                                'name'=>'pai_id',
                                'value' => '!$data->pai_id?"":$data->pai->descricao',
                                'sortable'=>false,
                        ),

                        array(
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                        ),
                    ),
)); 

?>
