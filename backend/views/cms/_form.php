<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\Cms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row-fluid">
   <div class="span12">
        <div class="box box-color box-bordered">
             <div class="box-title">
                    <h3><i class="icon-table"></i>Update CMS Page</h3>
             </div>
             <div class="box-content nopadding">
                    <?php $form = ActiveForm::begin(
                        [
                            'id' => 'update-form',
                            'options' => ['class' => 'form-horizontal form-bordered form-validate'],
                        ]
                    ); ?>
                    <div class="control-group">
                            <?php
                                echo $form->field($model, 'cmsDisplayTitle')->begin();
                                    echo Html::activeLabel($model,'cmsDisplayTitle',['class' => 'control-label']); //label
                                    echo "<div class='controls'>";
                                    echo Html::activeTextInput($model, 'cmsDisplayTitle',['class' => 'input-xxlarge','maxlength' => 255]); //Field
                                    echo Html::error($model,'cmsDisplayTitle', ['class' => 'help-block']); //error
                                echo $form->field($model, 'cmsDisplayTitle')->end();
                                echo "</div>";
                            ?>
                    </div>
                    <div class="control-group">
                            <?php
                                echo $form->field($model, 'cmsPageTitle')->begin();
                                    echo Html::activeLabel($model,'cmsPageTitle',['class' => 'control-label']); //label
                                    echo "<div class='controls'>";
                                    echo Html::activeTextInput($model, 'cmsPageTitle',['class' => 'input-xxlarge','maxlength' => 255]); //Field
                                    echo Html::error($model,'cmsPageTitle', ['class' => 'help-block']); //error
                                echo $form->field($model, 'cmsPageTitle')->end();
                                echo "</div>";
                            ?>
                    </div>
                    <div class="control-group">
                            <?php
                                echo $form->field($model, 'cmsSlug')->begin();
                                    echo Html::activeLabel($model,'cmsSlug',['class' => 'control-label']); //label
                                    echo "<div class='controls'>";
                                    echo Html::activeTextInput($model, 'cmsSlug',['class' => 'input-xxlarge','maxlength' => 255]); //Field
                                    echo Html::error($model,'cmsSlug', ['class' => 'help-block']); //error
                                echo $form->field($model, 'cmsSlug')->end();
                                echo "</div>";
                            ?>
                    </div>
                    <div class="control-group">
                            <?php
                                echo $form->field($model, 'cmsMetaTitle')->begin();
                                    echo Html::activeLabel($model,'cmsMetaTitle',['class' => 'control-label']); //label
                                    echo "<div class='controls'>";
                                    echo Html::activeTextInput($model, 'cmsMetaTitle',['class' => 'input-xxlarge','maxlength' => 255]); //Field
                                    echo Html::error($model,'cmsMetaTitle', ['class' => 'help-block']); //error
                                echo $form->field($model, 'cmsMetaTitle')->end();
                                echo "</div>";
                            ?>
                    </div>
                    <div class="control-group">
                            <?php
                                echo $form->field($model, 'cmsContent')->begin();
                                    echo Html::activeLabel($model,'cmsContent',['class' => 'control-label']); //label
                                echo $form->field($model, 'cmsContent')->end();
                            ?>
                            <div class="controls">
                                <?= $form->field($model, 'cmsContent')->widget(CKEditor::className(), [
                                    'options' => ['rows' => 6],
                                    'attribute'=>'cmsContent',
                                ])->label(false) ?>
                            </div>
                    </div>
                    <div class="control-group">
                            <?php
                                echo $form->field($model, 'cmsMetaKeywords')->begin();
                                    echo Html::activeLabel($model,'cmsMetaKeywords',['class' => 'control-label']); //label
                                    echo "<div class='controls'>";
                                    echo Html::activetextarea($model, 'cmsMetaKeywords',['class' => 'input-xxlarge','maxlength' => 255]); //Field
                                    echo Html::error($model,'cmsMetaKeywords', ['class' => 'help-block']); //error
                                echo $form->field($model, 'cmsMetaKeywords')->end();
                                echo "</div>";
                            ?>
                    </div>
                    <div class="control-group">
                            <?php
                                echo $form->field($model, 'cmsMetaDescription')->begin();
                                    echo Html::activeLabel($model,'cmsMetaDescription',['class' => 'control-label']); //label
                                    echo "<div class='controls'>";
                                    echo Html::activetextarea($model, 'cmsMetaDescription',['class' => 'input-xxlarge','maxlength' => 255]); //Field
                                    echo Html::error($model,'cmsMetaDescription', ['class' => 'help-block']); //error
                                echo $form->field($model, 'cmsMetaDescription')->end();
                                echo "</div>";
                            ?>
                    </div>
                    <div class="control-group">
                            <?php
                                echo $form->field($model, 'cmsStatus')->begin();
                                    echo Html::activeLabel($model,'cmsStatus',['class' => 'control-label']); //label
                                    echo "<div class='controls'>";
                                    echo Html::activedropDownList($model, 'cmsStatus',[''=>'Select','1'=>'Active','0'=>'Inactive'],['class'=> 'select2-me input-xlarge']); //Field
                                    echo Html::error($model,'cmsStatus', ['class' => 'help-block']); //error
                                echo $form->field($model, 'cmsStatus')->end();
                                echo "</div>";
                            ?>
                    </div>
                    <div class="note"><strong>Note :</strong> <span class="required">All fields are mandatory.</span> </div>
                    <div class="form-actions">  
                         <?= Html::a('Cancel', ['/cms/index'], ['class'=>'btn btn-primary']) ?>
                         <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
