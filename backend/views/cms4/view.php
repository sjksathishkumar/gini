<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\cms */

$this->title = 'View CMS';
$this->params['breadcrumbs'][] = ['label' => 'Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-header">
				<div class="pull-left">
				  <h1>View CMS #<?php echo $model->id;?></h1>
			       </div>			
		           </div>

<div class="breadcrumbs">
	<ul>
		<li><?php echo Html::a('Home',['/site/index']); ?><i class="icon-angle-right"></i></li>
		<li><?php echo Html::a('CMS Summary',['/cms']); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">View CMS </a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>


<div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3>View CMS</h3>
                  <a class="btn pull-right" data-toggle="modal" href="<?php echo Yii::$app->urlManager->createUrl('/cms');?>"><i class="icon-circle-arrow-left"></i> Back</a>
            </div>
            <div class="box-content nopadding">

                <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           
           
            'pageTitle',
            'slug',
            [                    
            'label' => 'pageContent',
            'value' => html_entity_decode($model->pageContent),
            ],
         
            'pageMetaTitle',
            'pageMetaKewords',
            'pageMetaDescription:ntext',
           
            [                    
            'label' => 'pageStatus',
            'value' => $model->pageStatus=='0'?'Inactive':'Active',
            ],
            'modifiedDate',
        ],
    ]) ?>
            </div>

        </div>
    </div>
</div>

