<?php
$this->breadcrumbs=array(
	'User'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index')),
	array('label'=>'Manage User','url'=>array('admin')),
);
?>

<h1>Criar Usuário</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>