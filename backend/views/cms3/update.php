<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cms */

$this->title = 'Update Cms: ' . ' ' . $model->pkCmsID;
$this->params['breadcrumbs'][] = ['label' => 'Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pkCmsID, 'url' => ['view', 'id' => $model->pkCmsID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
