<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->class2name($this->modelClass);
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
);\n";
?>

Yii::app()->clientScript->registerCoreScript('yii');

Yii::app()->clientScript->registerScript('excluir', "
jQuery('body').on('click','#botao-exclui',function(){if(confirm('Tem certeza que deseja excluir este item?')) {jQuery.yii.submitForm(this,'/sgu/index.php?r=<?php echo $this->controller; ?>/delete&id=$model->id',{});return false;} else return false;});
");

$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	array('label'=>'Gerenciar <?php echo $this->modelClass; ?>','icon'=>'icon-th-list','url'=>array('index')),
	array('label'=>'Criar <?php echo $this->modelClass; ?>','icon'=>'icon-plus','url'=>array('create')),
	array('label'=>'Editar <?php echo $this->modelClass; ?>','icon'=>'icon-edit','url'=>array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'Excluir <?php echo $this->modelClass; ?>','icon'=>'icon-trash','url'=>'#','htmlOptions'=>array('id'=>'botao-exclui')),
    ),
));

/*
$this->menu=array(
	array('label'=>'Gerenciar <?php echo $this->modelClass; ?>','url'=>array('index')),
	array('label'=>'Criar <?php echo $this->modelClass; ?>','url'=>array('create')),
	array('label'=>'Editar <?php echo $this->modelClass; ?>','url'=>array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'Excluir <?php echo $this->modelClass; ?>','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'Tem certeza que deseja excluir este item?')),
);
*/

?>

<h3>Visualizar <?php echo $this->modelClass." :: <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h3>

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
	echo "\t\t'".$column->name."',\n";
?>
	),
)); ?>
