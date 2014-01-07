<?php
$this->breadcrumbs=array(
	'Estrutura Fisica Perfil',
);

$this->menu=array(
	array('label'=>'Create EstruturaFisicaPerfil','url'=>array('create')),
	array('label'=>'Manage EstruturaFisicaPerfil','url'=>array('admin')),
);
?>

<h1>Estrutura Fisica Perfil</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
