<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cms */

$this->title = $model->pkCmsID;
$this->params['breadcrumbs'][] = ['label' => 'Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pkCmsID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pkCmsID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
            'cmsContentAvailable',
            'cmsBannerAvailable',
            'cmsIsPage',
            'cmsStatus',
            'cmsDateAdded',
            'cmsDateModified',
        ],
    ]) ?>

</div>
