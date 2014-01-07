<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perfil_id')); ?>:</b>
	<?php echo CHtml::encode($data->perfil_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encarregado')); ?>:</b>
	<?php echo CHtml::encode($data->encarregado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone')); ?>:</b>
	<?php echo CHtml::encode($data->telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_fisica')); ?>:</b>
	<?php echo CHtml::encode($data->area_fisica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('populacao')); ?>:</b>
	<?php echo CHtml::encode($data->populacao); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('media_diaria_atendimentos')); ?>:</b>
	<?php echo CHtml::encode($data->media_diaria_atendimentos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qtd_plantonistas')); ?>:</b>
	<?php echo CHtml::encode($data->qtd_plantonistas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qtd_funcionarios')); ?>:</b>
	<?php echo CHtml::encode($data->qtd_funcionarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_alimento_id')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_alimento_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa_limpeza_id')); ?>:</b>
	<?php echo CHtml::encode($data->empresa_limpeza_id); ?>
	<br />

	*/ ?>

</div>