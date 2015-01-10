 <?php
 use yii\helpers\Html;
 use yii\widgets\LinkPager;
 //print_r($varFaqData);
 ?>
 
<?php
 foreach ($varFaqData2 as $data):   
     
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

    <?php } 
    
    
    endforeach;
     
    ?>   