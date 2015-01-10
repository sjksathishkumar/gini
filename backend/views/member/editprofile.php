<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Edit Profile';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="page-header">
    <div class="pull-left">
        <h1>Edit Profile</h1>
    </div>			
</div>

<div class="breadcrumbs">
	<ul>
		<li><?php echo Html::a('Home',['/site/index']); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Edit Profile</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>


  <div class="breadcrumbs" id="breadcrumbs-msg">
	<?php  if( (Yii::$app->session->hasFlash('create')) || (Yii::$app->session->hasFlash('update')) || (Yii::$app->session->hasFlash('editprofile'))){ ?>
		<ul>
		  <?php
			if(Yii::$app->session->getFlash('addCmsSuccess'))
			{
			    echo '<li><span class="create">'.ADD_CMS_SUCCESS.'</li>';
			}else if(Yii::$app->session->getFlash('update'))
			{
			    echo '<li><span class="readcrum_without_link_success">'.EDIT_CMS_SUCCESS.'</li>';
			}else if(Yii::$app->session->getFlash('editprofile'))
			{
			    echo '<li><span class="readcrum_without_link_success">'.EDIT_PROFILE_UPDATE.'</li>';
			}
		  ?>						
	      </ul>
	<?php } ?>
</div>


<div class="row-fluid">
    
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3>Change Profile</h3>
            </div>
            <div class="box-content nopadding">
                
                
                 <?php $form = ActiveForm::begin([
                     
                      'id' => 'editprofile-form',
            'enableAjaxValidation'=>false,
                        
	    'options' => [
	                'class' => 'form-horizontal form-bordered',
                        'enctype' => 'multipart/form-data',
	                
	                ],
                     
                       ]); 
            ?>

                    <div class="control-group">
                <?= Html::activeLabel($model, 'user_title', ['label'=>'User Title <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'user_title')->textInput()->label(false); ?>
		  
	       </div>
	    </div>
                
                  <div class="control-group">
                <?= Html::activeLabel($model, 'username', ['label'=>'User Name<span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'username')->textInput()->label(false); ?>
		  
	       </div>
	    </div>
                
                  <div class="control-group">
                <?= Html::activeLabel($model, 'email', ['label'=>'Email Id <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                <?= $form->field($model, 'email')->textInput()->label(false); ?>
		  
	       </div>
	    </div>
                <div class="control-group">
                    
                <?= Html::activeLabel($model, 'page_setting', ['label'=>'Records per page <span class="required">*</span>', 'class'=>'control-label']) ?>
	       
	       <div class="controls">
                    <?= $form->field($model, 'page_setting')->dropDownList(
                                Yii::$app->params['arrPaging'])->label(false); ?>

                
		  
	       </div>
	    </div>
                
                 <div class="control-group">
                    
                <?= Html::activeLabel($model, 'picture', ['label'=>'Records per page <span class="required">*</span>', 'class'=>'control-label']) ?>
	        <div class="controls">
	   <?= $form->field($model, 'picture')->fileInput()->label(false) ?>
	    </div>
                
                 </div>
                <div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                 <div class="form-actions">  
	      <?= Html::submitButton('Submit', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	       <?php echo Html::a('Cancel',array('/site/index'),array('class'=>'btn')); ?>  
	    </div>
                
             
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>



