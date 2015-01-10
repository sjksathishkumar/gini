<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchfaq */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row-fluid">
<div class="span12">
    <div class="box box-color box-bordered">
        <div class="box-title">
            <h3>Advanced Search  </h3>
        </div>
        <div class="box-content nopadding frm_bot_space">

            <?php $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
            ]); ?>
     <div class="row-fluid">
                <div class="wide form">
                    <div class="span4">
                        <div class="control-group">
                          
                         
                            <div class="controls">
                             <?= $form->field($model, 'question') ?>
                            </div>
                        </div>
                    </div>
  

    <?php // echo $form->field($model, 'updateDate') ?>

                   <div class="row-fluid">
                        <div class="form-actions search">
                                <div class="form-group">
                                    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                                    <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
                                 </div>
                               </div>
                          </div>
	
                    </div>

                <?php ActiveForm::end(); ?>

               </div>
            </div>
        </div>
   </div>
 </div
