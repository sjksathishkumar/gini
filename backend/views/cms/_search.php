<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CmsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pkCmsID') ?>

    <?= $form->field($model, 'cmsDisplayTitle') ?>

    <?= $form->field($model, 'cmsPageTitle') ?>

    <?= $form->field($model, 'cmsSlug') ?>

    <?= $form->field($model, 'cmsContent') ?>

    <?php // echo $form->field($model, 'cmsMetaTitle') ?>

    <?php // echo $form->field($model, 'cmsMetaKeywords') ?>

    <?php // echo $form->field($model, 'cmsMetaDescription') ?>

    <?php // echo $form->field($model, 'cmsContentAvailable') ?>

    <?php // echo $form->field($model, 'cmsBannerAvailable') ?>

    <?php // echo $form->field($model, 'cmsIsPage') ?>

    <?php // echo $form->field($model, 'cmsStatus') ?>

    <?php // echo $form->field($model, 'cmsDateAdded') ?>

    <?php // echo $form->field($model, 'cmsDateModified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
