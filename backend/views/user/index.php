<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchusers */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;

?>
<script type="text/javascript">
    jQuery(function($) {
        
        $('.search-button').click(function(){
            $('.search-form').toggle();
	return false;
});

$('.search-form form').submit(function(){
  
   	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize(),
                   
        });
        return false;
        
            
        
});
});
</script>
<div class="user-index">
<?php \yii\widgets\Pjax::begin(); ?>   
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row-fluid">
    <div class="span12 margin_top20">
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
         <?= Html::a('Advanced Search', null, ['href' => 'javascript:void(0);','class' => 'search-button btn btn-inverse']) ?>
       
    </div> 
</div>
    
    <div class="search-form" style="display:none">
<?php echo $this->render('_search', ['model' => $searchModel]); ?>
</div><!-- search-form -->

   <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row-fluid">
        <div class="breadcrumbs" id="breadcrumbs-msg">
	<?php  if( (Yii::$app->session->hasFlash('create')) || (Yii::$app->session->hasFlash('update')) || (Yii::$app->session->hasFlash('deleteuser'))){ ?>
		<ul>
		  <?php
			if(Yii::$app->session->getFlash('create'))
			{
			    echo '<li><span class="readcrum_without_link_success">'.ADD_USER_SUCCESS.'</li>';
			}else if(Yii::$app->session->getFlash('update'))
			{
			    echo '<li><span class="readcrum_without_link_success">'.EDIT_USER_SUCCESS.'</li>';
			}else if(Yii::$app->session->getFlash('deleteuser'))
			{
			    echo '<li><span class="readcrum_without_link_success">'.DELETE_USER_SUCCESS.'</li>';
			}
		  ?>						
	      </ul>
	<?php } ?>
</div>

    
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3>All CMS</h3>
                    <!--<a class="btn pull-right" data-toggle="modal" href="#" id = "viewAll">View All</a>-->
            </div>
            <div class="clear"></div>

            <div class="box-content nopadding">
                <?php \yii\widgets\Pjax::begin(); ?>   
                <form action="" name='user-grid-list-form' id='user-grid-list-form'>
                
                 
                <?= GridView::widget([
        'dataProvider' => $dataProvider,
         'id' => 'user-grid',
       // 'filterModel' => $searchModel,
        'columns' => [
            
            [
                'name' => 'id',
                'class' => 'yii\grid\CheckboxColumn',
                 'footer' => Html::dropDownList($model,'id[]', ['' => 'Select', '1' => 'Active', '0' => 'Inactive','2'=>'Delete'], $htmlOptions = ['onchange' => "userMultipleAction();", 'class' => 'with-checkbox']),
                'visible' => true,
                 
                
                ],
            
          
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'Account ID',
                 'label'=>'id',
           
       'value' => function ($data) {
                return $data->id; // $data['name'] for array data, e.g. using SqlDataProvider.
           
        },
                
            ],
                
           
               [
                 'header' => 'Name',
                    'attribute' => 'first_name',
                     'format' => 'raw',
                'value' => function ($data) {
                return $data->first_name.' '. $data->last_name; // $data['name'] for array data, e.g. using SqlDataProvider.
                 },
                
               ],
               [
                 'header' => 'Date Registered',
                     'attribute' => 'created_at',
                   'format' => 'raw',
                'value' => function ($data) {
                return  date("d M, Y h:i",  strtotime($data->created_at)); // $data['name'] for array data, e.g. using SqlDataProvider.
                 },
                
               ],
                         
               [
                 'header' => 'Email',
                  'attribute' => 'email',
                   'format' => 'raw',
                'value' => function ($data) {
                return $data->email; // $data['name'] for array data, e.g. using SqlDataProvider.
                 },
                
               ],
                [
                 'header' => 'Email Verified',
                     'attribute' => 'verifyemail',
                   'format' => 'raw',
                'value' => function ($data) {
                return $data->verifyemail='0'?'No':'Yes'; // $data['name'] for array data, e.g. using SqlDataProvider.
                 },
                
               ],
              [
                 'header' => 'Status',
                'value' => function ($data) {
                return $data->status='0'?'Deactivate':'Active'; // $data['name'] for array data, e.g. using SqlDataProvider.
                 },
                
               ],
        
            ['header' => 'Action',
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                ],
        ],
    ]); ?>
  
    
                                          <div >
						<select id="userStatus" name="userStatus" class="select2-me" onchange="userMultipleAction();">
							<option value="Select">Select</option>
							
							<option value="2">Delete</option>
						</select>
					</div>
                </form>
                  <?php \yii\widgets\Pjax::end(); ?>
               
            </div>
        </div>
       
    
</div>


 <script>
    
     function userMultipleAction()
    {
        var checked_num = $('input[name="id[]"]:checked').length;
       // alert(checked_num);
        
        if (!checked_num) {
            alert('Please select atleast one.');
            $.pjax.reload({container:'#user-grid'});
        }
        else
        {
	       if ($('#userStatus').val()=='Select') {
				alert('Please Select valid option');
			}
		       else
		       {
                        
                            var data=$("#user-grid-list-form").serialize();
                             // alert(data);
			        $.ajax({
			        type: 'POST',
			        url: 'multipledelete',
			        data:data,
			        success:function(data){
                                    alert(data);
			        	         if(data)
			                        { 
			                        	var statusMsg = "";
			                        	
			                        		statusMsg = 'User has been '+ data+'d'+' successfully.';	
			                        	
                                                       
			                        	
			                            $('#breadcrumbs-msg').css('display','block');
			                            $('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
			                            $('#breadcrumbs-msg').fadeOut(5000);
                                                     $.pjax.reload({container:'#user-grid'});
			                            statusMsg = '';
			                        }
			          },error: function(data) { // if error occured
			              alert("Error occured.Please try again.");
			             $.pjax.reload({container:'#user-grid'});
			         },
			        dataType:'html'
			        });
			        
		        }
		    }
		
       
      
    }
  
   
    </script>

