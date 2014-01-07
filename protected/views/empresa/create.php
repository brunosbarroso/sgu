<?php
$this->breadcrumbs=array(
	'Empresa'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'List Empresa','url'=>array('index')),
	array('label'=>'Manage Empresa','url'=>array('admin')),
);
?>

<h1>Criar Empresa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>