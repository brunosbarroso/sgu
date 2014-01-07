<?php
$this->breadcrumbs=array(
	'Perfil'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'List Perfil','url'=>array('index')),
	array('label'=>'Manage Perfil','url'=>array('admin')),
);
?>

<h1>Criar Perfil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>