<?php
$this->breadcrumbs=array(
	'Empresa',
);

$this->menu=array(
	array('label'=>'Create Empresa','url'=>array('create')),
	array('label'=>'Manage Empresa','url'=>array('admin')),
);
?>

<h1>Empresa</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
