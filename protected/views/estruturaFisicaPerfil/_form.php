<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'estrutura-fisica-perfil-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos com <span class="required">*</span> são obrigatótios.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php $itens = CHtml::listData(EstruturaFisica::model()->findAll(), 'id', 'descricao'); ?>
        <?php echo $form->dropDownListRow(
                $model, 
                'item_id', 
                $itens, 
                array(
                    'empty'=>'- Item -',
                    'readonly'=>true,
                    'disabled'=>'disabled',
                    'options' => array(isset($_GET['estruturaFisica_id'])?$_GET['estruturaFisica_id']:false=>array('selected'=>isset($_GET['estruturaFisica_id'])?true:false))
                    )
                ); ?>

        <?php $perfis = CHtml::listData(Perfil::model()->findAll(), 'id', 'descricao'); ?>
        <?php echo $form->dropDownListRow(
                $model, 
                'perfil_id', 
                $perfis, 
                array(
                    'empty'=>'- Perfil -',
                    'readonly'=>true,
                    'disabled'=>'disabled',
                    'options' => array(isset($_GET['perfil_id'])?$_GET['perfil_id']:false=>array('selected'=>isset($_GET['perfil_id'])?true:false))
                    )
                ); ?>

	<?php echo $form->textFieldRow($model,'quantidade',array('class'=>'span1','maxlength'=>15)); ?>
        
        <?php 
            if(isset($_GET['estruturaFisica_id'])){
                echo CHtml::hiddenField('EstruturaFisicaPerfil[item_id]', $_GET['estruturaFisica_id']);
                echo CHtml::hiddenField('EstruturaFisicaPerfil[perfil_id]', $_GET['perfil_id']);
            }
        ?>
        
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
                    'buttons'=>array(
                                array(
                                    'label'=>'Cancelar',
                                    'url'=>array('estruturaFisica/index'),
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

<?php $this->endWidget();

Yii::app()->clientScript->registerScript('focus', "
$('#EstruturaFisicaPerfil_quantidade').focus();");

?>