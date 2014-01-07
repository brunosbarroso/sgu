<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos com <span class="required">*</span> são obrigatótios.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->error($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>255)); ?>

		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
		<?php echo $form->emailField($model,'email',array('size'=>60,'maxlength'=>255)); ?>

		<?php echo $form->labelEx($model,'roles'); ?>
		<?php echo $form->error($model,'roles'); ?>
		<?php echo CHtml::dropDownList('User[roles]',isset($model->roles)?$model->roles:'', array('admin'=>'Administrador','func'=>'Funcionário'), array('prompt'=>'- Permissão -')); ?>

		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>255)); ?>
        
        <?php if( $model->isNewRecord ) : ?>

                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->error($model,'password'); ?>
                    <?php echo CHtml::passwordField('User[password]', '', array('size'=>30,'maxlength'=>25)) ?>

                    <?php echo $form->labelEx($model,'password_repeat'); ?>
                    <?php echo $form->error($model,'password_repeat'); ?>
                    <?php echo CHtml::passwordField('User[password_repeat]', '', array('size'=>30,'maxlength'=>25)) ?>

        <?php else : ?>
        
                    <?php echo $form->labelEx($model,'new_password'); ?>
                    <?php echo $form->error($model,'new_password'); ?>
                    <?php echo CHtml::passwordField('User[new_password]', '', array('size'=>30,'maxlength'=>25)) ?>

                    <?php echo $form->labelEx($model,'new_password_repeat'); ?>
                    <?php echo $form->error($model,'new_password_repeat'); ?>
                    <?php echo CHtml::passwordField('User[new_password_repeat]', '', array('size'=>30,'maxlength'=>25)) ?>
            </div>
        
        <?php endif; ?>

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
