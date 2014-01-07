<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>
<div id="box-login" style="height: 250px;margin: 0 auto;width: 165px;">
<h4 style="margin-bottom: 15px;"></h4>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
	</div>

	<div class="row rememberMe">
            <div class="left" style="margin-right: 10px;">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
            </div>
		<?php echo $form->error($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Login', array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
</div>

<script type="text/javascript">
    
       $("#LoginForm_username").focus();

</script>