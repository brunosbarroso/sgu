<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'nome',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'perfil_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'encarregado',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'telefone',array('class'=>'span5','maxlength'=>13)); ?>

	<?php echo $form->textFieldRow($model,'area_fisica',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'populacao',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'media_diaria_atendimentos',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'qtd_plantonistas',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'qtd_funcionarios',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'empresa_alimento_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'empresa_limpeza_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
