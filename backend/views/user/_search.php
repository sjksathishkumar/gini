<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchusers */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row-fluid">
<div class="span12">
    <div class="box box-color box-bordered">
        <div class="box-title">
            <h3>Advanced Search  </h3>
        </div>
        <div class="box-content nopadding">
		

 <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
         'id'=>'_search-form',
     'options' => ['class' => 'form-horizontal form-bordered']
    
    ]); ?>
            
      		<div class="row-fluid">
                <div class="wide form">
                    <div class="span4">
                        <div class="control-group">
                            <?= Html::activeLabel($model, 'first_name', ['label'=>'Name', 'class'=>'control-label']) ?>
                         
                            <div class="controls">
                                
                                 <?= $form->field($model, 'first_name')->textInput()->label(false); ?>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="control-group">
                            <?= Html::activeLabel($model, 'contact_number', ['label'=>'Phone', 'class'=>'control-label']) ?>
                         
                            <div class="controls">
                                
                                 <?= $form->field($model, 'contact_number')->textInput()->label(false); ?>
                            </div>
                        </div>
                    </div>
                     <div class="span4">
                        <div class="control-group">
                            <?= Html::activeLabel($model, 'email', ['label'=>'Email ID', 'class'=>'control-label']) ?>
                         
                            <div class="controls">
                                
                                 <?= $form->field($model, 'email')->textInput()->label(false); ?>
                            </div>
                        </div>
                    </div>
                    
		     
		    
		     <div class="row-fluid">
                        <div class="form-actions span12  search">
                                <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['id' => 'resetVal', 'class' => 'btn btn-default']) ?>
    </div>
                            


                        </div>
                    </div>
	
	

	
 </div>

 <?php ActiveForm::end(); ?>

</div><!-- search-form -->
</div>
   </div>
   </div>
 </div>


