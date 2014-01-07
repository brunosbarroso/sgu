<?php
$this->breadcrumbs=array(
	'Estrutura Fisica'=>array('index'),
	$model->descricao,
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

?>

<h3>Item de Estrutura Fisica :: <?php echo $model->descricao; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'unidade',
		'pai_id',
	),
));

$perfilModel = new CActiveDataProvider('EstruturaFisicaPerfil',array(
		'criteria'=>array('condition'=>'item_id = '.$model->id))
	);

$this->widget('bootstrap.widgets.TbGridView', array(
	'type' => 'striped bordered',
	'dataProvider' => $perfilModel,
	'template' => "{items}",
	'columns' => array(
		'perfil_id',
		array(
			'class' => 'bootstrap.widgets.TbEditableColumn',
			'name' => 'perfil_id',
                        'type' => 'raw',
                        'value' => '$data->perfil["descricao"]',
			'sortable'=>false,
			'editable' => array(
                                //'url'=>'array("perfil/editableUpdate", "id"=>$data->perfil_id)',
				'url'=>$this->createUrl("perfil/editableUpdate", array('model'=>'Perfil', 'field'=>'descricao')),
				'placement' => 'bottom',
				'inputclass' => 'span2'
			)
		),
		array(
			'class' => 'bootstrap.widgets.TbEditableColumn',
			'name' => 'quantidade',
			'sortable'=>false,
			'editable' => array(
				'url' => $this->createUrl('perfil/editableUpdate'),
				'placement' => 'right',
				'inputclass' => 'span3'
			)
		),
            ),
));

