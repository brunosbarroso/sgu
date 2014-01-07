<?php
// carregando os scripts
Yii::app()->clientScript->registerCoreScript('maskedinput');

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'empresa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos com <span class="required">*</span> são obrigatótios.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nome',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'telefone',array('class'=>'span2','maxlength'=>13)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
                    'buttons'=>array(
                                array(
                                    'label'=>'Cancelar',
                                    'url'=>array('index'),
                                    'size'=>'large',
                                    ),
                                array(
                                    'label'=>'Salvar',
                                    'buttonType'=>'submit',
                                    'type'=>'primary',
                                    'size'=>'large',
                                    ),
		))); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
    
    $(function($){
       $("#Empresa_telefone").mask("(99)9999-9999");
    });

</script>