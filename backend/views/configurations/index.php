<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ConfigurationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Configurations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="configurations-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Configurations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pkConfigurationID',
            'configurationContact',
            'configurationEmail:email',
            'configurationSocialLink1',
            'configurationSocialLink2',
            // 'configurationSocialLink3',
            // 'configurationSocialLink4',
            // 'configurationSocialLink5',
            // 'configurationSocialLink6',
            // 'configurationPageLimit',
            // 'configurationFreeShippingOver',
            // 'configurationDateModified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
