<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Configurations */

$this->title = $model->pkConfigurationID;
$this->params['breadcrumbs'][] = ['label' => 'Configurations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="configurations-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pkConfigurationID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pkConfigurationID], [
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
            'pkConfigurationID',
            'configurationContact',
            'configurationEmail:email',
            'configurationSocialLink1',
            'configurationSocialLink2',
            'configurationSocialLink3',
            'configurationSocialLink4',
            'configurationSocialLink5',
            'configurationSocialLink6',
            'configurationPageLimit',
            'configurationFreeShippingOver',
            'configurationDateModified',
        ],
    ]) ?>

</div>
