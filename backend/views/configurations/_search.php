<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ConfigurationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="configurations-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pkConfigurationID') ?>

    <?= $form->field($model, 'configurationContact') ?>

    <?= $form->field($model, 'configurationEmail') ?>

    <?= $form->field($model, 'configurationSocialLink1') ?>

    <?= $form->field($model, 'configurationSocialLink2') ?>

    <?php // echo $form->field($model, 'configurationSocialLink3') ?>

    <?php // echo $form->field($model, 'configurationSocialLink4') ?>

    <?php // echo $form->field($model, 'configurationSocialLink5') ?>

    <?php // echo $form->field($model, 'configurationSocialLink6') ?>

    <?php // echo $form->field($model, 'configurationPageLimit') ?>

    <?php // echo $form->field($model, 'configurationFreeShippingOver') ?>

    <?php // echo $form->field($model, 'configurationDateModified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
