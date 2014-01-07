<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'descricao',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'populacao_minima',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'populacao_maxima',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'area_fisica',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'medicos_por_plantao',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'atendimento_em_24h',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'leitos_minimo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'leitos_maximo',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
