<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Configurations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="configurations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'configurationContact')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'configurationEmail')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'configurationSocialLink1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'configurationSocialLink2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'configurationSocialLink3')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'configurationSocialLink4')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'configurationSocialLink5')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'configurationSocialLink6')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'configurationPageLimit')->textInput() ?>

    <?= $form->field($model, 'configurationFreeShippingOver')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'configurationDateModified')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
