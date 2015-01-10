<?php 
use yii\helpers\Html;
use yii\widgets\LinkPager;
//use yii\web\JsExpression;
use yii\widgets\Pjax;


?>


<div class="container">
        <div class="row">
        	<div class="page_title col-lg-12">Faq's</div>
            <div class="col-lg-8 content_wrap">
            	<div class="tophd_txt">
            	<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin, massa nec hendrerit tempor, mi leo condimentum dui,</h3>
                Search Answer
                </div>
                
                <div class="input-group">
                    
                    <input type="text" class="form-control form_search_box" placeholder="Search here..." name ="search">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-default form_search_btn" id ="faq-from">Search</button>
                </span>
                </div>
            	<!--accordion-->
                <div class="panel-group" id="accordion">
                    <div class ="message"> </div>
                    
                   <?php  foreach ($varFaqData as $data):   
      
      if($data->id == '1' ){?>
       <div class="panel panel-default">
    <div class="panel-heading  panel_active">
      <h5 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $data->id ; ?>">
          <?= Html::decode("{$data ->question}") ?>
          <i class="fa fa-minus-circle"></i>
        </a>
      </h5>
    </div>
    <div id="collapse<?php echo $data->id ; ?>" class="panel-collapse collapse in">
      <div class="panel-body">
        <?= Html::decode("{$data ->answer}") ?>
      </div>
    </div>
  </div>
      
    <?php } else if($data->id != '1' ){  ?>
      
   <div class="panel panel-default">
    <div class="panel-heading">
      <h5 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $data->id ; ?>">
           <?= Html::decode("{$data ->question}") ?>
          <i class="fa fa-plus-circle"></i>
        </a>
      </h5>
    </div>
    <div id="collapse<?php echo $data->id ; ?>" class="panel-collapse collapse">
      <div class="panel-body">
       <?= Html::decode("{$data ->answer}") ?>
      </div>
    </div>
  </div>
   
    <?php }endforeach;
    
    ?>
         <div id="loaded_data"></div>            
              </div>
                <!--accordion end-->
                
               
                
            </div>
            <div class="col-lg-4"></div>
        </div>
        <!-- /.row -->



        <!-- Footer -->

    </div>
    <!-- /.container -->
     	
            <!-- /.new_phones_bg -->
         
     
