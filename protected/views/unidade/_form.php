<?php

// carregando os scripts
Yii::app()->clientScript->registerCoreScript('maskedinput');

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'unidade-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos com <span class="required">*</span> são obrigatótios.</p>
        
	<?php echo $form->errorSummary($model); ?>

        <div class="left15">
            <?php echo $form->textFieldRow($model,'nome',array('class'=>'span4','maxlength'=>512)); ?>
        </div>
        
        <div class="left">
            <?php $perfis = CHtml::listData(Perfil::model()->findAll(), 'id', 'descricao'); ?>
            <?php echo $form->dropDownListRow($model, 'perfil_id', $perfis, array('prompt'=>' - Perfil - ')); ?>
        </div>
        
        <div class="clear"></div>
            
        <div class="left15">
            <?php echo $form->textFieldRow($model,'encarregado',array('class'=>'span4','maxlength'=>512)); ?>
        </div>
        
        <div class="left">
            <?php echo $form->textFieldRow($model,'telefone',array('class'=>'span2 align-right','maxlength'=>13)); ?>
        </div>
        
        <div class="clear"></div>
        
        <div class="left15">
            <?php $empresas = CHtml::listData(Empresa::model()->findAll(), 'id', 'nome'); ?>
            <?php echo $form->dropDownListRow($model, 'empresa_alimento_id', $empresas, array('prompt'=>' - Empresa - ')); ?>
        </div>
        
        <div class="left">
            <?php echo $form->dropDownListRow($model, 'empresa_limpeza_id', $empresas, array('prompt'=>' - Empresa - ')); ?>
        </div>

        <div class="clear"></div>
        
        <div class="left15">
            <?php echo $form->textFieldRow($model,'area_fisica',array('append'=>'m2','class'=>'span1 align-right')); ?>
        </div>

        <div class="left15">
            <?php echo $form->textFieldRow($model,'populacao',array('class'=>'span1 align-right')); ?>
        </div>

        <div class="left15">
            <?php echo $form->textFieldRow($model,'media_diaria_atendimentos',array('class'=>'span1 align-right')); ?>
        </div>
        
        <div class="left15">

            <?php echo $form->textFieldRow($model,'qtd_plantonistas',array('class'=>'span1 align-right')); ?>
        </div>

        <div class="left">
            <?php echo $form->textFieldRow($model,'qtd_funcionarios',array('class'=>'span1 align-right')); ?>
        </div>
        
        <div class="clear"></div>

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
       $("#Unidade_telefone").mask("(99)9999-9999");
    });

</script>
