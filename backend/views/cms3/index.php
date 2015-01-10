<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->pkCmsID), ['view', 'id' => $model->pkCmsID]);
        },
    ]) ?>

</div>
