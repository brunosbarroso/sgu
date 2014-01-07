<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('populacao_minima')); ?>:</b>
	<?php echo CHtml::encode($data->populacao_minima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('populacao_maxima')); ?>:</b>
	<?php echo CHtml::encode($data->populacao_maxima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_fisica')); ?>:</b>
	<?php echo CHtml::encode($data->area_fisica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicos_por_plantao')); ?>:</b>
	<?php echo CHtml::encode($data->medicos_por_plantao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atendimento_em_24h')); ?>:</b>
	<?php echo CHtml::encode($data->atendimento_em_24h); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('leitos_minimo')); ?>:</b>
	<?php echo CHtml::encode($data->leitos_minimo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leitos_maximo')); ?>:</b>
	<?php echo CHtml::encode($data->leitos_maximo); ?>
	<br />

	*/ ?>

</div>