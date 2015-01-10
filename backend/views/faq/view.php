<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\faq */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Faqs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
  <div class="page-header">
	<div class="pull-left">
          <h1>View Faq # <?= Html::encode($this->title) ?></h1>
       </div>			
  </div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo Html::a('Home',['/site/index']); ?><i class="icon-angle-right"></i></li>
		<li><?php echo Html::a('FAQ Summary',['/faq']); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">View FAQ </a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
   <div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3>View FAQ</h3>
                  <a class="btn pull-right" data-toggle="modal" href="<?php echo Yii::$app->urlManager->createUrl('/faq');?>"><i class="icon-circle-arrow-left"></i> Back</a>
            </div>
            <div class="box-content nopadding">
             

                <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'question:ntext',
                    'answer:ntext',
                    'status',
                    'addDate',
                    'updateDate',
                ],
            ]) ?>

          </div>
        </div>
    </div>
</div>
