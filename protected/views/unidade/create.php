<?php
$this->breadcrumbs=array(
	'Unidade'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'List Unidade','url'=>array('index')),
	array('label'=>'Manage Unidade','url'=>array('admin')),
);
?>

<h1>Criar Unidade</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>