<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\user */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row-fluid">
   <div class="span12">
      <div class="box box-color box-bordered">
	 <div class="box-title">
	      <h3><i class="icon-table"></i>Add New User</h3>
               <a class="btn pull-right" data-toggle="modal" href="<?php echo Yii::$app->urlManager->createUrl('/user');?>"><i class="icon-circle-arrow-left"></i> Back</a>
	 </div>
         <div class="box-content nopadding">
             <?php yii\widgets\Pjax::begin(['id' => 'user-gird']) ?>
            <?php $form = ActiveForm::begin([
	    'id' => 'user-form',
            'enableAjaxValidation'=>false,
                        
	    'options' => [
	                'class' => 'form-horizontal form-bordered form-validate',
	                
	                ],
            
            ]); ?>
            
	  
	    
               <div class="control-group" style="background-color: #b4be35; text-align: center; color: white; font-size: 20px; height: 30px;">
             Account Information
	    </div>
             
               
               <div class="control-group">
                <?= Html::activeLabel($model, 'first_name', ['label'=>'First Name <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'first_name')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
               <div class="control-group">
                <?= Html::activeLabel($model, 'last_name', ['label'=>'Last Name <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'last_name')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
               <div class="control-group">
                <?= Html::activeLabel($model, 'dob', ['label'=>'Birth Date <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                 <?= $form->field($model, 'dob')->textInput([ 'tabindex' => 3])->label(false)->widget(DatePicker::className(), [
'inline' => false,

'clientOptions' => [
    'autoclose' => true,
    'format'    => 'yyyy-mm-dd',
    'startDate' => '1900-01-01',
   
    'value' => 'YYYY-MM-DD',
]
]); ?>
		 
	       </div>
	    </div>
             <div class="control-group">
                <?= Html::activeLabel($model, 'gender', ['label'=>'Gender <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                 <?php echo $form->field($model, 'gender')->dropDownList(['M' => 'Male', 'F' => 'Female'])->label(false); ?>
		 
	       </div>
	    </div>
            
              <div class="control-group">
                <?= Html::activeLabel($model, 'email', ['label'=>'Email <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'email')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
                <div class="control-group">
                <?= Html::activeLabel($model, 'confirm_email', ['label'=>'Confirm Email <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'confirm_email')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
             
              <div class="control-group">
                <?= Html::activeLabel($model, 'password', ['label'=>'Password <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'password')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
             
              <div class="control-group">
                <?= Html::activeLabel($model, 'confirm_password', ['label'=>'Confirm Password <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'confirm_password')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
             
            <div class="control-group" style="background-color: #b4be35; text-align: center; color: white; font-size: 20px; height: 30px;">
             Delivery Address
	    </div>
             
              <div class="control-group">
                <?= Html::activeLabel($model, 'delivery_address1', ['label'=>'Address line 1 <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'delivery_address1')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
              <div class="control-group">
                <?= Html::activeLabel($model, 'delivery_address2', ['label'=>'Address line 2', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'delivery_address2')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
             
              <div class="control-group">
                <?= Html::activeLabel($model, 'suburb', ['label'=>'Suburb <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'suburb')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
              <div class="control-group">
                <?= Html::activeLabel($model, 'city', ['label'=>'Town / City <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'city')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
             <div class="control-group">
                <?= Html::activeLabel($model, 'post_code', ['label'=>'Postcode <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'post_code')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
               <div class="control-group">
                <?= Html::activeLabel($model, 'contact_number', ['label'=>'Contact Number <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'contact_number')->textInput()->label(false); ?>
		 
	       </div>
	    </div>
             
           
       
	    
	    <div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
            
             <div class="form-actions">  
	      <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	       <?php echo Html::a('Cancel',array('/user'),array('class'=>'btn')); ?>  
	    </div>
             
	    
	    <?php ActiveForm::end(); ?>
            <?php yii\widgets\Pjax::end() ?>
	 </div>
      </div>
   </div>
</div>
