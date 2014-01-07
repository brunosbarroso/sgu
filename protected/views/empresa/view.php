<?php
$this->breadcrumbs=array(
	'Empresa'=>array('index'),
	$model->nome,
);

Yii::app()->clientScript->registerCoreScript('yii');

Yii::app()->clientScript->registerScript('excluir', "
    jQuery('body').on('click','#botao-exclui',function(){
        if(confirm('Tem certeza que deseja excluir este item?'))
        {
            jQuery.yii.submitForm(this,'/sgu/index.php?r=empresa/delete&id=$model->id',{});
            return false;
        } 
        else return false;
    });
");

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar Empresa','icon'=>'icon-th-list','url'=>array('index')),
	array('label'=>'Criar Empresa','icon'=>'icon-plus','url'=>array('create')),
	array('label'=>'Editar Empresa','icon'=>'icon-edit','url'=>array('update','id'=>$model->id)),
	array('label'=>'Excluir Empresa','icon'=>'icon-trash','url'=>'#','htmlOptions'=>array('id'=>'botao-exclui')),
    ),
));

?>

<h3>Visualizar Empresa :: <?php echo $model->nome; ?></h3>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'nome',
		'telefone',
	),
)); ?>
