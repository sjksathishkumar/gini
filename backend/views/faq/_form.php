<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\faq */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row-fluid">
   <div class="span12">
      <div class="box box-color box-bordered">
	 <div class="box-title">
	      <h3><i class="icon-table"></i>Add New faq </h3>
               <a class="btn pull-right" data-toggle="modal" href="<?php echo Yii::$app->urlManager->createUrl('/faq');?>"><i class="icon-circle-arrow-left"></i> Back</a>
	 </div>
         <div id="frm_flds_wrap" class="box-content">

    <?php $form = ActiveForm::begin(); ?>
    <div class="control-group">
        <div class="controls">
          <?= $form->field($model, 'question')->textarea(['rows' => 6]) ?>
          </div>
    </div>
     <div class="control-group">
        <div class="controls">        
          <?= $form->field($model, 'answer')->textarea(['rows' => 6]) ?>
         </div>
    </div>
     <div class="control-group">
        <div class="controls">          
         <?= $form->field($model, 'status')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>
       </div>
    </div>
     <div class="control-group">
        <div class="controls">          
         <?= $form->field($model, 'addDate')->textInput() ?>
         </div>
     </div>
     <div class="control-group">
        <div class="controls">          
         <?= $form->field($model, 'updateDate')->textInput() ?>
      </div>
     </div>
     <div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>        
      <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
       <?php echo Html::a('Cancel',array('/faq'),array('class'=>'btn')); ?>   
      </div>

       <?php ActiveForm::end(); ?>

       </div>
      </div>
   </div>
</div>