<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'estrutura-fisica-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos com <span class="required">*</span> são obrigatótios.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="left15">
            <?php echo $form->textFieldRow($model,'descricao',array('class'=>'span4','maxlength'=>150)); ?>
        </div>
        
        <div class="left15">
            <?php echo $form->textFieldRow($model,'unidade',array('append'=>'m2/und','class'=>'span2','maxlength'=>150)); ?>
        </div>
        
        <div class="left15">
            <?php $itens = CHtml::listData(EstruturaFisica::model()->findAll(), 'id', 'descricao') ?>
            <?php echo $form->dropDownListRow($model,'pai_id',$itens,array('prompt'=>'- Itens -')); ?>
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
