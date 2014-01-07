<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'perfil-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos com <span class="required">*</span> são obrigatótios.</p>
        
        <?php echo $form->errorSummary($model); ?>
        
        <div class="left15">
            <?php echo $form->textFieldRow($model,'descricao',array('class'=>'span5','maxlength'=>512)); ?>
        </div>
        
        <div class="clear"></div>
        
        <div class="left15">
            <?php echo $form->textFieldRow($model,'area_fisica',array('append'=>'m2','class'=>'span1 align-right')); ?>
        </div>
        
        <div class="left15">
            <?php echo $form->textFieldRow($model,'medicos_por_plantao',array('class'=>'span2 align-right')); ?>
        </div>
        
        <div class="left">
            <?php echo $form->textFieldRow($model,'atendimento_em_24h',array('class'=>'span2 align-right')); ?>
        </div>
        
        <div class="clear"></div>
        
        <div class="left15">
            <?php echo $form->textFieldRow($model,'populacao_minima',array('class'=>'span2 align-right')); ?>
        </div>
        
        <div class="left">
            <?php echo $form->textFieldRow($model,'populacao_maxima',array('class'=>'span2 align-right')); ?>
        </div>
        
        <div class="clear"></div>
        
        <div class="left15">
            <?php echo $form->textFieldRow($model,'leitos_minimo',array('class'=>'span2 align-right')); ?>
        </div>
        
        <div class="left">        
            <?php echo $form->textFieldRow($model,'leitos_maximo',array('class'=>'span2 align-right')); ?>
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
