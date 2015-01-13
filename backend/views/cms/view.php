<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cms */

$this->title = "View CMS";
?>
<div class="page-header">
    <div class="pull-left">
        <h1>View CMS Page</h1>
    </div>
</div>
<div class="breadcrumbs">
    <ul>
        <li><?php echo Html::a('Home',['/site/index']); ?><i class="icon-angle-right"></i></li>
        <li><?php echo Html::a('Manage CMS',['/cms/index']); ?><i class="icon-angle-right"></i></li>
        <li><?php echo Html::a('CMS View',['/cms/View']); ?></li>
    </ul>
    <div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="breadcrumbs" id="breadcrumbs-msg">
    <ul>
      <?php
        if(Yii::$app->session->hasFlash('cmsUpdate'))
        {
            echo '<li><span class="readcrum_without_link_success">'.EDIT_CMS_SUCCESS.'</li>';
        }
      ?>                        
    </ul>
</div>
<p> </p>
<p>
    <?= Html::a('Update', ['update', 'id' => $model->pkCmsID], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Back', ['index'], ['class' => 'btn btn-primary']) ?>
</p>

<div class="row-fluid">
    <div class="span12">
        <div class="box box box-color box-bordered">
            <div class="box-title">
                <h3><i class="icon-table"></i>View CMS Page</h3>
                </a>
            </div>
            <div class="box-content nopadding">
                <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'pkCmsID',
                            'cmsDisplayTitle',
                            'cmsPageTitle',
                            'cmsSlug',
                            'cmsContent:ntext',
                            'cmsMetaTitle',
                            'cmsMetaKeywords:ntext',
                            'cmsMetaDescription:ntext',
                            'cmsStatus',
                            'cmsDateModified',
                        ],
                    ]) ?>
            </div>
        </div>
    </div>
</div>
