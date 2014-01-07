<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label=$this->class2name($this->modelClass);
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Gerenciar',
);\n";

?>
$this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
	    array('label'=>'Criar <?php echo $this->modelClass; ?>', 'url'=>array('create')),
            array(
                'label'=>'Dica!',
                'type'=>'primary',
                'htmlOptions'=>array(
                                'data-title'=>'A Title',
                                'data-placement'=>'bottom', 
                                'data-content'=>'<?php echo CHtml::decode("Você também pode usar expressões com comparadores (<, <=, >, >=, <> ou =) no início de cada busca, para determinar como a comparação deverá ser feita.");?>', 
                                'rel'=>'popover'
                            ),
            ),
    ),
));

/*
$this->menu=array(
	array('label'=>'Gerenciar <?php echo $this->modelClass; ?>','url'=>),
	array('label'=>'Criar <?php echo $this->modelClass; ?>','url'=>array('create')),
);
*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Gerenciar <?php echo $this->class2name($this->modelClass); ?></h2>

<?php //echo "<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button btn')); ?>


<div class="search-form" style="display:none">
<?php echo "<?php \$this->renderPartial('_search',array(
	'model'=>\$model,
)); ?>\n"; ?>
</div><!-- search-form -->

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
        'type'=>'striped bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
	if(++$count==7)
		echo "\t\t/*\n";
	echo "\t\t'".$column->name."',\n";
}
if($count>=7)
	echo "\t\t*/\n";
?>
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
