<?php
$this->breadcrumbs=array(
	'Estrutura Fisica',
);

$this->menu=array(
	array('label'=>'Create EstruturaFisica','url'=>array('create')),
	array('label'=>'Manage EstruturaFisica','url'=>array('admin')),
);
?>

<h1>Estrutura Fisica</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
