<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchcms */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cms';
$this->params['breadcrumbs'][] = $this->title;

?>

<script type="text/javascript">
    jQuery(function($) {
        
        $('.search-button').click(function(){
            $('.search-form').toggle();
	return false;
});

$('.search-form form').submit(function(){
  
   	$('#cms-grid').yiiGridView('update', {
		data: $(this).serialize(),
                   
        });
        return false;
        
            
        
});
});
</script>

<div class="cms-index">
<?php \yii\widgets\Pjax::begin(); ?>   
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row-fluid">
    <div class="span12 margin_top20">
        <?= Html::a('Create Cms', ['create'], ['class' => 'btn btn-success']) ?>
         <?= Html::a('Advanced Search', null, ['href' => 'javascript:void(0);','class' => 'search-button btn btn-inverse']) ?>
       
    </div> 
</div>
    
    <div class="search-form" style="display:none">
<?php echo $this->render('_search', ['model' => $searchModel]); ?>
</div><!-- search-form -->

   <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row-fluid">
        <div class="breadcrumbs" id="breadcrumbs-msg">
	<?php  if( (Yii::$app->session->hasFlash('create')) || (Yii::$app->session->hasFlash('update')) || (Yii::$app->session->hasFlash('deletecms'))){ ?>
		<ul>
		  <?php
			if(Yii::$app->session->getFlash('create'))
			{
			    echo '<li><span class="readcrum_without_link_success">'.ADD_CMS_SUCCESS.'</li>';
			}else if(Yii::$app->session->getFlash('update'))
			{
			    echo '<li><span class="readcrum_without_link_success">'.EDIT_CMS_SUCCESS.'</li>';
			}else if(Yii::$app->session->getFlash('deletecms'))
			{
			    echo '<li><span class="readcrum_without_link_success">'.DELETE_CMS_SUCCESS.'</li>';
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
                <form action="" name='cms-grid-list-form' id='cms-grid-list-form'>
                
                 
                   <?= GridView::widget([
                'id'=>'cms-grid',
                'dataProvider' =>$dataProvider,
               // 'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'name' => 'id',
                'class' => 'yii\grid\CheckboxColumn',
                 'footer' => Html::dropDownList($model,'id[]', ['' => 'Select', '1' => 'Active', '0' => 'Inactive','2'=>'Delete'], $htmlOptions = ['onchange' => "cmsMultipleAction();", 'class' => 'with-checkbox']),
                'visible' => true,
                 
                
                ],
            'pageTitle',
            'author',
            [
                 
                     'attribute' => 'modifiedDate',
                     'value' => function ($data) {
                return  date("d M, Y h:i",  strtotime($data->modifiedDate)); // $data['name'] for array data, e.g. using SqlDataProvider.
                 },
                
               ],
                         
           
          
            [
                'header' => 'Action',
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                
                
                ],
            
        ],
    ]); ?>
  
    
                                          <div style="padding-left:7%">
						<select id="cmsStatus" name="cmsStatus" class="select2-me" onchange="cmsMultipleAction();">
							<option value="Select">Select</option>
							
							<option value="2">Delete</option>
						</select>
					</div>
                </form>
               
            </div>
        </div>
       
      <?php \yii\widgets\Pjax::end(); ?>
</div>
    
    <script>
    
     function cmsMultipleAction()
    {
        var checked_num = $('input[name="id[]"]:checked').length;
       // alert(checked_num);
        
        if (!checked_num) {
            alert('Please select atleast one.');
            $.pjax.reload({container:'#cms-grid'});
        }
        else
        {
	       if ($('#cmsStatus').val()=='Select') {
				alert('Please Select valid option');
			}
		       else
		       {
                        
                            var data=$("#cms-grid-list-form").serialize();
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
			                        	
			                        		statusMsg = 'CMS pages '+ data+'d'+' successfully.';	
			                        	
                                                       
			                        	
			                            $('#breadcrumbs-msg').css('display','block');
			                            $('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
			                            $('#breadcrumbs-msg').fadeOut(5000);
                                                     $.pjax.reload({container:'#cms-grid'});
			                            statusMsg = '';
			                        }
			          },error: function(data) { // if error occured
			              alert("Error occured.Please try again.");
			             $.pjax.reload({container:'#cms-grid'});
			         },
			        dataType:'html'
			        });
			        
		        }
		    }
		
       
       $("#cmsStatus").select2('val', 'Select');
    }
  
   
    </script>
    
