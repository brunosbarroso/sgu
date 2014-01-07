<?php
$this->breadcrumbs=array(
	'Unidade',
);

$this->menu=array(
	array('label'=>'Create Unidade','url'=>array('create')),
	array('label'=>'Manage Unidade','url'=>array('admin')),
);
?>

<h1>Unidade</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
