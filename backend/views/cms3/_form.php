<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cmsDisplayTitle')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'cmsPageTitle')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'cmsSlug')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'cmsContent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cmsMetaTitle')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'cmsMetaKeywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cmsMetaDescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cmsContentAvailable')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cmsBannerAvailable')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cmsIsPage')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cmsStatus')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cmsDateAdded')->textInput() ?>

    <?= $form->field($model, 'cmsDateModified')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
